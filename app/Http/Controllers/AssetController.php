<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Supplier;
use App\Asset;
use App\Branch;
use App\Section;
use App\Area;
use App\Classification;

class AssetController extends Controller
{
    public function index()
    {
        $areas = Area::pluck('area_name','id');
        $branches = Branch::pluck('branch_name','id');
        $sections = Section::pluck('section_name','id');
        $suppliers = Supplier::pluck('supplier_name','id');
        $classifications = Classification::pluck('class_name','class_name');

        return view('views.assets.index',compact('areas', 'branches','sections','suppliers','classifications'));
    }
    public function anyData(Asset $asset)
    {
        $assets = $asset->select('id', 'serial', 'name', 'condition', 'area_id', 'supplier_id', 'section_id', 'branch_id', 'classification_id', 'status');
        return Datatables::of($assets)
            ->editColumn('area_id', function($model) {
                return @Area::find($model->area_id)->area_name;
            })
            ->editColumn('branch_id', function($model) {
                return @Area::find($model->area_id)->area_name;
            })
            ->editColumn('section_id', function($model) {
                return @Section::find($model->section_id)->section_name;
            })
            ->editColumn('supplier_id', function($model) {
                return @Supplier::find($model->supplier_id)->supplier_name;
            })
            ->editColumn('classification_id', function($model) {
                return @Area::find($model->area_id)->area_name;
            })
            ->editColumn('control', function($model){
                // $all = '<a class="btn btn-default" href="/cp/assets/' . $model->id . '"><i class = "ion ion-paper-airplane"></i></a> ';
                $all = '<a class="setupajax" href="assets/' . $model->id . '/edit"><span class="mif-pencil"></span></a> ';
                $all .= ' <a class="" href="assets/' . $model->id . '/delete"><span class="mif-bin"></span></a> ';
                $all .= ' <input form="delete_button" name="delete_selected[]" type="checkbox" />';

                return $all;
            })
            ->rawColumns(['control'])->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::all();
        $areas = Area::pluck('area_name','id');
        $sections = Section::pluck('section_name','id');
        $suppliers = Supplier::pluck('supplier_name','id');
        $classifications = Classification::pluck('class_name','id');

        return view('views.assets.add',compact('assets','areas','sections','suppliers','classifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $this->saveFiles($request);
        $asset = New Asset();
        $input = $request->except(['_token','submit']);
        $asset->create($input);
        return redirect('/#assets');
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
        $asset = Asset::find($id);
        $areas = Area::pluck('area_name','id');
        $sections = Section::pluck('section_name','id');
        $suppliers = Supplier::pluck('supplier_name','id');
        $classifications = Classification::pluck('class_name','id');

        return view('views.assets.edit',compact('asset','areas','sections','suppliers','classifications'));
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
        $request = $this->saveFiles($request);
        $asset = Asset::findOrFail($id);
        $input = $request->all();
        $asset->update($input);
        return redirect('/#assets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ids = explode(",",$id);
         dd($ids);
        Asset::destroy($ids);
        return redirect('/#assets');
    }
    public function deletes(Request $request)
    {
//        $ids = explode(",",$id);
         dd($request);
//        Asset::destroy($ids);
//        return redirect('/#assets');
    }
}
