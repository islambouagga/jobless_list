<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ageavrage=0;
        $agelist = array();
        $Candidates = Candidate::all();
        foreach ($Candidates as $Candidate){
            $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
            array_push($agelist,$age);
        }
        foreach ($agelist as $age){
            $ageavrage =$ageavrage+ $age;
        }
        $ageavrage = $ageavrage / count($agelist);
//        dd($agelist ,$ageavrage  );
        return Candidate::all();
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
    public function show(Candidate $candidate)
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
    public function update(Request $request, Candidate $candidate)
    {
//        $request->date_of_birth = "2000-10-25";
//        $age = Carbon::parse($request->birthday)->diff(Carbon::now())->y;
//
//        dd($age. " Years"); // To check result


        $candidate->statu =  $request->statu;
        $candidate->save();
        return $candidate;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
