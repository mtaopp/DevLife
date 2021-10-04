<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\ArticlesGroup;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class ArticleController extends Controller
{
    public function showAllArticles() {
        // $articles = Article::all();
        $articles = Article::all()->sortByDesc("created_at");
        $users = User::all();
        $author = [];
        foreach($users as $user) {
            $author[$user->id] = $user->username;
        }
        $files = DB::table('images')->get();
        $images = [];
        foreach($files as $file) {
            $images[$file->id] = $file->url;
        }
        return view('articles', [
            'articles' => $articles,
            'author' => $author,
            'images' => $images,
        ]);
    }

    public function showCategories()
    {
        return view('categories');
    }

    public function createArticle() {
        $data = [
            'id' => Auth::user()->id,
            'categories' => $this->showAllCategories(),
        ];

        return view('createArticle', $data);
    }

    public function view($id) {
        $articles = Article::findOrFail($id);
        $users = User::all();
        $author = [];
            foreach($users as $user) {
                $author[$user->id] = $user->username;
            }
        $files = DB::table('images')->get();
        $images = [];
        foreach($files as $file) {
            $images[$file->id] = $file->url;
        }
        return view('articles', [
            'articles' => $articles,
            'author' => $author,
            'images' => $images,
        ]);
    }

    public function storeArticle(Request $request) {
        //echo 'image: ' . $request->image . '<br>filename: ' . $request->filename . '<br><br>title: ' . $request->title . '<br>description: ' . $request->description . '<br>content: ' . $request->content . '<br>category: ' . $request->category . '<br>';

        Session::flash('error', "Title has to be unique and max 30 characters, the description cannot be longer then 255 characters");

        $request->validate([
            'title' => ['required', 'string', 'max:30', 'unique:articles'],
            'description' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'category' => ['required', 'integer', 'max:30'],
        ]);
        Session::flash('error', "");

        $id = Auth::user()->id;

        if ($request->hasFile('image')) {

            // If there is a image let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'filename' => ['required', 'string', 'max:30', 'unique:images'],
                    'image' => ['mimes:jpeg,jpg,gif,png,svg|','max:2048'],
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public/upload/images', $validated['filename'].".".$extension);
                $url = Storage::url($validated['filename'].".".$extension);

                $image = Image::create([
                    'filename' => $validated['filename'],
                    'url' => $url,
                ]);


                $article = Article::create([
                    'category' => $request->category,
                    'author' => $id,
                    'title' => $request->title,
                    'description' => $request->description,
                    'content' => $request->content,
                    'image' => $image->id,
                ]);
                Session::flash('success', "Article created / image uploaded!");
                }
            } else {
                $article = Article::create([
                'category' => $request->category,
                'author' => $id,
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->content,
            ]);
                Session::flash('success', "Article created / without a image");
            }

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
        Session::flash('error', "Category already exists");

        $request->validate([
            'name' => ['required', 'string', 'max:30', 'unique:articles_groups'],
        ]);

        $user = ArticlesGroup::create([
            'name' => $request->name,
        ]);

        $data = [
            'id' => Auth::user()->id,
            'categories' => $this->showAllCategories(),
        ];
        Session::flash('success', "Category created");

        return view('createArticle')->with($data);
    }
}
