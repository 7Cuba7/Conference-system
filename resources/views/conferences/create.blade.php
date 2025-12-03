@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">{{ __('messages.create_conference') }}</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('conferences.store') }}">
                    @csrf
                    @include('conferences._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
