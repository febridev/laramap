<?php

namespace App\Http\Controllers;
use App\Girl;
use App\Location;

use Illuminate\Http\Request;

class SearchGirlsController extends Controller
{
    public function searchGirls(Request $requets)
    {
    	$lat = $requets->lat;
    	$lng = $requets->lng;
    	$girls = Girl::where('lat',$lat)
    				->where('lng',$lng)
    				->get();
    	return $girls;
    }

    public function searchCity(Request $request)
    {
    	$distval = $request->distval;
    	$matchCity = Location::where('district',$distval)
    					->get();
    	return view('ajaxresults',compact('matchCity'));
    }

    public function locationCoords(Request $request)
    {
        $distval = $request->distval;
        $cityval = $request->cityval;
        $col = Location::where('district', $distval)
                        ->where('city',$cityval)
                        ->first();
        $lat = $col->lat;
        $lng = $col->lng;

        return [$lat, $lng];
    }
}
