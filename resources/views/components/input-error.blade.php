@props(['messages'])

@if ($messages)
@foreach ((array) $messages as $message)
<p {{ $attributes->merge([
            'role' => 'alert',
            'class' => 'feedback danger',
            'id' => 'danger'
        ])
    }}>
    <i {{ $attributes->merge([
            'class' => 'fas fa-times-circle',
            'aria-hidden' => 'true'
        ])
    }}></i>
    {{ $message }}
</p>
<br />
@endforeach
@endif
