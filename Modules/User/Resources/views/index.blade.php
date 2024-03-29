@extends('user::layouts.master')

@section('content')
    <h1>Hello World</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <p>
        This view is loaded from module: {!! config('user.name') !!}
    </p>
@endsection
