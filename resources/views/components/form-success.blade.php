@props(['value'])
<span {{ $attributes->merge([
            'role' => 'alert',
            'class' => 'feedback success mr-1 rounder-md',
            'id' => 'success',
            'x-data' => '{ show: true }',
            'x-show'=>'show',
            'x-transition',
            'x-init' => 'setTimeout(() => show = false, 2000)'
        ])
    }}>
    <i {{ $attributes->merge([
            'class' => 'fas fa-check-circle',
            'aria-hidden' => 'true'
        ])
    }}></i>
    {{ $value ?? $slot }}
</span>
<br />
