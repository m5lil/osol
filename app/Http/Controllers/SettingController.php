<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function index()
    {

        $settings = Setting::whereIn('type',[0,1,2])->get();
        return view('views.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $request = $this->saveFiles($request);
        foreach (array_except($request->toArray() , ['_token','submit']) as $key => $req) {
            $sitesupdate = Setting::where('set_name', $key)->first();
            $sitesupdate->fill([ 'value' => $req ])->save();
        }
        \Session::flash('message', 'تم بنجاح!');
        return \Redirect::to('/');

    }

}
