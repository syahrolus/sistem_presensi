<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function pelajaran()
    {
        return view('admin/pelajaran/index');
    }
    public function detailpelajaran()
    {
        return view('admin/detail_pelajaran/index');
    }
    public function siswa()
    {
        return view('admin/siswa/index');
    }
    public function pengajar()
    {
        return view('admin/pengajar/index');
    }
    public function pertemuan()
    {
        return view('admin/pertemuan/index');
    }
    public function detailpertemuan()
    {
        return view('admin/detail_pertemuan/index');
    }
}

// $routes->get('/', 'Home::index');
// $routes->get('/pelajaran', 'Admin::pelajaran');
// $routes->get('/detailpelajaran', 'Admin::detailpelajaran');
// $routes->get('/siswa', 'Admin::siswa');
// $routes->get('/pengajar', 'Admin::pengajar');
// $routes->get('/pertemuan', 'Admin::pertemuan');
// $routes->get('/detailpertemuan', 'Admin::detailpertemuan');