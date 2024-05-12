<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota'; // Nama tabel di database
    protected $primaryKey = 'id'; // Nama primary key

    protected $allowedFields = ['nama', 'jabatan', 'tugas']; // Kolom yang diizinkan untuk diisi

    /**
     * Mengambil data anggota dari database.
     *
     * @param int|null $id ID anggota yang ingin diambil. Jika null, maka akan mengambil semua data anggota.
     * @return array|null Data anggota jika ditemukan, atau null jika tidak.
     */
    public function getAnggota($id = null)
    {
        if ($id === null) {
            return $this->findAll(); // Mengambil semua data anggota
        }

        return $this->find($id); // Mengambil data anggota berdasarkan ID
    }

    /**
     * Menyimpan data anggota ke database.
     *
     * @param array $data Data anggota yang akan disimpan.
     * @return bool True jika berhasil disimpan, dan false jika gagal.
     */
    public function saveAnggota($data)
    {
        return $this->insert($data); // Menyimpan data anggota baru ke database
    }

    /**
     * Mengupdate data anggota di database.
     *
     * @param int $id ID anggota yang akan diupdate.
     * @param array $data Data baru untuk anggota tersebut.
     * @return bool True jika berhasil diupdate, dan false jika gagal.
     */
    public function updateAnggota($id, $data)
    {
        return $this->update($id, $data); // Mengupdate data anggota di database
    }

    /**
     * Menghapus data anggota dari database.
     *
     * @param int $id ID anggota yang akan dihapus.
     * @return bool True jika berhasil dihapus, dan false jika gagal.
     */
    public function deleteAnggota($id)
    {
        return $this->delete($id); // Menghapus data anggota dari database
    }
}
