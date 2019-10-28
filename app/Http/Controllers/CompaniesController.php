<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Company;


class CompaniesController extends Controller
{
    public function index(){
 
        $companies = Company::all();
 
        return view('index',compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function edit($id)
    {
        $companies = Company::where('id', $id)->get();
        // dd($companyId);
        return view('companies.edit', compact('companies'));
    }

    public function update($id)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'adress' => 'required',
            'education' => 'required',
            'level' => 'required',
            'grade' => 'required',
            'kind_of' => 'required',    
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(request('image')) {
        $imagePath = request('image')->store('uploads', 'public');
        // dd($imagePath);
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(300, 300);
        $image->save();
        $imageArray = ['image' => $imagePath];
        }
        Company::where('id', $id)->update(array_merge(
            $data, 
            $imageArray ?? []
        )
           
        );
    
        return redirect('/');

    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required',
            'adress' => 'required',
            'education' => 'required',
            'level' => 'required',
            'grade' => 'required',
            'kind_of' => 'required',
            'image' => 'required', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ));
        // dd(request()->all());
        $imagePath = request('image')->store('uploads', 'public');
        // dd($imagePath);
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(300, 300);
        $image->save();
    
        $company = new Company();
        $company->name = request('name');
        $company->description = request('description');
        $company->adress = request('adress');
        $company->education = request('education');
        $company->level = request('level');
        $company->grade = request('grade');
        $company->kind_of = request('kind_of');
        $company->image = $imagePath;
        $company->save();
        

    
        return redirect('/');

        // $data = request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'adress' => 'required',
        //     'education' => 'required',
        //     'level' => 'required',
        //     'grade' => 'required',
        //     'kind_of' => 'required',
        //     'image' => ['required', 'image']
        // ]);

        // $imagePath = request('image')->store('uploads', 'public');

        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        // $image->save();

        // create([
        //     'name' => $data['name'],
        //     'description' => $data['description'],
        //     'adress' => $data['adress'],
        //     'education' => $data['education'],
        //     'level' => $data['level'],
        //     'grade' => $data['grade'],
        //     'kind_of' => $data['kind_of'],
        //     'image' => $imagePath,
        // ]);

        // return redirect('/index');
    }
}
