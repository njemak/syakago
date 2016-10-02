@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- TTP List -->
            @if (count($TTP) > 0)
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
                                @foreach ($TTP as $ttp_item)
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
    </div>
@endsection
