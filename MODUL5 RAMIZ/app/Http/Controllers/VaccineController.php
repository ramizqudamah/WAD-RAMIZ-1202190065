<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\vaccine;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vaccine = vaccine::all();
        return view('vaccine.index', ['vaccine' => $vaccine]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccine.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaccine = new vaccine;
        $vaccine->name = $request->name;
        $vaccine->price = $request->price;
        $vaccine->description = $request->description;

        //folder public -> image vaccine
        $img = $request->file('image');
        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'image vaccine';
            $img->move($upload, $names);
            $vaccine->image = $names;
        }
        $vaccine->save();
        $vaccine = vaccine::all();

        return redirect()->route('vaccine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccine = vaccine::find($id);
        return view('vaccine.edit', ['vaccine' => $vaccine]);
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
        $vaccine = vaccine::find($id);
        $vaccine->name = $request->name;
        $vaccine->price = $request->price;
        $vaccine->description = $request->description;

        //folder public -> image vaccine
        $img = $request->file('image');
        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'image vaccine';
            $img->move($upload, $names);
            $vaccine->image = $names;
        }
        $vaccine->save();

        return redirect()->route('vaccine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        vaccine::destroy($id);

        return redirect()->back();
    }

    public function list()
    {
        $vaccine = vaccine::all();
        return view('vaccine.list', ['vaccine' => $vaccine]);
    }
}
