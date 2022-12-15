<?php

namespace app\Controllers\snap;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class AccessToken extends BaseController
{
    use ResponseTrait;

    public function tokenb2b()
    {
        $response = (object)[
            "responseCode" => "2007300",
            "responseMessage" => "Successful",
            "accessToken" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJPbmxpbmUgSldUIEJ1aWxkZXIiLCJpYXQiOjE2NzExMTE4OTgsImV4cCI6MTcwMjY0Nzg5OCwiYXVkIjoid3d3LmV4YW1wbGUuY29tIiwic3ViIjoianJvY2tldEBleGFtcGxlLmNvbSIsIkdpdmVuTmFtZSI6IkpvaG5ueSJ9.-pq0Zc_HU_SKgqgnBLjUPfmyt3Z-556IBbY0mOcV-g4",
            "tokenType" => "Bearer",
            "expiresIn" => "36000",
            "additionalInfo" => null
        ];
        return $this->respond($response, 200);
    }
}