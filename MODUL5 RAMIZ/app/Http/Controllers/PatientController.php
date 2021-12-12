<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\vaccine;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = patient::with('vaccine')->get();
        return view('patient.index', ['patient' => $patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new patient;
        $patient->vaccine_id = $request->vaccine_id;
        $patient->name = $request->name;
        $patient->nik = $request->nik;
        $patient->alamat = $request->alamat;
        $patient->no_hp = $request->no_hp;

        //folder public -> image patient
        $img = $request->file('img_ktp');
        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'image patient';
            $img->move($upload, $names);
            $patient->img_ktp = $names;
        }
        $patient->save();
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vaccine = vaccine::find($id);
        return view('patient.add', ['vaccine' => $vaccine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = patient::find($id);
        return view('patient.edit', ['patient' => $patient]);
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
        $patient = patient::find($id);
        $patient->vaccine_id = $request->vaccine_id;
        $patient->name = $request->name;
        $patient->nik = $request->nik;
        $patient->alamat = $request->alamat;
        $patient->no_hp = $request->no_hp;

        //folder public -> image patient
        $img = $request->file('img_ktp');
        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'image patient';
            $img->move($upload, $names);
            $patient->img_ktp = $names;
        }
        $patient->save();
        return
        redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        patient::destroy($id);

        return redirect()->back();
    }

    public function add()
    {
        $vaccine = vaccine::all();
        return view('vaccine.list', ['vaccine' => $vaccine]);
    }
}
