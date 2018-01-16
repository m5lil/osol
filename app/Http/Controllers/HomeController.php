<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use Excel;
use Illuminate\Support\Facades\Input;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function importExcel()
    {

        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = [
                        'barcode' => $value->barcode,
                        'serial' => $value->serial,
                        'name' => $value->name,
                        'description' => $value->description,
                        'brand' => $value->brand,
                        'model' => $value->model,
                        'warranty' => $value->warranty,
                        'condition' => $value->condition,
                        'life_time' => $value->life_time,
                        'depreciation_rate' => $value->depreciation_rate,
                        'area_id' => $value->area_id,
                        'branch_id' => $value->branch_id,
                        'classification_id' => $value->classification_id,
                        'supplier_id' => $value->supplier_id,
                        'section_id' => $value->section_id,
                        'user_id' => $value->user_id,
                        'status' => 1,
                        'purchase_date' => $value->purchase_date,
                        'purchase_price' => $value->purchase_price,
                        'receipt_code' => $value->receipt_code,
                        'receipt_date' => $value->receipt_date,
                        'maintenance_date' => $value->maintenance_date,
                        'image' => $value->image
                    ];

                }


                if(!empty($insert)){

//                    dd($insert);
                    DB::table('assets')->insert($insert);
                    \Session::flash('msg','تم الإستيؤاد بنجاح.');
                    return back();

                }
            }
        }
        return back();
    }



}
