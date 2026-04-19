<footer class="border-t border-[rgba(200,169,126,0.15)] pt-16 pb-8 px-6">
    <div class="max-w-300q mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16 mb-16">

            {{-- Brand --}}
            <div class="md:col-span-1">
                <div class="flex items-center gap-2 mb-5">
                    <div class="w-8 h-8 rounded-full border border-[#c8a97e] flex items-center justify-center">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#c8a97e" stroke-width="2">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                        </svg>
                    </div>
                    <span class="font-display text-[1.3rem] font-black text-[#f5f0e8]">Grind</span>
                </div>
                <p class="font-sans text-sm text-[#e8d5b7] opacity-50 leading-relaxed max-w-70 mb-5">
                    Coffee for students and hustlers. La Union's late-night fuel station for builders who take their work seriously.
                </p>
                <p class="font-mono-grind text-[0.7rem] text-[#c8a97e] opacity-60 tracking-wide">Grind harder. Sip better.</p>
            </div>

            {{-- Links --}}
            <div>
                <p class="font-mono-grind text-[0.65rem] tracking-[0.2em] text-[#6b6560] uppercase mb-5">Pages</p>
                <ul class="list-none flex flex-col gap-3">
                    @foreach(['Home' => '#hero', 'Menu' => '#menu', 'About' => '#features', 'Contact' => '#contact'] as $label => $href)
                        <li>
                            <a href="{{ $href }}"
                               class="font-sans text-sm text-[#e8d5b7] opacity-50 hover:opacity-100 hover:text-[#c8a97e] no-underline transition-all duration-200">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <p class="font-mono-grind text-[0.65rem] tracking-[0.2em] text-[#6b6560] uppercase mb-5">Find Us</p>
                <div class="flex flex-col gap-3">
                    <p class="font-sans text-sm text-[#e8d5b7] opacity-50 leading-relaxed">Bacnotan, La Union<br>Philippines</p>
                    <a href="mailto:hello@grindcoffee.ph"
                       class="font-sans text-sm text-[#c8a97e] opacity-70 hover:opacity-100 no-underline transition-opacity duration-200">
                        hello@grindcoffee.ph
                    </a>
                    <p class="font-mono-grind text-xs text-[#e8d5b7] opacity-40">Open til 2AM daily</p>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="flex flex-col sm:flex-row justify-between items-center gap-3 pt-8 border-t border-[rgba(200,169,126,0.15)]">
            <p class="font-mono-grind text-[0.65rem] text-[#6b6560] tracking-widest">
                © {{ date('Y') }} GRIND COFFEE CO. ALL RIGHTS RESERVED.
            </p>
            <p class="font-mono-grind text-[0.65rem] text-[#6b6560] opacity-50">Fuel the grind. ☕</p>
        </div>
    </div>
</footer>