<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = Employee::all();

        return view('dashboard.table.tb_employee',['emp'=>$emp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new Employee();

        $emp->name = $request->input('name');
        $emp->surname = $request->input('surname');
        $emp->gender = $request->input('gender');
        $emp->date_of_birth = $request->input('date_of_birth');
        $emp->past_village = $request->input('past_village');
        $emp->past_city = $request->input('past_city');
        $emp->past_province = $request->input('past_province');
        $emp->current_village = $request->input('current_village');
        $emp->current_city = $request->input('current_city');
        $emp->current_province = $request->input('current_province');
        $emp->tel = $request->input('tel');
      
        $emp->save();

        return redirect()->route('employee');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emps = Employee::find($id);

        return view('dashboard.table.crudemployee.edit',['emps'=>$emps]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     

        $name = $request->input('name');
        $surname = $request->input('surname');
        $gender = $request->input('gender');
        $date_of_birth = $request->input('date_of_birth');
        $past_village = $request->input('past_village');
        $past_city = $request->input('past_city');
        $past_province = $request->input('past_province');
        $current_village = $request->input('current_village');
        $current_city = $request->input('current_city');
        $current_province = $request->input('current_province');
        $tel = $request->input('tel');
      
       

        DB::update(
        'UPDATE employees SET name=?,surname=?,gender=?,date_of_birth=?,past_village=?,
        past_city=?,past_province=?,current_village=?,current_city=?,current_province=?,tel=?
         WHERE id=?',[$name,$surname,$gender,$date_of_birth,$past_village,$past_city,$past_province,$current_village,$current_city,$current_province,$tel,$id]);

        return redirect()->route('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employee::find($id);
        
         $emp->delete();

         return redirect()->route('employee');
    }
}
