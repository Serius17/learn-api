<?php

namespace App\Http\Services;

use App\Helpers\ApiFormater;
use App\Http\Repository\MahasiswaRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use PhpParser\Node\Stmt\TryCatch;

class MahasiswaService
{
    protected $mahasiswaRepository;
    protected $apiFormater;

    public function __construct(MahasiswaRepository $mahasiswaRepository, ApiFormater $apiFormater)
    {
        $this->mahasiswaRepository = $mahasiswaRepository;
        $this->apiFormater = $apiFormater;
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaRepository->index();

        if ($mahasiswa) {
            return $this->apiFormater->createApi(200, 'Berhasil Mengambil Data', $mahasiswa);
        } else {
            return $this->apiFormater->createApi(500, 'Gagal Mengambil Data');
        }
    }

    public function store(array $data)
    {
        $validator = Validator::make($data, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        try {
            $mahasiswa = $this->mahasiswaRepository->store($data);
            if ($mahasiswa) {
                return $this->apiFormater->createApi(200, 'Berhasil Menyimpan Data', $mahasiswa);
            } else {
                return $this->apiFormater->createApi(500, 'Gagal Menyimpan Data');
            }
        } catch (Exception) {
            return $this->apiFormater->createApi(500, 'Gagal Menyimpan Data');
        }
    }

    public function show($id)
    {
        $mahasiswa = $this->mahasiswaRepository->showData($id);
        if ($mahasiswa) {
            return $this->apiFormater->createApi(200, 'Berhasil Mengambil Data', $mahasiswa);
        } else {
            return $this->apiFormater->createApi(500, 'Gagal Mengambil Data');
        }
    }

    public function update($data, $id)
    {
        $validator = Validator::make($data, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiFormater->createApi(400, 'Validasi Gagal', $validator->errors()->toJson());
        }

        DB::beginTransaction();

        try {
            $mahasiswa = $this->mahasiswaRepository->updateData($data, $id);
            DB::commit();
            if ($mahasiswa) {
                return $this->apiFormater->createApi(200, 'Berhasil Menyimpan Data', $mahasiswa);
            } else {
                return $this->apiFormater->createApi(500, 'Gagal Menyimpan Data');
            }
        } catch (Exception) {
            DB::rollBack();
            return $this->apiFormater->createApi(500, 'Gagal Menyimpan Data');
        }
    }

    public function delete($id)
    {
        $mahasiswa = $this->mahasiswaRepository->deleteData($id);
        if ($mahasiswa) {
            return $this->apiFormater->createApi(200, 'Berhasil Menghapus Data', $mahasiswa);
        } else {
            return $this->apiFormater->createApi(500, 'Gagal Menghapus Data');
        }
    }
}
