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
                    <small>Menampilkan semua TTP</small>
                </h3>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-xs-2">
                        <div class="form-group">
                            <select class="form-control">
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
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
                            <tbody class="text-center">
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT.DHL Express </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600022 </a></td>
                                    <td> PT.DHL Express </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> TIKI JNE </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> TIKI JNE </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT LION EXPRESS </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-green-meadow"> Received </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT TIKI JNE </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT East West Seed </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Madfaka </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Kupi </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-green-meadow"> Received </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Kupi </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Ptah </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Ptah </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> SOL </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT TIKI JNE </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> SOL </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT East West Seed </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 160011 </a></td>
                                    <td> PT Clint East Wood </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Dono </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Clint East Wood </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-green-meadow"> Received </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Jumobo </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Clint East Wood </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Tiki JNE </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT LION EXPRESS </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT TIKI JNE </td>
                                    <td> 19-05-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT TIKI JNE </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT Clint East Wood </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-green-meadow"> Delivered </td>
                                    <td class="font-green-meadow"> Received </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><a href="#"> 1600006 </a></td>
                                    <td> PT East West Seed </td>
                                    <td> 19-02-2016 </td>
                                    <td> JKT </td>
                                    <td> DPK </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                    <td class="font-yellow-lemon"> Pending </td>
                                </tr>
                            </tbody>
                        </table>
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
