<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    /* Other setting are in folder of shield located in vendor\codeigniter4\shield\src\Views - Module provided by codeignator 4 */
    public function defaulthome(){
        return redirect()->to('/login');
    }
}
