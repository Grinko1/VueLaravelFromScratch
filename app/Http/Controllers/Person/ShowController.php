<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Http\Resources\Person\PersonResource;

class ShowController extends Controller
{

    public function __invoke(Person $person)
    {
      
        return new PersonResource( $person);
    }
}
