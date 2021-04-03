<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Function to show home page
     *
     * @param Request $request
     *
     * @return Illuminate\View\View
     */
    public function home(Request $request)
    {
        if ($this->appInstalled()) {
            return view('welcome');
        }

        return redirect()->route('install');
    }
}
