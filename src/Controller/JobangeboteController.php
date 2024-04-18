<?php

namespace App\Controller;

class JobangeboteController extends BaseController
{
    public function index()
    {
        parent::loadView('index', 'jobangebote');
    }
}