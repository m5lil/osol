<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::all();
        return view('views.users.index');
    }



    public function anyData(User $user)
    {
        $users = $user->select('id', 'name', 'email')->get();
        return Datatables::of($users)
            ->editColumn('control', function($model){
                // $all = '<a class="btn btn-default" href="/cp/users/' . $model->id . '"><i class = "ion ion-paper-airplane"></i></a> ';
                $all = '<a class="btn btn-primary btn-xs setupajax" href="users/' . $model->id . '/edit">Edit</a> ';
                $all .= '<a class="btn btn-danger btn-xs" href="users/' . $model->id . '/delete">Delete</a>';
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
        $user = New User();
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
//        dd($input);
        $user->create($input);
        return redirect('/#users');
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
        $user = User::find($id);
        return view('views.users.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = bcrypt($input['password']);
        } else {
            $input = array_except($input, array('password'));
        }
//        dd($input);

        $user->update($input);
        return redirect('/#users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/#users');
    }
}
