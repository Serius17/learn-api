<?php

namespace App\Helpers;


class ApiFormater
{
    protected  $response = [
        'status' => null,
        'message' => null,
        'data' => null
    ];

    public function createApi($status = null, $message = null, $data = null)
    {
        $this->response['status'] = $status;
        $this->response['message'] = $message;
        $this->response['data'] = $data;

        return response()->json($this->response, $this->response['status']);
    }
}
