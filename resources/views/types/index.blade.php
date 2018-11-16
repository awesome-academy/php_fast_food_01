@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ trans('messeage.promotionList') }}</h2>
                <div class="x_button_helper">
                    <a href="{{ route('type.getAdd') }}" class="btn btn-primary btn-xs m_l_10"><i class="fa fa-plus"></i> {{ trans('messeage.add') }}</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ( $types->count() > 0 )
                <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>{{ trans('messeage.number') }}</th>
                            <th>{{ trans('messeage.name') }}</th>
                            <th>{{ trans('messeage.description') }}</th>
                            <th>{{ trans('messeage.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                        <tr>
                            <td></td>
                            <td><a href="#" class="text-primary">{{ $type->name }}</a></td>
                            <td>{!! $type->description !!}</td>
                            <td>
                                <a href="#" class="btn btn-success btn-xs" title={{ trans('messeage.detail') }}><i class="fa fa-eye"></i></a>
                                <a href="{{ route('type.getEdit', $type->id) }}" class="btn btn-warning btn-xs" title={{ trans('messeage.edit') }}><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm_delete('{{ trans('messeage.status_del') }}')" href="{{ route('type.getDelete', $type->id) }}"><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_confirm.{{ route('type.getDelete', $type->id) }}" title={{ trans('messeage.delete') }}><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <blockquote>
                    <p>{{ trans('messeage.noti') }}</p>
                </blockquote>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
