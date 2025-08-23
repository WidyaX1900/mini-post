<div class="w-1/2 p-3 border border-gray-700 rounded mb-8">
    <div class="flex justify-between mb-2">
        <div class="flex items-center">
            <div class="w-[40px] h-[40px] overflow-hidden rounded-[50%] me-2">
                <img src="https://placehold.co/600x400" alt="" class="w-full h-full object-cover object-center">
            </div>
            <h6 class="font-semibold">{{ $name }}</h6>
        </div>
        <span class="material-icons text-amber-400">
            {{ $mood }}
        </span>
    </div>
    <p>{{ $slot }}</p>
</div>
