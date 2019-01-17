<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all()->toArray();
        return view('/student/index', compact('students'));
        // return view('/student/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.'
            // ,'email'    => 'Trường :attribute phải có định dạng email'
        ];

        $this->validate($request, [
            'first_name' => 'required', //'firstt_name' will be show in error box
            'last_name' => 'required'
        ], $messages);
        $student = new Student([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name')
        ]);
        $student->save();
        return redirect('/student/create')->with('success','Data Added'); // version 5.7
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        // return view('student.edit', compact('student','id'));
        return view('/student/edit', compact('student','id'));
        // return view('edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required', //'firstt_name' will be show in error box
            'last_name' => 'required'
        ]);
        $student = Student::find($id);
        $student->first_name = $request->get('first_name');
        $student->last_name = $request->get('last_name');
        
        $student->save();
        return redirect('/student')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student')->with('success', 'Data "'.$student->first_name.' '.$student->last_name.'" Disappeared !');
    }
}


