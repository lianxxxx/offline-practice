<section id="hero" class="relative min-h-screen flex items-center overflow-hidden px-6">

    {{-- Background rings --}}
    <div class="absolute right-[-10%] top-1/2 -translate-y-1/2 w-150 h-150 rounded-full border border-[rgba(200,169,126,0.15)] opacity-50 pointer-events-none"></div>
    <div class="absolute right-[-5%] top-1/2 -translate-y-1/2 w-150 h-150 rounded-full border border-[rgba(200,169,126,0.15)] opacity-30 pointer-events-none"></div>

    {{-- Warm glow --}}
    <div class="absolute top-1/4 left-[30%] w-125 h-125 rounded-full pointer-events-none"
         style="background: radial-gradient(circle, rgba(200,169,126,0.08) 0%, transparent 70%)"></div>

    <div class="max-w-300 mx-auto w-full pt-28 pb-16 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

        {{-- Left: Text --}}
        <div class="animate-fade-up">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-px bg-[#c8a97e]"></div>
                <span class="font-mono-grind text-[0.7rem] tracking-[0.3em] text-[#c8a97e] uppercase">Est. La Union</span>
            </div>

            <h1 class="font-display text-[clamp(3rem,6vw,5.5rem)] font-black leading-[0.95] text-[#f5f0e8] mb-6">
                Grind<br>
                <em class="text-[#c8a97e] italic">Harder.</em><br>
                Sip Better.
            </h1>

            <p class="font-sans text-[1.05rem] font-light text-[#e8d5b7] opacity-80 max-w-100leading-relaxed mb-10">
                A coffee shop built for late nights, deep focus, and the kind of quiet that gets things done. Fuel your grind.
            </p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="#menu"
                   class="inline-flex items-center gap-3 bg-[#c8a97e] text-[#1a1a1a] font-mono-grind text-xs font-bold tracking-widest px-8 py-3.5 rounded-sm hover:bg-[#e8d5b7] hover:-translate-y-0.5 transition-all duration-200 no-underline">
                    See The Menu
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#features"
                   class="font-sans text-sm text-[#e8d5b7] opacity-60 hover:opacity-100 border-b border-[rgba(200,169,126,0.15)] pb-0.5 no-underline transition-opacity duration-200">
                    Learn more
                </a>
            </div>

            {{-- Stats --}}
            <div class="flex gap-12 mt-14 pt-8 border-t border-[rgba(200,169,126,0.15)]">
                @foreach([['12+', 'Brew Types'], ['24/7', 'WiFi Access'], ['∞', 'Good Vibes']] as [$val, $label])
                    <div>
                        <div class="font-display text-[2rem] font-black text-[#c8a97e]">{{ $val }}</div>
                        <div class="font-mono-grind text-[0.7rem] text-[#e8d5b7] opacity-50 uppercase tracking-widest mt-1">{{ $label }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Right: Illustration --}}
        <div class="relative flex justify-center items-center animate-fade-up-delay">

            {{-- Glow circle --}}
            <div class="absolute w-105 h-105 rounded-full border border-[rgba(200,169,126,0.15)]"
                 style="background: radial-gradient(circle at 40% 40%, rgba(200,169,126,0.1), transparent 70%)"></div>

            {{-- SVG cup --}}
            <svg class="relative z-10 w-70 md:w-80" viewBox="0 0 320 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                {{-- Steam --}}
                <path d="M120 60 Q125 45 120 30" stroke="#c8a97e" stroke-width="2" stroke-linecap="round" opacity="0.5">
                    <animate attributeName="d" values="M120 60 Q125 45 120 30;M120 60 Q115 45 120 30;M120 60 Q125 45 120 30" dur="2s" repeatCount="indefinite"/>
                    <animate attributeName="opacity" values="0.5;0.1;0.5" dur="2s" repeatCount="indefinite"/>
                </path>
                <path d="M145 55 Q150 40 145 25" stroke="#c8a97e" stroke-width="2" stroke-linecap="round" opacity="0.4">
                    <animate attributeName="d" values="M145 55 Q150 40 145 25;M145 55 Q140 40 145 25;M145 55 Q150 40 145 25" dur="2.4s" repeatCount="indefinite"/>
                    <animate attributeName="opacity" values="0.4;0.1;0.4" dur="2.4s" repeatCount="indefinite"/>
                </path>
                <path d="M170 58 Q175 43 170 28" stroke="#c8a97e" stroke-width="2" stroke-linecap="round" opacity="0.5">
                    <animate attributeName="d" values="M170 58 Q175 43 170 28;M170 58 Q165 43 170 28;M170 58 Q175 43 170 28" dur="1.8s" repeatCount="indefinite"/>
                    <animate attributeName="opacity" values="0.5;0.1;0.5" dur="1.8s" repeatCount="indefinite"/>
                </path>

                <defs>
                    <linearGradient id="cupGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#1a1a1a"/>
                        <stop offset="40%" stop-color="#2e2e2e"/>
                        <stop offset="100%" stop-color="#1a1a1a"/>
                    </linearGradient>
                    <linearGradient id="labelGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="rgba(200,169,126,0.2)"/>
                        <stop offset="100%" stop-color="rgba(200,169,126,0.04)"/>
                    </linearGradient>
                </defs>

                {{-- Cup body --}}
                <path d="M90 75 L100 310 L220 310 L230 75 Z" fill="url(#cupGrad)"/>
                {{-- Sleeve --}}
                <path d="M95 150 L103 250 L217 250 L225 150 Z" fill="url(#labelGrad)" stroke="rgba(200,169,126,0.2)" stroke-width="1"/>
                {{-- Label --}}
                <text x="160" y="195" text-anchor="middle" font-family="'Playfair Display', serif" font-size="20" font-weight="700" fill="#c8a97e" opacity="0.9">GRIND</text>
                <text x="160" y="215" text-anchor="middle" font-family="'Space Mono', monospace" font-size="9" letter-spacing="4" fill="#e8d5b7" opacity="0.5">COFFEE CO.</text>
                <circle cx="160" cy="170" r="22" stroke="#c8a97e" stroke-width="1" fill="none" opacity="0.4"/>

                {{-- Lid --}}
                <ellipse cx="160" cy="78" rx="75" ry="14" fill="#2e2a25"/>
                <rect x="130" y="68" width="60" height="8" rx="4" fill="#3a3530"/>

                {{-- Handle --}}
                <path d="M230 140 Q275 140 275 200 Q275 260 230 260" stroke="#3a3530" stroke-width="14" fill="none" stroke-linecap="round"/>
                <path d="M230 140 Q270 140 270 200 Q270 260 230 260" stroke="#2a2520" stroke-width="10" fill="none" stroke-linecap="round"/>

                {{-- Bottom --}}
                <ellipse cx="160" cy="310" rx="60" ry="8" fill="#111" opacity="0.8"/>

                {{-- Beans --}}
                <ellipse cx="60" cy="140" rx="10" ry="6" fill="#c8a97e" opacity="0.4" transform="rotate(-30 60 140)"/>
                <line x1="60" y1="135" x2="60" y2="145" stroke="#1a1a1a" stroke-width="1.5" transform="rotate(-30 60 140)"/>
                <ellipse cx="270" cy="120" rx="10" ry="6" fill="#c8a97e" opacity="0.3" transform="rotate(20 270 120)"/>
                <line x1="270" y1="115" x2="270" y2="125" stroke="#1a1a1a" stroke-width="1.5" transform="rotate(20 270 120)"/>
                <ellipse cx="55" cy="280" rx="8" ry="5" fill="#c8a97e" opacity="0.2" transform="rotate(15 55 280)"/>
                <ellipse cx="280" cy="290" rx="9" ry="5.5" fill="#c8a97e" opacity="0.2" transform="rotate(-20 280 290)"/>
            </svg>

            {{-- Price badge --}}
            <div class="absolute bottom-4 left-4 w-22 h-22 rounded-full bg-[#c8a97e] flex flex-col items-center justify-center animate-float">
                <span class="font-mono-grind text-[0.6rem] font-bold text-[#1a1a1a] tracking-wider">FROM</span>
                <span class="font-mono-grind text-xl font-bold text-[#1a1a1a] leading-tight">₱99</span>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-40">
        <span class="font-mono-grind text-[0.6rem] tracking-[0.2em] text-[#e8d5b7]">SCROLL</span>
        <div class="w-px h-10" style="background: linear-gradient(to bottom, #c8a97e, transparent)"></div>
    </div>
</section>