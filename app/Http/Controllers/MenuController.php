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
        return view('admin.Menu.index', compact('menu'));
    }

    public function create()
    {
        return view('admin.Menu.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $file = $request->file('gambar');
        $imageName = time().'.'.$file->extension();
        $file->move(public_path('uploads/menu'), $imageName);
        
        Menu::create([
            'nama_menu' => $data['nama'],
            'deskripsi_menu' => $data['deskripsi'],
            'kategori_menu' => $data['kategori'],
            'harga_menu' => $data['harga'],
            'gambar_menu'=> $imageName
        ]);
        
        return redirect(route('menu.index'))->with('alert-success','Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $menu = Menu::findorFail($id);
        return view('admin.Menu.edit', compact('menu'));
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $menu = Menu::findorFail($id);
        
        if  ($request->hasFile('gambar_menu')){
            $file = $request->File('gambar');
            $imageName = time().'.'.$file->extention();
            $file->move(public_path('uploads/menu'), $imageName);
            File::delete(public_path('uploads/menu').'/'.$menu->gambar_menu);
        };
        
        $menu->update($data);
        
        return redirect(route('menu.index'))->with('alert-success','Data Berhasil Diubah!');
    }

    public function delete($id)
    {
        $menu = Menu::findorFail($id);
        File::delete(public_path('uploads/menu').'/'.$menu->gambar_menu);

        $menu->delete();
        
        return redirect(route('menu.index'))->with('alert-danger','Data Berhasil Dihapus!');
    }
}