<div class="form_box">
    <label for="{{ $name }}" class="form-label mb-2 font-18 font-heading fw-600">
        {{ $label }}
        @if ($required)
            <code>*</code>
        @endif
    </label>
    <div class="">
        <select {{ $attributes->merge(['class' => 'common-input border ']) }} name="{{ $name }}">
            <option value="">{{ __('Select') }}</option>
            {{ $slot }}
        </select>
    </div>
</div>
