<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('tampilan_user.index');
    }
    public function indexUser()
    {
        return view('tampilan_user.user_template.content_index');
    }
    public function tempatWisataUser()
    {
        return view('tampilan_user.user_template.content_tempatwisata');
    }
    public function tourGuide()
    {
        return view('tampilan_user.user_template.content_tour_guide');
    }
    public function profile()
    {
        return view('tampilan_user.user_template.content_profile');
    }
    public function destinasi()
    {
        return view('tampilan_user.user_template.content_destinasi');
    }
    public function detailDestinasi()
    {
        return view('tampilan_user.user_template.content_detail_destinasi');
    }
    public function detailTourGuide()
    {
        return view('tampilan_user.detail_tour_guide');
    }
}