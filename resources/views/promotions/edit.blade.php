@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ trans('messeage.editPromotion') }}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-xs-12 col-sm-5">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['method' => 'POST', 'route' => ['promotion.getEdit', $data->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::label(trans('messeage.discount')) !!}
                            {!! Form::number('discount', "$data->discount", ['class' => 'form-control']) !!}
                        </div>
                        {{ $data->start_date }}
                        <div class="form-group">
                            {!! Form::label(trans('messeage.startDay')) !!}
                            {!! Form::date('start_date', $data->start_date, ['class' => 'form-control']) !!}
                        </div>   
                        <div class="form-group">
                            {!! Form::label(trans('messeage.endDay')) !!}
                            {!! Form::date('end_date', $data->end_date, ['class' => 'form-control', 'placeholder' => trans('messeage.endDay')]) !!}
                        </div>
                        {!! Form::button(trans('messeage.update'), ['class' => 'btn btn-success', 'data-loading-text' => "<i class='fa fa-cog fa-spin fa-fw'></i> Processing...", 'type' => 'submit']) !!}         
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
