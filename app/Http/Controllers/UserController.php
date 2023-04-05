<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $data = User::all();
        return view('admin.users.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $debug = 123;
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->input('name') ;
        $user->email = $request->input('email') ;
        $user->password = $request->input('password') ;
        $user->mobile_no = $request->input('mobile_no') ;
        $user->status = $request->input('status') ;

        $res = $user->save(); 

        if($res)
            return redirect('admin/users') ;

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
       $data = User::find($id) ;
       return view('admin.users.edit',compact('data'));
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
       $user = User::find($id) ;

       $user->name = $request->input('name') ;
       $user->email = $request->input('email') ;
       $user->password = $request->input('password') ;
       $user->mobile_no = $request->input('mobile_no') ;
       $user->status = $request->input('status') ;

       $res = $user->update(); 

       if($res)
           return redirect('admin/users') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = User::find($id) ;
       $res = $user->delete();
       if($res)
        return redirect('admin/users') ;
        
    }
}
