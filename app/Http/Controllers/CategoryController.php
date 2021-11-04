<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }







    public function createCategory()
    {
        return view('admin.category.createCategory');
    }

    public function storeCategory(Request $request)
    {
        // return $request->all();   way- 1

        $this->validate($request, [
            'categoryName' => 'required',
            'categoryDescription' => 'required'
        ]);

        //   Elequent type   way-2
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();

        // return 'Category info save successfully';
        // return redirect('/category/add');
        return redirect()->back()->with('message', 'Category saved');


        /* Category::create($request->all());  // Faced used way- 3
       return 'Category info save successfully'; */


        //    query builder way
        // DB::table('categories')->insert([
        //      'categoryName' =>$request->categoryName,
        //      'categoryDescription' =>$request->categoryDescription,
        //      'publicationStatus' =>$request->publicationStatus,
        // ]);
        // return 'Category info save successfully';
    }

    public function manageCategory()
    {

        $categories = Category::all();
        return view('admin.category.manageCategory', ['categories' => $categories]);
    }


    public function editCategory($id)
    {
        $categoryByid = Category::where('id', $id)->first();
        return view('admin.category.editCategory', ['categoryByid' => $categoryByid]);
    }


    public function updateCategory(Request $request)
    {
        /**  return$request->all(); */
        // dd($request->all());



        $category = Category::find($request->id);
        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();
        return redirect('/category/manage')->with('message', 'Category info updated.');
    }


    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message', 'Category info Deleted.');
    }
}