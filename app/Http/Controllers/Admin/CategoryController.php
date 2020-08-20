<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesList = Category::all();
        return view('admin.category.index', ['categoriesList' => $categoriesList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $data = $request->validated();

    	if(!$data['slug']) {
    		 $data['slug'] = Str::slug($data['title'], "-");
		}

        $category = Category::create($data);
        if($category) {
			return redirect()->route('category.index')->with('success', trans('messages.admin.category.store.success'));
		}

        return back()->with('error', trans('messages.admin.category.store.fail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryCreateRequest $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->title = $request->input('title');
        $category->description = $request->input('text');

        if($category->save()) {
        	return redirect()->route('category.index')->with('success', trans('messages.admin.category.update.success'));
		}

        return back()->with('error', trans('messages.admin.category.update.fail'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);

        return redirect()->route('admin.categories')->with('success', trans('messages.admin.category.delete.success'));
    }
}
