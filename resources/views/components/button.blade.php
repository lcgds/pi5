<button {{ $attributes->merge(['type' => 'submit', 'class' => 'br-button primary block mb-4']) }}>
    {{ $slot }}
</button>
