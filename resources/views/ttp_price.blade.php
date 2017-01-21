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
                        <form action="{{ url('add_ttp_post')}}" method="POST" class="horizontal-form">
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
                                <!-- DEVELOPER NOTE: YOVIE  (01-11-2016)
                                FOR EACH PACKAGE TTP; ITERATE THROUGH THE INFORMATION
                                PACKAGE INFORMATION IS CURRENTLY NOT AVAILABLE
                                -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-truck"></i>Package 1 </div>
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
                                                            <input type="text" id="packageName1" class="form-control" placeholder="Nama Barang" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Type</label>
                                                            <select class="form-control">
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
                                                            <input type="number" id="packageQuantity1" class="form-control" placeholder="Banyak Kendaraan" >
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <input type="text" id="extraWeight" class="form-control" name="EXTRA_WEIGHT" value="0">
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Rate</label>
                                            <label id="warningEx_Rate" style="color:red; display:none">(value is not valid)</label>
                                            <input type="text" id="RATE" class="form-control" name="RATE" value="0">
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
                                            <input type="text" id="GROSS_SALES" class="form-control" name="GROSS_SALES" value="0" readonly>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var format = function(num){
                                        var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
                                        if(str.indexOf(".") > 0) {
                                            parts = str.split(".");
                                            str = parts[0];
                                        }
                                        str = str.split("").reverse();
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
                                        $("#extraWeight").keyup(function(e){
                                            var extraWeight = parseInt($('#extraWeight').val().replace(/,/g, ''));
                                            var RATE = parseInt($('#RATE').val().replace(/,/g, ''));
                                            var totalWeight = parseInt($('#totalWeight').val().replace(/,/g, ''));
                                            if(numberRegex.test(extraWeight)) {
                                                $(this).val(format($(this).val()));
                                                var grossSales = (totalWeight + extraWeight) * RATE; 
                                                $('#GROSS_SALES').val(format(grossSales));
                                                $('#extraWeight').css('border-color', '');
                                                $('#warningEx_Weight').hide();
                                            }
                                            else{
                                                $('#GROSS_SALES').val(0);
                                                $('#warningEx_Weight').show();
                                                $('#extraWeight').css('border-color', 'red');
                                            }
                                        });
                                        $("#RATE").keyup(function(e){
                                            var extraWeight = parseInt($('#extraWeight').val().replace(/,/g, ''));
                                            var RATE = parseInt($('#RATE').val().replace(/,/g, ''));
                                            var totalWeight = parseInt($('#totalWeight').val().replace(/,/g, ''));
                                            if(numberRegex.test(RATE)) {
                                                $(this).val(format($(this).val()));
                                                var grossSales = (totalWeight + extraWeight) * RATE; 
                                                $('#GROSS_SALES').val(format(grossSales));
                                                $('#RATE').css('border-color', '');
                                                $('#warningEx_Rate').hide();
                                            }
                                            else{
                                                $('#GROSS_SALES').val(0);
                                                $('#warningEx_Rate').show();
                                                $('#RATE').css('border-color', 'red');
                                            }
                                        });
                                        $("#discountval").keyup(function(e){
                                            var discountvalue = parseInt($('#discountval').val().replace(/,/g, ''));
                                            var discountpercentage = parseInt($('#discount').val().replace('%', ''));
                                            var subtotal = parseInt($('#SUBTOTAL').val().replace(/,/g, ''));
                                            if(numberRegex.test($(this).val().replace(/,/g, ''))) {
                                                $(this).val(format($(this).val()));
                                                var netSales = subtotal - (subtotal * discountpercentage / 100) - discountvalue;
                                                $('#NETSALES').val(format(netSales));
                                                $('#discountval').css('border-color', '');
                                                $('#warningEx_discount').hide();
                                            }
                                            else{
                                                $('#NETSALES').val(0);
                                                $('#warningEx_discount').show();
                                                $('#discountval').css('border-color', 'red');
                                            }
                                        });
                                        $("#discount").change(function(e){
                                            var discountvalue = parseInt($('#discountval').val().replace(/,/g, ''));
                                            var discountpercentage = parseInt($('#discount').val().replace('%', ''));
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
                                                $('#NETSALES').val(format(netSales));
                                                $('#discountval').css('border-color', '');
                                                $('#warningEx_discount').hide();
                                            }
                                            else{
                                                $('#NETSALES').val(0);
                                                $('#warningEx_discountpercent').show();
                                                $('#discount').css('border-color', 'red');
                                            }
                                        });
                                    });
                                </script>
                                <h3 class="form-section">Package Info</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-truck"></i>Package 1 </div>
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
                                                            <input type="text" id="packageName1" class="form-control" placeholder="Nama Barang" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Type</label>
                                                            <select class="form-control">
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
                                                            <input type="number" id="packageQuantity1" class="form-control" placeholder="Banyak Kendaraan" >
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <input type="text" id="SUBTOTAL" class="form-control" name="SUBTOTAL" value="0" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Discount</label>
                                            <label id="warningEx_discountpercent" style="color:red; display:none">(value is not valid)</label>
                                            <input type="text" id="discount" class="form-control" name="discount" value="0%" max="100">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Discount</label>
                                            <label id="warningEx_discount" style="color:red; display:none">(value is not valid)</label>
                                            <input type="text" id="discountval" class="form-control" name="discountval" value="0">
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
                                            <input type="text" id="NETSALES" class="form-control" name="NETSALES" value="0" readonly>
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
