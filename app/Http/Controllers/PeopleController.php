<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
   
    public function __invoke()
    {

        $people = [
            [
                'id' => 1,
                'name' => 'Nadya',
                'job' => 'dev',
                'age'=> 28,
                'isMarried' => true
            ],
            [
                'id' => 2,
                'name' => 'Vitalii',
                'job' => 'Key maker',
                'age'=> 25,
                'isMarried' => true
            ],
            [
                'id' => 3,
                'name' => 'Faust',
                'job' => 'Just rich bitch',
                'age'=> 1,
                'isMarried' => false
            ],
               
        ];
        return $people;
    }
}