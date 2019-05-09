<?php

class Home extends Controller{


    public function index()
    {
        $data = [
            'title' => 'Halaman Awal',
            'bio' => $this->model('HomeModel')->getData()
        ];
        $this->viewT('home/index',$data);
    }
}