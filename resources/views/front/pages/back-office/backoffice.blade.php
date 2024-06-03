<x-app-layout>
    <div class="flex">
        <div class="w-1/4">
            @include('dashboard')
        </div>
        <div class="w-3/4 py-12">
            <div class="admin-panel">
                @livewire('admin.products')
                @livewire('admin.users')
            </div>
        </div>
    </div>
</x-app-layout>
