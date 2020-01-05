<?php

class Home extends Controller
{

    public function __construct()
    { 
        //init model here
    }

    public function index()
    {
        $data = [
            'title' => 'Pattern MVC'
        ];
        $this->view('view', $data);
    }
}

