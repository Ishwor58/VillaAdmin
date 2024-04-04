<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\File ;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $properties = new Property;
        $properties = $properties->paginate(5);
        return view ('Villa.Admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $files = File::query()->paginate(9);
        return view ('Villa.Admin.property.create',compact('files'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $properties = new Property;
        $request->validate(
            [
                'type' => 'required',
                'address' => 'required',
                'price' => 'required',
                'bedrooms' => 'required',
                'bathrooms' => 'required',
                'area' => 'required',
                'floor' => 'required',
                'parking' => 'required',
                'description' => 'required',
                'img' => 'required',
            ]
        );
        
        $properties->address =  $request->address;
        $properties->type = $request->type;
        $properties->price = $request->price;
        $properties->bedrooms = $request->bedrooms;
        $properties->bathrooms = $request->bathrooms;
        $properties->area = $request->area;
        $properties->floor = $request->floor;
        $properties->parking = $request->parking;
        $properties->description = $request->description;
        $properties->img = $request->img;
        $properties->save();


        

        return redirect('/admin/properties/create')->with('message', 'Succesfully stored');

      
}

    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $property = new Property;
        $property = $property->where('id', $id)->first();
        return view('Villa.Admin.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $property = new Property();
        $property = $property->where('id', $id)->first();
        $files = File::query()->paginate(9);
        return view('Villa.Admin.property.edit', compact('property', 'files'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $properties = new Property;
        $properties = $properties->where('id', $id)->first();
        $request->validate(
            [
                'type' => 'required',
                'address' => 'required',
                'price' => 'required',
                'bedrooms' => 'required',
                'bathrooms' => 'required',
                'area' => 'required',
                'floor' => 'required',
                'parking' => 'required',
                'description' => 'required',
                'img' => 'required',
            ]
        );
        
        $properties->address =  $request->address;
        $properties->type = $request->type;
        $properties->price = $request->price;
        $properties->bedrooms = $request->bedrooms;
        $properties->bathrooms = $request->bathrooms;
        $properties->area = $request->area;
        $properties->floor = $request->floor;
        $properties->parking = $request->parking;
        $properties->description = $request->description;
        $properties->img = $request->img;
        $properties->save();

        return redirect('/admin/properties')->with('message', 'Succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $property = new Property;
        $property = $property->where('id', $id)->first();

        $property->delete();


        return redirect('admin/properties')->with('delete', 'Your data has been deleted');
    }
}
