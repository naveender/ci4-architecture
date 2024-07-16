<?php

namespace App\Controllers;


class AdminController extends BaseController
{
    protected $auth;

    public function __construct()
    {
        // Load the authentication service in the constructor
        $this->auth = service('authentication');
    }
    public function index()
    {   
        //print_r(auth()->user());die;
        return view('admin/dashboard');
    }

    public function accountsettings()
    {
        return view('admin/account_settings');
    }

   

    

    
}
