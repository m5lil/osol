<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classification;
use App\Section;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifications = Classification::all();
        $sections = Section::pluck('section_name','id');
        return view('views.classifications.index', compact('classifications','sections'));
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
        $classification = New Classification();
        $input = $request->all();
        $classification->create($input);
        return redirect('/#classifications');
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
        $classification = Classification::find($id);
        $sections = Section::pluck('section_name','id');
        return view('views.classifications.edit', compact('classification','sections'));
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
        $classification = Classification::findOrFail($id);
        $input = $request->all();
        $classification->update($input);
        return redirect('/#classifications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classification::destroy($id);
        return redirect('/#classifications');

    }
}
