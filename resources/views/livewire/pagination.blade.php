<div class="flex flex-wrap gap-4 justify-between items-center py-4 select-none">
  <div class="text-sm">
    Page # <span class="lining-nums font-bold">{{ $this->getCurrentPage() }}</span>
  </div>

  <div>
    @if ($rows->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center gap-4 justify-between">
      <span>
        @if ($rows->onFirstPage())
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
          {!! __('pagination.previous') !!}
        </span>
        @else
        <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
          {!! __('pagination.previous') !!}
        </button>
        @endif
      </span>

      <span>
        @if ($rows->hasMorePages())
        <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
          {!! __('pagination.next') !!}
        </button>
        @else
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
          {!! __('pagination.next') !!}
        </span>
        @endif
      </span>
    </nav>
    @endif
  </div>

</div>