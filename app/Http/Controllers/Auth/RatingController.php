<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $rating = Rating::all(); //ambil data
        // dd($rating);
        return view('rating.index', compact('rating'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rating.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Rating::create([
            'nama' => $data['nama'],
            'rating' => $data['rating'],
            'komentar' => $data['komentar'],
        ]);

        return redirect(route('rating.index'));
    }

    public function edit($id)
    {
        // $admin = Admin::where('id', $admin->id)->get();
        // return view('Admin.index', [
        //     'title' => 'Edit Menu',
        // ]);

        $rating = Rating::findOrFail($id);
        return view('Rating.edit', compact('rating'));
    }

    public function update(Request $request, $id)
    {
        $rating = Rating::findOrFail($id);
        $rating->update($request->all());

        return redirect('Rating')->with('success', 'Berhasil mengubah menu dengan nama ' . $request['nama']);
    }

    public function delete($id)
    {
        $rating = Rating::findOrFail($id);
        $rating -> delete();
        return redirect('Rating')->with('success', 'Berhasil menghapus menu dengan nama ' . $rating->nama);
    }
}