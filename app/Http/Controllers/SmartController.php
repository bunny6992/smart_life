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
        $returnData = '';
        switch ($request->input('pageNo')) {
            case '1':
                $person = new Persons;
                $person->first_name = 'firstName';
                $person->last_name = 'lastName';
                $person->middle_name = 'middleName';
                if (!$request->input('identity')) {
                    $person->aadhar_id = 'aadharId';
                    $person->voting_id = 'votingId';
                    $person->pan_id = 'panId';
                    $person->diriving_license_id = 'dirivingLicenseId';
                    $person->passport_id = 'passportId';
                }
                $returnData = $person->save();
                break;
            case '2':
                if ($request->input('person_id')) {
                    $person = Persons::find($request->input('person_id'));
                    if (!empty($person)) {
                        $person->religion = $request->input('religion');
                        $person->caste = $request->input('caste');
                        $person->sub_caste = $request->input('subCaste');
                        $person->gender = $request->input('gender');
                        $person->dob = $request->input('dob');
                        $returnData = $person->save();
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
