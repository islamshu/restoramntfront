<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function fetchData()
    {
        $client = new Client();
        $response = $client->get('https://dashboard.primecut.me/api/all_data');
        // $response = $client->get('http://127.0.0.1:8000/api/all_data');

        $data = $response->getBody()->getContents();



        return view('index')->with('data', json_decode($data)->data);
    }
    public function send_form()
    {

        $client = new Client();
        $response = $client->get('https://dashboard.primecut.me/api/all_data');
        // $response = $client->get('http://127.0.0.1:8000/api/all_data');

        $data = $response->getBody()->getContents();
        $dataa =  json_decode($data)->data;
        if($dataa->is_open == 0){
            return view('close')->with('data',$dataa);

        }
        if($dataa->is_manual_close == 0){
            return view('manual_close')->with('data',$dataa);

        }
        if($dataa->now_queue > $dataa->max_order){
            return view('queue_close')->with('data',$dataa);
        }
        

        return view('send_form')->with('data',$dataa);
    }
    public function send_form_post(Request $request){
        $response = Http::post('https://dashboard.primecut.me/api/make_order', [

        // $response = Http::post('http://127.0.0.1:8000/api/make_order', [
            'name' => $request->name,
            'phone' => $request->phone,
            'guest' => $request->guest,
            'table_type' => $request->table_type,
            'note' => $request->note,
            'place_type' => $request->table_type,
        ]);
        $responseData = $response->json();
        if($responseData['success'] == true){
            return response()->json(['status' => 'success','orderId'=>$responseData['data']['code']]);
        }else{
            return response()->json(['status' => 'fail']);

        }
        


    }
    public function resend_request(Request $request){
        dd($request);
        $response = Http::post('https://dashboard.primecut.me/api/resend_request', [
            'order_id' => $request->order_id,
        ]);
        dd($response);
        
        $responseData = $response->json();
        if($responseData['success'] == true){
            return response()->json(['status' => 'success','orderId'=>$responseData['data']['code']]);
        }else{
            return response()->json(['status' => 'fail']);
        }
        


    }

    
}
