<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class AvailableController extends Controller
{
    public function store($id) 
    {
        $available = Company::where('id', $id)->get('adress');
        return $available;
    }
}
