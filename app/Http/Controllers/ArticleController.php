<?php

namespace App\Http\Controllers;

use App\Models\ArticlesGroup;
use Illuminate\Http\Request;
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
