<?php

namespace App\Http\Controllers;

use App\Models\Site_configs;
use Illuminate\Http\Request;

class SiteConfigsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siteconfigs = new Site_configs;
        $siteconfigs = $siteconfigs->paginate(5);
        return view ('Villa.Admin.siteconfigs.index', compact('siteconfigs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()


    {
        return view ('Villa.Admin.siteconfigs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siteconfigs = new Site_configs;
        $request->validate(
            [
               
                'site_key' => 'required',
                
                'site_value' => 'required|max:100',
            ]
        );
        
      
        $siteconfigs->site_key = $request->site_key;
        $siteconfigs->site_value = $request->site_value;
        $siteconfigs->save();

        return redirect('/admin/siteconfigs/create')->with('message', 'Succesfully stored');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siteconfig = new Site_configs;
        $siteconfig = $siteconfig->where('id', $id)->first();
        return view('Villa.Admin.siteConfigs.show', compact('siteconfig'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siteconfig = new Site_configs;
        $siteconfig = $siteconfig->where('id', $id)->first();
        return view('Villa.Admin.siteConfigs.edit', compact('siteconfig'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $siteconfigs = new Site_configs;
        $siteconfigs = $siteconfigs->where('id', $id)->first();
        $request->validate(
            [
               
                'site_key' => 'required',
                
                'site_value' => 'required|max:100',
            ]
        );
        
      
        $siteconfigs->site_key = $request->site_key;
        $siteconfigs->site_value = $request->site_value;
        $siteconfigs->save();

        return redirect('/admin/siteconfigs/create')->with('message', 'Succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siteconfig = new Site_configs;
        $siteconfig = $siteconfig->where('id', $id)->first();
        $siteconfig->delete();
        return redirect('/admin/siteconfigs')->with('message', 'Your data has been deleted');
    }
}
