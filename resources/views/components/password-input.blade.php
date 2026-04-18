@props(['name', 'id' => null, 'placeholder' => '', 'required' => false])

<div x-data="{ show: false }" class="relative">

    <input :type="show ? 'text' : 'password'" name="{{ $name }}" id="{{ $id ?? $name }}"
        placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => ' w-full px-4 py-2.5 pr-10 border border-gray-300 rounded-lg text-sm text-gray-800 placeholder-gray-400 shadow-sm focus:border-[#B0393F] focus:ring-2 focus:ring-[#B0393F]/20 focus:outline-none transition duration-150 ease-in-out',]) }} />

    <!-- Botón -->
    <button type="button" @click="show = !show"
        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-[#B0393F] transition">
        <!-- Ojo -->
        <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>

        <!-- Ojo tachado -->
        <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.27-2.943-9.542-7a9.956 9.956 0 012.21-3.592M6.223 6.223A9.956 9.956 0 0112 5c4.478 0 8.27 2.943 9.542 7a9.97 9.97 0 01-4.043 5.135M15 12a3 3 0 00-3-3m0 0a3 3 0 00-3 3m3-3v.01M3 3l18 18" />
        </svg>
    </button>

</div>
