<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{  //Menampilkan Data
    public function index()
    {
        // untuk mengambil satu variabel yg isinya model
    $student = Student::all();
    // guna compact adalah untuk mengubah menjadi array assoc
    return view('table',compact(['student']));

    }

    // menampilkan formulir utk menginput data
    public function create()
    {
        return view('input');
    }
    
    // progres create data
    public function store(Request $request)
    {
        // //dd($request->all());
        // $student = Student::create([
        //     'nama'=>$request->input('nama'),
        //     'kesalahan'=>$request->input('kesalahan'),
        //     'hukuman'=>$request->input('hukuman')
        // ]);

        $student = Student::create($request->all());

        return redirect('table');
    }

    // menampilkan halaman edit
    public function edit($id)
    {
        $student = Student::find($id);
        
        return view('update.edit', compact(['student']));
    }

    public function update($id, Request $request)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('table');
    }

    // delete
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('table');
    }



}
