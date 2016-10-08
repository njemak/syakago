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
use App\Ttpno;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {

        return view('ttp_list', [
        'ttp_list' => Ttp::all()
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

        $ttpnonow = Ttpno::all();

        if (date("Y") == $ttpnonow[0]->year){
            $year = $ttpnonow[0]->year;

            $yearstring = "$year";

            $yearstring = substr($yearstring, -2); 

            $id = $ttpnonow[0]->index;

            $idstring = "$id";

            while(strlen($idstring) < 6) {
                $idstring = "0" . $idstring;
            } 

            $yearstring .= $idstring;

            return view('add_ttp', [
            'ttpno' => $yearstring
            ]);
        }else{
            return "error bok";
        }


        


    });

    /**
     * Add New Task
     */
    Route::post('add_ttp_post', function (Request $request) {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('add_ttp')
        //         ->withInput()
        //         ->withErrors($validator);
        // }

        // $ttp = new Ttp;
        // $task->name = $request->name;
        // $task->save();

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
        $ttp->save();

        $ttpno = Ttpno::find(1);

        $ttpno->index = (($ttpno->index)+1);

        $ttpno->save();

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
