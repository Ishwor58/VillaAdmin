<?php

namespace App\Http\Controllers;

use App\Models\File ;
use App\Models\About;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = new About();
        $abouts = $abouts->paginate(10);
        return view('Villa.Admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(9);
        return view('Villa.Admin.about.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       // dd($request->all());
        $about = new About;
        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'required',
                'img' => 'required',
            ]
        );
        
        
        $about->title = $request->title;
        $about->description =  $request->description;
        $about->img = $request->img;
        $about->save();

        return redirect('/admin/abouts/create')->with('message', 'Succesfully stored');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about = new About;
        $about = $about->where('id', $id)->first();
        return view('Villa.Admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = new About;
        $about = $about->where('id', $id)->first();
        $files = File::query()->paginate(9);
        return view('Villa.Admin.about.edit', compact('about', 'files'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $about = new About;
        $about = $about->where('id', $id)->first();
        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'required',
                'img' => 'required',
            ]
        );
        
        
        $about->title = $request->title;
        $about->description =  $request->description;
        $about->img = $request->img;
        $about->save();

        return redirect('/admin/abouts')->with('message', 'Succesfully stored');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = new About;
        $about = $about->where('id', $id)->first();

        $about->delete();


        return redirect('admin/abouts')->with('delete', 'Your data has been deleted');
    }
}
