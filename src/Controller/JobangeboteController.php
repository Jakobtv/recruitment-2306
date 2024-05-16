<?php

namespace App\Controller;

use App\Controller\BaseController;
use App\Model\JobangeboteModel;

class JobangeboteController extends BaseController
{
    public function index()
    {
        parent::loadView('index', 'jobangebote');
    }
    public function show()
    {
        parent::loadView('show', 'jobangebote');
    }
    public function update()
    {
        parent::loadView('update', 'jobangebote');
    }
    public function edit()
    {
        parent::loadView('edit', 'jobangebote');
    }
}