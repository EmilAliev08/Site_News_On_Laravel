<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function main(){
        $news = News::all();
        return view('main', compact('news'));
    }

    public function catalog(){
        return view('catalog');
    }

    public function journalist(){
        return view('journalist');
    }

    public function admin(){
         return view('admin');
    }

    //News item
    public function show($id)
    {
        $news = News::find($id); // Find a specific news article by ID
        
        return view('show', compact('news'));
    }

    //Create news
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $category = $request->input('category');

        $news = News::create([
            'title' => $title,
            'content' => $content,
            'category' => $category,
        ]);
        return redirect('news/'.$news->id );
    }

    public function catalogCategory($category)
    {
       $news = News::where('category', $category)->get();

        return view('catalogCategory', compact('news'));
    }
}

