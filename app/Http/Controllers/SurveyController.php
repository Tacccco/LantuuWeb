<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyData;

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
            'lastName' => 'required|string',
            'firstName' => 'required|string',
            'age' => 'required|integer',
            'sex' => 'required|string',
            'occupation' => 'required|string',
            'citizenship' => 'required|string',
            'phoneNumber' => 'required|integer',
            'reserveNumber' => 'required|integer',
            'email' => 'required|string',
            'facebookAddress' => 'required|string',
            'interest' => 'required|string',
            'activity' => 'required|string',
            'selfExpectation' => 'required|string',
            'volunteering' => 'required|string',
            'advantage' => 'required|string',
            'disadvantage' => 'required|string',
            'purpose' => 'required|string'
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
        $surv->email = $request->input('email');
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
