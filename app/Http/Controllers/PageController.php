<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use views;
class PageController extends Controller
{
public function show($id){
    $page = Page::all();

    return view('pages.show', compact('page'));
    }
}
