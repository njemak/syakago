<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
      

       $customers = DB::table('customers')->get();


        return view('customer', ['customers' => $customers]);

      /*
		Index: showing all customer
      */
   }

   public function addCustomer(){

   	/*
		Showing blank customer form

   	*/
		$customers=null;
      return view('customer_form',['customers' => $customers]);
   }

    public function updateCustomer($id){
      
    	$customers = Customer::where('CUSTOMER_ID', $id)->first();
    	//echo $customers->CUSTOMER_NAME;
        return view('customer_form',['customers'=>$customers]);
   }


 	public function processCustomer(Request $request){
      /*
		Adding new customer function

      */

		if($request->CUSTOMER_ID!=null){
		//	$customer = Customer::where('CUSTOMER_ID', $request->CUSTOMER_ID)->first();
			$customer = Customer::find($request->CUSTOMER_ID);

		//	echo "a";
		}
		else{
			$customer = new Customer;	
		}
			
			$customer->CUSTOMER_NAME = $request->CUSTOMER_NAME;
	 		$customer->CUSTOMER_ADDRESS = $request->CUSTOMER_ADDRESS;
	 		$customer->CUSTOMER_NO_PIUTANG = $request->CUSTOMER_NO_PIUTANG;
	 		$customer->CUSTOMER_NO_HUTANG = $request->CUSTOMER_NO_HUTANG;
	 		$customer->save();
	 		
	        return redirect('/customer');
 		
        
   }




}
