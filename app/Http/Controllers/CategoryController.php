<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function register(Request $request){
    		$category= new Category();
    		$category->name=$request->name;
    		$category->status=1;
    		$category->user_id=Auth::user()->id;
    		$category->save();
    		return redirect()->route('dashboard');
    }
    public function deleted(Request $request){
    	$category = Category::find($request->id);
        $category->delete();
        return redirect()->route('dashboard');
    }
}
