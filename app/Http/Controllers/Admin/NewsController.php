<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Taxonomy;
use App\Models\Admin\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{


    public function __construct(){
        // $this->middleware('auth');
    }



    public $content_type;

    public function index(Request $request) {
        $this->getSegmentUrl($request);

        $taxonomies = Taxonomy::where('content_type', $this->content_type)->pluck('id');
        $posts = News::whereIn('taxonomy_id', $taxonomies)->latest()->paginate(25);

        return view('admin.content.index',
            ['posts' => $posts,
                'content_type' => $this->content_type
            ]);
    }


    public function create (Request $request) {
        $this->getSegmentUrl($request);
        return view( 'Admin.content.create', [
            'taxonomy'   => null,
            'taxonomies' => Taxonomy::where('content_type', $this->content_type)->get()->toTree(),
            'delimiter'  => '',
            'content_type'  => $this->content_type
        ] );
    }


    public function store( Request $request ) {
        $this->getSegmentUrl($request);
        //dd($request);
        News::create($request->all());

        return redirect()->route( 'admin.'.$this->content_type.'.index' )
            ->with( 'status', 'Пост успешно сохранен!' );
    }


    public function edit( Request $request, $id ) {
        $this->getSegmentUrl($request);

        return view( 'Admin.content.edit', [
            'post'   => $post = News::find( $id ),
            'taxonomy' => Taxonomy::find($post->taxonomy_id),
            'taxonomies' => Taxonomy::where('content_type', $this->content_type)->get()->toTree(),
            'delimiter'  => '',
            'content_type'  => $this->content_type
        ] );
    }


    public function update( Request $request, $id ) {
        $this->getSegmentUrl($request);
        News::find( $id )->update( $request->all() );
        return redirect()->route( 'admin.'.$this->content_type.'.index' )
            ->with( 'status', 'Пост успешно обновлен!' );
    }


    public function delete( Request $request, $id ) {
        $this->getSegmentUrl($request);
        News::find( $id )->delete();
        return redirect()->route( 'admin.'.$this->content_type.'.index' )
            ->with( 'status', 'Пост успешно удален!' );
    }



    public function getSegmentUrl(Request $request) {
        return $this->content_type = $request->segment(2);
    }

}
