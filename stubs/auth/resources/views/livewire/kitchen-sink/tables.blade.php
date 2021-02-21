@section('content')
    <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
        <x-part.sidebar-desktop />

        <x-part.sidebar-mobile />

        <div class="flex flex-col flex-1">
            <x-part.header />

            <main class="h-full pb-16 overflow-y-auto">
                <!-- Remove everything INSIDE this div to a really blank page -->
                <div class="container px-6 mx-auto grid">
                    <h2
                        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                    >
                        It's table page
                    </h2>
                </div>
            </main>
        </div>
    </div>
@endsection
<div>
    {{-- Success is as dangerous as failure. --}}
</div>
