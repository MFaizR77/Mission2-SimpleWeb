<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' =>'Home',
            'content'=> view('welcome'),
        ];
        
        return view('template', $data);
    }

    public function about()
    {
        return view("About");
    }

    
    public function berita()
    {
           $data = [
            'title' =>'Home',
            'content'=> view('berita'),
        ];
        
        return view('template', $data);
    }
}
