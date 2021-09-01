<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Donor::join('donations','donations.donor_id','=','donors.id')
        ->join('donor_infos','donor_infos.donor_id','=','donors.id')
        ->join('users','donors.user_id','=','users.id')
        ->select('donors.*','donations.*','donor_infos.*','users.*')
        ->get();
       
        return view('admin.pages.donation.donation',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Donor::join('users','donors.user_id','=','users.id')
        ->select('donors.*','users.*')
        ->get();

        return view('admin.pages.donation.createDonation',compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation=new Donation();

        $donation->donor_id=request('donor_id');
        $donation->donation_place=request('donation_place');
        $donation->donation_date=request('donation_date');
        $donation->description=request('description');
        $res=$donation->save();

        if($res=='true')
        {                
            return redirect('/all-donations')->with('success','Donation Created Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
