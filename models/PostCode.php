<?php

class PostCode
{
    public static function getPostCodeData($post_code)
    {
        $DATA = array();

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://postcodes.io/postcodes/" . $post_code,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $json = json_decode($response, true);
        if ($err) {
            return false;
        } else if ($json['status'] == '200') {
            $DATA['admin_county'] = $json['result']['admin_county'];
            $DATA['admin_ward'] = $json['result']['admin_ward'];
            $DATA['outcode'] = $json['result']['outcode'];
        }
        return $DATA;
    }
}