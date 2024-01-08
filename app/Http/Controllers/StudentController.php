<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentsData = Student::all();
        return view('home', compact('studentsData'));
    }

    // public function  studentAdminView()
    // {
    //     $studentsData = Student::all();
    //     return view('home', compact('studentsData'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'class' => 'required|string|max:50',
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->class = $request->class;
        $student->class = $request->class;
        $student->save();
        return redirect()->back()->with('message', "New student Create Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $studentData = Student::find($id);
        return view('student.studentView', compact('studentData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, $id)
    {
        $studentData = Student::find($id);
        return view('student.editStudent', compact('studentData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id . '|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'class' => 'required|string|max:50',
        ]);
    
        $student = Student::find($id);
    
        if (!$student) {
            return abort(404); // Handle the case when the record is not found
        }
    
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->class = $request->class;
    
        $student->save();
    
        return redirect()->back()->with('message', "Student Data updated Successfully");
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student, $id)
    {
        $student->destroy($id);
        return redirect()->back()->with('success', 'Student deleted successfully');
    }
    
}
