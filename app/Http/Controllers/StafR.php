<?php

namespace App\Http\Controllers;

use App\Models\StafM;
use Illuminate\Http\Request;

class StafR extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StafM = StafM::all();
        return view('staf', compact('StafM'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('staf_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nip' => 'required',
            'namalengkap' => 'required',
        ]);

        StafM::create($request->post());
        return redirect()->route('staf.index')->with('success','peserta berhasil ditambahkan');
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
        $staf = StafM::find($id);
        return view('staf_edit', compact ('staf'));
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
        $request->validate ([
            'nip' => 'required',
            'namalengkap' => 'required',
        ]);
        $data = request()->except(['_token','_method','submit']);

        StafM::where('id',$id)->update($data);
        return redirect()->route('staf.index')->with('success','Data Staf berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StafM::where('id',$id)->delete();
        return redirect()->route('staf.index')->with('success','Staf berhasil di hapus');
    }
}
