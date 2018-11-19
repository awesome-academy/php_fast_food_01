@extends('stores.layout')

@section('store_title', 'Create a new store')

@section('store_content')
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade in">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['method' => 'POST', 'route' => 'store.getAdd', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('name', trans('messeage.storeName')) !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Please enter store']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', trans('messeage.address')) !!}
            {!! Form::text('address', old('description'), ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Please enter address']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone', trans('messeage.phone')) !!}
            {!! Form::text('phone', old('description'), ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Please enter phone']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', trans('messeage.description')) !!}
            {!! Form::text('description', old('description'), ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Please enter description']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('avatar', trans('messeage.avatar')) !!}
            <div class="img-preview" >
                <img src="/img/pizza.jpg" alt="" class="img-thumbnail">
            </div>
            {!! Form::file('avatar', ['class' => 'need_preview', 'id' => 'avatar', 'data-img' => '.img-preview img', 'accept' => 'image/*']) !!}
        </div>
        {!! Form::button(trans('messeage.add'), ['class' => 'btn btn-primary', 'type' => 'submit', 'data-loading-text' => "<i class='fa fa-cog fa-spin fa-fw'></i> Processing..."]) !!}
    {!! Form::close() !!}
@endsection
