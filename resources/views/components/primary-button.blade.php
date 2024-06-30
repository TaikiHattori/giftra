<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block w-full p-3 mt-8 text-white text-center text-base font-semibold leading-6 rounded-full hover:bg-orange-800 transition-all duration-700 bg-orange-600 shadow-sm mb-11']) }}>
    {{ $slot }}
</button>
