<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use App\Models\Patients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::join('patients','patients.user_id','=','users.id')
        ->join('blood_requests','blood_requests.patient_id','=','patients.id')
        ->select('patients.*','users.*','blood_requests.*')
        ->get();

        return view('admin.pages.patient.patient',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::join('patients','patients.user_id','=','users.id')
        ->join('blood_requests','blood_requests.patient_id','=','patients.id')
        ->select('patients.*','users.*','blood_requests.*')
        ->where('patients.id','=',$id)
        ->get();

        return view('admin.pages.patient.editPatient',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient=Patients::find($id);

        $user=User::find($patient->user_id);

        $bloodRequest = BloodRequest::find($patient->id);

        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role='patient';
        $user->save();

        $patient->user_id=$user->id;
        $patient->desises=request('desises');
        $patient->save();

        $bloodRequest->patient_id=$patient->id;
        $bloodRequest->name=request('name');
        $bloodRequest->blood=request('blood');
        $bloodRequest->no_of_bag=request('no_of_bag');
        $bloodRequest->donation_date=request('donation_date');
        $bloodRequest->donation_time=request('donation_time');
        $bloodRequest->managed=request('managed');
        $bloodRequest->location=request('location');
        $bloodRequest->contact_no=request('contact_no');
        $bloodRequest->relationship=request('relationship');
        $bloodRequest->message=request('message');
        $res=$bloodRequest->save();



        if($res=='true')
        {                
            return redirect('/all-patients')->with('success','Patient Updated Successfully');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Patients::find($id);      
        $user_id=$data->user_id;
        $user=User::find($user_id);
        
        if($user)
            {  
                $user->delete();             
                return redirect()->back()->with('success','Patient Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }
}
