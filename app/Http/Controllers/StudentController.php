<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-4-4
 * Time: 上午1:07
 */

namespace App\Http\Controllers;


use App\student;
use Dotenv\Validator;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //学生列表页
    public function index()
    {
       $student = student::paginate(4);

        return view('student.index',
            ['student' => $student]);
    }


    //添加页面
    public function create(Request $request)
    {
        if ($request->isMethod('POST')){
            //1、控制器验证  验证姓名、年龄、性别是否为空，是否符合规则
//          $this->validate($request,[
//              'student.name'=>'required|min:2|max:20',//姓名格式 最小2格字符，最大20格字符
//              'student.age'=>'required|integer',//年龄为整数
//              'student.sex'=>'required|integer',//性别为整数
//          ],[
//              'required'=>':attribute 为必填项',
//              'min'=>':attribute 长度不符合要求',
//              'integer'=>':attribute 必须为整数'
//
//          ],[
//              'student.name'=>'姓名',
//              'student.age'=>'年龄',
//              'student.sex'=>'性别'
//          ]);
          //2.Validator类验证
            $validator = \Validator::make($request->input(),[
                'student.name'=>'required|min:2|max:20',//姓名格式 最小2格字符，最大20格字符
                'student.age'=>'required|integer',//年龄为整数
                'student.sex'=>'required|integer',//性别为整数
            ],[
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度不符合要求',
                'integer'=>':attribute 必须为整数'

            ],[
                'student.name'=>'姓名',
                'student.age'=>'年龄',
                'student.sex'=>'性别'
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = $request->input('student');
           if( student::create($data))
           {
               return redirect('home')->with('success','添加成功');
           }else
               {
               return redirect()->back();
           }
        }
        $student = new student();

        return view('student.create',
            [
                'student'=> $student
            ]);
    }




    //保存添加
        public function save(Request $request)
        {
           $data = $request->input('student');

           $student =new student();
           $student->name = $data['name'];
           $student->age = $data['age'];
           $student->sex = $data['sex'];


           if($student->save()){

               return redirect('home')->with('success','添加成功');
           }else{
               return redirect()->back();
           }
        }


    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if ($request->isMethod('POST')) {


            $this->validate($request, [
                'student.name' => 'required|min:2|max:20',
                'student.age' => 'required|integer',
                'student.sex' => 'required|integer',
            ], [
                'required' => ':attribute 为必填项',
                'min' => ':attribute 长度不符合要求',
                'integer' => ':attribute 必须为整数',
            ], [
                'student.name' => '姓名',
                'student.age' => '年龄',
                'student.sex' => '性别',
            ]);

            $data = $request->input('student');
            $student->name = $data['name'];
            $student->age = $data['age'];
            $student->sex = $data['sex'];

            if ($student->save()) {
                return redirect('home')->with('success', '修改成功-' . $id);
            }
        }


        return view('student.update', [
            'student' => $student
        ]);
    }
    public function detail($id)
    {
        $student = student::find($id);
        return view('student.detail',[
            'student'=>$student
        ]);
    }


    public function delete($id)
    {

        $student = Student::find($id);

        if ($student->delete()) {
            return redirect('home')->with('success', '删除成功-' . $id);
        } else {
            return redirect('home')->with('error', '删除失败-' . $id);
        }
    }

}