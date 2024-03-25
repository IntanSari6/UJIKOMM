<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoData;

class PhotoDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.photo-data.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.photo-data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo= new PhotoData;
        if ($request->file('JudulFoto')) {
           
            $photo->image = $request->file('JudulFoto')->store('public');
        }
        $photo->DeskripsiFoto = $request->DeskripsiFoto;
        $photo->TanggalUnggah = bcrypt($request->TanggalUnggah);
        $photo->LokasiFile = $request->LokasiFile;
        $photo->save();

        return redirect('/dashboard.photo-data')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $photo = PhotoData::whereId($id)->first();
        return view('show', compact(['photo']));
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
