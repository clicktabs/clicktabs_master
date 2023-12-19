<?php

namespace App\Traits;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

trait ApiService
{

    /**
     * @throws Exception
     */

    public function makeIcdRequest($requestUrl, $data = null)
    {
        try {
            $url = getenv('BASE_ICD_URL') . $requestUrl;
            // number=1225254964
            Log::info("ITC UNIWALLET Response", ["URL" => $url]);
            $response = Http::get($url, $data);
            Log::info("ITC UNIWALLET Response", ["data" => $data, "response" => $response->json()]);

            return $response->json();

        } catch (Exception $e) {
            Log::error("ITC UNIWALLET Response failed",
                ['url' => $requestUrl, 'data' => $data, 'error' => $e->getMessage()]);
            throw new Exception($e->getMessage(), $e->getCode());

        }
    }

    public function makeGetRequest($requestUrl, $data = null)
    {
        try {

            $url = getenv('BASE_NPI_URL') . $requestUrl . '&enumeration_type=&taxonomy_description=&name_purpose=&first_name=&use_first_name_alias=&last_name=&organization_name=&address_purpose=&city=&state=&postal_code=&country_code=&limit=&skip=&pretty=&version=2.1';
//            dd($url);
            // number=1225254964
//            1225254964
            Log::info("ITC UNIWALLET Response", ["URL" => $url]);
            $response = Http::get($url, $data);
            Log::info("ITC UNIWALLET Response", ["data" => $data, "response" => $response->json()]);

            return $response->json();

        } catch (Exception $e) {
            Log::error("ITC UNIWALLET Response failed",
                ['url' => $requestUrl, 'data' => $data, 'error' => $e->getMessage()]);
            throw new Exception($e->getMessage(), $e->getCode());

        }
    }

    /**
     * @throws Exception
     */
    public function makePostRequest($requestUrl, $data)
    {
        try {

            $url = getenv('SMS_BASE_URL') . $requestUrl;

            $response = Http::post($url, $data);

            Log::info("ITC SMS Response", ["data" => $data, "response" => $response->json()]);

            return $response->json();

        } catch (Exception $e) {
            Log::error("ITC SMS Response failed",
                ['url' => $requestUrl, 'data' => $data, 'error' => $e->getMessage()]);
            throw new Exception($e->getMessage());
        }
    }

}
