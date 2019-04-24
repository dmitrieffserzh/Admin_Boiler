<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Taxonomy;
use App\Helpers\AdminHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxonomyController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }



    public function index(Request $request)
    {
        $taxonomies = Taxonomy::where('content_type', AdminHelper::getContentType($request))->get()->toTree();

        return view('admin.taxonomies.index', [
            'content_type'  => AdminHelper::getContentType($request),
            'taxonomies'    => $taxonomies,
            'delimiter'     => ''
        ]);
    }


    public function create(Request $request)
    {
        AdminHelper::getContentType($request);

        return view('admin.taxonomies.create', [
            'content_type'  => AdminHelper::getContentType($request),
            'taxonomy'      => null,
            'taxonomies'    => Taxonomy::where('content_type', AdminHelper::getContentType($request))->get()->toTree(),
            'delimiter'     => ''
        ]);
    }


    public function store(Request $request)
    {
        $taxonomy               = new Taxonomy();
        $taxonomy->title        = $request->title;
        $taxonomy->slug         = $request->slug;
        $taxonomy->color        = $request->color;
        $taxonomy->parent_id    = $request->parent_id;
        $taxonomy->content_type = AdminHelper::getContentType($request);
        $taxonomy->save();

        return redirect()->route(AdminHelper::getTaxRoute(AdminHelper::getContentType($request)))
            ->with('status', 'Категория успешно сохранена!');
    }


    public function edit(Request $request, $id)
    {
        return view('Admin.taxonomies.edit', [
            'content_type'  => AdminHelper::getContentType($request),
            'taxonomy'      => Taxonomy::findOrFail($id),
            'taxonomies'    => Taxonomy::where('content_type', AdminHelper::getContentType($request))->get()->toTree(),
            'delimiter'     => ''
        ]);
    }


    public function update(Request $request, $id)
    {
        $taxonomy = Taxonomy::findOrFail($id);
        $taxonomy->title     = $request->title;
        $taxonomy->slug      = $request->slug;
        $taxonomy->color     = $request->color;
        $taxonomy->parent_id = $request->parent_id;
        $taxonomy->save();

        return redirect()->route(AdminHelper::getTaxRoute(AdminHelper::getContentType($request)))
            ->with('status', 'Категория успешно обновлена!');
    }


    public function delete(Request $request, $id)
    {
        Taxonomy::findOrFail($id)->delete();

        return redirect()->route(AdminHelper::getTaxRoute(AdminHelper::getContentType($request)))
            ->with('status', 'Категория успешно удалена!');
    }

}
