@extends('layouts.app')

@section("title", __('comments.comments'))
@section('breadcrumbs', Breadcrumbs::render('showComments',$data['product']))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">{{ $data['product']->getName() }} -
                    {{ __('comments.comments') }}</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('comments.id') }}</th>
                                <th>{{ __('comments.content') }}</th>
                                <th>{{ __('comments.date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data["comments"] as $comment)
                            <tr>
                                <td>{{ $comment->getId() }}</td>
                                <td> {{ $comment->getContent() }}</td>
                                <td> {{ $comment->getCreated() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-secondary"
                        href="{{ route('product.show', $data['product']->getId()) }}">{{ __('buttons.back') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection