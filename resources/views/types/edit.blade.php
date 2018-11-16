@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ trans('messeage.editType') }}</h2>
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
                    {!! Form::open(['method' => 'POST', 'route' => ['type.getEdit', $data->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label(trans('messeage.typeName')) !!}
                            {!! Form::text('name', $data->name, ['class' => 'form-control', 'placeholder' => trans('messeage.typeName')]) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('messeage.description')) !!}
                            {!! Form::textarea('description', $data->description, ['class' => 'ckeditor form-control', 'id' => 'editor1', 'rows' => 3, 'placeholder' => trans('messeage.description')])!!}
                            <script type="text/javascript">  
                                CKEDITOR.replace( 'editor1' );  
                            </script> 
                        </div> 
                        {!! Form::button(trans('messeage.update'), ['class' => 'btn btn-success', 'data-loading-text' => "<i class='fa fa-cog fa-spin fa-fw'></i> Processing...", 'type' => 'submit']) !!}         
                    {!! Form::close() !!}  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
