@extends('layouts.app')

@section('title', $conference->title)

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">{{ $conference->title }}</h2>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <h5>{{ __('messages.description') }}</h5>
                    <p>{{ $conference->description }}</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h5>{{ __('messages.details') }}</h5>
                        <table class="table table-bordered">
                            <tr>
                                <th>{{ __('messages.date') }}</th>
                                <td>{{ $conference->date->format('Y-m-d') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('messages.address') }}</th>
                                <td>{{ $conference->address }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('messages.city') }}</th>
                                <td>{{ $conference->city }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('messages.participants_count') }}</th>
                                <td>{{ $conference->participants_count }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
                    {{ __('messages.back') }}
                </a>

                @auth
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-warning">
                            {{ __('messages.edit') }}
                        </a>

                        <form action="{{ route('conferences.destroy', $conference) }}"
                              method="POST"
                              class="d-inline"
                              id="delete-form-{{ $conference->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                    class="btn btn-danger"
                                    onclick="confirmDelete({{ $conference->id }}, '{{ $conference->title }}')">
                                {{ __('messages.delete') }}
                            </button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
