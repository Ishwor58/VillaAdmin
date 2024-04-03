<?php

namespace App\Http\Controllers;

use App\Models\Facts;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $facts = new Facts;
        $facts = $facts->paginate(5);
        return view ('Villa.Admin.facts.index', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view ('Villa.Admin.facts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $facts = new Facts;
        $request->validate(
            [
                'no' => 'required',
                'title' => 'required|max:100',
                
                'sub_title' => 'required|max:100',
            ]
        );
        
        $facts->no =  $request->no;
        $facts->title = $request->title;
        $facts->sub_title = $request->sub_title;
        $facts->save();

        return redirect('/admin/facts/create')->with('message', 'Succesfully stored');
    
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $fact = new Facts;
        $fact = $fact->where('id', $id)->first();
        return view('Villa.Admin.facts.show', compact('fact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fact = new Facts;
        $fact = $fact->where('id', $id)->first();
        return view('Villa.Admin.facts.edit', compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $facts = new Facts;
        $facts = $facts->where('id', $id)->first();
        $request->validate(
            [
                'no' => 'required',
                'title' => 'required|max:100',
                
                'sub_title' => 'required|max:100',
            ]
        );
        
        $facts->no =  $request->no;
        $facts->title = $request->title;
        $facts->sub_title = $request->sub_title;
        $facts->save();

        return redirect('/admin/facts/create')->with('message', 'Succesfully stored');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $fact = new Facts;
        $fact = $fact->where('id', $id)->first();
        $fact->delete();
       
        return redirect('admin/facts')->with('delete', 'Your data has been deleted');
    }
}
