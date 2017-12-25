<?php

namespace App\Http\Controllers;

use App\Account;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function register(Request $request){
    		//dd(json_encode($request->type_transaction_id));
            if(!$request->account){
                $transaction= new Transaction();
                $transaction->date=date("Y-m-d");;
                $transaction->mount=$request->mount;
                $transaction->type_transaction_id=$request->type_transaction_id;
                $transaction->account_id=$request->account_id;
                $transaction->category_id=$request->category_id;
                $transaction->user_id=Auth::user()->id;
                $transaction->save();
            }else{
                $account= new Account();
                $account->name=$request->name;
                $account->balance=0;
                $account->user_id=Auth::user()->id;
                $account->save();
            }
    		
    		

            

            return redirect()->route('dashboard');
    }
    public function deleted(Request $request){
    	$transaction = Transaction::find($request->id);
        $transaction->delete();
        return redirect()->route('dashboard');
    }
}
