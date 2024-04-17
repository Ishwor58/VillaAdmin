<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Property;
use App\Models\Best_deal;
use App\Models\Site_configs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
 
    public function index(){

         $carousels = Carousel::query()->get()->all();
         return view('Villa.index' , compact('carousels'));
    }

    public function properties() {
            
        $properties = Property::query()->paginate(3);
        return view('Villa.properties', compact('properties'));

    }
    public function propertyDetail($id) {
            
        $property = Property::query()->where('id', $id)->first();
        return view('Villa.property-details', compact('property'));

    }

  
    
    public function contact() {
      
        $site_config = site_configs::query()->get()->all();
        return view('Villa.contact', compact('site_config'));

    }



}
