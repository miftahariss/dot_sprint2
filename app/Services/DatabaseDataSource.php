<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class DatabaseDataSource implements DataSourceInterface
{
    public function getProvinces($id = null)
    {
        if ($id) {
            return DB::table('provinces')->where('id', $id)->first();
        }
        return DB::table('provinces')->get();
    }

    public function getCities($id = null)
    {
        if ($id) {
            return DB::table('cities')->where('id', $id)->first();
        }
        return DB::table('cities')->get();
    }
}
