<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function login(Request $request)
    {
        //  "admin login";
        $validation = $request->validate([
            "name"=>"required",
            "password"=>"required",
        ]);

        $admin = Admin::where([
            ['name',"=",$request->name],
            ['password',"=", $request->password],
        ])->first();

        if(!$admin){
            $validation = $request->validate([
                "user"=>"required",
            ],[
                "user.required"=>"user does not exist"
            
            ]);
        }


        Session::put('admin',$admin);
        return redirect('dashboard');
        // return view ('admin', ["name"=>$admin->name]);
        // return $admin;
        // return $request->input();
    }

    function dashboard(){

        // return Session::get('admin');
        $admin = Session::get('admin');
        if($admin){
            return view('admin', ["name"=>$admin->name]);
        }else{
            return redirect('admin-login');
            // $admin Session::get('admin');
        }
        // return view('admin', ["name"=>$admin->name]);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
