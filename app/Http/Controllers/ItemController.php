<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function save(Request $request)
    {
        // Validate the incoming request data
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'price' => 'required|numeric',
        // ]);

        // Create a new item using the validated data
        $item = new Item();
        $item->id_menu      = $request['id_menu'];
        $item->nama_menu    = $request['nama_menu'];
        $item->bank         = $request['id_bank'];
        $item->save();

        // Return a response, for example, redirect to a specific route with a success message
        return redirect()->route('index')->with('success', 'Saved successfully!');
    }
}
