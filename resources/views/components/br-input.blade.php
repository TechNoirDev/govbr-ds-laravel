@props(['messages'])

@if ($messages)
    @foreach ((array) $messages as $message)
        <div {{ $attributes->merge([
                'class' => 'br-input danger',
            ])
        }}>
    @endforeach
@else
    <div {{ $attributes->merge([
            'class' => 'br-input input-button',
        ])
     }}>
@endif
