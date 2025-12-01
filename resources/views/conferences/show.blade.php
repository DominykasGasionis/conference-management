@extends('layouts.app')

@section('title', $conference->title)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h1>{{ $conference->title }}</h1>
                <p class="text-muted">
                    <i class="bi bi-calendar"></i> {{ $conference->date->format('Y-m-d') }}
                    <br>
                    <i class="bi bi-geo-alt"></i> {{ $conference->address }}
                    @if($conference->participants)
                        <br>
                        <i class="bi bi-people"></i> {{ $conference->participants }} {{ __('conferences.fields.participants') }}
                    @endif
                </p>
            </div>
            <div>
                @can('update', $conference)
                    <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-outline-secondary">
                        {{ __('conferences.edit') }}
                    </a>
                    <button
                        type="button"
                        class="btn btn-outline-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                    >
                        {{ __('conferences.delete') }}
                    </button>
                @endcan
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('conferences.fields.description') }}</h5>
                <p class="card-text">{{ $conference->description }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
                {{ __('conferences.buttons.back') }}
            </a>
        </div>

        @can('delete', $conference)
            <div class="modal fade" id="deleteModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('conferences.delete') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            {{ __('conferences.messages.confirm_delete_text') }}
                            <strong>{{ $conference->title }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                {{ __('conferences.buttons.cancel') }}
                            </button>
                            <form method="POST" action="{{ route('conferences.destroy', $conference) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    {{ __('conferences.buttons.confirm_delete') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
    </div>
</div>
@endsection
