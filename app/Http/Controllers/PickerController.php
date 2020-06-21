<?php

namespace App\Http\Controllers;

use App\Picker;
use Illuminate\Http\Request;

class PickerController extends Controller
{
    public function index()
    {
        $pickers = Picker::paginate(5);

        return view('index.blade.php', compact('pickers'));
    }

    public function store(Request $request)
    {
        return Picker::create([
            'name' => $request['name'],
            'age' => $request['age'],
            'lat' => $request['lat'],
            'lng' => $request['lng'],
            'mtrimage' => $request['image'],
        ]);
    }
}
