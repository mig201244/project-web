<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    public function index()
    {
        
        $departments = DB::table('department')  //ระบุว่าเราต้องการดึงข้อมูลจากตาราง 'departments'
            ->join('faculty', 'department.id_faculty', '=', 'faculty.id_faculty')  //join เพื่อรวมข้อมูลจากตาราง 'departments' และ 'faculties' โดยเชื่อมตารางด้วยคอลัมน์ 'id_faculty'
            ->select('department.*','faculty.n_faculty')  //ะบุว่าเราต้องการเลือกคอลัมน์ไหนจากตาราง
            ->get();  //ดึงข้อมูลจากฐานข้อมูลตามเงื่อนไขและคอลัมน์ที่เราได้กำหนด
        
        return view('department.index', compact('departments'));
//ส่งข้อมูลที่ดึงมาจากฐานข้อมูลไปยัง View ที่ชื่อว่า 'departments.index' และแนบตัวแปร $departments เพื่อให้ View สามารถแสดงข้อมูลนี้ได้ในหน้าเว็บ. 
    }

    public function create()
    {
        $faculties = Faculty::select('id_faculty', 'n_faculty')  //การเรียกใช้โมเดล Faculty เลือกเฉพาะคอลัมน์ id และ name_faculty จากตารางคณะ (faculty) ในฐานข้อมูล.
        ->get();  //ดึงข้อมูลจากฐานข้อมูล ซึ่งจะคืนค่าข้อมูลทั้งหมดที่พบในตารางคณะและเก็บไว้ในตัวแปร
        
        return view('departments.create',
            compact('faculties'));  //ใช้เพื่อส่งข้อมูลที่อยู่ในตัวแปร $faculties ไปยังหน้า View 'create' เพื่อนำมาแสดงในแบบฟอร์มหรือตำแหน่งที่ต้องการแสดงข้อมูล
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_department' => 'required',
            //'id_faculty' => 'required',
            
        ]);
        
        Department::create($request->post());

        return redirect()->route('departments.index')->with('success','เพิ่มฝ่ายงานเรียบร้อยแล้ว.');
    }

    public function show(Department $department)
    {
        return view('departments.show',compact('department'));
    }

    public function edit(Request $request,Department $department)
    {
        // echo $request->id;
        // die;

        $faculties = Faculty::select('id', 'name_faculty')->get();
        $departments = DB::table('departments')
            ->join('faculties', 'departments.id_faculty', '=', 'faculties.id')
            ->select(
                'departments.id',
                'departments.name_department',
                'departments.id_faculty', 
                'faculties.id','faculties.name_faculty')
    //->paginate(5)
            ->where('departments.id','=', $request->id )
        ->get();    
        return view('departments.edit',compact('department','faculties','request'));

    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name_department' => 'required',
            'id_faculty' => 'required',
            
        ]);
        
        $department->fill($request->post())->save();

        return redirect()->route('departments.index')->with('success','อัปเดตฝ่ายงานเรียบร้อยแล้ว');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success','ลบฝ่ายงานเรียบร้อยแล้ว');
    }
    
}
