<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Http;
// use App\responseData;

class custsizeData extends Controller
{
//

function getstoreData(Request $req)
{
    // $responseData = new responseData; 
    
    # code...
    // Storing information in variables
    

    $shirtInp = $req->shirtInp;
    $heightInp = $req->heightInp;
    $preferedInp = $req->preferedInp;
    $chestInp = $req->chestInp;
    $waistInp = $req->waistInp;
    $sleeveInp = $req->sleeveInp;
  
    // $all_val = array($shirtInp,$heightInp,$preferedInp,$chestInp,$waistInp,$sleeveInp);
    $response = Http::withHeaders(['x-api-key' => 'hOi7paMvPU5eidbZZjKAc19OXW6HaVvQ9yWDSMqF'])->get('https://rlfu1vnfvb.execute-api.us-east-2.amazonaws.com/test/shirt_size?shirt_size=${shirtInp}&height=${heightInp}ft&preferred_fit=${preferedInp}&chest_build=${chestInp}&waist_build=${waistInp}&sleeve_length=${sleeveInp}');
    $aws_resp = json_decode($response);
    $shoulder = $aws_resp->shoulder;
    $chest_width = $aws_resp->chest_width;
    $waist_width = $aws_resp->waist_width;
    $back_length = $aws_resp->back_length;
    $sleeve_length = $aws_resp->sleeve_length;
    $sleeve_width = $aws_resp->sleeve_width;

    return  $response;
    
    // storing information7
    // $responseData->shirtInp=$shirtInp;
    // $responseData->heightInp=$heightInp;
    // $responseData->preferedInp=$preferedInp;
    // $responseData->chestInp=$chestInp;
    // $responseData->waistInp=$waistInp;
    // $responseData->api_shoulder=(int)$shoulder;
    // $responseData->api_chest_width=(int)$chest_width;
    // $responseData->api_waist_width=(int)$waist_width;
    // $responseData->api_back_length=(int)$back_length;
    // $responseData->api_sleeve_length=(int)$sleeve_length;
    // $responseData->api_sleeve_width=(int)$sleeve_width;
    // $responseData->customer_id=(int)$shirtInp;

    // $responseData->save();


    
        
}
}
