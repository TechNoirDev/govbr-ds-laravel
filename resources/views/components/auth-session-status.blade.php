@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-weight-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif
