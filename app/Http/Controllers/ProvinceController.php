<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    protected $dataSource;

    public function __construct()
    {
        $this->dataSource = DataSourceFactory::create();
    }

    public function search(Request $request)
    {
        $provinceId = $request->query('id');
        $provinces = $this->dataSource->getProvinces($provinceId);
        return response()->json($provinces);
    }
}
