<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('Menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->all( ); 

        $file =  $request->file('gambar');
        $imageName = time().'.'.$file->extension();
        $file->move(public_path('uploads/menu'), $imageName);

        Menu::create([
            'nama_menu' => $data['nama'],
            'deskripsi_menu' => $data['deskripsi'],
            'kategori_menu' =>  $data['kategori'],
            'harga_menu' => $data['harga'],
            'gambar_menu' => $imageName,
        ]);

        return redirect(route('Menu.index'));
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('Menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $menu = Menu::findOrFail($id);

        if  ($request->hasFile('gambar'))
        {
            $file =  $request->file('gambar');
            $imageName = time().'.'.$file->extension();
            $file->move(public_path('uploads/menu'), $imageName);
            File::delete(public_path('uploads/menu').'/'.$menu->gambar_menu);
        }

        $menu->update($data);

        return redirect(route('Menu.index'))->with('allert', 'Berhasil mengubah menu dengan nama ' . $request['nama_menu']);
    }

    public function delete($id)
    {
        $menu = Menu::findOrFail($id);
        File::delete(public_path('uploads/menu').'/'. $menu->gambar_menu);
        $menu->delete();
      
        return redirect(route('Menu.index'))->with('allert', 'Berhasil menghapus menu dengan nama ' . $menu->nama_menu);
    }
}
