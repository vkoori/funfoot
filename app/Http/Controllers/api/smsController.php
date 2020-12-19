<?php

namespace App\Http\Controllers\api;

use Melipayamak\MelipayamakApi;

class smsController
{
    /**
     * 
     *
     * @return send
     */
    public function send($mobile, $txt, $bodyId)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://rest.payamak-panel.com/api/SendSMS/BaseServiceNumber",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "username=09033175633&password=7165&bodyId=".$bodyId."&to=".$mobile."&text=".$txt,
          CURLOPT_HTTPHEADER => array(
            "Accept-Encoding: gzip, deflate",
            "Cache-Control: no-cache",
            "Content-Type: application/x-www-form-urlencoded",
            "Host: rest.payamak-panel.com",
            "cache-control: no-cache"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);


        return $response;
    }


}