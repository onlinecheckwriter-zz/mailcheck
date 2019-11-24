<?php

namespace onlinecheckwriter\MailCheck;

class Index
{
    public $token;
    public $base_url;
    const SANDBOX_BASE_URL = 'https://sandbox.onlinecheckwriter.com/api/v2';
    const LIVE_BASE_URL = 'https://app.onlinecheckwriter.com/api/v2';

    public function __construct()
    {
        $this->token = $token;
        $this->base_url = self::SANDBOX_BASE_URL;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function setEnviorment($enviorment = "")
    {

        if ($enviorment == "SANDBOX" || $enviorment == "")
        {
            $this->base_url(self::SANDBOX_BASE_URL);
        }

        if ($enviorment == "LIVE")
        {
            $this->base_url(self::LIVE_BASE_URL);
        }
        return $this;

    }

    public function sentRequest($resource_url, $data, $request_method = "POST")
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url . $resource_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $request_method,
            CURLOPT_POSTFIELDS => json_encode($data) ,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer " . $this->token
            ) ,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err)
        {
            $r = array(
                "completed" => 0,
                "errorMsg" => $err
            );
            return json_decode($r, true);
        }
        else
        {
            return json_decode($response, true);
        }

    }

    public function getBankAccountId($data)
    {
        return $this->sentRequest("/bankaccount/getid");
    }

    public function createPayee($data)
    {
        return $this->sentRequest("/bankaccount/getid", $data);
    }

    public function createCheck($post_field_json_data)
    {
        return $this->sentRequest("/check/create", $data);
    }

    public function sentMail($post_field_json_data)
    {
        return $this->sentRequest("/mail/sent", $data);
    }
}
    

