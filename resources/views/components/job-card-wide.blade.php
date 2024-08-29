@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <div class="self-start font-medium text-lg text-gray-400">{{ $job->employer->name }}</div>
        <h3 class="text-md md:text-xl my-3 font-bold group-hover:text-blue-800 transition-colors duration-1000">
            <a href="{{ $job->url }}" target="_blank">
                {{ Str::substr($job->title, 0, 20) }}
            </a>
        </h3>
        <p class="text-xs md:text-sm mt-auto text-gray-400">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between mt-auto">
        <div class="flex items-center justify-between gap-4">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
    </div>
</x-panel>
