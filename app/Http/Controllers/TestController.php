<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sendMessages()
    {


        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://graph.facebook.com/v20.0/198500050017691/messages',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
    "messaging_product": "whatsapp",
    "to": "51917701553",
    "type": "template",
    "template": {
        "name": "hello_world",
        "language": {
            "code": "en_US"
        }
    }
}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer EAAPwYW26ZB6cBOxABWXMZBuIUBhR8e3CKnrNRXDRjOeUgon6pUTvLuVpWUItIsM5mC4YimL38JpXwSskobBETIgPxkyd9lwsd5StoWZAbcZC20JUPDLN0lM3gZA1unUPOqxSsL5gZCMzO4zlOsaly1yAzW6syGlYzGqKiY4rLjCBw4cZBRMVz07Xhu8P1gogILTEFBUjvnQjCH0PS8kX1QZD'
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }
}
