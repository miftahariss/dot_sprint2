<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiDataSource implements DataSourceInterface
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('RAJAONGKIR_API_KEY');
    }

    public function getProvinces($id = null)
    {
        $url = 'https://api.rajaongkir.com/starter/province';
        if ($id) {
            $url .= '?id=' . $id;
        }
        $response = Http::withHeaders(['key' => $this->apiKey])->get($url);
        return $response->json()['rajaongkir']['results'];
    }

    public function getCities($id = null)
    {
        $url = 'https://api.rajaongkir.com/starter/city';
        if ($id) {
            $url .= '?id=' . $id;
        }
        $response = Http::withHeaders(['key' => $this->apiKey])->get($url);
        return $response->json()['rajaongkir']['results'];
    }
}
