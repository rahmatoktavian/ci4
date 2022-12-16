<?php
namespace App\Controllers;

class API extends BaseController
{
    public function request()
    {
        //load library api
        $client = \Config\Services::curlrequest();

        //api request
        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/city',[
            'headers' => [
                'key' => '8d923ad9ac9eb0ff0349a6885122d1f3',
            ],
        ]);

        //convert response data to array php
        $response_json = $response->getBody();
        $data = json_decode($response_json, true);

        //data kota dari response
        $data_kota = $data['rajaongkir']['results'];

        //kirim data ke view
        $output = [
            'data_kota' => $data_kota,
        ];

        //load view with sending data
        return view('api_request', $output);
    }

    public function response()
    {
        //get data from view : api_request
        $origin = $this->request->getVar('origin');
        $destination = $this->request->getVar('destination');
        
        //load library api
        $client = \Config\Services::curlrequest();
        
        //api request
        $response = $client->request('POST', 'https://api.rajaongkir.com/starter/cost', [
            'headers' => [
                'key' => '8d923ad9ac9eb0ff0349a6885122d1f3',
                'content-type' => 'application/x-www-form-urlencoded'
            ],
            'form_params' => [
                'origin' => $origin,
                'destination' => $destination,
                'weight' => '1000',
                'courier' => 'jne',
            ]
            , ['debug' => true]
        ]);
        
        //convert response data to array php
        $response_json = $response->getBody();
        $data = json_decode($response_json, true);

        //data dari response
        $data_origin = $data['rajaongkir']['origin_details'];
        $data_destination = $data['rajaongkir']['destination_details'];
        $data_ongkir = $data['rajaongkir']['results'][0]['costs'];
        
        //kirim data ke view
        $output = [
            'data_origin' => $data_origin,
            'data_destination' => $data_destination,
            'data_ongkir' => $data_ongkir,
        ];

        //load view with sending data
        return view('api_response', $output);
    }
}
