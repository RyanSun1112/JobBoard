<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Find you Next job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Search blah blah" class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-12 space-y-6">
                <x-job-card-wide></x-job-card-wind>
                <x-job-card-wide></x-job-card-wind>
                <x-job-card-wide></x-job-card-wind>
            </div>
        </section>
    </div>
</x-layout>