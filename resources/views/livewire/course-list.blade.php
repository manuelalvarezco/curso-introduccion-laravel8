<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{ route('course', $course->slug)}}">
                <img src="{{ $course->image}}"  alt="{{ $course->name}}" class="rounded-md mb-2">
                <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name}}</h2>
                <h3 class="text-md text-gray-500">{{ $course->excerpt}}</h3>
                <img src="{{ $course->user->avatar}}" alt="usuario" class="rounded-full mx-auto h-16 w-16 mt-4">
            </a>
        </div>
    @endforeach
</div>
