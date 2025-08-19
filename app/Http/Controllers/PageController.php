<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as ViewFacade;

class PageController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function article()
    {
        return view('testview',['myarticle'=>'passing article to view']);
    }

    public function display()
    {
        if(ViewFacade::exists('admin.dashboard')) {
            return view('admin.dashboard');
        }
        return "Requested view does not exist.";
    }
}
