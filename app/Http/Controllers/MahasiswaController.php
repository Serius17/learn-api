<?php

namespace App\Http\Controllers;

use App\Http\Services\MahasiswaService;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    protected $mahasiswaServices;

    public function __construct(MahasiswaService $mahasiswaServices)
    {
        $this->mahasiswaServices = $mahasiswaServices;
    }

    public function index()
    {
        return $this->mahasiswaServices->index();
    }

    public function store(Request $request)
    {
        $validated =  $request->only([
            'nama', 'alamat'
        ]);

        return $this->mahasiswaServices->store($validated);
    }

    public function show($id)
    {
        return $this->mahasiswaServices->show($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->only([
            'nama', 'alamat'
        ]);

        return $this->mahasiswaServices->update($validated, $id);
    }

    public function delete($id)
    {
        return $this->mahasiswaServices->delete($id);
    }
}
