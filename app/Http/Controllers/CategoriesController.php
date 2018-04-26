<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        //读取分类下的栏目内容
        $topics = Topic::where('category_id',$category->id)->paginate(20);
        //传参变量话题分配到末班中
        return view('topics.index',compact('topics','category'));
    }
}
