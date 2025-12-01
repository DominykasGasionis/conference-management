<div class="mb-3">
    <label for="title" class="form-label">{{ __('conferences.fields.title') }}</label>
    <input
        type="text"
        class="form-control @error('title') is-invalid @enderror"
        id="title"
        name="title"
        value="{{ old('title', $conference->title ?? '') }}"
        required
    >
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">{{ __('conferences.fields.description') }}</label>
    <textarea
        class="form-control @error('description') is-invalid @enderror"
        id="description"
        name="description"
        rows="4"
        required
    >{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="date" class="form-label">{{ __('conferences.fields.date') }}</label>
            <input
                type="date"
                class="form-control @error('date') is-invalid @enderror"
                id="date"
                name="date"
                value="{{ old('date', isset($conference) ? $conference->date->format('Y-m-d') : '') }}"
                required
            >
            @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="address" class="form-label">{{ __('conferences.fields.address') }}</label>
            <input
                type="text"
                class="form-control @error('address') is-invalid @enderror"
                id="address"
                name="address"
                value="{{ old('address', $conference->address ?? '') }}"
                required
            >
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="mb-3">
    <label for="participants" class="form-label">{{ __('conferences.fields.participants') }}</label>
    <input
        type="number"
        class="form-control @error('participants') is-invalid @enderror"
        id="participants"
        name="participants"
        min="0"
        value="{{ old('participants', $conference->participants ?? '') }}"
    >
    @error('participants')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary">
        {{ isset($conference) ? __('conferences.buttons.update') : __('conferences.buttons.create') }}
    </button>
    <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
        {{ __('conferences.buttons.cancel') }}
    </a>
</div>
