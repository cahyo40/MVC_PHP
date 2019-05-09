<?php

class Home extends Controller{
    public function index()
    {
        $data = [
            'title' => 'Halaman Awal'
        ];
        $this->viewT('home/index',$data);
    }
}