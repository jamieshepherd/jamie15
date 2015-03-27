<?php namespace App\Http\Controllers;

use Auth;
use Request;
use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $segment     = Request::segment(1);
        if($segment == 'tutorials') $type = 'tutorial';
        if($segment == 'blog') $type = 'blog';
        $articles = Article::where('type', '=', $type)
            ->orderBy('created_at','DESC')
            ->where('public', '=', true)
            ->paginate(10);
        return view($segment)->with(compact('articles'));
    }

    /**
     * Display a listing of the resource for admins.
     */
    public function adminIndex()
    {
        $articles = Article::all();
        return view('admin.index')->with(compact('articles'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateArticleRequest $request
     * @return Response
     */
	public function store(Requests\CreateArticleRequest $request)
	{
		$article = new Article();
        $article->type    = $request->type;
        $article->public  = $request->has('public');
        $article->title   = $request->title;
        $article->slug    = $request->slug;
        $article->text    = $request->text;
        $article->save();

        // Store the image
        $file = $request->file('header');
        if ($request->file('header')) {
            $file->move('images/uploads/'.$article->id, 'header.jpg');
        }

        return redirect('/admin');
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
        $title   = $article->title;

        if($article->public || Auth::check()) {
            return view('article')->with(compact('article', 'title'));
        } else {
            abort(404);
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);

        return view('admin.edit')->with(compact('article'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param Requests\UpdateArticleRequest $request
     * @return Response
     */
	public function update($id, Requests\UpdateArticleRequest $request)
	{

        $article = Article::find($id);
        $article->type    = $request->type;
        $article->public  = $request->has('public');
        $article->title   = $request->title;
        $article->slug    = $request->slug;
        $article->text    = $request->text;
        $article->save();

        if($request->file('header')) {
        // Store the image
        $file = $request->file('header');
            $file->move('images/uploads/'.$article->id, 'header.jpg');
        }

        return redirect('/admin');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Article::destroy($id);
        return redirect()->back();
	}

}
