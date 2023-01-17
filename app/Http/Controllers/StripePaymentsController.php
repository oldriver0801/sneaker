<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Custmer;
use Stripe\Charge;

class StripePaymentsController extends Controller
{
    public function Payment(Request $request)
    {
        try{
            stripe::setApiKey(env('k_test_51MPjDAGaDfcAfOwnPSRTxWPZRQLD8PBgganJUIUXU5FV2uqqxRf50gHkuxUjAoe7aEf1RjP57x7Im4UtRwe99hQ600vBdKjvxB'));
       
            $customer=Custmer::create(array('email'=>$request->stripeEmail,
                                            'source'=>$request->stripeToken
                                        )
                                    );
                                    
            dump($customer);
            dump($cunstomer->id);
        
            $charge=Charge::creeate(array('customer'=>$customer->id,
                                      'amount'=>100,
                                      'currency'=>jpy
                                      )
                                 ); 
            dump($charge);
            dump($charge->source->id);
            dump($charge->source->brand);
            dump($charge->source->last4);
            dump($charge->source->exp_month);
            dump($charge->source->exp_year);
        
            return "COMPLETE";
    
        
        }catch(Exception $e) {
        
            return $e->getMessage();
        }
    }
}
