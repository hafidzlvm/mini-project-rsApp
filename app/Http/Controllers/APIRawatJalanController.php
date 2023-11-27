<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RawatJalan;
use App\Http\Resources\RawatJalanResource;

class APIRawatJalanController extends Controller
{
    public function index()
    {
        $data = RawatJalan::all();
        return RawatJalanResource::collection($data);
    }
}
