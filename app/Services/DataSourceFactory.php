<?php

namespace App\Services;

class DataSourceFactory
{
    public static function create()
    {
        $dataSource = env('DATA_SOURCE', 'database');

        switch ($dataSource) {
            case 'api':
                return new ApiDataSource();
            case 'database':
            default:
                return new DatabaseDataSource();
        }
    }
}
