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
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label id="warning" style="color:red; display:none">value is not valid</label>
                                            <input type="text" class="form-control" id="teacher" type="text" />
                                            <input type="text" class="form-control" id="info" type="text" readonly />
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    // $('#teacher').on('change', function(e){
                                    //         var teacher = $('#teacher').val();
                                    //         var info = '(' + teacher + ') value based on above.';
                                    //         $('#info').val(info);
                                    //     }
                                    // );
                                    $('#teacher').on('change', function(e){
                                            var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
                                            var teacher = $('#teacher').val();
                                            if(numberRegex.test(teacher)) {
                                                var info = '(' + teacher * 2 + ') above * 2.'; 
                                                $('#info').val(info);
                                                $('#teacher').css('border-color', '');
                                                $('#warning').hide();
                                            }
                                            else{
                                                $('#warning').show();
                                                $('#teacher').css('border-color', 'red');
                                            }
                                        }
                                    );
                                </script>
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
