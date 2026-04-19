<x-layouts.main>

    @include('components.hero')
    @include('components.features')
    @include('components.menu')
    @include('components.cta')

{{-- Contact --}}
<section id="contact" class="py-24 px-6 bg-[#f8f8f8] border-t border-black/5">
    <div class="max-w-5xl mx-auto">

        <div class="mb-12">
            <span class="font-mono-grind text-xs tracking-[0.3em] text-grind-primary uppercase">Get In Touch</span>
            <h2 class="font-display text-4xl md:text-5xl mt-3 text-grind-surface">Come find us.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            {{-- Left: Form --}}
            <div>
                @livewire('contact-form')
            </div>

            {{-- Right: Map --}}
            <div class="rounded-xl overflow-hidden border border-black/8">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15334.5!2d120.3667!3d16.7167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a6b533333333%3A0x0!2sBacnotan%2C+La+Union!5e0!3m2!1sen!2sph"
                    width="100%"
                    height="100%"
                    style="min-height: 450px; border: 0; display: block;"
                    allowfullscreen
                    loading="lazy">
                </iframe>
            </div>

        </div>
    </div>
</section>

</x-layouts.main>