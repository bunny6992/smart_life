<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons as Persons;

class SmartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$routeName = \Request::route()->getName();

        return view('smart-form')->with('routeName', $routeName);
    }

    public function saveData (Request $request)
    {
        $returnData = ['success' => false];
        switch ($request->input('pageNo')) {
            case '1':
                $person = new Persons;
                $person->first_name = $request->input('firstName');
                $person->last_name = $request->input('lastName');
                $person->middle_name = $request->input('middleName');
                if (!$request->input('identity')) {
                    $person->aadhar_id = $request->input('aadharId');
                    $person->voting_id = $request->input('votingId');
                    $person->pan_id = $request->input('panId');
                    $person->diriving_license_id = $request->input('dirivingLicenseId');
                    $person->passport_id = $request->input('passportId');
                }
                if ($person->save()) {
                    $returnData['success'] = true;
                    $returnData['person'] = $person;
                }
                break;
            case '2':
                if ($request->input('personId')) {
                    $person = Persons::find($request->input('personId'));
                    if (!empty($person)) {
                        $person->religion = $request->input('religion');
                        $person->caste = $request->input('caste');
                        $person->sub_caste = $request->input('subCaste');
                        $person->gender = $request->input('gender');
                        $person->dob = $request->input('dob');
                        if ($person->save()) {
                            $returnData['success'] = true;
                        }
                    }
                }
                break;
            case '3':
                if ($request->input('person_id')) {
                    $person = Persons::find($request->input('person_id'));
                    if (!empty($person)) {

                    }
                }
                break;
            case '4':
                if ($request->input('person_id')) {
                    $person = Persons::find($request->input('person_id'));
                    if (!empty($person)) {

                    }
                }
                break;
            case '5':
                if ($request->input('person_id')) {
                    $person = Persons::find($request->input('person_id'));
                    if (!empty($person)) {

                    }
                }
                break;
            case '6':
                if ($request->input('person_id')) {
                    $person = Persons::find($request->input('person_id'));
                    if (!empty($person)) {

                    }
                }
                break;
            default:
                # code...
                break;
        }
        return response()->json($returnData);
    }
}
