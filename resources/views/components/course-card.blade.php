<div class="w-full max-w-sm overflow-hidden rounded border bg-white shadow">
    <div class="relative">
        <a href="{{ route('course', $course->slug) }}">
            <div class="h-48 bg-cover bg-no-repeat bg-center" style="background-image: url({{ $course->image }})">
            </div>
        </a>
        <div style="bottom: -20px;" class="absolute right-0 w-10 mr-2">
            <img class="rounded-full border-2 border-white" src="{{ $course->user->avatar }}">
        </div>
    </div>
    <div class="p-3 mt-4">
        <h3 class="mr-10 text-sm truncate-2nd">
            <a class="hover:text-blue-500" href="{{ route('course', $course->slug) }}">
                {{ $course->name }}
            </a>
        </h3>
        <div class="flex items-start justify-between">
            <p class="text-xs text-gray-500">{{ $course->excerpt }}</p>
            <button class="outline text-xs text-gray-500 hover:text-blue-500" title="Bookmark this ad">
                <i class="far fa-bookmark"></i>
            </button>
        </div>
        <p class="text-xs text-gray-500">
            <a href="#" class="hover:underline hover:text-blue-500">{{ $course->user->name }}</a> • {{ $course->created_at->diffForHumans() }}
        </p>
    </div>
</div>
