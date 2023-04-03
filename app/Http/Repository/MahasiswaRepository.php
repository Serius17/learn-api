<?php

namespace App\Http\Repository;

use App\Models\Mahasiswa;

class MahasiswaRepository
{
    protected $mahasiswa;
    public function __construct(Mahasiswa $mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }

    public function index()
    {
        return $this->mahasiswa->all();
    }

    public function store(array $data)
    {
        $mahasiswa = new $this->mahasiswa;

        $mahasiswa->nama = $data['nama'];
        $mahasiswa->alamat = $data['alamat'];
        $mahasiswa->save();
        return $mahasiswa->fresh();
    }

    public function showData($id)
    {
        return $this->mahasiswa->find($id);
    }

    public function updateData($data, $id)
    {
        $mahasiswa = $this->mahasiswa->find($id);

        $mahasiswa->nama = $data['nama'];
        $mahasiswa->alamat = $data['alamat'];
        $mahasiswa->update();
        return $mahasiswa->fresh();
    }

    public function deleteData($id)
    {
        return $this->mahasiswa->findOrFail($id)->delete();
    }
}
