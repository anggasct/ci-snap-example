<?php

namespace app\Controllers\snap;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Debit extends BaseController
{
   use ResponseTrait;
    public function notify()
    {
        $response = (object) [
            'responseCode' => '2005600',
            'responseMessage' => 'Success'
        ];
        return $this->respond($response, 200);
    }
}