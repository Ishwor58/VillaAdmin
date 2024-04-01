<?php

namespace App\Http\Controllers;

use App\Models\File as Files ;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $files = Files::query()->paginate(5);
        return view ('Villa.Admin.File.index' , compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Villa.Admin.File.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //  dd($request -> all());
        $file = new Files;
        $request->validate([
            'img' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|max:100'
        ]);
        $fileName = Str::slug($request->title)  . '-' . time() . '.'
            . $request->img->extension();
        $request->img->move(public_path('uploads'), $fileName);
        $file->title = $request->title;
        $file->img = $fileName;

        $file->save();

        
        return redirect('/admin/files/create')->with('message', 'Your data is submitted ');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $file = new Files;
        $file = $file->where('id', $id)->first();
        return view ('Villa.Admin.File.show' , compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $file = new Files;
        $file = $file->where('id', $id)->first();
        return view ('Villa.Admin.File.edit' , compact('file'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $file = new Files;
        $request->validate([
            'img' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|max:100'
        ]);
        $file = $file->where('id', $id)->First();
        $file->title = $request->title;
        if ($request->img != NULL) {
            $fileName = Str::slug($request->title) . "-" .
                time() . '.' . $request->img->extension();
            File::delete(public_path('uploads/' . $file->img));
            $request->img->move(public_path('uploads'), $fileName);
            $file->img = $fileName;
        }
        $file->update();
        return redirect('/admin/files')->with('message', 'Your data have been updated');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $file = new Files;
        $file = $file->where('id', $id)->first();

        File::delete(public_path('uploads/' . $file->img));
        $file->delete();


        return redirect('admin/files')->with('delete', 'Your data has been deleted');
        
    }
}

