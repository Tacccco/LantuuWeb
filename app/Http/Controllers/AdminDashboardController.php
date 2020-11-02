<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\SurveyData;
use App\Models\UserData;
use App\Models\User;
use App\Models\UserLoginLink;
use App\Mail\UserLoginCreateMail;

class AdminDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Private function section

    /**
     * Returns random string.
     *
     * @return String
     */
    private function randomStringGenerator($length = 100, $flag = TRUE) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        if ($flag) {
            //Checking if there is an identical link in DB
            $link = UserLoginLink::where('link', $randomString)->first();
            if ($link === NULL || $link == '') {
                return $randomString;
            } else {
                randomURLCreator();
            }
        } else {
            return $randomString;
        }
    }



    //Public functions

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $surveyData = SurveyData::orderBy('created_at', 'desc')->paginate(10);
        return view('adminDashboard')->with('survey_data', $surveyData);
    }

    /**
     * Show survey data list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function surveyPage($id) 
    {
        $surv = SurveyData::find($id);
        return view('admin.survey_approval')->with('data', $surv);
    }

    public function surveyApproval(Request $request, $id) 
    {
        $surv = SurveyData::find($id);
        return view('admin.survey_approval')->with('data', $surv);
    }

    public function surveyRequest(Request $request, $id) 
    {
        if (($request->submitAccept == 'accept')) {

            $userInfo = new UserData;

            $userInfo->lastName = $request->input('lastName');
            $userInfo->firstName = $request->input('firstName');
            $userInfo->age = $request->input('age');
            $userInfo->sex = $request->input('sex');
            $userInfo->phoneNumber = $request->input('phoneNumber');
            $userInfo->reserveNumber = $request->input('reserveNumber');
            $userInfo->occupation = $request->input('occupation');
            $userInfo->citizenship = $request->input('citizenship');

            $userInfo->save();
            $uid = $userInfo->id;

            $userLogin = new User;
            $userLogin->email = $request->input('email');
            $userLogin->password = bcrypt($this->randomStringGenerator(15, FALSE));
            $userLogin->userData_id = $uid;

            $userLogin->save();
            $ulid = $userLogin->id;

            $userLink = new UserLoginLink;
            $userLink->link = $this->randomStringGenerator();
            $userLink->user_id = $ulid;

            $userLink->save();

            //Sending confirmation mail to user
            $name = $userInfo->lastName . ' ' . $userInfo->firstName;
            $mailData = $name . '+' . $userLink->link;
            Mail::to($userLogin->email)->send(new UserLoginCreateMail($mailData));

            $surv = SurveyData::find($id);
            $surv->delete();

            return redirect('admin/dashboard/');
        } else if ($request->submitCancel == 'cancel') {

            $surv = SurveyData::find($id);
            $surv->delete();
            return redirect('admin/dashboard/');
        }
    }
    
}
