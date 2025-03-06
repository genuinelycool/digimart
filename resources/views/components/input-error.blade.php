@props(['message'])

@if ($message)
    <p {{ $attributes }} class="text-danger">{{ $message }}</p>
@endif
