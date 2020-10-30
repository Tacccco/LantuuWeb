<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\SurveyData;
use App\Models\SurveyDataLink;
use App\Mail\SurveyDataEditMail;

class SurveyController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

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
     * Creates random string for an URL and passes to store function  
     * 
     * @return String 
     */
    private function randomURLCreator($length = 70) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        //Checking if there is an identical link in DB
        $link = SurveyDataLink::where('links', $randomString)->first();
        if ($link === NULL) {
            return $randomString;
        } else {
            randomURLCreator();
        }
    }

    /**
     * Queries database to get email count. If new request email has twin this store in DB request will be canceled
     * 
     * @return Boolean
     */
    private function emailNumberCounterInDB(String $email) 
    {
        $userEmailFinding = SurveyData::where('email', $email)->get();
        $emailCount = count($userEmailFinding);

        if ($emailCount == 0) {
            $flag = TRUE;
        } else if ($emailCount > 0) {
            $flag = FALSE;
        }

        return $flag;
    }

    /**
     * Returns surveyData_id value
     * 
     * @return Integer
     */
    private function surveyIDFinder(String $email) {
        $query = SurveyData::where('email', $email)->first();
        $id = $query->id;
        return $id;
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

        ///// Checking twin email
        $flag = $this->emailNumberCounterInDB($request->input('email'));

        if ($flag) {

            //Creating new instance of SurveyData model
            $surv = new SurveyData;

            $fName = ucfirst(strtolower($request->input('firstName')));
            $lName = ucfirst(strtolower($request->input('lastName')));

            $surv->lastName = $lName;
            $surv->firstName = $fName;
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

            //Creating new instance of SurveyDataLink model
            $survLink = new SurveyDataLink;

            $URL = $this->randomURLCreator();
            $survLink->links = $URL; 
            $survLink->surveyData_id = $this->surveyIDFinder($request->input('email'));
            $survLink->save();

            //Sending link through email to personal data page to edit and delete their data
            
            $name = $lName . ' ' . $fName;
            $mailData = $name . '+' . $URL; 

            Mail::to($surv->email)->send(new SurveyDataEditMail($mailData));

            $sendingData = array(
                'lever' => 1,               
                'data' => $name,
                'trigger' => 1,         //TO REVEAL DB INSERT SUCCESS MESSAGE  
            );

            return view('survey.check_email')->with('arrayData', $sendingData);

        } else {

            $sendingData = array(
                'lever' => 0,
                'data' => $request->input('email'),
            );

            return view('survey.check_email')->with('arrayData', $sendingData);    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $address
     * @return \Illuminate\Http\Response
     */
    public function show($address)
    {
        $linkQuery = SurveyDataLink::where('links', $address)->first();
        $survey = $linkQuery->surveyData()->first();
        $survey['address'] = $address;
        return view('survey.show')->with('data', $survey);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $address
     * @return \Illuminate\Http\Response
     */
    public function edit($address)
    {
        $linkQuery = SurveyDataLink::where('links', $address)->first();
        $survey = $linkQuery->surveyData()->first();
        $survey['address'] = $address;
        return view('survey.edit')->with('data', $survey);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $addr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $addr)
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
            'facebookAddress' => 'required|string',
            'interest' => 'required|string',
            'activity' => 'required|string',
            'selfExpectation' => 'required|string',
            'volunteering' => 'required|string',
            'advantage' => 'required|string',
            'disadvantage' => 'required|string',
            'purpose' => 'required|string'
        ]);
        
        $dataLinkQuery = SurveyDataLink::where('links', $addr)->first();
        $surv = $dataLinkQuery->surveyData()->first();

        $fName = ucfirst(strtolower($request->input('firstName')));
        $lName = ucfirst(strtolower($request->input('lastName')));

        $surv->lastName = $lName;
        $surv->firstName = $fName;
        $surv->age = $request->input('age');
        $surv->sex = $request->input('sex');
        $surv->occupation = $request->input('occupation');
        $surv->citizenship = $request->input('citizenship');
        $surv->phoneNumber = $request->input('phoneNumber');
        $surv->reserveNumber = $request->input('reserveNumber');
        $surv->facebookAddress = $request->input('facebookAddress');
        $surv->interest = $request->input('interest');
        $surv->activity = $request->input('activity');
        $surv->selfExpectation = $request->input('selfExpectation');
        $surv->volunteering = $request->input('volunteering');
        $surv->advantage = $request->input('advantage');
        $surv->disadvantage = $request->input('disadvantage');
        $surv->purpose = $request->input('purpose');
        $surv->save();

        $name = $lName . ' ' . $fName;

        $sendingData = array(
            'lever' => 1,
            'data' => $name,
            'trigger' => 0,         //TO REVEAL DB UPDATE SUCCESS MESSAGE
        );

        return view('survey.check_email')->with('arrayData', $sendingData);
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
