<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Company;

class OptionsController extends Controller
{
    function index()
    {   
        $companies = DB::table('companies')->get();
        $educations = DB::table('educations')->get();
        $levels = DB::table('level')->get();
        $grades = DB::table('grade')->get();
        $kindOf = DB::table('kind_of')->get();

        return view('companies.create', [
            'companies' => $companies,
            'educations' => $educations,
            'levels' => $levels,
            'grades' => $grades,
            'kindOf' => $kindOf
        ]);
    }

    function edit($id)
    {
        $companies = Company::where('id', $id)->get();
        $educations = DB::table('educations')->get();
        $levels = DB::table('level')->get();
        $grades = DB::table('grade')->get();
        $kindOf = DB::table('kind_of')->get();

        return view('companies.edit', [
            'companies' => $companies,
            'educations' => $educations,
            'levels' => $levels,
            'grades' => $grades,
            'kindOf' => $kindOf
        ]);
    }
}
