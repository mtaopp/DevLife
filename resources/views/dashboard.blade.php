<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>display: flex;
    justify-content: space-between;
    flex-direction: column;
    grid-row: 1/3;
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 border-b">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
