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

    public function order()
    {
        return view('order');
    }
    public function neworder()
    {
        return view('neworder');
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
