@extends('layouts.app')

@section('title', __('conferences.add_new'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="mb-4">{{ __('conferences.add_new') }}</h1>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('conferences.store') }}">
                    @csrf

                    @include('conferences._form', ['conference' => null])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
