<?php

namespace App\Http\Controllers;
use App\Models\student;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $data = [
            'name' => "Arpz",
            'age' => 26
        ];
        return view('dashboard')->with($data); //Welcome is a blade.
    }

    public function next()
    {
        return view('next');
    }

    public function profile($id, $name)
    {
        $data = [
            'id' => $id,
            'name' => $name
        ];
        return view('profile')->with($data);
    }
//
    public function create()
    {
        return view('create');
    }

//    public function store(Request $request)
//    {
//
//        $student = new Student();
//        $student->address = $request->address;
//        $student->name = $request->name;
//        $student->dob = $request->dob;
//        $student->age = 0;
//        $student->save();
//
//
//    }

//public function create(){
//    return view('create');
//}

    public function store(request $request)
    {
        $student = new student();
        $student->name = $request->name;
        $student->address = $request->address;

        $student->dob = $request->dob;
        $filenamewithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenameToStore = $filename . "-" . time() . "-" . $extension;
        $img = Image::make($request->file('image'));
        $img->save('storage/image/' . $filenameToStore);
        $student->image = $filenameToStore;
        $student->save();
        return redirect('/list');
    }

    public function list()
    {
        $student = student::get();
        return view('list')->with('students', $student);
    }
}
