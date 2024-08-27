@props(['job'])
<x-panel class="flex flex-col">
    <div class="self-start font-medium text-lg">{{ $job->employer->name}}</div>
    <div class="text-center">
        <h3 class="text-xl my-3 font-bold group-hover:text-blue-800 transition-colors duration-1000">{{ Str::substr($job->title, 0, 20)  }}...</h3>
        <p class="text-md">{{ $job->schedule}} - {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between mt-auto">
        <div class="flex items-center justify-between gap-2">
            @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag/>
            @endforeach
        </div>
        <x-employer-logo :width="42"/>
    </div>
</x-panel>
