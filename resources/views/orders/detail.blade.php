@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ trans('messeage.oderDetail') }}</h2><br>
                <div class="panel panel-body">
                    <ul>
                        <li>{{ trans('messeage.name') }} : {{ $order->full_name }}</li>
                        <li>{{ trans('messeage.phone') }} : {{ $order->phone }}</li>
                        <li>{{ trans('messeage.address') }} : {{ $order->address }}</li>
                    </ul>    
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ( $order_detail->count() > 0 )
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>{{ trans('messeage.number') }}</th>
                                <th>{{ trans('messeage.food_name') }}</th>
                                <th>{{ trans('messeage.quantity') }}</th>
                                <th>{{ trans('messeage.prices') }}</th>
                                <th>{{ trans('messeage.priceSale') }}</th>
                                <th>{{ trans('messeage.total') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_detail as $order)
                                <tr>
                                    <td></td>
                                    <td><a href="#" class="text-primary">{{ $order->food->name }}</a></td>
                                    <td><a href="#" class="text-primary">{{ $order->quantity }}</a></td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ isset($order->food->promotion->discount) ? $order->food->promotion->discount.'%': " "}}</td>
                                    <td>
                                        @if (isset($order->food->promotion->discount))
                                            {{ number_format($order->quantity*$order->price*(100-$order->food->promotion->discount)/100,0,",",".") }}
                                        @else
                                            {{ number_format($order->quantity*$order->price,0,",",".") }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td colspan="6" class="text-right"><b>{{ trans('messeage.total') }} {{ number_format($total,0,",",".") }}</b></td>
                                </tr>
                        </tbody>
                    </table>
                @else
                    <blockquote>
                        <p>{{ trans('messeage.status_order') }}</p>
                    </blockquote>
                @endif
                {!! Form::open(['method' => 'POST', 'route' => ['order.getHandle', $order_id], 'enctype' => 'multipart/form-data', 'class' => 'pull-right']) !!}
                    <div class="form-group">
                        <label>{{ trans('messeage.geometry') }}</label>
                            <div>
                                <select class="select2_single form-control" tabindex="-1" name="status" data-placeholder="Status">
                                    <option value="{{ 1 }}">{{ trans('messeage.processed') }}</option> 
                                    <option value="{{ 2 }}">{{ trans('messeage.cancel') }}</option> 
                                </select>
                            </div>
                    </div>
                    {!! Form::button(trans('messeage.confirm'), ['type' => 'submit', 'class' => 'btn btn-success', 'data-loading-text' => "<i class='fa fa-cog fa-spin fa-fw'></i> Processing..."]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
