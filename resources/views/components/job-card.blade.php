@props(['job'])
<x-panel class="flex flex-col">
    <div class="self-start font-medium text-lg">{{ $job->employer->name }}</div>
    <div class="text-center">
        <h3 class="text-xl my-3 font-bold group-hover:text-blue-800 transition-colors duration-1000">
            <a href="{{ $job->url }}" target="_blank">
                {{ Str::substr($job->title, 0, 20) }}...
            </a>
        </h3>
        <p class="text-md">{{ $job->schedule }} - {{ formatPrice($job->salary) }} €</p>
    </div>

    <div class="flex justify-between mt-auto">
        <div class="flex items-center justify-between gap-2">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>
