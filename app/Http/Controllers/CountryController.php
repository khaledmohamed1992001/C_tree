<?php

namespace App\Http\Controllers;

use App\Covidstatistic;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getData(Request $request)
    {
        $country_name = $request->input('countryName');
        $this->validate($request, [
            'countryName' => 'required|regex:/^[?=.*a-zA-Z]+$/'
        ]);
       $country = Covidstatistic::where('Country','LIKE','%'.$country_name.'%')->get();
       $exist = Covidstatistic::where('Country', '=',$country_name)->first();
       if($exist == null){
           return view('invalid');
       }else{
           return view('country',compact('country'));
       }
    }
}
