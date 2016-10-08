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
                            <span>List TTP</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title"> List TTP
                    <small>Semua TTP Bakal ada disini</small>
                </h3>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center"> No TTP </th>
                                        <th class="text-center"> Nama Pelanggan </th>
                                        <th class="text-center"> Tanggal Pengiriman </th>
                                        <th class="text-center"> Asal Pengiriman </th>
                                        <th class="text-center"> Tujuan Pengiriman </th>
                                        <th class="text-center"> Status Pengiriman </th>
                                        <th class="text-center"> Status POD </th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> PT East West Seed </td>
                                        <td> 19-02-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600005 </a></td>
                                        <td> PT East West Seed </td>
                                        <td> 17-02-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600004 </a></td>
                                        <td> PT East West Seed </td>
                                        <td> 11-02-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600003 </a></td>
                                        <td> DHL Supply Chain </td>
                                        <td> 14-01-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-green-meadow"> Delivered </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> DHL Supply Chain </td>
                                        <td> 19-2-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> PT East West Seed </td>
                                        <td> 19-2-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> PT East West Seed </td>
                                        <td> 19-2-2016 </td>
                                        <td> JKT </td>
                                        <td> PAD </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> DHL Supply Chain </td>
                                        <td> 19-2-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                        <td class="font-yellow-lemon"> Pending </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> DHL Supply Chain </td>
                                        <td> 19-2-2016 </td>
                                        <td> JKT </td>
                                        <td> DEP </td>
                                        <td class="font-green-meadow"> Delivered </td>
                                        <td class="font-green-meadow"> Received </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> DHL Supply Chain </td>
                                        <td> 19-2-2016 </td>
                                        <td> JKT </td>
                                        <td> PKU </td>
                                        <td class="font-green-meadow"> Delivered </td>
                                        <td class="font-green-meadow"> Received </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> 1600006 </a></td>
                                        <td> PT East West Seed </td>
                                        <td> 19-2-2016 </td>
                                        <td> JKT </td>
                                        <td> SUB </td>
                                        <td class="font-green-meadow"> Delivered </td>
                                        <td class="font-green-meadow"> Received </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <ul class="pagination pagination">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 2 </a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;"> 3 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 4 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 5 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 6 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    <!-- <div class="container">
        <div class="col-sm-offset-2 col-sm-8"> -->
            <!-- TTP List -->
            <!-- @if (count($ttp_list) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        TTP List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>TTP</th>
                                <th>Delivery Date</th>
                                <th>Total Weight</th>
                                <th>Remark</th>
                            </thead>
                            <tbody>
                                @foreach ($ttp_list as $ttp_item)
                                    <tr>
                                        <td class="table-text"><div>{{ $ttp_item->TTP_NO }}</div></td>
                                        <td class="table-text"><div>{{ $ttp_item->DELIVERY_DATE }}</div></td>
                                        <td class="table-text"><div>{{ $ttp_item->TOTAL_WEIGHT }}</div></td>
                                        <td class="table-text"><div>{{ $ttp_item->ADMIN_REMARK }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div> -->
@endsection
