<section id="contact" class="relative py-28 px-6 bg-grind-page overflow-hidden">

    {{-- Ambient glows --}}
    <div class="absolute top-1/3 right-[8%] w-96 h-96 rounded-full pointer-events-none opacity-20"
         style="background: radial-gradient(circle, var(--color-grind-primary), transparent 70%)"></div>
    <div class="absolute bottom-0 left-[5%] w-72 h-72 rounded-full pointer-events-none opacity-10"
         style="background: radial-gradient(circle, var(--color-grind-primary), transparent 70%)"></div>

    <div class="max-w-300 mx-auto relative z-10">

        {{-- Section header --}}
        <div class="mb-16">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-px bg-grind-primary"></div>
                <span class="font-mono-grind text-[0.7rem] tracking-[0.3em] text-grind-primary uppercase">Get In Touch</span>
            </div>
            <h2 class="font-display text-[clamp(2.5rem,5vw,4rem)] font-black leading-[0.95] text-grind-muted">
                Come find <em class="text-grind-primary italic">us.</em>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

            {{-- Left: Form --}}
            <div>
                {{-- Success Message --}}
                @if (session()->has('success'))
                    <div class="flex items-center gap-3 bg-grind-primary/10 border border-grind-primary/30 rounded-xl px-5 py-4 mb-8">
                        <svg class="w-5 h-5 shrink-0 text-grind-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        <span class="font-sans text-sm text-grind-primary">{{ session('success') }}</span>
                    </div>
                @endif

                <div class="flex flex-col gap-5 bg-grind-surface border border-grind-border rounded-2xl px-8 py-10">

                    {{-- Name --}}
                    <div>
                        <label class="block font-mono-grind text-[0.65rem] tracking-[0.18em] text-grind-primary uppercase mb-2">
                            Your Name
                        </label>
                        <input
                            wire:model="name"
                            type="text"
                            placeholder="e.g. John Cruz"
                            class="w-full bg-grind-bg border rounded-lg px-5 py-3.5 font-sans text-sm text-grind-accent placeholder:text-grind-muted outline-none transition-all duration-200 focus:border-grind-primary focus:ring-2 focus:ring-grind-primary/20 {{ $errors->has('name') ? 'border-red-400' : 'border-grind-border' }}"
                        />
                        @error('name')
                            <span class="font-mono-grind text-[0.65rem] text-red-400 mt-1.5 block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="block font-mono-grind text-[0.65rem] tracking-[0.18em] text-grind-primary uppercase mb-2">
                            Email Address
                        </label>
                        <input
                            wire:model="email"
                            type="email"
                            placeholder="you@email.com"
                            class="w-full bg-grind-bg border rounded-lg px-5 py-3.5 font-sans text-sm text-grind-accent placeholder:text-grind-muted outline-none transition-all duration-200 focus:border-grind-primary focus:ring-2 focus:ring-grind-primary/20 {{ $errors->has('email') ? 'border-red-400' : 'border-grind-border' }}"
                        />
                        @error('email')
                            <span class="font-mono-grind text-[0.65rem] text-red-400 mt-1.5 block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Message --}}
                    <div>
                        <label class="block font-mono-grind text-[0.65rem] tracking-[0.18em] text-grind-primary uppercase mb-2">
                            Message
                        </label>
                        <textarea
                            wire:model="message"
                            rows="5"
                            placeholder="Reserve a spot, ask about our menu, or just say hi..."
                            class="w-full bg-grind-bg border rounded-lg px-5 py-3.5 font-sans text-sm text-grind-accent placeholder:text-grind-muted outline-none transition-all duration-200 focus:border-grind-primary focus:ring-2 focus:ring-grind-primary/20 resize-y min-h-35 {{ $errors->has('message') ? 'border-red-400' : 'border-grind-border' }}"
                        ></textarea>
                        @error('message')
                            <span class="font-mono-grind text-[0.65rem] text-red-400 mt-1.5 block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button
                        wire:click="submit"
                        wire:loading.attr="disabled"
                        class="w-full bg-grind-primary text-grind-bg font-mono-grind text-sm tracking-[0.12em] uppercase py-4 px-8 rounded-lg hover:bg-grind-accent hover:-translate-y-0.5 hover:shadow-lg active:scale-[0.99] disabled:opacity-60 disabled:cursor-not-allowed transition-all duration-200 cursor-pointer border-none"
                    >
                        <span wire:loading.remove>Send Message</span>
                        <span wire:loading class="flex items-center justify-center gap-2">
                            <svg class="w-4 h-4 animate-spin-slow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56"/>
                            </svg>
                            Sending...
                        </span>
                    </button>

                </div>
            </div>

            {{-- Right: Contact details + Map --}}
            <div class="flex flex-col gap-6">

                {{-- Contact details --}}
                <div class="border border-grind-primary rounded-2xl px-8 py-8 grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div>
                        <div class="flex items-center gap-1.5 mb-2">
                            <svg class="w-4 h-4 text-grind-surface shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 21C12 21 5 13.5 5 8.5a7 7 0 1 1 14 0c0 5-7 12.5-7 12.5z"/>
                                <circle cx="12" cy="8.5" r="2.5"/>
                            </svg>
                            <p class="font-mono-grind text-[0.65rem] tracking-[0.18em] text-grind-muted uppercase">Location</p>
                        </div>
                        <p class="font-sans text-sm text-grind-primary leading-relaxed">Bacnotan,<br>La Union, PH</p>
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5 mb-2">
                            <svg class="w-4 h-4 text-grind-surface shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="9"/>
                                <polyline points="12 7 12 12 15 15"/>
                            </svg>
                            <p class="font-mono-grind text-[0.65rem] tracking-[0.18em] text-grind-muted uppercase">Hours</p>
                        </div>
                        <p class="font-sans text-sm text-grind-primary leading-relaxed">Mon–Fri 7am–2am<br>Sat–Sun 8am–4am</p>
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5 mb-2">
                            <svg class="w-4 h-4 text-grind-surface shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="5" width="20" height="14" rx="2"/>
                                <polyline points="2 5 12 13 22 5"/>
                            </svg>
                            <p class="font-mono-grind text-[0.65rem] tracking-[0.18em] text-grind-muted uppercase">Email</p>
                        </div>
                        <p class="font-sans text-sm text-grind-primary leading-relaxed break-all">hello@grindcoffee.ph</p>
                    </div>
                </div>

                {{-- Map --}}
                <div class="rounded-2xl overflow-hidden border border-grind-border">
                    <iframe
                        src="https://maps.google.com/maps?q=Bacnotan,+La+Union,+Philippines&t=&z=14&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="100%"
                        style="min-height: 390px; border: 0; display: block;"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>

            </div>
        </div>
    </div>
</section>
