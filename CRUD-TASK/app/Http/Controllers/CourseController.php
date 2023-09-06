<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        // $data=Course::select("*")->orderby("id","ASC")->get();
        $data= course::all();
        $data = Course::paginate(2);
        return view('index', ['data'=>$data]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
      $datatoinsert['Name']=$request->name;
      $datatoinsert['Description']=$request->description;
      $datatoinsert['Time']=$request->time;
      $datatoinsert['Teacher']=$request->teacher;
    
      Course::create($datatoinsert);
      return redirect('index')->with(['success'=>'Added Successfully']);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Course::select("*")->find($id);
        // $data = Course::find($id);
       
        return view('update',['data'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, $id)
    {
        $datatoupdate['Name']=$request->name;
        $datatoupdate['Description']=$request->description;
        $datatoupdate['Time']=$request->time;
        $datatoupdate['Teacher']=$request->teacher;
        Course::where(['id'=>$id])->update($datatoupdate);
        return redirect('index')->with(['success'=>'Updated Successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::where(['id'=>$id])->delete();
        return redirect('index')->with(['success'=>'Deleted Successfully']);

    }
}
