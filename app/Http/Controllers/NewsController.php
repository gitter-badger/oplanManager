<?php

namespace App\Http\Controllers;

use App\News;
use App\User_role;
use Session;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;


class NewsController extends Controller
{

    /**
    * Only for authenticated users
    */
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $newsMenu = [
        'newsMain' => 'active',
        'newsIndex' => 'active'
      ];

      $news = News::orderBy('created_at', 'desc')
                    ->get();

      return view('backend.news.home', compact('newsMenu', 'news'));
      //  return 'jede novinky';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $newsMenu = [
        'newsMain' => 'active',
        'newsCreate' => 'active'
      ];
        return view('backend.news.create', compact ('newsMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
          'title' => 'required',
          'content' => 'required'
          ]);

          $input = $request->all();

          News::create($input);

          Session::flash('flash_message', 'Novinka úspěšně publikována.');

          return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $new = News::findOrFail($id);
      return view('backend.news.show')->with('new', $new);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::findOrFail($id);
        return view('backend.news.edit')->with('new',$new);
        //return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $new = News::findOrFail($id);

      $this->validate($request, [
        'title' => 'required',
        'content' => 'required'
        ]);

        $input = $request->all();
        $new->fill($input)->save();

        Session::flash('flash_message', 'Novinka s názvem: <strong>'.$request->get('title').'</strong> byla úspěšně upravena.');

        return redirect()->back();
        //return view('backend.news.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        Session::flash('flash_message', 'Novinka byla smazána.');

        return redirect()->route('news.index');
    }
}
