<x-admin-layout>
    <div class="w-full max-w-[1280px] mx-auto p-1 flex flex-col gap-5">
        <div>
            <livewire:orders.edit-order :order="$order" />
        </div>
        <div>
            <livewire:orders.trackings-order :order="$order" />
        </div>
    </div>
</x-admin-layout>
