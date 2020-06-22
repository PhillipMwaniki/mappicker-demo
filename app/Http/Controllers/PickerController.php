<?php

namespace App\Http\Controllers;

use App\Picker;
use Illuminate\Http\Request;

class PickerController extends Controller
{
    public function index()
    {
        $pickers = Picker::paginate(5);

        return view('index', compact('pickers'));
    }

    public function store(Request $request)
    {
        // $image = base64_decode($request['image']);
        $image = $request['image'];
        $file_name = 'image_'.time().'.png';
        \File::put(public_path('images'). '/' . $file_name, base64_decode($image));


        return Picker::create([
            'name' => $request['name'],
            'age' => $request['age'],
            'lat' => $request['lat'],
            'lng' => $request['lng'],
            'mtrimage' => $file_name,
        ]);
    }
}
