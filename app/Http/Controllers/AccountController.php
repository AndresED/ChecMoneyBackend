<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AccountController extends Controller
{
    public function register(Request $request){
    		$account= new Account();
    		$account->name=$request->name;
    		$account->balance=0;
    		$account->user_id=Auth::user()->id;
    		$account->save();
    		return redirect()->route('dashboard');
    }
    public function deleted(Request $request){
            $account = Account::find($request->id);
            $account->delete();
            return redirect()->route('dashboard');
    }
}
