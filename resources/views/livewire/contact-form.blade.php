<div>
    @if (session()->has('success'))
        <div class="flex items-center gap-3 bg-[rgba(200,169,126,0.1)] border border-[rgba(200,169,126,0.3)] rounded-sm px-5 py-4 mb-8">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="#c8a97e" stroke-width="2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <span class="font-sans text-sm text-[#c8a97e]">{{ session('success') }}</span>
        </div>
    @endif

    <div class="flex flex-col gap-6">

        {{-- Name --}}
        <div>
            <label class="block font-mono-grind text-[0.65rem] tracking-[0.2em] text-[#6b6560] uppercase mb-2">
                Your Name
            </label>
            <input
                wire:model="name"
                type="text"
                placeholder="e.g. Juan dela Cruz"
                class="w-full bg-[#222222] border rounded-sm px-5 py-3.5 font-sans text-sm text-[#f5f0e8] placeholder-[#6b6560] outline-none transition-colors duration-200 focus:border-[#c8a97e] {{ $errors->has('name') ? 'border-red-500/50' : 'border-[rgba(200,169,126,0.15)]' }}"
            />
            @error('name')
                <span class="font-mono-grind text-[0.65rem] text-red-400 mt-1.5 block">{{ $message }}</span>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label class="block font-mono-grind text-[0.65rem] tracking-[0.2em] text-[#6b6560] uppercase mb-2">
                Email Address
            </label>
            <input
                wire:model="email"
                type="email"
                placeholder="you@email.com"
                class="w-full bg-[#222222] border rounded-sm px-5 py-3.5 font-sans text-sm text-[#f5f0e8] placeholder-[#6b6560] outline-none transition-colors duration-200 focus:border-[#c8a97e] {{ $errors->has('email') ? 'border-red-500/50' : 'border-[rgba(200,169,126,0.15)]' }}"
            />
            @error('email')
                <span class="font-mono-grind text-[0.65rem] text-red-400 mt-1.5 block">{{ $message }}</span>
            @enderror
        </div>

        {{-- Message --}}
        <div>
            <label class="block font-mono-grind text-[0.65rem] tracking-[0.2em] text-[#6b6560] uppercase mb-2">
                Message
            </label>
            <textarea
                wire:model="message"
                rows="5"
                placeholder="Reserve a spot, ask about our menu, or just say hi..."
                class="w-full bg-[#222222] border rounded-sm px-5 py-3.5 font-sans text-sm text-[#f5f0e8] placeholder-[#6b6560] outline-none transition-colors duration-200 focus:border-[#c8a97e] resize-y min-h-[140px] {{ $errors->has('message') ? 'border-red-500/50' : 'border-[rgba(200,169,126,0.15)]' }}"
            ></textarea>
            @error('message')
                <span class="font-mono-grind text-[0.65rem] text-red-400 mt-1.5 block">{{ $message }}</span>
            @enderror
        </div>

        {{-- Submit --}}
        <button
            wire:click="submit"
            wire:loading.attr="disabled"
            class="w-full bg-[#c8a97e] text-[#1a1a1a] font-mono-grind text-sm font-bold tracking-[0.1em] uppercase py-4 px-8 rounded-sm hover:bg-[#e8d5b7] disabled:opacity-60 disabled:cursor-not-allowed transition-colors duration-200 cursor-pointer border-none">
            <span wire:loading.remove>Send Message →</span>
            <span wire:loading class="flex items-center justify-center gap-2">
                <svg class="w-4 h-4 animate-spin-slow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 12a9 9 0 1 1-6.219-8.56"/>
                </svg>
                Sending...
            </span>
        </button>
    </div>
</div>