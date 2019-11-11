<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Company;
use App\Educations;
use App\Level;
use App\Grade;
use App\Kind_Of;


class DetailController extends Controller
{
    public function index($id)
    {
        $companies = Company::where('id', $id)->get();
        return view('detail', compact('companies'));
    }

    public function details() 
    {
        $education = Educations::all();
        $level = Level::all();
        $grade = Grade::all();
        $kindOf = KindOf::all();

        $detailArray = array($education, $level, $grade, $kindOf);

        return $detailArray;
    }

}
