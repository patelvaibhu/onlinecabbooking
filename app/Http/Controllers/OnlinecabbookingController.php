<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Booking;
use App\Car;
use App\City;
use App\Driver;
use App\Feedback;
use App\Inquiry;
use App\Order;
use App\Passenger;
use App\Payment;
use App\Plan;
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
    public function booking(Request $request)
    {

        //dd('tets');


//        return redirect('booking');
       return view('booking');
    }
    public function bookingstore(Request $request)
    {
//       dd($request);
        Booking::create([
           'name'=>$request['name'],
           'pickup_date'=>$request['pickup_date'],
           'pickup_location'=>$request['pickup_location'],
           'drop_location'=>$request['drop_location'],
           'email'=>$request['email_address'],
           'contact_no'=>$request['contact_no']
        ]);
        return redirect('booking');

    }

    public function contact()
    {
        //dd('tets');
        return view('contactus');
    }
    public function contactusstore(Request $request)
    {
//    dd($request);

        Feedback::create([
           'firstname'=>$request['firstname'],
           'lastname'=>$request['lastname'],
           'email'=>$request['email'],
           'contact_no'=>$request['contact_no'],
           'message'=>$request['message']
        ]);
        return redirect('contactus');
    }
    public function adminuserstore(Request $request)
    {
//        dd($request);
        Admin::create([
            'admin_name'=>$request['admin_name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'contact_no'=>$request['contact_no']
        ]);
        return  redirect('adminuser');
    }
    public function cars()
    {

        return view('cars');
    }
    public function carsstore(Request $request)
    {
//      dd($request);
        Car::create([
            'city_name'=>$request['city_name'],
            'location'=>$request['location'],
            'datetime'=>$request['datetime']
        ]);
        return redirect('newcar');
    }

    public function orderstore(Request $request)
    {
      //  dd($request);
        Order::create([
            'pickup_city'=>$request['pickup_city'],
            'drop_city'=>$request['drop_city'],
            'pickup_date'=>$request['pickup_date'],
            'pickup_address'=>$request['pickup_address'],
            'drop_address'=>$request['drop_address'],
            'car_id'=>$request['car_id'],
            'price'=>$request['price'],
            'driver_id'=>$request['driver_id'],
            'payment_status'=>$request['payment_status'],
        ]);
        return redirect('neworder');
    }
    public function about()
    {
        //dd('tets');
        return view('aboutus');
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



    public function inquiry()
    {
        return view('inquiry');
    }
    public function admininquiry()
    {
        return view('admininquiry');
    }
    public function inquirystore(Request $request)
    {
//       dd($request);
        Inquiry::create([
            'passenger_name'=>$request['passenger_name'],
            'email'=>$request['email'],
            'contact_no'=>$request['contact_no'],
            'message'=>$request['message'],
        ]);
        return redirect('admininquiry');
    }

    public function adddriver()
    {

        return view('adddriver');
    }



    public function driver()
    {
        return view('driver');
    }

    public function driverstore(Request $request)
    {
        //dd($request);
        Driver::create([
            'full_name'=>$request['full_name'],
            'license_no'=>$request['license_no'],
            'adharcard_no'=>$request['adharcard_no'],
            'election_card'=>$request['election_card'],
            'address'=>$request['address'],
            'city'=>$request['city'],
            'contact_no'=>$request['contact_no'],
        ]);
        return  redirect('adddriver');
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
    public function citystore(Request $request)
    {
//       dd($request);
        City::create([
            'pickup_city'=>$request['pickup_city'],
            'drop_city'=>$request['drop_city'],
            'pickup_time'=>$request['pickup_time'],
            'pickup_date'=>$request['pickup_date'],
            'travel_type'=>$request['travel_type']
        ]);
        return redirect('addcity');
    }
    public function plan()
    {
        return view('plan');
    }
    public function adminbooking()
    {
        return view('adminbooking');
    }

    public function adminplan()
    {
        return view('adminplan');
    }
    public function adminfeedback()
    {
        return view('adminfeedback');
    }

    public function addpayment()
    {
        return view('addpayment');
    }

    public function adminlogin()
    {
        return view('adminlogin');
    }

    public function planstore(Request $request)
    {
        //dd($request);
        Plan::create([
            'pickup_city'=>$request['pickup_city'],
            'drop_city'=>$request['drop_city'],
            'price'=>$request['price'],
            'location'=>$request['location'],
            'tolltax'=>$request['tolltax']
        ]);
        return redirect('adminplan');
    }

    public function newpassenger()
    {
        return view('newpassenger');
    }

    public function passengerstore(Request $request)
    {
        //dd($request);
        Passenger::create([
            'full_name'=>$request['full_name'],
            'birth_date'=>$request['birth_date'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'address'=>$request['address'],
            'contact_no'=>$request['contact_no'],
        ]);
        return redirect('newpassenger');
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

    public function passenger()
    {
        return view('passenger');
    }

    public function payment()
    {
        return view('payment');
    }

    public function paymentstore(Request $request)
    {
//        dd($request);
        Payment::create([
            'car_name'=>$request['car_name'],
            'email'=>$request['email'],
            'amount'=>$request['amount']
        ]);
        return redirect('addpayment');
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
