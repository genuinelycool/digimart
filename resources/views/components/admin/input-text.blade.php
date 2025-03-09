<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type == null ? 'text' : $type }}" {{ $attributes->merge(['class' => 'form-control']) }} placeholder="{{ $placeholder }}"
        value="{{ $value }}" name="{{ $name }}" />
    <x-input-error :message="$errors->first($name)" />
</div>
