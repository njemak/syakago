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
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {

        return view('ttp_list', [
            'ttp_list' => Ttp::all() //SET GET YEAR (CURRENT YEAR)
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

    Route::get('ttp_list', function () {

        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get()
            ]);
    });

    Route::get('add_ttp', function () {

        $ttpid = Ttp::orderBy('created_at', 'desc')->limit(1)->select('TTP_NO')->get();

        $ttpidnow = $ttpid[0]->TTP_NO;

        $ttpno = intval($ttpidnow);

        $ttpno = ($ttpno+1);

        return view('add_ttp', [
            'ttpno' => $ttpno
            ]);

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

        $ttp = new Ttp;
        $ttp->TTP_NO = $request->TTP_NO;
        $ttp->CUSTOMER_ID = $request->CUSTOMER_ID;
        $ttp->PROJECT_ID = $request->PROJECT_ID;
        $ttp->DELIVERY_DATE = $date;
        $ttp->ORIGIN_ADDRESS = $request->ORIGIN_ADDRESS;
        $ttp->ORIGIN_CODE = $request->ORIGIN_CODE;
        $ttp->DESTINATION_ADDRESS = $request->DESTINATION_ADDRESS;
        $ttp->DELIVERY_BY = $request->DELIVERY_BY;
        $ttp->DELIVERY_FORM = $request->DELIVERY_FORM;
        $ttp->DELIVERY_DETAIL = $request->DELIVERY_DETAIL;
        $ttp->TOTAL_WEIGHT = 4;
        $ttp->CREATED_BY = "Fadhiel Alie";
        $ttp->DELIVERY_STATUS = "Pending";
        $ttp->PROOF_OF_DELIVERY = "Pending";
        $ttp->save();

        $ttp_packages = $request->input('group-a');

        $njemak = array();

        foreach ($ttp_packages as $package) {
            $packages = new Package;
            $packages->TTP_NO = $request->TTP_NO;
            $packages->ITEM = $package['NAME'];
            $packages->QUANTITY = $package['QUANTITY'];
            $packages->TYPE_VEHICLE = $package['TYPE_VEHICLE'];
            $packages->TYPE = 'VEHICLE';
            $packages->save();
            
        }

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
