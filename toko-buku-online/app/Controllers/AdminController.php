<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function dashboard(){
        return view('admin/dashboard');
    }
    public function daftarBuku(){
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAl();
        return view('admin/daftar-buku');
    }
    public function createBuku(){
        $data = $this->request->getFile('cover');

        return view('admin/daftar-buku',$data);
    }
    public function pelanggan(){
        return view('admin/pelanggan');
    }
}