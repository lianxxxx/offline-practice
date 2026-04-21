<section id="contact" class="py-24 px-6 bg-[#f8f8f8] border-t border-black/5">
    <div class="max-w-300 mx-auto">

        <div class="mb-12">
            <span class="font-mono-grind text-xs tracking-[0.3em] text-grind-primary uppercase">Get In Touch</span>
            <h2 class="font-display text-4xl md:text-5xl mt-3 text-grind-surface">Come find us.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            {{-- Left: Form --}}
            <div>
                {{-- Success Message --}}
                @if (session()->has('success'))
                    <div class="flex items-center gap-3 bg-grind-primary/10 border border-grind-primary/30 rounded-lg px-5 py-4 mb-8 shadow-sm">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--color-grind-primary)">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        <span class="font-sans text-sm text-grind-primary">
                            {{ session('success') }}
                        </span>
                    </div>
                @endif

                {{-- Form Container --}}
                <div class="flex flex-col gap-6 bg-white/70 backdrop-blur-md border border-stone-200 rounded-2xl px-8 py-10 shadow-sm">

                    {{-- Name --}}
                    <div>
                        <label class="block font-mono-grind text-[0.65rem] tracking-[0.18em] text-grind-primary uppercase mb-2">
                            Your Name
                        </label>
                        <input
                            wire:model="name"
                            type="text"
                            placeholder="e.g. John Cruz"
                            class="w-full bg-white border rounded-lg px-5 py-3.5 font-sans text-sm text-grind-surface placeholder:text-stone-400 outline-none transition-all duration-200 focus:border-grind-primary focus:ring-2 focus:ring-grind-primary/20 {{ $errors->has('name') ? 'border-red-400' : 'border-stone-200' }}"
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
                            class="w-full bg-white border rounded-lg px-5 py-3.5 font-sans text-sm text-grind-surface placeholder:text-stone-400 outline-none transition-all duration-200 focus:border-grind-primary focus:ring-2 focus:ring-grind-primary/20 {{ $errors->has('email') ? 'border-red-400' : 'border-stone-200' }}"
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
                            class="w-full bg-white border rounded-lg px-5 py-3.5 font-sans text-sm text-grind-surface placeholder:text-stone-400 outline-none transition-all duration-200 focus:border-grind-primary focus:ring-2 focus:ring-grind-primary/20 resize-y min-h-35 {{ $errors->has('message') ? 'border-red-400' : 'border-stone-200' }}"
                        ></textarea>
                        @error('message')
                            <span class="font-mono-grind text-[0.65rem] text-red-400 mt-1.5 block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <button
                        wire:click="submit"
                        wire:loading.attr="disabled"
                        class="w-full bg-grind-primary text-white font-mono-grind text-sm tracking-[0.12em] uppercase py-4 px-8 rounded-lg hover:bg-[#b8956b] hover:shadow-md active:scale-[0.99] disabled:opacity-60 disabled:cursor-not-allowed transition-all duration-200 cursor-pointer border-none"
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

            {{-- Right: Map --}}
            <div class="rounded-xl overflow-hidden border border-black/8">
                <iframe
                    src="https://maps.google.com/maps?q=Bacnotan,+La+Union,+Philippines&t=&z=14&ie=UTF8&iwloc=&output=embed"
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
