<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;

class DeleteController extends Controller
{

    public function __invoke(Person $person)
    {
        

        $person->delete();
        // dd($data);
        return response([]);
    }
}
