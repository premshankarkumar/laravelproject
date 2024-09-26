<?php
namespace App\Http\Controllers;
use App\Models\student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TeacherController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function student()
    {
        $students = Teacher::all();
        return view('teacher/student-list',['students' => $students]);
    }
    public function add()
    {
        return view('teacher/add');
    }
    public function addStudent(Request $request)
    {
        $data = new Teacher();
        $data->name = $request->name;
        $data->subject = $request->subject;
        $data->marks = $request->marks;

        $result = $data->save();
        $request->session()->flash('status', 'Student detail added successfully');
        return redirect('student-list');
    }
    public function edit($id)
    {
        //ini_set('memory_limit', '-1');
    
        $data = Teacher::find($id);
        return view('teacher/edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        //ini_set('memory_limit', '-1');
    
        $data = Teacher::find($request->input('id'));
        $data->name = $request->input('name');
        $data->subject = $request->input('subject');
        $data->marks = $request->input('marks');
        $data->save();
        $request->session()->flash('status', 'Student detail updated successfully');
        return redirect('student-list');
    }
    public function delete(Request $request,$id)
    {
        //ini_set('memory_limit', '-1');
    
        $data = Teacher::find($id);
        $data->delete();
        $request->session()->flash('status', 'Student detail deleted successfully');
        return redirect('student-list');
    }
    
}
