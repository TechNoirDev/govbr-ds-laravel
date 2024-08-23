<button {{ $attributes->merge([
            'type' => 'submit',
            'class' => 'br-button primary mr-3'
        ])
    }}
>
    {{ $slot }}
</button>
