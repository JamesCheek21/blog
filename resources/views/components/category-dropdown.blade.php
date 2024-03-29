{{-- @php
    ddd(request()->input("category") == $categories[0]->slug)
@endphp --}}
<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left lg:inline-flex flex">
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
        </button>
    </x-slot>
    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->input() == null">
        {{-- @php
            ddd(request()->input() == null)
        @endphp --}}
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item
        href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->input('category') == $category->slug"
        >
            {{ucwords($category->name)}}
        </x-dropdown-item>
    @endforeach
</x-dropdown>

