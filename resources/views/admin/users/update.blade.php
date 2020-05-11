@extends('layouts.app')

@section("title", $data['user']->getName())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">{{ $data['user']->getName() }}</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('admin.users.update', $data['user']->getId()) }}"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label>{{ __('users.name') }}</label>
                            <input class="form-control" type="text" name="name"
                                value="{{ $data['user']->getName() }}" />
                        </div>

                        <div class="form-group">
                            <label>{{ __('users.email') }}</label>
                            <input class="form-control" type="text" name="email"
                                value="{{ $data['user']->getEmail() }}" />
                        </div>

                        <div class="form-group">
                            <label>{{ __('users.dateOfBirth') }}</label>
                            <input class="form-control" type="text" name="dateOfBirth"
                                value="{{ $data['user']->getDateOfBirth() }}" />
                        </div>

                        <div class="form-group">
                            <label>{{ __('users.wallet') }}</label>
                            <input class="form-control" type="text" name="wallet"
                                value="{{ $data['user']->getWallet() }}" />
                        </div>

                        <input class="btn btn-primary" type="submit" value="{{ __('buttons.save') }}" />
                        <a class="btn btn-light" href="{{ route('admin.products.index') }}">{{ __('buttons.back') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection