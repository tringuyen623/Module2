<?php

class Home extends Controller
{

    public function __construct()
    { 
    }

    public function index()
    {
        $data = [
            'title' => 'Pattern MVC'
        ];
        $this->view('view', $data);
    }
}

