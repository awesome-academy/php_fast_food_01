@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ trans('messeage.oderDetail') }}</h2><br>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($orders->count() > 0 )
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>{{ trans('messeage.number') }}</th>
                                <th>{{ trans('messeage.names') }}</th>
                                <th>{{ trans('messeage.phone') }}</th>
                                <th>{{ trans('messeage.address') }}</th>
                                <th>{{ trans('messeage.oder_date') }}</th>
                                <th>{{ trans('messeage.status') }}</th>
                                <th>{{ trans('messeage.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td></td>
                                <td><a href="#" class="text-primary">{{ $order->full_name }}</a></td>
                                <td><a href="#" class="text-primary">{{ $order->phone }}</a></td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->date }}</td>
                                <td>
                                    @if ($order->status == 1)
                                    {{ trans('messeage.processed') }}
                                    @elseif ($order->status == 2)
                                    {{ trans('messeage.cancel') }}
                                    @elseif ($order->status == 3)
                                    {{ trans('messeage.cancel_guest') }}
                                    @else
                                    {{ trans('messeage.waiting') }}
                                    @endif
                                </td>
                                    <td>
                                        <a href="{{ route('order.getDetail', $order->id) }}" class="btn btn-success btn-xs" title="Chi tiết"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('order.getEdit', $order->id) }}" class="btn btn-warning btn-xs" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_confirm.{{ $order->id }}" title="Xóa"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <blockquote>
                        <p>{{ trans('messeage.status_order') }}</p>
                    </blockquote>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
