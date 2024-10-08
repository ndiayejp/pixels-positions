
<x-layout>
    <div class="space-y-10 mx-5">
        <section>
            <div class="text-center my-5">
                <h1 class="font-bold text-4xl my-5">Let's find your next job</h1>
                <form action="#">
                    <input type="text" placeholder="Web developer..." class="bg-white/10 border border-white/5 rounded-lg py-4 px-5 w-full max-w-xl">
                </form>
            </div>
        </section>
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
                <x-tag size="base">Front end</x-tag>
                <x-tag size="base">Backend</x-tag>
                <x-tag size="base">Manager</x-tag>
                <x-tag size="base">Testeur QA</x-tag>
                <x-tag size="base">Webdesigner</x-tag>
                <x-tag size="base">UX designerd</x-tag>
                <x-tag size="base">Chef de projet</x-tag>
                <x-tag size="base">Graphiste</x-tag>

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
