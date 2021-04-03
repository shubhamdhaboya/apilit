<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallationController extends Controller
{
    /**
     * Function to show install page
     *
     * @param Request $request
     *
     * @return Illuminate\View\View
     */
    public function install(Request $request)
    {
        return view('install_app');
    }
}
