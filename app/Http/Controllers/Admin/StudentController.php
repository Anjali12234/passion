<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students= Student::latest()->paginate(10);
        return view('backend.student.index' ,compact('students'));
    }


    public function create(Student $student )
    {
        return view('backend.student.create',compact('student'));
    }


    public function store(StoreStudentRequest $request)
    {
       Student::create($request->validated());
        toast('Student added successfully ', 'success');
        return redirect(route('admin.student.index'));
    }


    public function show(Student $student)
    {
        return view('backend.student.show',compact('student'));
    }


    public function edit(Student $student)
    {
        return view('backend.student.edit',compact('student'));
    }


    public function update(UpdateStudentRequest $request, Student $student)
    {
        if ($request->hasFile('image') && $image= $student->getRawOriginal('image')) {

            $this->deleteFile($image);
        }
        $student->update($request->validated());
        toast('Student updated successfully', 'success');
        return redirect(route('admin.student.index'));
    }


    public function destroy(Student $student)
    {
        $this->deleteFile($student->image);
         $student->delete();
         toast('deleted successfully', 'success');
         return back();
    }
    public function updateStatus(Student $student)
    {
        $student->update([
            'status' => !$student->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
