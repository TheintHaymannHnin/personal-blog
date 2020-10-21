<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Project;
use App\Category;
use App\Post;
use App\LikesDislike;
use Auth;
use App\Comment;


class UiController extends Controller
{
    public function index()
    {  
        $skills=Skill::all();
        $projects=Project::all();
        $posts=Post::latest()->take(6)->get();
        
        return view('ui-panel.index',compact('skills','projects','posts'));
    }
    public function PostsIndex()
    {   $posts=Post::all();
        $categories=Category::all();
        return view('ui-panel.posts',compact('categories','posts'));
    }
    
    public function postDetailsIndex($id)
    {    $likes=LikesDislike::where('post_id',$id)->where('type','like')->get();
        $dislikes=LikesDislike::where('post_id',$id)->where('type','dislike')->get();
        $likeStatus =LikesDislike::where('user_id',$id)->where('user_id',Auth::user()->id)->first();
        $comments =Comment::where('post_id',$id)->get();
         $post=Post::find($id);
        return view('ui-panel.post-details',compact('post','likes','dislikes','likeStatus','comments'));
    }


    // searching
    public function search(Request $request)
    {     
        $categories=Category::all();
        $searchData =$request->search_data;
        $posts=Post::where('title','like',"%".$searchData."%")->
        orWhere('content','like',"%".$searchData."%")->
        orWhereHas('category',function($category) use($searchData){
            $category->where('name','like',"%".$searchData."%");
        })->get();
        return view('ui-panel.posts',compact('categories','posts'));
    
    }
    
    // search posts by category 
    public function searchByCategory($catId)
    {
        $categories=Category::all();
        $posts=Post::where('category_id','=',$catId)->get();
        return view('ui-panel.posts',compact('categories','posts'));

    }

    

    
}
