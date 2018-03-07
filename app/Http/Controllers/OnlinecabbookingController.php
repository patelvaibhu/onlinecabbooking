<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlinecabbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking()
    {
        //dd('tets');
        return view('booking');
    }

    public function contact()
    {
        //dd('tets');
        return view('contactus');
    }

    public function about()
    {
        //dd('tets');
        return view('aboutus');
    }
    public function cars()
    {

        return view('cars');
    }
    public function login()
    {
        return view('login');

    }

    public function admin()
    {

        return view('adminindex');
//        return view('admin');
    }
    public function user()
    {
        return view('user');
    }
    public function adminuser()
    {
        return view('adminuser');
    }

    public function newcar()
    {
        return view('newcar');
    }

    public function admininquiry()
    {
        return view('admininquiry');
    }

    public function adddriver()
    {
        return view('adddriver');
    }


    public function city()
    {
        //dd('tets');
        return view('city');
    }
    public function addcity()
    {
        return view('addcity');
    }
    public function plan()
    {
        return view('plan');
    }

    public function addpayment()
    {
        return view('addpayment');
    }

    public function driver()
    {
        return view('driver');
    }

    public function newpassenger()
    {
        return view('newpassenger');
    }

    public function order()
    {
        return view('order');
    }
    public function neworder()
    {
        return view('neworder');
    }

    public function car()
    {
        return view('car');
    }
    public function inquiry()
    {
        return view('inquiry');
    }
    public function passenger()
    {
        return view('passenger');
    }

    public function payment()
    {
        return view('payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
