@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ trans('messeage.addPromotion') }}</h2>
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
                    {!! Form::open(['method' => 'POST', 'rote' => 'promotion.getAdd', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label(trans('messeage.discount')) !!}
                        {!! Form::number('discount', '', ['class' => 'form-control', 'value' => "old('discount')"]) !!}
                        @if ($errors->has('discount'))
                            <span class="help-block">{{ $errors->first('discount') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label(trans('messeage.startDay')) !!}
                        {!! Form::date('start_date', '', ['class' => 'form-control', 'placeholder' => trans('messeage.startDay'), 'value' => "old('start_date')" ]) !!}
                    </div>   
                    <div class="form-group">
                        {!! Form::label(trans('messeage.endDay')) !!}
                        {!! Form::date('end_date', '', ['class' => 'form-control', 'placeholder' => trans('messeage.endDay'), 'value' => "old('end_date')" ]) !!}
                    </div>
                    {!! Form::button(trans('messeage.add'), ['class' => 'btn btn-success', 'data-loading-text' => "<i class='fa fa-cog fa-spin fa-fw'></i> Processing...", 'type' => 'submit']) !!}
                    {!! Form::close() !!}         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
