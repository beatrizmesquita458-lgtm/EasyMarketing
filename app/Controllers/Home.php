<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homeEasy');
    }
    public function trabalhos(): string
    {
        return view('trabalhos');
    }
}
