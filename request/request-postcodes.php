<?php
function start($post_code)
{
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
        echo "cURL Error #:" . $err;
    } else if ($json['status'] == '200') {
        $admin_county = $json['result']['admin_county'];
        $region = $json['result']['region'];
        $val = empty($admin_county) ? $region : $admin_county;
        $admin_district = $json['result']['admin_district'];
        $admin_ward = $json['result']['admin_ward'];
        $outcode = $json['result']['outcode'];
        $json = '{"val":' . $val . ',"admin_district":' . $admin_district . ',"admin_ward":' . $admin_ward . ',"outcode":' . $outcode . '}';
        if ($json == '') {
            header("HTTP/1.0 404 Not Found");
        } else {
            echo $json;
        }
        /*show standart location info*/
        /* echo '<div class="row form-group select-postcode">
                     <div class="col-sm-9">
                         <label>Region</label>
                         <input type="text" name="postcode_region" class="form-control" value="'.$val.'" disabled>
                     </div>
                 </div>
                 <div class="row form-group select-postcode">
                     <div class="col-sm-9">
                         <label>District</label>
                         <input type="text" name="postcode_admin_district" class="form-control" value="'.$admin_district.'" disabled>
                     </div>
                 </div>
                 <div class="row form-group select-postcode">
                     <div class="col-sm-9">
                         <label>Ward</label>
                         <input type="text" name="postcode_admin_ward" class="form-control" value="'.$admin_ward.'" disabled>
                     </div>
                 </div>
                 <div class="row form-group select-postcode">
                     <div class="col-sm-9">
                         <label>Outcode</label>
                         <input type="text" name="postcode_outcode" class="form-control" value="'.$outcode.'" disabled>
                     </div>
                 </div>
                 ';*/
        //return $json;
    } else {
        header("HTTP/1.0 404 Not Found");
    }
}

?>