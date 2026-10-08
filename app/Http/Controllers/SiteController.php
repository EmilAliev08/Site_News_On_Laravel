<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;

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
        $categories = Category::all();

        return view('journalist', compact('categories'));   
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $news = News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        $news->categories()->sync($validated['categories']);

        return redirect('news/' . $news->id);
    }

    public function catalogCategory($category)
    {
        $categories = [
            'technology' => 'Технологии',
            'programming' => 'Программирование',
            'science' => 'Наука',
            'sport' => 'Спорт',
            'world' => 'Мир',
            'economy' => 'Экономика',
        ];

        $categoryModel = Category::where('name', $categories[$category])->first();

        $news = $categoryModel->news;

        return view('catalogCategory', compact('news'));
    }


    //Admin

    public function users()
    {
        $users = User::with('roles')->get();
        $roles = Role::whereIn('name', ['journalist', 'admin'])->get();

        return view('admin.users', compact('users', 'roles'));
    }

    public function updateRoles(Request $request, User $user)
    {
        if ($user->id === $request->user()->id) {
            return back()->with(
                'error',
                'Вы не можете изменять собственные роли.'
            );
        }

        $validated = $request->validate([
            'roles' => ['array'],
            'roles.*' => ['exists:roles,id'],
        ]);

        $user->roles()->sync($validated['roles'] ?? []);

        return back()->with('success', 'Роли пользователя обновлены.');
    }
}

