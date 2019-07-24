<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('registration_complete');

        $registrations = Registration::all();
        return view('show',compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);

        $request->validate([
            'username'=>'required',
            'password'=> 'required',
            'email' => 'required',
            'birthdate'=> 'required',
            'city' => 'required',
            'country' => 'required',
        ]);

        $registration = new Registration([
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'email' => $request->get('email'),
            'birthdate' => $request->get('birthdate'),
            'city' => $request->get('city'),
            'country' => $request->get('country')
        ]);

        //dd("inside");
        /*$registration = new Registration([
            'username' => "asdasd",
            'password' => "qweqweqwe",
            'email' => "asdasdasdasd",
            'birthdate' => "yutyutyutyu",
            'city' => "sdf",
            'country' => "mvbvbn"
        ]);*/



        $registration->save();

       // dd("saved");

        return redirect('/reg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registration = Registration::find($id);

        //dd($registration);

        return view('edit',compact('registration'));
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
        $request->validate([
            'username'=>'required',
            'password'=> 'required',
            'email' => 'required',
            'birthdate'=> 'required',
            'city' => 'required',
            'country' => 'required',
        ]);

        //dd($request);

        $reg = Registration::find($id);

        $reg->username = $request->username;
        $reg->password = $request->password;
        $reg->email = $request->email;
        $reg->birthdate = $request->birthdate;
        $reg->city = $request->city;
        $reg->country = $request->country;

        $reg->save();

        return redirect('/reg');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = Registration::find($id);

        $reg->delete();

        return redirect('/reg');
    }
}
