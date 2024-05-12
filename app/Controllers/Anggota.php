<?php

namespace App\Controllers;

use App\Models\AnggotaKampusModel;

class AnggotaKampus extends BaseController
{
    protected $anggotaKampusModel;

    public function __construct()
    {
        $this->anggotaKampusModel = new AnggotaKampusModel();
    }

    public function index()
    {
        $data['anggota'] = $this->anggotaKampusModel->findAll();
        return view('anggota/index', $data);
    }

    // Method untuk menampilkan form tambah anggota
    public function create()
    {
        return view('anggota/create');
    }

    // Method untuk menyimpan data anggota baru
    public function store()
    {
        // Lakukan validasi input jika diperlukan
        // Simpan data ke database menggunakan model
        // Redirect ke halaman index atau tampilkan pesan sukses
    }

    // Method untuk menampilkan form edit anggota
    public function edit($id)
    {
        // Ambil data anggota berdasarkan ID menggunakan model
        // Tampilkan form edit dengan data yang diambil
    }

    // Method untuk menyimpan perubahan data anggota
    public function update($id)
    {
        // Lakukan validasi input jika diperlukan
        // Update data ke database menggunakan model
        // Redirect ke halaman index atau tampilkan pesan sukses
    }

    // Method untuk menghapus data anggota
    public function delete($id)
    {
        // Hapus data dari database menggunakan model
        // Redirect ke halaman index atau tampilkan pesan sukses
    }
}
