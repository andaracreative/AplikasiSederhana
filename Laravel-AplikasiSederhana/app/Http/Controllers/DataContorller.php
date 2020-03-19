<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datanama;
use App\sekolah;

class DataContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sekolah = sekolah::all();
        $data = Datanama::paginate(2);
        return view ('inputan', compact('data','sekolah'));
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
        $this->validate($request, [
            'nama'     => 'required',
            'alamat'   => 'required',
            'no_telp'  => 'required|numeric',
            'asal_sekolah' => 'required'
        ]);
        $data = new Datanama([
                'nama'        =>$request->get('nama'),
                'alamat'      =>$request->get('alamat'),
                'no_telp'     =>$request->get('no_telp'),
                'asal_sekolah'      =>$request->get('asal_sekolah')
            ]);
            $data->save();
            return back()->with('succes', 'Data Berhasil di input');
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
        //
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
