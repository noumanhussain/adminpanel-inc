<div class="rounded-md shadow-sm">
    <input
        wire:model.defer="{{ $component->getTableName() }}.filters.{{ $filter->getKey() }}"
        wire:key="{{ $component->getTableName() }}-filter-{{ $filter->getKey() }}"
        id="{{ $component->getTableName() }}-filter-{{ $filter->getKey() }}"
        type="number"
        @if($filter->hasConfig('min')) min="{{ $filter->getConfig('min') }}" @endif
        @if($filter->hasConfig('max')) max="{{ $filter->getConfig('max') }}" @endif
        class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:text-white dark:border-gray-600"
    />
</div>