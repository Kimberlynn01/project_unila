<?php

namespace App\Imports;

use App\Models\IkuOne;
use App\Models\IkuOne_b;
use App\Models\IkuOne_c;
use Maatwebsite\Excel\Concerns\ToModel;

class IkuOneImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $klasifikasi;

    public function __construct($klasifikasi)
    {
        $this->klasifikasi = $klasifikasi;
    }

    public function model(array $row)
    {
        if (!empty($row[1])) {
            if ($this->klasifikasi === 'a') {
                return new IkuOne([
                    'nama' => $row[1],
                    'npm' => $row[2],
                    'prodi' => $row[3],
                    'fakultas' => $row[4],
                    'ijasah' => $row[5],
                    'masa_tggu' => $row[6],
                    'nama_pt' => $row[7],
                    'provinsi' => $row[8],
                    'gaji' => $row[9],
                    'usaha' => $row[10],
                    'pendapatan' => $row[11],
                    'tempa' => $row[12],
                    'jenjang' => $row[13],
                    'klasifikasi' => $this->klasifikasi,
                ]);
            }
            elseif($this->klasifikasi === 'b') {
                return new IkuOne_b([
                    'nama' => $row[1],
                    'npm' => $row[2],
                    'prodi' => $row[3],
                    'fakultas' => $row[4],
                    'ijasah' => $row[5],
                    'masa_tggu' => $row[6],
                    'nama_pt' => $row[7],
                    'provinsi' => $row[8],
                    'gaji' => $row[9],
                    'usaha' => $row[10],
                    'pendapatan' => $row[11],
                    'tempa' => $row[12],
                    'jenjang' => $row[13],
                    'klasifikasi' => $this->klasifikasi,
                ]);
            } elseif ($this->klasifikasi === 'c') {
                return new IkuOne_c([
                    'nama' => $row[1],
                    'npm' => $row[2],
                    'prodi' => $row[3],
                    'fakultas' => $row[4],
                    'ijasah' => $row[5],
                    'masa_tggu' => $row[6],
                    'nama_pt' => $row[7],
                    'provinsi' => $row[8],
                    'gaji' => $row[9],
                    'usaha' => $row[10],
                    'pendapatan' => $row[11],
                    'tempa' => $row[12],
                    'jenjang' => $row[13],
                    'klasifikasi' => $this->klasifikasi,
                ]);
            }
        }
        return null;
    }
}
