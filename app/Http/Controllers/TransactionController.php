<?php
namespace App\Http\Controllers;
use FedaPay\FedaPay;
use Illuminate\Http\Request;
use FedaPay\Transaction;
class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        FedaPay::setApiKey(config('fedapay.api_key'));
        FedaPay::setEnvironment(config('fedapay.environment'));
        try {
            $transaction = Transaction::create(array(
                "description" => "Transaction for john.doe@example.com",
                "amount" => 2000,
                "currency" => ["iso" => "XOF"],
                "callback_url" => "https://maplateforme.com/callback",
                "customer" => [
                    "firstname" => "John",
                    "lastname" => "Doe",
                    "email" => "john.doe@example.com",
                    "phone_number" => [
                        "number" => "+22997808080",
                        "country" => "bj"
                    ]
                ]
              ));

            return response()->json(['transaction' => $transaction], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
