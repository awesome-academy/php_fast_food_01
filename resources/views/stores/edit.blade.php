@extends('stores.layout')

@section('store_title', $data->name)

@section('store_content')

<div id="show-workspace">
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="profile">
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
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ session('status') }}
                </div>
            @endif
            {!! Form::open(['method' => 'POST', 'route' => ['store.getEdit', $data->id], 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('name', trans('messeage.storeName')) !!}
                    {!! Form::text('name', $data->name, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'your-restaurant-name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', trans('messeage.address')) !!}
                    {!! Form::text('address', $data->address, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Please enter address']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', trans('messeage.phone')) !!}
                    {!! Form::text('phone', $data->phone, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Please enter phone']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', trans('messeage.description')) !!}
                    {!! Form::text('description', $data->description, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Please enter description']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('avatar', trans('messeage.avatar')) !!}
                    <div class="img-preview">
                        <img src="/{{ config('image.paths.resource') }}/{{ $data->avatar }}" alt="" class="img-thumbnail">
                    </div>
                    {!! Form::file('avatar', ['class' => 'need_preview', 'id' => 'avatar', 'data-img' => '.img-preview img', 'accept' => 'image/*']) !!}
                </div>
                {!! Form::button(trans('messeage.update'), ['class' => 'btn btn-primary', 'type' => 'submit', 'data-loading-text' => "<i class='fa fa-cog fa-spin fa-fw'></i> Updating..."]) !!}
            {!! Form::close() !!}
            <hr>
        </div>   
    </div>        
</div>
    <div class="clearfix"></div>
@endsection
