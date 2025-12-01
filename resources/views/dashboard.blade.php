@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row mb-4">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1>{{ __('general.welcome') }}, {{ auth()->user()->name }}!</h1>
                <p class="lead text-muted">{{ __('general.dashboard_description') }}</p>
            </div>
            <a href="{{ route('conferences.create') }}" class="btn btn-primary">
                {{ __('conferences.add_new') }}
            </a>
        </div>
    </div>
</div>
@endsection
