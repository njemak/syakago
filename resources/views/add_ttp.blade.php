@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Tambah TTP</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Tambah TTP
            <small>Lengkapi semua field untuk melanjutkan</small>
        </h3>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('add_ttp_post')}}" method="POST" class="horizontal-form">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <h3 class="form-section">TTP Details</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">No TTP</label>
                                    <input type="text" id="nomorTTP" class="form-control" name="TTP_NO" value="{{$ttpno}}" readonly>
                                    <!-- <span class="help-block"> This is inline help </span> -->
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Customer Name</label>
                                    <select id="customer_select" class="form-control" name="CUSTOMER_ID">
                                        @foreach ($customers as $customer)
                                        <option value="{{$customer->CUSTOMER_ID}}">{{$customer->CUSTOMER_NAME}}</option>
                                        @endforeach
                                        
                                        <!-- <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Project Name</label>
                                    <select id="project_list" class="form-control" name="PROJECT_ID">
                                        <!-- <option>Penyelundupan Sony Ericson</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">No MR</label>
                                    <input type="text" id="lastName" class="form-control" placeholder="Lim" name="MR_NO">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Delivery Date</label>
                                    <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" name="DELIVERY_DATE"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Picked Up By</label>
                                    <input type="text" id="pickedUp" class="form-control" placeholder="Name of person" name="PICKED_UP_BY" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Origin Address</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" name="ORIGIN_CODE">
                                                <option>JKT</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="ORIGIN_ADDRESS"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Destination Address</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" name="DESTINATION_CODE">
                                                <option>CGK</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="DESTINATION_ADDRESS"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                                    <!-- <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Delivery By</label>
                                            <select class="form-control" name="DELIVERY_BY">
                                                <option>Darat</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Delivery By</label>
                                            <select class="form-control" name="delivery_type" id="delivery_by">
                                                <option value="darat">Darat</option>
                                                <option value="udara">Udara</option>
                                                <option value="laut">Laut</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Form</label>
                                            <select name="type_form" class="form-control" id="type_form">
                                                <option value="vehicle">Vehicle</option>
                                                <option value="coli">Coli</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Form</label>
                                            <select class="form-control" name="DELIVERY_FORM">
                                                <option>Vehicle</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Delivery Detail</label>
                                            <select class="form-control" name="DELIVERY_DETAIL">
                                                <option>Regular</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h3 class="form-section">Package Info</h3> -->
                                <h3 class="form-section">Package Info</h3>
                                <div class="row">
                                    <div class="package-list package-vehicle" id="vehicle">
                                        <div class="data-list-repeater" data-repeater-list="vehicle">         
                                            <div class="col-md-6 package-item" data-repeater-item>
                                                <div class="portlet box blue portlet-vehicle">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-truck"></i>Package Vehicle </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                <a href="javascript:;" class="remove" data-repeater-delete data-original-title="" title=""> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nama Barang</label>
                                                                        <input type="text" id="packageName1" class="form-control" placeholder="Nama Barang" name="NAME">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Type</label>
                                                                        <select class="form-control" name="TYPE_VEHICLE">
                                                                            <option>Wing Box</option>
                                                                            <option>Option 2</option>
                                                                            <option>Option 3</option>
                                                                            <option>Option 4</option>
                                                                            <option>Option 5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Quantity</label>
                                                                        <input type="number" id="packageQuantity1" class="form-control quantitiy_coli" placeholder="Banyak Kendaraan" name="QUANTITY">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <button type="button" data-repeater-create class="btn blue">
                                                        <i class="fa fa-plus"></i> Tambah Package
                                                    </button>

                                                    <button type="button" class="btn blue" id="button_weight_vehicle">
                                                        <i class="fa fa-plus"></i> Hitung Total
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-list package-coli" style="display: none;" id="coli">
                                            <div class="data-list-repeater" data-repeater-list="coli">         
                                                <div class="col-md-6 package-item" data-repeater-item>
                                                    <div class="portlet box blue portlet-coli">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-ship"></i>Package Coli </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="javascript:;" class="remove" data-repeater-delete data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nama Barang</label>
                                                                            <input type="text" id="packageName1" class="form-control" placeholder="Nama Barang" name="NAME">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Type</label>
                                                                            <select name="type_package" class="form-control type_package_select" name="TYPE_IN">
                                                                                <option value="actual-weight">Actual Weight</option>
                                                                                <option value="volume">Volume</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Quantity</label>
                                                                            <input type="text" id="packageName1" class="form-control" placeholder="Quantity" name="QUANTITY">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row section--actual-weight section--type-package">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Berat</label>
                                                                            <input type="text" id="packageName1" class="form-control input-inline" placeholder="Berat" name="WEIGHT">
                                                                            <span class="help-inline"> Kg </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row section--volume section--type-package" style="display: none;">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">P</label>
                                                                            <input type="text" id="packageName1" class="form-control input-inline input-xsmall" placeholder="Panjang" name="P">
                                                                            <span class="help-inline"> cm </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">L</label>
                                                                            <input type="text" id="packageName1" class="form-control input-inline input-xsmall" placeholder="Lebar" name="L">
                                                                            <span class="help-inline"> cm </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">T</label>
                                                                            <input type="text" id="packageName1" class="form-control input-inline input-xsmall" placeholder="Tinggi" name="T">
                                                                            <span class="help-inline"> cm </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <button type="button" data-repeater-create class="btn blue">
                                                            <i class="fa fa-plus"></i> Tambah Package
                                                        </button>

                                                        <button type="button" class="btn blue" id="button_weight_coli">
                                                            <i class="fa fa-plus"></i> Hitung Total
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="form-section" id="text_total">Total</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label"><strong id="total_weight_now">0</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="form-section">Notes</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>No SMU: 152345</li>
                                                    <li>Barang sudah dipickup pukul 09:00 AM</li>
                                                    <li>Barang sudah di bandara pukul 12:00 PM</li>
                                                    <li>Barang sudah tiba di tempat pukul 03:00 PM</li>
                                                </ul>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                    @include('common.errors')

                                    <div class="form-actions right">
                                        <button type="button" class="btn default">Batal</button>
                                        <button type="submit" class="btn blue">
                                            <i class="fa fa-check"></i> Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <script type="text/javascript">

                $.get("customer_project/" + $( "#customer_select" ).val(), function(data, status){
                    var newdata = {}
                    console.log(data.length)
                    for (var i = 0;i<data.length;i++){
                        var key = data[i].PROJECT_ID;
                        newdata[key] = data[i].PROJECT_NAME

                    }

                    var $select = $('#project_list');                        
                    $select.find('option').remove();                          
                    $.each(newdata,function(key, value) 
                    {
                        $select.append('<option value=' + key + '>' + value + '</option>');
                    });
                });

                $( "#customer_select" ).change(function() {
                    console.log(this.value)
                    $.get("customer_project/" + this.value, function(data, status){
                        var newdata = {}
                        for (var i = 0;i<data.length;i++){
                            var key = data[i].PROJECT_ID;
                            newdata[key] = data[i].PROJECT_NAME

                        }

                        var $select = $('#project_list');                        
                        $select.find('option').remove();                          
                        $.each(newdata,function(key, value) 
                        {
                            $select.append('<option value=' + key + '>' + value + '</option>');
                        });
                    });
                });
                $( "#button_weight_vehicle" ).click(function() {

                  var total_weight = 0;

                  $($(".quantitiy_coli")).each(function (index, value){
                    total_weight = total_weight + parseInt(value.value)
                  });

                  console.log(total_weight)

                  $("#total_weight_now").text(total_weight);
                  $("#text_total").text("Total Unit");

                  // console.log(total_weight);
              });

                $( "#button_weight_coli" ).click(function() {
                    var total_weight = 0;
                    var name_map = {};

                    var land_divider = 0

                    var land_divider_string = $( "#delivery_by" ).val()
                    console.log(land_divider_string)

                    if (land_divider_string == "darat"){
                        land_divider = 4000;
                    }else if (land_divider_string == "laut"){
                        land_divider = 1000000;
                    }else {
                        land_divider = 6000;
                    }

                    var all_coli = {}
                    $($("[name^=coli]"))  // for all checkboxes
                    .each(function(index, value) {  // first pass, create name mapping
                        var name = value.name.substring(0, 4);
                        if (name == "coli"){
                            var keynow = value.name.substring(5,6)
                            if (all_coli[keynow] == undefined){
                                all_coli[keynow] = {}
                                var valuekey = value.name.substring(8,(value.name.length-1))
                                all_coli[keynow][valuekey] = value;
                            }else{
                                var valuekey = value.name.substring(8,(value.name.length-1))
                                all_coli[keynow][valuekey] = value;
                            }
                        }
                    })
                    console.log(all_coli)
                    for (var key in all_coli) {
                        var objectnow = all_coli[key]
                        console.log(objectnow.type_package.value)

                        if (objectnow.type_package.value == "actual-weight"){
                            total_weight = total_weight + ((objectnow.QUANTITY.value) * (objectnow.WEIGHT.value))
                        }else{
                            total_weight = total_weight + ((((objectnow.L.value) * (objectnow.P.value) * (objectnow.T.value))/land_divider) * (objectnow.QUANTITY.value))
                        }
                  }


                  $("#total_weight_now").text(total_weight);
                  $("#text_total").text("Total Berat");

              });
          </script>
          <!-- END CONTAINER -->
          @endsection
