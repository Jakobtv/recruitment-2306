<?php

namespace App\Controller;

use App\Controller\BaseController;
use App\Model\BewerbungenModel;

class BewerbungenController extends BaseController
{
    public function index()
    {
        parent::loadView('index', 'bewerbungen');
    }
    public function show()
    {
        parent::loadView('show', 'bewerbungen');
    }
    public function update()
    {
        parent::loadView('update', 'bewerbungen');
    }
    public function edit()
    {
        parent::loadView('edit', 'bewerbungen');
    }
}