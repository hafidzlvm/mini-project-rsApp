<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RawatJalanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // "id_rawat_jalan": 27,
            // "tgl_konsul": "1972-08-07",
            // "waktu_konsul1": "15:39:22",
            // "waktu_konsul2": "21:10:32",
            // "pasien": "Erika Mann",
            // "no_bpjs": 10,
            // "poli": "p_umum",
            // "dokter": "vaniautami",
            // "status": "registrasi",
            // "waktu_status": "1990-10-16 00:00:00",
            // "created_at": "2023-11-01T13:19:52.000000Z",
            // "updated_at": "2023-11-04T03:34:25.000000Z"

            "id_rawat_jalan" => $this->id_rawat_jalan,
            "tgl_konsul" => $this->tgl_konsul,
            "waktu_konsul1" => $this->waktu_konsul1,
            "waktu_konsul2" => $this->waktu_konsul2,
            "pasien" => $this->pasien,
            "no_bpjs" => $this->no_bpjs,
            "poli" => $this->poli,
            "dokter" => $this->dokter,
            "status" => $this->status,
            "waktu_status" => $this->waktu_status,
            "created_at" => date("Y-m-d H:i:s", strtotime($this->created_at)),
        ];
    }
}
