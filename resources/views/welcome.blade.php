
<x-layout>
    <div class="space-y-10 mx-5">
        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="flex flex-col md:flex-row items-center justify-between mt-6 gap-4">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-col  md:flex-row space-y-1 gap-x-1 mt-6">
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
                <x-tag>Front end</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recents Jobs</x-section-heading>
            <div class="space-y-6 my-6">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
