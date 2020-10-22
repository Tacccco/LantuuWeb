<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surveys_data;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lastName' => 'required',
            'firstName' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'occupation' => 'required',
            'citizenship' => 'required',
            'phoneNumber' => 'required',
            'reserveNumber' => 'required',
            'emailAddress' => 'required',
            'facebookAddress' => 'required',
            'interest' => 'required',
            'activity' => 'required',
            'selfExpectation' => 'required',
            'volunteering' => 'required',
            'advantage' => 'required',
            'disadvantage' => 'required',
            'purpose' => 'required'
        ]);

        $surv = new SurveyData;

        $surv->lastName = $request->input('lastName');
        $surv->firstName = $request->input('firstName');
        $surv->age = $request->input('age');
        $surv->sex = $request->input('sex');
        $surv->occupation = $request->input('occupation');
        $surv->citizenship = $request->input('citizenship');
        $surv->phoneNumber = $request->input('phoneNumber');
        $surv->reserveNumber = $request->input('reserveNumber');
        $surv->emailAddress = $request->input('emailAddress');
        $surv->facebookAddress = $request->input('facebookAddress');
        $surv->interest = $request->input('interest');
        $surv->activity = $request->input('activity');
        $surv->selfExpectation = $request->input('selfExpectation');
        $surv->volunteering = $request->input('volunteering');
        $surv->advantage = $request->input('advantage');
        $surv->disadvantage = $request->input('disadvantage');
        $surv->purpose = $request->input('purpose');
        $surv->save();

        return view('survey.check_email');
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
