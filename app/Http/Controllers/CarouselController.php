<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Models\File ;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $carousels = new Carousel();
        $carousels = $carousels->paginate(10);
        return view('Villa.Admin.carousel.index', compact('carousels'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $files = File::query()->paginate(9);
        return view('Villa.Admin.carousel.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $carousel = new Carousel;
        $request->validate(
            [
                'title' => 'required|max:100',
                'location' => 'required',
                'img' => 'required',
            ]
        );
        
        $carousel->location =  $request->location;
        $carousel->title = $request->title;
        $carousel->img = $request->img;
        $carousel->save();

        return redirect('/admin/carousels/create')->with('message', 'Succesfully stored');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $carousel = new Carousel;
        $carousel = $carousel->where('id', $id)->first();
        return view('Villa.Admin.carousel.show', compact('carousel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $carousel = new Carousel;
        $carousel = $carousel->where('id', $id)->first();
        $files = File::query()->paginate(9);
        return view('Villa.Admin.carousel.edit', compact('carousel', 'files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carousel = new Carousel;
        $carousel = $carousel->where('id', $id)->first();
        $request->validate(
            [
                'title' => 'required|max:100',
                 'location' => 'required',
                'img' => 'required',
            ]
        );
        $carousel->title = $request->title;
        $carousel->img = $request->img;
        $carousel->location =  $request->location;
        $carousel->save();

        return redirect('/admin/carousels')->with('message', 'Succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carousel = new Carousel;
        $carousel = $carousel->where('id', $id)->first();

        $carousel->delete();


        return redirect('admin/carousels')->with('delete', 'Your data has been deleted');
    }
}
