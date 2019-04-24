<?php

namespace App\Http\Controllers;

use App\Models\Taxonomy;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class NewsController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {

        $news = News::latest()->paginate(20);

        //Taxonomy::fixTree();

        return view('main.news.index', [
            'categories' => $news,
            'tree' => $tree = Taxonomy::get()->toTree()
        ]);
    }


    public function getURL($route) {

        $route = explode('/', $route);

        $post = News::where('slug', end($route))->first();

        if ($post) {
            $valid = $this->checkRoute($post, $route, "News");

            if ($valid) {
                //Event::fire( 'news.show', $post );
                return view('main.news.show', [
                    'item' => $post
                ]);
            }
        }

        $cat = Taxonomy::where('slug', end($route))->first();

        if ($cat) {
            $valid = $this->CheckRoute($cat, $route, "Taxonomy");

            if ($valid) {

                $descendants = $cat->descendantsAndSelf($cat->id);

                foreach ($descendants as $i => $taxonomi) {
                    $descendants_ids[] = $taxonomi->id;
                }

                $posts = News::whereIn('taxonomy_id', $descendants_ids)->latest()->paginate(20);

                return view('main.news.index', [
                    'categories' => $posts,
                    'tree' => $tree = Taxonomy::get()->toTree()
                ]);
            }
        }

        return abort('404');
    }



    // FUNCTIONS
    private function checkRoute($item, $route, $type) {

        switch ($type) {
            case "News":
                $ancestors = $item->taxonomy->ancestorsAndSelf($item->taxonomy->id);
                break;
            case "Taxonomy":
                $ancestors = $item->ancestors;
                break;
        }

        $ancestors_slugs = [];
        foreach ($ancestors as $i => $taxonomy) {
            $ancestors_slugs[] = $taxonomy->slug;
        }
        $ancestors_slugs[] = $item->slug;

        $valid = false;
        if (count($ancestors_slugs) == count($route)) {
            $valid = true;
            for ($i = 0;  $i < count($ancestors_slugs); $i++) {
                $valid &= $route[$i] == $ancestors_slugs[$i];
            }
        }
        return $valid;
    }

}
