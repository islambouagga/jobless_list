<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'birthplace' => 'required',
            'residence' => 'required',
            'commune' => 'required',
            'field' => 'required',
            'Study_level' => 'required',
            'verification_card' => 'required|mimes:jpeg,png,jpg,gif,svg,txt,pdf|max:2048',
            'Electricity_bill' => 'required|mimes:jpeg,png,jpg,gif,svg,txt,pdf|max:2048',
            'Certificate' => 'required|mimes:jpeg,png,jpg,gif,svg,txt,pdf|max:2048',
        ]);



        $input = $request->all();

        if ($verification_card = $request->file('verification_card')) {
            $destinationPath = 'files/'.$request->name;
            $verification_cardName = "verification_card ." . $verification_card->getClientOriginalExtension();
            $verification_card->move($destinationPath, $verification_cardName);
            $input['verification_card'] = "$verification_cardName";
        }

        if ($Electricity_bill = $request->file('Electricity_bill')) {
            $destinationPath = 'files/'.$request->name;
            $Electricity_billName = "Electricity_bill ." . $Electricity_bill->getClientOriginalExtension();
            $Electricity_bill->move($destinationPath, $Electricity_billName);
            $input['Electricity_bill'] = "$Electricity_billName";
        }

        if ($Certificate = $request->file('Certificate')) {
            $destinationPath = 'files/'.$request->name;
            $CertificateName = "Certificate ." . $Certificate->getClientOriginalExtension();
            $Certificate->move($destinationPath, $CertificateName);
            $input['Certificate'] = "$CertificateName";
        }

        Candidate::create($input);
        return redirect()->route('candidate.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}