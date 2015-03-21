<?php namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::where('type', '=', 'blog')
            ->where('public', '=', true)
            ->paginate(10);
        return view('blog')->with(compact('articles'));
    }

    /**
     * Display a listing of the resource for admins.
     */
    public function adminIndex()
    {
        $articles = Article::where('type', '=', 'blog')->get();
        return view('admin.blog')->with(compact('articles'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.blog_create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateArticleRequest $request
     * @return Response
     */
	public function store(CreateArticleRequest $request)
	{
		$article = new Article();
        $article->type    = 'blog';
        $article->public  = $request->has('public');
        $article->title   = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect('/admin/blog');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::find($id);

        return view('article')->with(compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
