<?php

namespace App\Imports;

use App\Models\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;

class KelasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kelas([
            //
            "nama"          => $row[0],
            "nama_kelas"    => $row[1],
            "jurusan_id"    => $row[2],
        ]);
    }
}
