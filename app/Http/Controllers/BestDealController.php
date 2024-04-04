<?php

namespace App\Http\Controllers;

use App\Models\Best_deal;
use Illuminate\Http\Request;
use App\Models\File ;

class BestDealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $best_deals = new Best_deal;
        $best_deals = $best_deals->paginate(5);
        return view ('Villa.Admin.best_deal.index', compact('best_deals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::query()->paginate(9);
        return view ('Villa.Admin.best_deal.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $best_deals = new Best_deal();
        $request->validate([
            'type' => 'required',
            'total_flat_space' => 'required',
            'floor_number' => 'required',
            'number_of_rooms' => 'required',
            'parking_available' => 'required',
            'payment_process' => 'required',
            'additional_info' => 'required',
            'img' => 'required',
        ]);

       
        $best_deals->type = $request->type;
        $best_deals->total_flat_space = $request->total_flat_space;
        $best_deals->floor_number = $request->floor_number;
        $best_deals->number_of_rooms = $request->number_of_rooms;
        $best_deals->parking_available = $request->parking_available;
        $best_deals->payment_process = $request->payment_process;
        $best_deals->additional_info = $request->additional_info;
        $best_deals->img = $request->img;
        $best_deals->save();

        return redirect('/admin/best_deals/create')->with('message', 'Successfully stored');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $best_deal = new Best_deal;
        $best_deal = $best_deal->where('id', $id)->first();
        return view('Villa.Admin.best_deal.show', compact('best_deal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $best_deal = new Best_deal;
        $best_deal = $best_deal->where('id', $id)->first();
        $files = File::query()->paginate(9);
        return view('Villa.Admin.best_deal.edit', compact('best_deal', 'files'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $best_deals = new Best_deal();
        $best_deals = $best_deals->where('id', $id)->first();
        $request->validate([
            'type' => 'required',
            'total_flat_space' => 'required',
            'floor_number' => 'required',
            'number_of_rooms' => 'required',
            'parking_available' => 'required',
            'payment_process' => 'required',
            'additional_info' => 'required',
            'img' => 'required',
        ]);

       
        $best_deals->type = $request->type;
        $best_deals->total_flat_space = $request->total_flat_space;
        $best_deals->floor_number = $request->floor_number;
        $best_deals->number_of_rooms = $request->number_of_rooms;
        $best_deals->parking_available = $request->parking_available;
        $best_deals->payment_process = $request->payment_process;
        $best_deals->additional_info = $request->additional_info;
        $best_deals->img = $request->img;
        $best_deals->save();

        return redirect('/admin/best_deals')->with('message', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $best_deal = new Best_deal;
        $best_deal = $best_deal->where('id', $id)->first();

        $best_deal->delete();


        return redirect('admin/best_deals')->with('delete', 'Your data has been deleted');
    }
}
