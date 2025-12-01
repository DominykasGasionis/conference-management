@extends('layouts.app')

@section('title', __('conferences.edit'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="mb-4">{{ __('conferences.edit') }}</h1>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('conferences.update', $conference) }}">
                    @csrf
                    @method('PUT')

                    @include('conferences._form', ['conference' => $conference])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
