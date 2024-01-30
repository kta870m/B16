<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    protected function storeImage(Request $request) {
        $file = $request->file('photo');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('profile', $filename, 'public');

        //store database
        $student = new Student();
        $student->photo = $filename;
        return $filename;
      }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        $student=new Student();
        $student->photo = $this->storeImage($request);
        $student->name=$request->input('name');
        $student->birthyear=$request->input('birthyear');
        $student->address=$request->input('address');
        $student->district_id=$request->input('district_id');
        $student->save();



        Student::create($request->all(),$student);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {  
        $student = Student::find($id);
        $student->photo = $this->storeImage($request);
        $student->name=$request->input('name');
        $student->birthyear=$request->input('birthyear');
        $student->address=$request->input('address');
        $student->district_id=$request->input('district_id');
        $student->save();
      
        $student->update($request->all(),$student);
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
