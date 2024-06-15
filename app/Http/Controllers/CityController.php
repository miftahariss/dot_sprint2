<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    protected $dataSource;

    public function __construct()
    {
        $this->dataSource = DataSourceFactory::create();
    }

    public function search(Request $request)
    {
        $cityId = $request->query('id');
        $cities = $this->dataSource->getCities($cityId);
        return response()->json($cities);
    }
}
