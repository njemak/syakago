<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use App\Ttp;
use App\Package;
use App\Customer;
use App\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        $now = Carbon::now();
        return view('ttp_list', [
            // 'ttp_list' => Ttp::all() //SET GET YEAR (CURRENT YEAR)
            'ttp_list' => Ttp::whereYear('created_at', '=', $now->year)->get()
            ]);   
    });

    Route::get('/ttp_list/{year}', function ($year) {
        return view('ttp_list', [
            'ttp_list' => Ttp::whereYear('created_at', '=', $year)->get(),
            'current_year' => $year
            ]);   
    });

    Route::get('ttp_price/{ttp_id}', function ($ttp_id) {

        return view('ttp_price', [
            'ttp_info' => Ttp::where('TTP_NO', $ttp_id)->first()
            // 'ttp_info' => Ttp::where('TTP_NO', $ttp_id)->get()
            ]);   
    });

    Route::get('array_ttp', function () {

        return Ttp::all();
        
    });

    // Route::get('ttp_list', function () {

    //     return view('tasks', [
    //         'tasks' => Task::orderBy('created_at', 'asc')->get()
    //         ]);
    // });

    Route::get('add_ttp', function () {

        $ttpid = Ttp::orderBy('created_at', 'desc')->limit(1)->select('TTP_NO')->get();

        $customer_list = Customer::all();

        $ttpidnow = $ttpid[0]->TTP_NO;

        $ttpidnowtwo = substr($ttpidnow, 0,2);
        $ttpno = intval($ttpidnow);

        $ttpno = ($ttpno+1);

        $yearnow = substr(date("Y"),2,2);

        if ($ttpidnowtwo != $yearnow){
            $ttpno = $yearnow . "000001";
        }
        return view('add_ttp', [
            'ttpno' => $ttpno,
            'customers' => $customer_list
            ]);

    });

    Route::get('customer_project/{customer_id}', function ($customer_id) {

        $projects = Project::where('CUSTOMER_ID', $customer_id)->get();

        return $projects;

        // return view('ttp_price', [
        //     'ttp_info' => Ttp::where('TTP_NO', $ttp_id)->first()
        //     // 'ttp_info' => Ttp::where('TTP_NO', $ttp_id)->get()
        //     ]);   
    });

    /**
     * Add New Task
     */
    Route::post('add_ttp_post', function (Request $request) {

        $validator = Validator::make($request->all(), [
            'DELIVERY_DATE' => 'required|max:255',
            'ORIGIN_ADDRESS' => 'required|max:255',
            'DESTINATION_ADDRESS' => 'required|max:255'

            ]);

        if ($validator->fails()) {
            return redirect('add_ttp')
            ->withInput()
            ->withErrors($validator);
        }

        $format = 'm/d/Y';

        $date = DateTime::createFromFormat($format, $request->DELIVERY_DATE);

        


        $typenow = $request->type_form;

        $total_weight = 0;

        if ($typenow == "coli"){
            $ttp_packages = $request->input('coli');
            foreach ($ttp_packages as $package) {
                $packages = new Package;
                $packages->TTP_NO = $request->TTP_NO;
                $packages->ITEM = $package['NAME'];
                $packages->QUANTITY = $package['QUANTITY'];
                $packages->WEIGHT = $package['WEIGHT'];

                $total_weight = $total_weight+$package['WEIGHT'];

                $typein = $packages->TYPE_IN;
                if ($typein == "volume"){
                    $packages->TYPE = "VOLUME";
                }else{
                    $packages->TYPE = "WEIGHT";
                }
                // $packages->TYPE = 'VEHICLE';
                $packages->save();

            }
        }else{

            $ttp_packages = $request->input('vehicle');

            foreach ($ttp_packages as $package) {
                $packages = new Package;
                $packages->TTP_NO = $request->TTP_NO;
                $packages->ITEM = $package['NAME'];
                $packages->QUANTITY = $package['QUANTITY'];
                $packages->TYPE_VEHICLE = $package['TYPE_VEHICLE'];
                $packages->TYPE = 'VEHICLE';
                $total_weight = $total_weight+$package['QUANTITY'];
                $packages->save();

            }
        }

        $ttpid = Ttp::orderBy('created_at', 'desc')->limit(1)->select('TTP_NO')->get();

        $ttpidnow = $ttpid[0]->TTP_NO;

        $ttpidnowtwo = substr($ttpidnow, 0,2);
        $ttpno = intval($ttpidnow);

        $ttpno = ($ttpno+1);

        $yearnow = substr(date("Y"),2,2);

        if ($ttpidnowtwo != $yearnow){
            $ttpno = $yearnow . "000001";
        }

        $ttp = new Ttp;
        $ttp->TTP_NO = $ttpno;
        $ttp->CUSTOMER_ID = $request->CUSTOMER_ID;
        $ttp->PROJECT_ID = $request->PROJECT_ID;
        $ttp->DELIVERY_DATE = $date;
        $ttp->ORIGIN_ADDRESS = $request->ORIGIN_ADDRESS;
        $ttp->ORIGIN_CODE = $request->ORIGIN_CODE;
        $ttp->DESTINATION_ADDRESS = $request->DESTINATION_ADDRESS;
        $ttp->DELIVERY_BY = $request->delivery_type;
        $ttp->DELIVERY_FORM = $request->type_form;
        $ttp->DELIVERY_DETAIL = $request->DELIVERY_DETAIL;
        $ttp->TOTAL_WEIGHT = $total_weight;
        $ttp->CREATED_BY = "Fadhiel Alie";
        $ttp->DELIVERY_STATUS = "Pending";
        $ttp->PROOF_OF_DELIVERY = "Pending";
        $ttp->save();


        return redirect('/');

    });



    /**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            ]);

        if ($validator->fails()) {
            return redirect('ttp_list')
            ->withInput()
            ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('ttp_list');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();

        return redirect('ttp_list');
    });
});
