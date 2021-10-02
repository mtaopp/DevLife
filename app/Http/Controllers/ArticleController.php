<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\ArticlesGroup;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function showAllArticles() {
        return view('articles');
    }

    public function createArticle() {




        $data = [
            'id' => Auth::user()->id,
            'categories' => $this->showAllCategories(),
        ];

        return view('createArticle', $data);
    }

    public function storeArticle(Request $request) {
        $request->validate([
            'title' => ['required', 'string', 'max:30', 'unique:articles'],
        ]);
        echo 'title: ' . $request->title;
        echo '<br>';
        echo 'category: ' . $request->category;
        echo '<br>';
        echo 'description: ' . $request->description;
        echo '<br>';
        echo 'content: ' . $request->content;
        echo '<br>';
        $id = Auth::user()->id;

        Article::create([
            'category' => $request->category,
            'author' => $id,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        $data = [
            'id' => Auth::user()->id,
            'msg' => 'Aritcle has been created',
            'categories' => $this->showAllCategories(),
        ];

        return view('createArticle')->with($data);
    }



    public function showAllCategories() {
        $categories = ArticlesGroup::all();
        return $categories;
    }

    public function createCategory() {
        $data = [
            $user = Auth::user(),
            $categories = $this->showAllCategories(),
        ];
        return view('createCategory', $user);
    }

    public function storeCategory(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'max:30', 'unique:articles_groups'],
        ]);

        $user = ArticlesGroup::create([
            'name' => $request->name,
        ]);

        $data = [
            'id' => Auth::user()->id,
            'msg' => 'Category has been created',
            'categories' => $this->showAllCategories(),
        ];

        return view('createArticle')->with($data);
    }
}
