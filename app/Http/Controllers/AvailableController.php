<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class AvailableController extends Controller
{
    public function store(Request $request) 
    {
        $company = Company::findOrFail($request->id);

        if($company->available == 1){
            $company->available = 0;
        } else {
            $company->available = 1;
        }
    
        return response()->json([
          'data' => [
            'available' => $company->available,
            'success' => $company->save(),
          ]
        ]);
    }
}
