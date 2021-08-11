<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\District;
use App\Models\Feild;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        return view('candidate.create')->with('feilds', Feild::all())->with('districts',District::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Candidate $candidate)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'commune' => 'required',
            'wassit' => 'required',
            'Anem' => 'required',
            'Study_level' => 'required',
            'verification_card' => 'required|mimes:jpeg,png,jpg,|max:2048',
        ],
            [
                'name.required' => 'عليك بتعبئة اسمك و لقبك.',
                'phone.required' => 'عليك بتعبئة رقم هاتفك.',
                'email.required' => 'عليك بتعبئة ايمايل الخاص بك.',
                'birthday.required' => 'عليك بتعبئة تاريخ ازديادك.',
                'verification_card.required' => 'عليك برفع صورة لبطاقة التعريف الشخصية.',
                'wassit.required' => 'عليك بتعبئة رقم الوسيط.',
                'commune.required' => 'عليك باختيار بلديتك التابع لها.',
                'Study_level.required' => 'عليك باختيار مستواك الدراسي.',
                'Anem.required' => 'عليك باختيار فرع مكتب التشغيل التابع له.',
            ]);


        $input = $request->all();

        if ($verification_card = $request->file('verification_card')) {
            $destinationPath = 'files/' . $request->name;
            $verification_cardName = "verification_card ." . $verification_card->getClientOriginalExtension();
            $verification_card->move($destinationPath, $verification_cardName);
            $candidate->verification_card = "$verification_cardName";
        }

        if ($Electricity_bill = $request->file('Electricity_bill')) {
            $destinationPath = 'files/' . $request->name;
            $Electricity_billName = "Electricity_bill ." . $Electricity_bill->getClientOriginalExtension();
            $Electricity_bill->move($destinationPath, $Electricity_billName);
            $candidate->Electricity_bill = "$Electricity_billName";
        }

        if ($Certificate = $request->file('Certificate')) {
            $destinationPath = 'files/' . $request->name;
            $CertificateName = "Certificate ." . $Certificate->getClientOriginalExtension();
            $Certificate->move($destinationPath, $CertificateName);
            $candidate->Certificate = "$CertificateName";
        }
//            dd($input);
        $candidate->name = $request->name;
        $candidate->birthday = $request->birthday;
        $candidate->sexe = $request->sexe;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->commune = $request->commune;
        $candidate->Anem = $request->Anem;
        $candidate->wassit = $request->wassit;
        $candidate->Study_level = $request->Study_level;


        $district = District::findOrFail($request->district_id);
        $candidate->district_id = $district->id;
        $candidate->district()->associate($district);

        $field = Feild::findOrFail($request->feild_id);
        $candidate->feild_id = $field->id;
        $candidate->field()->associate($field);
        $candidate->save();

        Alert::success('تمت العملية', 'لقد تم تسجيلك في المنصة');
        return redirect()->route('candidate.create');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
