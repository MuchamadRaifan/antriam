<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function data()
    {
        return view('admin.data.data');
    }
    public function tambahData()
    {
        return view('admin.data.tambahdata');
    }
    public function loket()
    {
        return view('admin.loket.loket');
    }
    public function tambahLoket()
    {
        return view('admin.loket.tambahloket');
    }
    public function tujuan()
    {
        return view('admin.tujuan.tujuan');
    }
    public function tambahTujuan()
    {
        return view('admin.tujuan.tambahtujuan');
    }
    public function user()
    {
        return view('admin.user.user');
    }
    public function tambahUser()
    {
        return view('admin.user.tambahuser');
    }
    public function rincian()
    {
        return view('admin.rincian.rincian');
    }
}
