<?php

class HomeModel{
 private $bio = [
        "nama"      =>  "Muchammad Dwi Cahyo Nugroho",
        "asal"      =>  "Wonosobo",
        "jurusan"   =>  "Teknik Komputer",
        "nim"       =>  "21120115120039",
        "angkatan"  =>  "2015"
 ];
 public function getData()
 {
     return $this->bio;
 }
}