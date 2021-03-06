@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('home'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header font-weight-bold">{{ __('messages.home') }}</div>

                <div class="card-body">
                    {{ __('messages.welcome') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection