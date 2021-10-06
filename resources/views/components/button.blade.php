<button {{ $attributes->merge(['type' => 'submit', 'class' => 'mainBtn']) }}>
    {{ $slot }}
</button>
