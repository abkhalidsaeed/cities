<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitiesController extends Controller
{
    public function cities() {

        // $countries = DB::table('countries')->get();
        
        $states = DB::table('states')->get();
        // return $states;
        // foreach( $states as $state ) {

        //     $countryId = DB::table('states')->where('country_id', $state->country_id)->get();

        // //     // foreach($states as $state){
        // //     //     $city = DB::table('cities')->where('state_id',$state->id)->get();
        // //     // }
        // //     // return $city;
        // //     // INSERT INTO cities (id, name, title, state_id, dial_code, slug)
        // //     //             VALUES ('1', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');
        // }
        // return $countryId;
        return $states;

    }
}
