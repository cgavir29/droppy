@extends('layouts.app')

@section("title", $data['product']->getName())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header font-weight-bold">{{ $data['product']->getName() }}</div>
                <div class="card-body">
                    <b>{{ __('products.description') }}: </b> {{ $data['product']->getDescription() }}<br />
                    <b>{{ __('products.image') }}: </b> <img
                        src="{{ URL::asset('storage/' . $data['product']->getImage()) }}"><br />
                    <b>{{ __('categories.category') }}: </b> {{ $data['category']->getName() }}<br />
                    <b>{{ __('products.stock') }}: </b> {{ $data['product']->getStock() }} <br />
                    <b>{{ __('products.price') }}: </b> {{ $data['product']->getPrice() }} <br />
                    <br />

                    <form method="POST" action="{{ route('shoppingCart.store', $data['product']->getId()) }}">
                        @csrf
                        <a class="btn btn-primary"
                            href="{{ route('comment.create', $data['product']->getId()) }}">{{ __('comments.createComment') }}</a>
                        <a class="btn btn-info"
                            href="{{ route('comment.index', $data['product']->getId()) }}">{{ __('comments.viewComments') }}</a>
                        <input class="btn btn-warning" type="submit" value="{{ __('shoppingCart.addToCart') }}" />
                        <a class="btn btn-success"
                            href="{{ route('product.edit', $data['product']->getId()) }}">{{ __('buttons.edit') }}</a>
                        <a class="btn btn-secondary" href="{{ route('product.index') }}">{{ __('buttons.back') }}</a>
                    </form>

                    <form method="POST" action="{{ route('product.destroy', $data['product']->getId()) }}">
                        @method('DELETE')
                        @csrf
                        <br /><br />
                        <input class="btn btn-danger" type="submit" value="{{ __('buttons.delete') }}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection