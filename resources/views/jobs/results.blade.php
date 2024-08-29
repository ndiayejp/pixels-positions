<x-layout>
    <x-page-heading>Résultats</x-page-heading>
    <div class="space-y-6 my-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
