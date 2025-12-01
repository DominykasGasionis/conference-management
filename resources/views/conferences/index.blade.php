@extends('layouts.app')

@section('title', __('conferences.list'))

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>{{ __('conferences.list') }}</h1>
    <a href="{{ route('conferences.create') }}" class="btn btn-primary">
        {{ __('conferences.add_new') }}
    </a>
</div>

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
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('conferences.show', $conference) }}" class="btn btn-sm btn-outline-primary">
                                {{ __('conferences.view') }}
                            </a>

                            @can('update', $conference)
                                <div>
                                    <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-sm btn-outline-secondary">
                                        {{ __('conferences.edit') }}
                                    </a>
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-danger"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $conference->id }}"
                                    >
                                        {{ __('conferences.delete') }}
                                    </button>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>

            @can('delete', $conference)
                <div class="modal fade" id="deleteModal{{ $conference->id }}" tabindex="-1">
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
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
        {{ $conferences->links() }}
    </div>
@endif
@endsection
