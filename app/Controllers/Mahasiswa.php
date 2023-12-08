<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index() {
        $mahasiswa_model = new MahasiswaModel();
        $all_data_mahasiswa = $mahasiswa_model->findall();
        return view('mahasiswa', ['all_data_mahasiswa' => $all_data_mahasiswa]);
    }

    public function add_data_mahasiswa() {
        return view('add_data_mahasiswa');
    }

    public function proses_add_mahasiswa() {
        $mahasiswa_model = new MahasiswaModel();
        $mahasiswa_model->insert($this->request->getPost());
        return redirect()->to(base_url('mahasiswa'));
    }

    public function edit_data_mahasiswa($id=false) {
        $mahasiswa_model = new MahasiswaModel();
        $data_mahasiswa = $mahasiswa_model->find($id);
        return view('edit_data_mahasiswa', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function proses_edit_mahasiswa() {
        $mahasiswa_model = new MahasiswaModel();
        $mahasiswa_model->update($this->request->getPost('id_mahasiswa'), $this->request->getPost());
        return redirect()->to(base_url('mahasiswa'));
    }

    public function delete_data_mahasiswa($id=false) {
        $mahasiswa_model = new MahasiswaModel();
        $mahasiswa_model->delete($id);
        return redirect()->to(base_url('mahasiswa'));
    }
}