<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rave;

class FlutterWaveController extends Controller
{
    public function initialize() {
        //This initializes payment and redirects to the payment gateway
        //The initialize method takes the parameter of the redirect URL
        Rave::initialize(route('callback'));
    }
      
    public function callback() {
        // This verifies the transaction and takes the parameter of the transaction reference
        $data = Rave::verifyTransaction(request()->txref);
    
        $chargeResponsecode = $data->data->chargecode;
        $chargeCurrency = $data->data->currency;

        $currency = "NGN";
    
        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeCurrency == $currency)) {
        // transaction was successful...
        // please check other things like whether you already gave value for this ref
        // if the email matches the customer who owns the product etc
        //Give Value and return to Success page
        
            return redirect('/success');
        
        } else {
            //Dont Give Value and return to Failure page
        
            return redirect('/failed');
        }
    
        // dd($data->data);
    }
}
