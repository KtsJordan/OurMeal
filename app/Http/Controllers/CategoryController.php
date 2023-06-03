<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class CategoryController extends Controller
{
    public function GetIndex()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }


    public function storeCategory(StoreCategoryRequest $request)
    {
        try {
            Category::create([
                'name' => $request->Catname,
                'description'=>$request->CatDesc
            ]);
            Alert::success('Success', 'Category Added Successfully');
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            Alert::error('Error', $th->getMessage());
            return redirect()->route('category.index');
        }
    }




    public function updateCategory(UpdateCategoryRequest $request)
    {
     try {
        Category::where('id',$request->cat_id)->update([
            'name'=>$request->Catname,
            'description'=>$request->CatDesc
        ]);
        Alert::success('Done', 'Category updated successfully');
        return redirect()->route('category.index');
     } catch (\Throwable $th) {
        //throw $th;
     }
    }






    public function destroy(Request $req)
    {
        try {
            Category::where('id', $req->catId)->delete();
            Alert::success('Sucess',"Category Deleted successfully");
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            //throw $th;
        }
        return $req;
    }
}
