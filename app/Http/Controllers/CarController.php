<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = CarModel::where('status',1);
        
        if($request->category_id && $request->penumpang){
            $cars = $cars->Where('type_id',$request->category_id)->Where('penumpang','>=',$request->penumpang);
        }
        
        $cars = $cars->get();
        return view('frontend.car.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('frontend.car.show', compact('car'));
    }

    public function store(BookingRequest $request)
    {
        Booking::create($request->validated());

        return redirect()->back()->with([
            'message' => 'kami akan menghubungi anda secepatnya !',
            'alert-type' => 'success'
        ]);
    }
}