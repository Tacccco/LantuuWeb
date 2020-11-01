<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyData;
use App\Models\UserData;
use App\Models\User;

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

            $userLogin = new User;

            return redirect('admin/dashboard/');
        } else if ($request->submitCancel == 'cancel') {

            $surv = SurveyData::find($id);
            $surv->delete();
            return redirect('admin/dashboard/');
        }
    }
    
}
