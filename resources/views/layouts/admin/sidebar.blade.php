<?php
$views = [
    [
        'name' => 'Appointments',
        'href' => '#',
        'icon' => 'fa-solid fa-calendar-check',
    ],
    [
        'name' => 'Employees',
        'href' => '#',
        'icon' => 'fa-solid fa-user-gear',
    ],
    [
        'name' => 'Services',
        'href' => '#',
        'icon' => 'fa-solid fa-briefcase',
    ],
];

?>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
        viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-4 pt-20 py-4 overflow-y-auto bg-white border-b border-gray-100">
        <ul class="space-y-2 font-medium">
            @foreach ($views as $view)
                <li class="rounded-base">
                    <a href="{{ $view['href'] }}"
                        class="flex items-center px-3 py-2 text-gray-600 rounded-base transition-all duration-300 ease-in-out hover:bg-gray-100 hover:text-[#B0393F] active:scale-[0.98] group">
                        <i class="{{ $view['icon'] }} transition-colors duration-300 group-hover:text-[#B0393F]"></i>
                        <span class="ms-3 font-medium">{{ $view['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
