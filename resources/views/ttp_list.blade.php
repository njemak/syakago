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
                @include('common.errors')
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title"> List TTP
                    <small>Menampilkan semua TTP</small>
                </h3>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-xs-2">
                        <div class="form-group">
                            <select class="form-control"> 
                                @for ($year = date("Y"); $year >= 2014; $year--)
                                    <option>{{ $year }}</option>
                                @endfor
                            </select>
                            <!-- ONCHANGE REDIRECT RELOAD TTP($YEAR) -->
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead class="text-center">
                                <tr>
                                    <th> No TTP </th>
                                    <th> Nama Pelanggan </th>
                                    <th> Tanggal Pengiriman </th>
                                    <th> Asal Pengiriman </th>
                                    <th> Tujuan Pengiriman </th>
                                    <th> Status Pengiriman </th>
                                    <th> Status POD </th>
                                </tr>
                            </thead>
                            @if (count($ttp_list) > 0)
                                    <tbody class="text-center">
                                        @foreach ($ttp_list as $ttp)
                                            <tr>
                                                <td><a href="{{ url('ttp_price', ['ttp_id' => $ttp->TTP_NO]) }}">{{ $ttp->TTP_NO }}</a></td>
                                                <td>{{ $ttp->CUSTOMER_ID }}</td>
                                                <td>{{ $ttp->DELIVERY_DATE }}</td>
                                                <td>{{ $ttp->ORIGIN_CODE }}</td>
                                                <td>{{ $ttp->DESTINATION_CODE }}</td>
                                                @if ($ttp->DELIVERY_STATUS = "Delivered")
                                                    <td class="font-green-meadow">{{ $ttp->DELIVERY_STATUS }}</td>
                                                @else
                                                    <td class="font-yellow-lemon">{{ $ttp->DELIVERY_STATUS }}</td>
                                                @endif
                                                @if ($ttp->PROOF_OF_DELIVERY = "Delivered")
                                                    <td class="font-green-meadow">{{ $ttp->PROOF_OF_DELIVERY }}</td>
                                                @else
                                                    <td class="font-yellow-lemon">{{ $ttp->PROOF_OF_DELIVERY }}</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    <!-- <div class="text-center">
                                        <ul class="pagination pagination">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:;"> 1 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2 </a>
                                            </li>
                                            <li>
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
                                    </div> -->
                                @else
                                    </table>
                                    <h3 class="text-center"> No TTP Found
                                        <!-- <small>Semua TTP Bakal ada disini</small> -->
                                    </h3>
                                @endif
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
