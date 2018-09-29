<?php

namespace App\Http\Controllers;

use App\presentation;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donnees = presentation::all();
        return view('/admin/adpresentation', compact('donnees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=presentation::find($id);
        return view ('/admin/edit',compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, presentation $presentation, $id)
    {
        $modif = presentation::find($id);
        $modif->titre = $request->titre;
        $modif->description = $request->description;
        $modif->save();
        return redirect('/admin/adpresentation');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(presentation $presentation)
    {
        //
    }
}
