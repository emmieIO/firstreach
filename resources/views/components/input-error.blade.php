@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'fs-xs text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <small>{{ $message }}</small>
        @endforeach
    </div>
@endif
