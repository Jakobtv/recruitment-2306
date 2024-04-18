<?php

namespace App\Controller;

class HomeController extends BaseController
{
    public function index()
    {
        parent::loadView('home');
    }
}