<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function daftar_pelanggan()
    {
        return view('pages.admin.daftar_pelanggan');
    }

    public function verification_request()
    {
        return view('pages.admin.verification_request');
    }

    public function verification_order()
    {
        return view('pages.admin.verification_order');
    }

    public function laporan_surveyor()
    {
        return view('pages.admin.laporan_surveyor');
    }

    public function data_master()
    {
        return view('pages.admin.data_master');
    }

    public function pengaturan_akun()
    {
        return view('pages.admin.pengaturan_akun');
    }
}
