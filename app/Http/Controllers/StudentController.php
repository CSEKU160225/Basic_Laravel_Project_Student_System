<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    //
    public function index($value='')
    {
    	# code...
    	$s=student::all();
    	return view('index')->with('student',$s);
    }

        public function create($value='')
    {
    	# code...

    	return view('create');

}

        public function edit($id)
    {
    	# code...
    	$student=student::find($id);


    	return view('edit')->with('stu',$student);

}
       public function store(Request $request)
    {
          //check validation of form
        $this->validate($request,['name'=>'required|string|max=10',
           'resid'=>'required',
           'dptname'=>'required']);
 

    	# code...
    	$student= new student;

    	$student->name=$request->name;
    	$student->registration_id=$request->resid;
    	$student->departmant_name=$request->dptname;
    	$student->info=$request->info;
        $student->save();
        return redirect()->route('index');
    	

}
      public function update(Request $request,$id)//jodi form e value bosanor kaj thake tahole request hbe
    {
    	# code...
    	$student= student::find($id);
    	 $student->name=$request->name;
    	$student->registration_id=$request->resid;
    	$student->departmant_name=$request->dptname;
    	$student->info=$request->info;
        $student->save();

    	
        return redirect()->route('index');
    	

}
      public function delete($id)
    {
    	# code...
    	$student= student::find($id);
    	$student->delete();
    	
        return redirect()->route('index');
    	

}

}
