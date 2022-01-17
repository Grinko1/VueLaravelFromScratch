<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Models\Person;
use App\Http\Resources\Person\PersonResource;

class IndexController extends Controller
{
   
    public function __invoke()
    {
    

        $people = Person::all();
        // dd($data);
        return PersonResource::collection($people) ;
    }
}