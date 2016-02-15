<?php

namespace App\Http\Controllers;
use App\News;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{

    /**
     * Show index Frontend page
     * @return Response
     */
    public function index()
    {
      $news = News::orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

      return view('frontend.index', compact('news'));
    }
}
