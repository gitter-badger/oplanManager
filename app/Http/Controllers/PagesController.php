<?php

namespace App\Http\Controllers;

use App\Page;
use Session;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class PagesController extends Controller
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
      $pageMenu = [
        'pageMain' => 'active',
        'pageIndex' => 'active'
      ];

    $pages = Page::orderBy('created_at', 'desc')
                  ->get();

    return view('backend.pages.home', compact('pages', 'pageMenu'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $pageMenu = [
        'pageMain' => 'active',
        'pageCreate' => 'active'
      ];

        return view('backend.pages.create')->with('pageMenu', $pageMenu );
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

        Page::create($input);

        Session::flash('flash_message', 'Stránka vytvořena.');

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

      $pageMenu = [
        'pageMain' => 'active'
      ];

        $page = Page::findOrFail($id);

        return view ('backend.pages.show', compact('pageMenu', 'page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $page = Page::findOrFail($id);
      return view('backend.pages.edit')->with('page',$page);
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
      $page = Page::findOrFail($id);

      $this->validate($request, [
        'title' => 'required',
        'content' => 'required'
        ]);

        $input = $request->all();
        $page->fill($input)->save();

        Session::flash('flash_message', 'Stránka s názvem: <strong>'.$request->get('title').'</strong> byla úspěšně upravena.');

        return redirect()->back();
        //return redirect()->route('admin.pages', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Page::destroy($id);

      Session::flash('flash_message', 'Stránka byla smazána.');

      return redirect()->route('admin.pages.index');
    }
}
