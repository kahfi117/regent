<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('tampilan_admin.admin');
    }

    public function login()
    {
        return view('tampilan_admin.admin_login');
    }
    public function content()
    {
        return view('tampilan_admin.admin_content');
    }
    public function tambahContent()
    {
        return view('tampilan_admin.admin_tambah_content');
    }
    public function tourGuide()
    {
        return view('tampilan_admin.admin_tour_guide');
    }

    public function addProsesContent(Request $request)
    {
        DB::table('content')->insert([
            'judul' => $request->judul,
            'foto' => $request->foto,
            'deskripsi' => $request->deskripsi
        ]);
 
        return view('tampilan_admin.admin_content');
    }

}