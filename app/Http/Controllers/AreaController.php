<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('views.areas.index', compact('areas'));
    }
    public function create()
    {
        return view('views.areas.add');
    }
    public function store(Request $request)
    {
        $area = New Area();
        $input = $request->all();
        $area->create($input);
        return redirect('/#areas');
    }
    public function edit($id)
    {
        $area = Area::find($id);
        return view('views.areas.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $input = $request->all();
        $area->update($input);
        return redirect('/#areas');
    }


    public function destroy($id)
    {
        Area::destroy($id);
        return redirect('/#areas');
    }
}
