<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PatientModel;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=PatientModel::all();
        return view('viewallpatient',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patientadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getCode=request('pcode');
        $getName=request('pname');
        $getAddress=request('paddress');
        $getMob=request('pmob');
        $getSym=request('psym');
        $getDia=request('pdia');

        echo $getCode;
        echo "<br>";
        echo $getName;
        echo "<br>";
        echo $getAddress;
        echo "<br>";
        echo $getMob;
        echo "<br>";
        echo $getSym;
        echo "<br>";
        echo $getDia;

        $patient=new PatientModel();

        $patient->pcode=$getCode;
        $patient->pname=$getName;
        $patient->paddress=$getAddress;
        $patient->pmob=$getMob;
        $patient->psym=$getSym;
        $patient->pdia=$getDia;

        $patient->save();


    }
    public function search(Request $request)
    {
        $getName=request('pname');
        $patient=PatientModel::query()->where('pname','LIKE',"%{$getName}%")->get();
        return view('viewallpatient',compact('patient'));
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
        $patient=PatientModel::find($id);
        return view('patientedit',compact('patient'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
