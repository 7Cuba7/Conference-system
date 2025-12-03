@extends('layouts.app')

@section('title', __('messages.conferences_list'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>{{ __('messages.conferences_list') }}</h1>
            @auth
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('conferences.create') }}" class="btn btn-primary">
                        {{ __('messages.create_conference') }}
                    </a>
                @endif
            @endauth
        </div>

        @if($conferences->count() > 0)
            <div class="row">
                @foreach($conferences as $conference)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card conference-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $conference->title }}</h5>
                                <p class="card-text">{{ Str::limit($conference->description, 100) }}</p>

                                <ul class="list-unstyled">
                                    <li><strong>{{ __('messages.date') }}:</strong> {{ $conference->date->format('Y-m-d') }}</li>
                                    <li><strong>{{ __('messages.city') }}:</strong> {{ $conference->city }}</li>
                                    <li><strong>{{ __('messages.participants_count') }}:</strong> {{ $conference->participants_count }}</li>
                                </ul>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="{{ route('conferences.show', $conference) }}" class="btn btn-sm btn-info btn-action">
                                    {{ __('messages.view') }}
                                </a>

                                @auth
                                    @if(auth()->user()->isAdmin())
                                        <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-sm btn-warning btn-action">
                                            {{ __('messages.edit') }}
                                        </a>

                                        <form action="{{ route('conferences.destroy', $conference) }}"
                                              method="POST"
                                              class="d-inline"
                                              id="delete-form-{{ $conference->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete({{ $conference->id }}, '{{ $conference->title }}')">
                                                {{ __('messages.delete') }}
                                            </button>
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $conferences->links() }}
            </div>
        @else
            <div class="alert alert-info">
                {{ __('messages.no_conferences') }}
            </div>
        @endif
    </div>
</div>
@endsection
