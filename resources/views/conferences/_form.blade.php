<!-- Title Field -->
<div class="mb-3">
    <label for="title" class="form-label">{{ __('messages.title') }} <span class="text-danger">*</span></label>
    <input type="text"
           class="form-control @error('title') is-invalid @enderror"
           id="title"
           name="title"
           value="{{ old('title', $conference->title ?? '') }}"
           required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="mb-3">
    <label for="description" class="form-label">{{ __('messages.description') }} <span class="text-danger">*</span></label>
    <textarea class="form-control @error('description') is-invalid @enderror"
              id="description"
              name="description"
              rows="5"
              required>{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Date Field -->
<div class="mb-3">
    <label for="date" class="form-label">{{ __('messages.date') }} <span class="text-danger">*</span></label>
    <input type="date"
           class="form-control @error('date') is-invalid @enderror"
           id="date"
           name="date"
           value="{{ old('date', isset($conference) ? $conference->date->format('Y-m-d') : '') }}"
           required>
    @error('date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Address Field -->
<div class="mb-3">
    <label for="address" class="form-label">{{ __('messages.address') }} <span class="text-danger">*</span></label>
    <input type="text"
           class="form-control @error('address') is-invalid @enderror"
           id="address"
           name="address"
           value="{{ old('address', $conference->address ?? '') }}"
           required>
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- City Field -->
<div class="mb-3">
    <label for="city" class="form-label">{{ __('messages.city') }} <span class="text-danger">*</span></label>
    <input type="text"
           class="form-control @error('city') is-invalid @enderror"
           id="city"
           name="city"
           value="{{ old('city', $conference->city ?? '') }}"
           required>
    @error('city')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Participants Count Field -->
<div class="mb-3">
    <label for="participants_count" class="form-label">{{ __('messages.participants_count') }} <span class="text-danger">*</span></label>
    <input type="number"
           class="form-control @error('participants_count') is-invalid @enderror"
           id="participants_count"
           name="participants_count"
           value="{{ old('participants_count', $conference->participants_count ?? 0) }}"
           min="0"
           required>
    @error('participants_count')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="alert alert-info">
    {{ __('messages.all_fields_required') }}
</div>

<!-- Form Actions -->
<div class="d-flex justify-content-between">
    <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
        {{ __('messages.cancel') }}
    </a>
    <button type="submit" class="btn btn-primary">
        {{ __('messages.save') }}
    </button>
</div>
