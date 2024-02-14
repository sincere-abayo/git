<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Balance as balance1;
use App\Models\Payments;
use App\Models\Wallet;
use App\Models\Activations;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationEmail;
use Plisio\PlisioSdkLaravel\Payment;
use GuzzleHttp\Client;
use App\Helpers\PlisioHelper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class Balance extends Controller
{
    //
    public function index(){
        return view('user.balance.balance');
    }
     public function deposit(){
        return view('user.balance.deposit');
    }
     public function wallet(Request $request)
     {
           $user = Auth::user();
           $username = $user->user;
           $Wallet=$request->wallet;
           Wallet::create([
                'user'=>$username,
                'wallet'=>$Wallet,
           ]);
           return view('user.wallet')->with('wallet','Your wallet address have been saved well,');
     }

     public function api(Request $request){
      $user = Auth::user();
    $userId = $user->id;
    $email =$user->email;
    if($request->amount<12)
    {
        return view('user.balance.deposit')->with('ammount','less amount!! minimum ammount is 12$');
    }
   
$length = 8;
$orderNumber = Str::random($length);

        $client = new Client();
        $url = 'https://plisio.net/api/v1/invoices/new';

        $response = $client->get($url, [
            'query' => [
                'source_currency' => 'USD',
                'amount' =>$request->amount,
                'order_number' => $orderNumber,
                'currency' => 'USDT',
                'email' => $email,
                'order_name' => 'account deposit',
                'callback_url' => 'http://fonepo.com/user/dashboard/deposit/status',
                'success_callback_url'=>'http://fonepo.com/user/dashboard/deposit/success',
                'fail_callback_url '=>'http://fonepo.com/user/dashboard/deposit/fail',
                'expire_min'=>15,
                'api_key' => 'rPs1vyRlJZChOsYy9F--yeiEUTNgCOzCcnG4bKu_sp3hM5SP64GzWqqdadDM6x95', // Replace with your actual secret key
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
 $responseData = json_decode($body, true);

        // Get the necessary data from the response
        $txnId = $responseData['data']['txn_id'];
        $invoiceUrl = $responseData['data']['invoice_url'];

        // Redirect the user to the invoice URL
        return redirect::away($invoiceUrl);
         }
        
     public function status(Request $request)
{
    if (verifyCallbackData())
    {
            $status = 'success deposit';
            return view('user.balance.deposit', compact('status'));
     } 
        else
        {
            // Invalid callback data
            $status = 'error while deposit';
            $message = 'Invalid callback data';
            return view('user.balance.deposit', compact('status', 'message'));
        }
}
 public function success(Request $request)
  {
//   
    $value = $request->amount;
    
      $user = Auth::user();
    $userId = $user->id;
    $email =$user->email;
    $name=$user->user;
    $balance=new balance1();
    $balance->deposit=$value;
    if($balance->save())
    {
         return redirect()->route('user.dashboard.deposit')->with('message', 'Thank u for depositing. you deposit amount has been credited.');
    }
   
  }
 public function error()
{
    return view('user.balance.deposit')->with('p_failed','Payment failed, Retry again');
}

}
