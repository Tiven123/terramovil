<?php

namespace terramovil\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contac()
    {
        return view('contac');    }

    public function register()
    {
        return view('user/register');
    }


}
