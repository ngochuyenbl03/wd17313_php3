<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $title = 'Hello World';
        $name = 'HuyenPH23939';
        $students = DB::table('students')
            ->select('id','name','address')//lấy theo số trường mà mình mong mún
            ->get();
        // lấy theo điều kiện và trả về 1 dòng dữ liệu
        $student = DB::table('students')->where('id','>',1)->first();
        // lấy toàn bộ dữ liệu bảng Students tương đương với select * from students
        //thực hiện truy vấn theo nhiều điều kiện
        $studentCondition = DB::table('students')
            ->where('id','>=',1)
            ->where('id','<',5)// tương đương toán tử and
            ->orWhere('email','=','ladarius50@example.net')
            ->get();
        $countST = DB::table('students')->count();
        //dd($studentCondition);
        return view('student.index',compact('title','name','students'));
    }
    public function add(Request $request){
        if ($request->isMethod('POST')){ // tồn tại phương thức post
            dd($request->all());
            //dd($request->name);
        }
        return view('student.add');
    }
}
