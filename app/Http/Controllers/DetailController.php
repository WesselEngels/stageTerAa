<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Company;


class DetailController extends Controller
{
    // public function index(){
 
    //     $companies = Company::all();
 
    //     return view('detail',compact('companies'));
    // }
    public function index($id){
        $companies = Company::where('id', $id)->get();
        return view('detail', compact('companies'));
    }

}
