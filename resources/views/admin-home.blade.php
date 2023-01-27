@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{__('messages.welcomto admin dashboard')}}
                    {{ __('messages.You are logged in!') }}<br><br>
                    <a class="btn btn-primary" href="{{route('post.create')}}" role="button">{{__('messages.Create Employees')}}</a>
                    <a class="btn btn-primary" href="{{route('post.index')}}" role="button">{{__('messages.index Employees')}}</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
