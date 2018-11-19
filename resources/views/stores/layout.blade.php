@extends('layouts.auth')

@section('content')
    <div class="top {{ url()->current() == route('store.getAdd') ? 'flex' : '' }}">
        <div class="title">
            <h3>
                @yield('store_title')
            </h3>
        </div>
        @if ( url()->current() != route('store.getAdd'))
            <div class="ws_menu">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#profile" data-toggle="tab"><u>{{ trans('messeage.store_setting') }}</u></a></li>
                </ul>
            </div>
        @endif
    </div>
    <div class="main">
        @yield('store_content')
    </div>
@endsection
