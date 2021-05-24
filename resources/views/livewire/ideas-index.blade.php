<div>
    {{-- Filters --}}
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category">Category</option>
                <option value="Category">Category</option>
                <option value="Category">Category</option>
                <option value="Category">Category</option>
                <option value="Category">Category</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter">Filter</option>
                <option value="Filter">Filter</option>
                <option value="Filter">Filter</option>
                <option value="Filter">Filter</option>
                <option value="Filter">Filter</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl border-none 
                                                                placeholder-gray-900 bg-white px-4 py-2  pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                        stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    {{-- End Filters --}}

    {{-- Idea cards --}}
    <div class="ideas-container space-y-6 my-8">
        @foreach ($ideas as $idea)
            <livewire:idea-index :key='$idea->id' :idea='$idea' :votesCount='$idea->votes_count' />
        @endforeach
    </div>
    {{-- End Idea cards --}}

    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</div>