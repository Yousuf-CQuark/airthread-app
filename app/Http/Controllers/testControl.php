<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\testresponsedata;
class testControl extends Controller
{
    //
    public function testData(Request $req)
    {
        $testresponsedata = new testresponsedata; 
        
        # code...
        // Storing information in variables
        
    
        // $all_val = array($shirtInp,$heightInp,$preferedInp,$chestInp,$waistInp,$sleeveInp);
        $response = Http::withHeaders(['x-api-key' => 'hOi7paMvPU5eidbZZjKAc19OXW6HaVvQ9yWDSMqF'])->get('https://rlfu1vnfvb.execute-api.us-east-2.amazonaws.com/test/shirt_size?shirt_size=${shirtInp}&height=${heightInp}ft&preferred_fit=${preferedInp}&chest_build=${chestInp}&waist_build=${waistInp}&sleeve_length=${sleeveInp}');
        $aws_resp = json_decode($response);
        $shoulder = $aws_resp->shoulder;
        $chest_width = $aws_resp->chest_width;
        $waist_width = $aws_resp->waist_width;
        $back_length = $aws_resp->back_length;
        $sleeve_length = $aws_resp->sleeve_length;
        $sleeve_width = $aws_resp->sleeve_width;
    
        // storing information
        $testresponsedata->shoulder_for_test=(int)$shoulder;
        $testresponsedata->chest_width_for_test=(int)$chest_width;
        $testresponsedata->waist_width_for_test=(int)$waist_width;
        $testresponsedata->back_length_for_test=(int)$back_length;
        $testresponsedata->sleeve_length_for_test=(int)$sleeve_length;
        $testresponsedata->sleeve_width_for_test=(int)$sleeve_width;
        $testresponsedata->Customer_id_for_test=(int)"";
    
        $testresponsedata->save();
    
    
        return view ('welcome', compact('response'));
            
    }
}
