<?php

namespace khoirulh1610\crudstarter\controllers;

use CrudStarter;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CrudStarter::admin.index');
    }
}
