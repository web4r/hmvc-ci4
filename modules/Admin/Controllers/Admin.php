<?php

namespace Modules\Admin\Controllers;

use CodeIgniter\CodeIgniter;

class Admin extends \CodeIgniter\Controller
{
    public function index()
    {
        return view('Modules\Admin\Views\pages\dashboard');
    }
}
