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
                            <span>TTP Pricing</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title"> Update TTP
                    <small>Lengkapi semua field untuk melanjutkan</small>
                </h3>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('add_ttp_price')}}" method="POST" class="horizontal-form">
                        {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="form-section">TTP Info</h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">No TTP</label>
                                            <input type="text" id="nomorTTP" class="form-control" name="TTP_NO" value="{{$ttp_info->TTP_NO}}" readonly>
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">No MR</label>
                                            <input type="text" id="MRNo" class="form-control" name="MR_NO" value="{{$ttp_info->MR_NO}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Customer Name</label>
                                            <input type="text" id="customerName" class="form-control" name="CUSTOMER_ID" value="{{$ttp_info->CUSTOMER_ID}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Project Name</label>
                                            <input type="text" id="projectName" class="form-control" name="PROJECT_ID" value="{{$ttp_info->PROJECT_ID}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Delivery Date</label>
                                            <input type="text" id="deliveryDate" class="form-control" name="DELIVERY_DATE" value="{{$ttp_info->DELIVERY_DATE}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Picked Up By</label>
                                            <input type="text" id="pickup" class="form-control" name="PICKED_UP_BY" value="{{$ttp_info->PICKED_UP_BY}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Origin Address</label>
                                            <textarea class="form-control" rows="3" name="ORIGIN_ADDRESS" readonly>
                                                {{$ttp_info->ORIGIN_CODE}}
                                                {{$ttp_info->ORIGIN_ADDRESS}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Destination Address</label>
                                            <textarea class="form-control" rows="3" name="DESTINATION_ADDRESS" readonly>
                                                {{$ttp_info->DESTINATION_CODE}}
                                                {{$ttp_info->DESTINATION_ADDRESS}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Delivery By</label>
                                            <input type="text" id="deliveryBy" class="form-control" name="DELIVERY_BY" value="{{$ttp_info->DELIVERY_BY}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Delivery Detail</label>
                                            <input type="text" id="deliveryDetail" class="form-control" name="DELIVERY_DETAIL" value="{{$ttp_info->DELIVERY_DETAIL}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="form-section">Package Info</h3>
                                @if (count($ttp_packages) > 0)
                                    @foreach ($ttp_packages as $package)
                                        <!-- DEVELOPER NOTE: YOVIE  (01-11-2016)
                                        FOR EACH PACKAGE TTP; ITERATE THROUGH THE INFORMATION
                                        -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                                <i class="fa fa-truck"></i>Package Detail </div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nama Barang</label>
                                                                    <input type="text" id="packageName1" class="form-control" name="ITEM" value="{{ $package->ITEM }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($package->TYPE == "WEIGHT")
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Quantity</label>
                                                                        <input type="text" id="packageQuantity" class="form-control" name="QUANTITY" value="{{ $package->QUANTITY }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="row section--actual-weight section--type-package">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Berat</label>
                                                                            <input type="text" id="packageWeight" class="form-control input-inline" name="WEIGHT" value="{{ $package->WEIGHT }}" readonly>
                                                                            <span class="help-inline"> Kg </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif ($package->TYPE == "VEHICLE")
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Type</label>
                                                                        <input type="text" id="packagetype" class="form-control" name="TYPE_VEHICLE" value="{{ $package->TYPE_VEHICLE }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Quantity</label>
                                                                        <input type="text" id="packageQuantity" class="form-control" name="QUANTITY" value="{{ $package->QUANTITY }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="row section--volume section--type-package" style="display: none;">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">P</label>
                                                                            <input type="text" id="packageName1" class="form-control input-inline input-xsmall" value="{{ $package->P }}" readonly>
                                                                            <span class="help-inline"> cm </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">L</label>
                                                                            <input type="text" id="packageName1" class="form-control input-inline input-xsmall" value="{{ $package->L }}" readonly>
                                                                            <span class="help-inline"> cm </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">T</label>
                                                                            <input type="text" id="packageName1" class="form-control input-inline input-xsmall" value="{{ $package->T }}" readonly>
                                                                            <span class="help-inline"> cm </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="text-center"> No Packages Found
                                            </h3>
                                        </div>
                                    </div>
                                @endif
                                
                                <div class="row">
                                    <!-- DEVELOPER NOTE: YOVIE  (01-11-2016)
                                    TOTAL WEIGHT DEPENDS ON DELIVERY TYPE? FORMULA? I FORGOT!
                                    -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Total Weight</label>
                                            <input type="text" id="totalWeight" class="form-control" name="TOTAL_WEIGHT" value="{{$ttp_info->TOTAL_WEIGHT}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Ops Notes</label>
                                            <textarea class="form-control" rows="3" name="ADMIN_REMARK" readonly>
                                                {{$ttp_info->ADMIN_REMARK}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="col-md-12">
                        <form action="{{ url('add_ttp_post')}}" method="POST" class="horizontal-form">
                        {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="form-section">TTP Pricing</h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Extra</label>
                                            <label id="warningEx_Weight" style="color:red; display:none">(value is not valid)</label>
                                            <input type="text" id="EXTRA_WEIGHT" class="form-control" name="EXTRA_WEIGHT" value="{{$ttp_info->EXTRA_WEIGHT}}">
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Rate</label>
                                            <label id="warningEx_Rate" style="color:red; display:none">(value is not valid)</label>
                                            <input type="text" id="RATE" class="form-control" name="RATE" value="{{$ttp_info->RATE}}">
                                            <!-- DEVELOPER NOTE: YOVIE  (14-01-2017)
                                                DON'T FORGET BUTTON TO AUTO REFRESH RATE BASED ON CUSTOMER
                                             -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Gross Sales</label>
                                            <input type="text" id="GROSS_SALES" class="form-control" name="GROSS_SALES" value="{{$ttp_info->GROSS_SALES}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="package-list other_charges">
                                        <div class="data-list-repeater" data-repeater-list="charges">         
                                            <div class="col-md-6 package-item" data-repeater-item>
                                                <div class="portlet box blue portlet-vehicle">
                                                    @if (count($ttp_charges) > 0)
                                                        @foreach ($ttp_charges as $charges)
                                                            <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-truck"></i>Additional Charges </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                <a href="javascript:;" class="remove" data-repeater-delete data-original-title="" title=""> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Description</label>
                                                                        <input type="text" id="chargesdescription" name="chargesdescription" class="form-control" placeholder="Description" value="{{ $charges->CHARGES_DESC }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Type</label>
                                                                        <select id="type_charges" name="type_charges" class="form-control">
                                                                            @if ($charges->CHARGES_TYPE == "Biaya Packing")
                                                                                <option>Surcharge</option>
                                                                                <option selected>Biaya Packing</option>
                                                                                <option>Overnight</option>
                                                                                <option>Dangerous Good</option>
                                                                                <option>Biaya Bongkaran</option>
                                                                            @elseif ($charges->CHARGES_TYPE == "Overnight")
                                                                                <option>Surcharge</option>
                                                                                <option>Biaya Packing</option>
                                                                                <option selected>Overnight</option>
                                                                                <option>Dangerous Good</option>
                                                                                <option>Biaya Bongkaran</option>
                                                                            @elseif ($charges->CHARGES_TYPE == "Dangerous Good")
                                                                                <option>Surcharge</option>
                                                                                <option>Biaya Packing</option>
                                                                                <option>Overnight</option>
                                                                                <option selected>Dangerous Good</option>
                                                                                <option>Biaya Bongkaran</option>
                                                                            @elseif ($charges->CHARGES_TYPE == "BBiaya Bongkaran")
                                                                                <option>Surcharge</option>
                                                                                <option>Biaya Packing</option>
                                                                                <option>Overnight</option>
                                                                                <option>Dangerous Good</option>
                                                                                <option selected>Biaya Bongkaran</option>
                                                                            @else
                                                                                <option selected>Surcharge</option>
                                                                                <option>Biaya Packing</option>
                                                                                <option>Overnight</option>
                                                                                <option>Dangerous Good</option>
                                                                                <option>Biaya Bongkaran</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Price</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" >Rp</span>
                                                                            <input type="number" id="additional_price" name="additional_price" class="form-control" value="{{ $charges->CHARGES_AMOUNT }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-truck"></i>Additional Charges </div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-repeater-delete data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Description</label>
                                                                    <input type="text" id="chargesdescription" name="chargesdescription" class="form-control" placeholder="Description" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Type</label>
                                                                    <select id="type_charges" name="type_charges" class="form-control">
                                                                        <option>Surcharge</option>
                                                                        <option>Biaya Packing</option>
                                                                        <option>Overnight</option>
                                                                        <option>Dangerous Good</option>
                                                                        <option>Biaya Bongkaran</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Price</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" >Rp</span>
                                                                        <input type="number" id="additional_price" name="additional_price" class="form-control" value="0">
                                                                    </div>
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
                                                    <i class="fa fa-plus"></i> Tambah Charges
                                                </button>
                                                <button id="calculate" type="button" class="btn blue">
                                                    <i class="fa fa-plus"></i> Hitung
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- DEVELOPER NOTE: YOVIE  (01-11-2016)
                                    TOTAL WEIGHT DEPENDS ON DELIVERY TYPE? FORMULA? I FORGOT!
                                    -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Sub Total</label>
                                            <input type="text" id="SUBTOTAL" class="form-control" name="SUBTOTAL" value="{{$ttp_info->SUBTOTAL}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Discount</label>
                                            <label id="warningEx_discountpercent" style="color:red; display:none">(value is not valid)</label>
                                            <input type="text" id="DISCOUNT" class="form-control" name="DISCOUNT" value="{{$ttp_info->DISCOUNT}}%" max="100">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Discount</label>
                                            <label id="warningEx_discount" style="color:red; display:none">(value is not valid)</label>
                                            <input type="text" id="DISCOUNTVAL" class="form-control" name="DISCOUNTVAL" value="{{$ttp_info->DISCOUNTVAL}}" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- DEVELOPER NOTE: YOVIE  (01-11-2016)
                                    TOTAL WEIGHT DEPENDS ON DELIVERY TYPE? FORMULA? I FORGOT!
                                    -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Net Sales</label>
                                            <input type="text" id="NETSALES" class="form-control" name="NETSALES" value="{{$ttp_info->TOTAL_AMOUNT}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('common.errors')
                            <div class="form-actions right">
                                <button type="button" class="btn default">Cancel</button>
                                <button type="submit" class="btn blue">
                                    <i class="fa fa-check"></i> Save
                                </button>
                            </div>
                        <script>
                                    var totalextracharges = function RepeaterData() {
                                        var size = $('.nameLabel').length;
                                        for (i = 0; i < size; i++) {
                                            var name = $('.nameLabel').eq(i).text();
                                            var id = $('.IdLabel').eq(i).text();
                                            var result = document.getElementById('result');
                                            
                                            result.innerText += name + "  \t " + id + "\n";
                                        }
                                    }

                                    $(function() {
                                          $("#calculate").click( function(){
                                                $('#SUBTOTAL').val($('#GROSS_SALES').val());
                                               }
                                          );
                                    });

                                    var format = function(num){
                                        var str = num.toString(), parts = false, output = [], i = 1, formatted = null;
                                        if(str.indexOf(".") > 0) {
                                            parts = str.split(".");
                                            str = parts[0];
                                        }
                                        str = str.replace(/^0+/, '').split("").reverse();
                                        for(var j = 0, len = str.length; j < len; j++) {
                                            if(str[j] != ",") {
                                                output.push(str[j]);
                                                if(i%3 == 0 && j < (len - 1)) {
                                                    output.push(",");
                                                }
                                                i++;
                                            }
                                        }
                                        formatted = output.reverse().join("");
                                        return(formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
                                    };

                                    $(function(){
                                        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
                                        $("#EXTRA_WEIGHT").keyup(function(e){
                                            var extraWeight = parseInt($('#EXTRA_WEIGHT').val().replace(/,/g, ''));
                                            var RATE = parseInt($('#RATE').val().replace(/,/g, ''));
                                            var totalWeight = parseInt($('#totalWeight').val().replace(/,/g, ''));
                                            if(numberRegex.test(extraWeight)) {
                                                $(this).val(format($(this).val()));
                                                var grossSales = (totalWeight + extraWeight) * RATE; 
                                                if(numberRegex.test(grossSales)) {
                                                    $('#GROSS_SALES').val(format(grossSales));
                                                }
                                                else{
                                                    $('#GROSS_SALES').val(0);
                                                }
                                                $('#EXTRA_WEIGHT').css('border-color', '');
                                                $('#warningEx_Weight').hide();
                                            }
                                            else{
                                                $('#GROSS_SALES').val(0);
                                                $('#warningEx_Weight').show();
                                                $('#EXTRA_WEIGHT').css('border-color', 'red');
                                            }
                                        });
                                        $("#RATE").keyup(function(e){
                                            var extraWeight = parseInt($('#EXTRA_WEIGHT').val().replace(/,/g, ''));
                                            var RATE = parseInt($('#RATE').val().replace(/,/g, ''));
                                            var totalWeight = parseInt($('#totalWeight').val().replace(/,/g, ''));
                                            if(numberRegex.test(RATE)) {
                                                $(this).val(format($(this).val()));
                                                var grossSales = (totalWeight + extraWeight) * RATE; 
                                                if(numberRegex.test(grossSales)) {
                                                    $('#GROSS_SALES').val(format(grossSales));
                                                }
                                                else{
                                                    $('#GROSS_SALES').val(0);
                                                }
                                                $('#RATE').css('border-color', '');
                                                $('#warningEx_Rate').hide();
                                            }
                                            else{
                                                $('#GROSS_SALES').val(0);
                                                $('#warningEx_Rate').show();
                                                $('#RATE').css('border-color', 'red');
                                            }
                                        });
                                        $("#DISCOUNTVAL").keyup(function(e){
                                            var discountvalue = parseInt($('#DISCOUNTVAL').val().replace(/,/g, ''));
                                            var discountpercentage = parseInt($('#DISCOUNT').val().replace('%', ''));
                                            var subtotal = parseInt($('#SUBTOTAL').val().replace(/,/g, ''));
                                            if(numberRegex.test($(this).val().replace(/,/g, ''))) {
                                                $(this).val(format($(this).val()));
                                                var netSales = subtotal - (subtotal * discountpercentage / 100) - discountvalue;
                                                if(numberRegex.test(netSales)) {
                                                    $('#NETSALES').val(format(netSales));
                                                }
                                                else{
                                                    $('#NETSALES').val(0);
                                                }
                                                $('#DISCOUNTVAL').css('border-color', '');
                                                $('#warningEx_discount').hide();
                                            }
                                            else{
                                                $('#NETSALES').val(0);
                                                $('#warningEx_discount').show();
                                                $('#DISCOUNTVAL').css('border-color', 'red');
                                            }
                                        });
                                        $("#DISCOUNT").change(function(e){
                                            var discountvalue = parseInt($('#DISCOUNTVAL').val().replace(/,/g, ''));
                                            var discountpercentage = parseInt($('#DISCOUNT').val().replace('%', ''));
                                            var subtotal = parseInt($('#SUBTOTAL').val().replace(/,/g, ''));
                                            if(numberRegex.test($(this).val().replace('%', ''))) {
                                                var netSales = 0
                                                if($(this).val() > 100){
                                                    $(this).val('100%');   
                                                }
                                                else{
                                                    $(this).val($(this).val() + '%');
                                                    netSales = subtotal - (subtotal * discountpercentage / 100) - discountvalue;
                                                }
                                                if(numberRegex.test(netSales)) {
                                                    $('#NETSALES').val(format(netSales));
                                                }
                                                else{
                                                    $('#NETSALES').val(0);
                                                }
                                                $('#DISCOUNTVAL').css('border-color', '');
                                                $('#warningEx_discount').hide();
                                            }
                                            else{
                                                $('#NETSALES').val(0);
                                                $('#warningEx_discountpercent').show();
                                                $('#DISCOUNT').css('border-color', 'red');
                                            }
                                        });
                                        // $(".additional_price").keyup(function(e){
                                        //     var additional_price = parseInt($('.additional_price').val().replace(/,/g, ''));
                                        //     if(numberRegex.test(additional_price)) {
                                        //         $(this).val(format($(this).val()));
                                        //         $('.additional_price').css('border-color', '');
                                        //     }
                                        //     else{
                                        //         $('.additional_price').css('border-color', 'red');
                                        //     }
                                        // });
                                        // $("input[name = 'additional_price']").keyup(function(e){
                                        //     var additional_price = parseInt($("input[name = 'additional_price']").val().replace(/,/g, ''));
                                        //     if(numberRegex.test(additional_price)) {
                                        //         $(this).val(format($(this).val()));
                                        //         $("input[name = 'additional_price']").css('border-color', '');
                                        //     }
                                        //     else{
                                        //         $("input[name = 'additional_price']").css('border-color', 'red');
                                        //     }
                                        // });
                                    });
                                </script>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
<!-- END CONTAINER -->
@endsection
