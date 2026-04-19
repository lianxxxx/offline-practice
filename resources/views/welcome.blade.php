<x-layouts.main>

    @include('components.hero')
    @include('components.features')
    @include('components.menu')
    @include('components.cta')

    {{-- Contact --}}
    <section id="contact" class="py-24 px-6">
        <div class="max-w-2xl mx-auto">

            <div class="mb-12 text-center">
                <span class="font-mono-grind text-xs tracking-[0.3em] text-[#c8a97e] uppercase">
                    Get In Touch
                </span>

                <h2 class="font-display text-4xl md:text-5xl mt-3 text-[#e8d5b7]">
                    Come find us.
                </h2>
            </div>

            @livewire('contact-form')

        </div>
    </section>

</x-layouts.main>