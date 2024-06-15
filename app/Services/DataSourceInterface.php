<?php

namespace App\Services;

interface DataSourceInterface
{
    public function getProvinces($id = null);
    public function getCities($id = null);
}
