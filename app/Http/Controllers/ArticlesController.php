<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{
    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

//        dd($article->published_at);

        return view('articles.show', compact('article'));
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * @param ArticleRequest $request
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');

    }
}

