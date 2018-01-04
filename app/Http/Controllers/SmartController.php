<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons as Persons;
use App\Address as Address;

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
                $person->no_id = $request->input('no_id');
                if (!$request->input('no_id')) {
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
                if (!empty($request->input('personId'))) {
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
                if (!$request->input('person_id')) {
                    $returnData['message'] = 'Person not found.'
                    return response()->json($returnData);
                }
                $person = Persons::find($request->input('person_id'))->first();
                if (empty($person)) {
                    $returnData['message'] = 'Person not found.'
                    return response()->json($returnData);
                }
                if ($request->input('noHome')) {
                    $person->has_home = 0;
                    $person->save();
                    $returnData['message'] = 'Data Saved';
                    return response()->json($returnData);
                }
                $person->has_home = 1;
                $person->save();

                $current = $request->input('current');
                $address = new Address;
                $address->public_id = $person->id;
                $address->street_name = $current['street'];
                $address->house_no = $current['street'];
                $address->city = $current['street'];
                $address->state = $current['street'];
                $address->country = $current['street'];
                $address->pincode = $current['street'];
                $address->street_name = 'current';
                $address->current_is_different = 0;
                if (! $address->save()) {
                    return 'Error';
                }

                if (!empty($request->input('sameAddress'))) {
                    $address->public_id = $person->id;
                    $address->street_name = $current['street'];
                    $address->house_no = $current['street'];
                    $address->city = $current['street'];
                    $address->state = $current['street'];
                    $address->country = $current['street'];
                    $address->pincode = $current['street'];
                    $address->street_name = 'home';
                    $address->current_is_different = 1;
                    if (! $address->save()) {
                        return 'Error';
                    }
                }
                $returnData['success'] = true;

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
