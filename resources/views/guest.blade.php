@extends('layouts.app')

@section('title', __('conferences.list'))

@section('content')
<h1 class="mb-4">{{ __('conferences.list') }}</h1>

@if($conferences->isEmpty())
    <div class="alert alert-info">
        {{ __('conferences.no_conferences') }}
    </div>
@else
    <div class="row">
        @foreach($conferences as $conference)
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $conference->title }}</h5>
                        <p class="card-text text-muted">
                            <small>
                                <i class="bi bi-calendar"></i> {{ $conference->date->format('Y-m-d') }}
                                <br>
                                <i class="bi bi-geo-alt"></i> {{ $conference->address }}
                                @if($conference->participants)
                                    <br>
                                    <i class="bi bi-people"></i> {{ $conference->participants }} {{ __('conferences.fields.participants') }}
                                @endif
                            </small>
                        </p>
                        <p class="card-text">{{ Str::limit($conference->description, 150) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
        {{ $conferences->links() }}
    </div>
@endif
@endsection
