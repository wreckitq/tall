<ul class="mt-6">
    <x-part.menu-item name="Dashboard" url="{{ route('dashboard') }}">
        <x-slot name="icon">
            <x-icons.outline.home class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
        </x-slot>
    </x-part.menu-item>

    <x-part.menu-item name="Forms" url="#">
        <x-slot name="icon">
            <x-icons.outline.clipboard-list class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
        </x-slot>
    </x-part.menu-item>

    <x-part.menu-item name="Cards" url="#">
        <x-slot name="icon">
            <x-icons.outline.collection class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
        </x-slot>
    </x-part.menu-item>

    <x-part.menu-item name="Charts" url="#">
        <x-slot name="icon">
            <x-icons.outline.chart-pie class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
        </x-slot>
    </x-part.menu-item>

    <x-part.menu-item name="Buttons" url="#">
        <x-slot name="icon">
            <x-icons.outline.cursor-click class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
        </x-slot>
    </x-part.menu-item>

    <x-part.menu-item name="Modals" url="#">
        <x-slot name="icon">
            <x-icons.outline.duplicate class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
        </x-slot>
    </x-part.menu-item>

    <x-part.menu-item name="Tables" url="#">
        <x-slot name="icon">
            <x-icons.outline.menu class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
        </x-slot>
    </x-part.menu-item>

    {{--
        <!-- Menu with 2 level -->
        <li class="relative px-6 py-3">
        <button
            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            @click="togglePagesMenu"
            aria-haspopup="true"
        >
            <span class="inline-flex items-center">
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                </svg>
                <span class="ml-4">Pages</span>
            </span>
            <svg
                class="w-4 h-4"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </button>
        <template x-if="isPagesMenuOpen">
            <ul
                x-transition:enter="transition-all ease-in-out duration-300"
                x-transition:enter-start="opacity-25 max-h-0"
                x-transition:enter-end="opacity-100 max-h-xl"
                x-transition:leave="transition-all ease-in-out duration-300"
                x-transition:leave-start="opacity-100 max-h-xl"
                x-transition:leave-end="opacity-0 max-h-0"
                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                aria-label="submenu"
            >
                <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                >
                    <a class="w-full" href="./login.html">Login</a>
                </li>
                <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                >
                    <a class="w-full" href="./create-account.html">
                        Create account
                    </a>
                </li>
                <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                >
                    <a class="w-full" href="./forgot-password.html">
                        Forgot password
                    </a>
                </li>
                <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                >
                    <a class="w-full" href="./404.html">404</a>
                </li>
                <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                >
                    <a class="w-full" href="./blank.html">Blank</a>
                </li>
            </ul>
        </template>
    </li> --}}
</ul>
