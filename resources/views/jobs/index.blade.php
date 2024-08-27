
<x-layout>
    <div class="space-y-10 mx-5">
        <section>
            <div class="text-center my-5">
                <h1 class="font-bold text-4xl my-5">Let's find your next job</h1>
                {{-- <form action="#">
                    <input type="text" placeholder="Web developer..." class="bg-white/10 border border-white/5 rounded-lg py-4 px-5 w-full max-w-xl">
                </form> --}}
                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input  name="keyword" :label="false" placeholder="Web developer..."/>
                </x-forms.form>
            </div>
        </section>
        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 items-center justify-between mt-6 gap-2">
                @foreach ($featuredJobs as $job)
                <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-col  md:flex-row space-y-1 gap-x-1 mt-6">
                @foreach ($tags as $tag)
                <x-tag size="base" :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recents Jobs</x-section-heading>
            <div class="space-y-6 my-6">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
