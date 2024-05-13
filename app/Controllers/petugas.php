<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class petugas extends BaseController
{
    protected $AnggotaModel;

    public function __construct()
    {
        $this->AnggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $data['petugas'] = $this->AnggotaModel->findAll();
        return view('petugas/index', $data);
    }

    public function create()
    {
        return view('petugas/create');
    }

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'tugas' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getVar('nama'),
            'tugas' => $this->request->getVar('tugas'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telpon' => $this->request->getVar('no_telpon')
        ];

        // Simpan data ke database menggunakan model
        $this->AnggotaModel->save($data);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['petugas'] = $this->AnggotaModel->find($id);
        return view('petugas/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nama' => 'required',
            'tugas' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getVar('nama'),
            'tugas' => $this->request->getVar('tugas'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telpon' => $this->request->getVar('no_telpon')
        ];

        // Update data ke database menggunakan model
        $this->AnggotaModel->update($id, $data);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil diperbarui.');
    }
    public function delete($id)
    {
        // Hapus data dari database menggunakan model
        $this->AnggotaModel->delete($id);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil dihapus.');
    }
}
