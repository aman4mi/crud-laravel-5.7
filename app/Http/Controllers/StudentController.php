<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index(){
        $students = Student::orderBy('created_at', 'desc')->paginate(5);
        return view('students.index')->with('students', $students);
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:students',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required'
         ]);

         $students = new Student;
         $students->first_name = $request->firstName;
         $students->middle_name = $request->middleName;
         $students->last_name = $request->lastName;
         $students->email = $request->email;
         $students->mobile = $request->mobile;
         $students->date_of_birth = $request->date_of_birth;        
         $students->gender = $request->gender;
         $students->language = $request->language;
         $students->age = $request->age;
         $students->address = $request->address;
         $students->active_status = true;
         $students->save();
        return redirect('/')->with('success','Student added');
    }
    public function edit($id){
        $students = Student::find($id);
        return view('students.edit')->with('students', $students);
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:students,email,'.$id,
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required'
         ]);

         $students = Student::find($id);
         $students->first_name = $request->firstName;
         $students->middle_name = $request->middleName;
         $students->last_name = $request->lastName;
         $students->email = $request->email;
         $students->mobile = $request->mobile;
         $students->date_of_birth = $request->date_of_birth;        
         $students->gender = $request->gender;
         $students->language = $request->language;
         $students->age = $request->age;
         $students->address = $request->address;
         $students->active_status = $request->has('active_status') ? true : false;
         $students->save();
        return redirect('/')->with('success','Student Updated');
    }

    public function delete($id){
        $students = Student::find($id);
        if(!is_null($students)){
            $students->delete();
        }   
        return redirect('/')->with('success','Student Deleted');
    }
}
