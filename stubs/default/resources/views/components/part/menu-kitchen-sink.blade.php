<li class="relative px-6 py-3" id="kitchen-sink-menu" data-is-active="{{ request()->is(
    str_replace(config('app.url') . '/', '', 'kitchen-sink/*')
) }}">
    <button
        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        @click="toggleKitchenSinkMenu"
        aria-haspopup="true"
    >
        <span class="inline-flex items-center">
            <x-icons.outline.academic-cap class="w-5 h-5" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"/>
            <span class="ml-4">Kitchen Sink</span>
        </span>

        <x-icons.outline.chevron-left class="w-4 h-4" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-show="!isKitchenSinkMenuOpen" x-cloak/>
        <x-icons.outline.chevron-down class="w-4 h-4" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-show="isKitchenSinkMenuOpen" x-cloak/>
    </button>

    <template x-if="isKitchenSinkMenuOpen">
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
                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->is(
                    str_replace(config('app.url') . '/', '', 'kitchen-sink/tables')
                ) ? 'text-gray-800 dark:text-gray-100' : '' }}"
            >
                <a class="w-full" href="{{ route('kitchen-sink.tables') }}">Tables</a>
            </li>
            <li
                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->is(
                    str_replace(config('app.url') . '/', '', 'kitchen-sink/forms')
                ) ? 'text-gray-800 dark:text-gray-100' : '' }}"
            >
                <a class="w-full" href="{{ route('kitchen-sink.forms') }}">Forms</a>
            </li>
            <li
                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->is(
                    str_replace(config('app.url') . '/', '', 'kitchen-sink/cards')
                ) ? 'text-gray-800 dark:text-gray-100' : '' }}"
            >
                <a class="w-full" href="{{ route('kitchen-sink.cards') }}">Cards</a>
            </li>
            <li
                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->is(
                    str_replace(config('app.url') . '/', '', 'kitchen-sink/charts')
                ) ? 'text-gray-800 dark:text-gray-100' : '' }}"
            >
                <a class="w-full" href="{{ route('kitchen-sink.charts') }}">Charts</a>
            </li>
            <li
                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->is(
                    str_replace(config('app.url') . '/', '', 'kitchen-sink/buttons')
                ) ? 'text-gray-800 dark:text-gray-100' : '' }}"
            >
                <a class="w-full" href="{{ route('kitchen-sink.buttons') }}">Buttons</a>
            </li>
            <li
                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ request()->is(
                    str_replace(config('app.url') . '/', '', 'kitchen-sink/modals')
                ) ? 'text-gray-800 dark:text-gray-100' : '' }}"
            >
                <a class="w-full" href="{{ route('kitchen-sink.modals') }}">Modals</a>
            </li>
        </ul>
    </template>
</li>
