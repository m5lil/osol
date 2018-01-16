<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $suppliers = Supplier::all();
        return view('views.suppliers.index');
    }
    public function anyData(Supplier $supplier)
    {
        $suppliers = $supplier->select('id', 'supplier_name', 'contact')->get();
        return Datatables::of($suppliers)
            ->editColumn('control', function($model){
                // $all = '<a class="btn btn-default" href="/cp/suppliers/' . $model->id . '"><i class = "ion ion-paper-airplane"></i></a> ';
                $all = '<a class="btn btn-primary btn-xs setupajax" href="suppliers/' . $model->id . '/edit">Edit</a> ';
                $all .= '<a class="btn btn-danger btn-xs" href="suppliers/' . $model->id . '/delete">Delete</a>';
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
        $supplier = New Supplier();
        $input = $request->all();
        $supplier->create($input);
        return redirect('/#suppliers');
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
        $supplier = Supplier::find($id);
        return view('views.suppliers.edit', compact('supplier'));
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

        $supplier = Supplier::findOrFail($id);
        $input = $request->all();
        $supplier->update($input);
        return redirect('/#suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect('/#suppliers');
    }
}
