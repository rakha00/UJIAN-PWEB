<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['nama_lengkap', 'npm', 'kelas', 'jurusan', 'fakultas'];
}