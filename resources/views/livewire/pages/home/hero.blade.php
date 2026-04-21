<section id="hero" class="relative min-h-screen flex items-center overflow-hidden px-6">

    {{-- Background rings --}}
    <div class="absolute right-[-10%] top-1/2 -translate-y-1/2 w-150 h-150 rounded-full border border-grind-border opacity-50 pointer-events-none"></div>
    <div class="absolute right-[-5%] top-1/2 -translate-y-1/2 w-150 h-150 rounded-full border border-grind-border opacity-30 pointer-events-none"></div>

    {{-- Warm glow --}}
    <div class="absolute top-1/4 left-[30%] w-125 h-125 rounded-full pointer-events-none"
         style="background: radial-gradient(circle, color-mix(in srgb, var(--color-grind-primary) 8%, transparent) 0%, transparent 70%)"></div>

    <div class="max-w-300 mx-auto w-full pt-28 pb-16 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

        {{-- Left: Text --}}
        <div class="animate-fade-up">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-px bg-grind-primary"></div>
                <span class="font-mono-grind text-[0.7rem] tracking-[0.3em] text-grind-primary uppercase">Est. La Union</span>
            </div>

            <h1 class="font-display text-[clamp(3rem,6vw,5.5rem)] font-black leading-[0.95] text-grind-muted mb-6">
                Grind<br>
                <em class="text-grind-primary italic">Harder.</em><br>
                Sip Better.
            </h1>

            <p class="font-sans text-[1.05rem] font-light text-grind-primary opacity-80 max-w-100 leading-relaxed mb-10">
                A coffee shop built for late nights, deep focus, and the kind of quiet that gets things done. Fuel your grind.
            </p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="{{ route('menu') }}" wire:navigate
                   class="inline-flex items-center gap-3 bg-grind-primary text-white text-xs font-bold tracking-widest px-8 py-3.5 rounded-xl hover:bg-grind-accent hover:text-stone-600 hover:-translate-y-0.5 transition-all duration-200 no-underline">
                    See The Menu
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#features"
                   class="inline-flex items-center gap-2 font-sans text-sm text-stone-600 hover:text-grind-primary transition-all duration-200 no-underline group">
                    Learn more
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Right: Illustration --}}
        <div class="relative flex justify-center items-center animate-fade-up-delay">

            {{-- Glow circle --}}
            <div class="absolute w-105 h-105 rounded-full border border-grind-border"
             style="background: radial-gradient(circle at 40% 40%, color-mix(in srgb, var(--color-grind-primary) 10%, transparent), transparent 70%)"></div>

            {{-- SVG cup --}}
            <svg class="relative z-10 w-70 md:w-[20rem]" viewBox="0 0 320 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="cupGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#d7ccc8"/>
                        <stop offset="50%" stop-color="#efebe9"/>
                        <stop offset="100%" stop-color="#d7ccc8"/>
                    </linearGradient>
                    <linearGradient id="sleeveGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="rgba(255,255,255,0.2)"/>
                        <stop offset="100%" stop-color="rgba(255,255,255,0)"/>
                    </linearGradient>
                    <filter id="softShadow" x="-20%" y="-20%" width="150%" height="150%">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="5" />
                        <feOffset dx="0" dy="6" />
                        <feComponentTransfer>
                            <feFuncA type="linear" slope="0.2" />
                        </feComponentTransfer>
                        <feMerge>
                            <feMergeNode />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                </defs>

                <g filter="blur(1px)">
                    <path d="M145 45 Q150 30 145 15" stroke="#bcaa8d" stroke-width="1.5" stroke-linecap="round">
                        <animate attributeName="opacity" values="0.2;0.7;0.2" dur="3s" repeatCount="indefinite"/>
                        <animate attributeName="d" values="M145 45 Q150 30 145 15;M145 45 Q140 30 145 15;M145 45 Q150 30 145 15" dur="3s" repeatCount="indefinite"/>
                    </path>
                    <path d="M175 45 Q180 30 175 15" stroke="#bcaa8d" stroke-width="1.5" stroke-linecap="round">
                        <animate attributeName="opacity" values="0.7;0.2;0.7" dur="2.5s" repeatCount="indefinite"/>
                        <animate attributeName="d" values="M175 45 Q180 30 175 15;M175 45 Q170 30 175 15;M175 45 Q180 30 175 15" dur="2.5s" repeatCount="indefinite"/>
                    </path>
                </g>

                <path d="M90 70 L110 320 Q112 330 125 330 L195 330 Q208 330 210 320 L230 70 Z" fill="url(#cupGrad)" filter="url(#softShadow)"/>
                <path d="M96 145 L106 255 L214 255 L224 145 Z" fill="rgba(141, 110, 99, 0.08)" stroke="rgba(141, 110, 99, 0.15)" stroke-width="1"/>
                <path d="M96 145 L106 255 L214 255 L224 145 Z" fill="url(#sleeveGrad)"/>
                <circle cx="160" cy="180" r="32" stroke="#8d6e63" stroke-width="0.5" fill="none" opacity="0.2"/>
                <text x="160" y="198" text-anchor="middle" font-family="'Times New Roman', serif" font-size="24" font-weight="bold" fill="#5d4037" style="letter-spacing: 3px">GRIND</text>
                <text x="160" y="218" text-anchor="middle" font-family="Arial, sans-serif" font-size="8" letter-spacing="5" fill="#8d6e63" font-weight="300">ESTD 2024</text>
                <path d="M85 70 Q160 52 235 70 L235 88 Q160 72 85 88 Z" fill="#3e2723" />
                <rect x="130" y="60" width="60" height="8" rx="4" fill="#4e342e" />

                <g>
                    <animateTransform attributeName="transform" type="translate" values="0 0; 0 -4; 0 0" dur="5s" repeatCount="indefinite" />
                    <ellipse cx="60" cy="160" rx="8" ry="5" fill="#8d6e63" transform="rotate(-20 60 160)" opacity="0.6"/>
                    <ellipse cx="260" cy="100" rx="7" ry="4" fill="#8d6e63" transform="rotate(15 260 100)" opacity="0.4"/>
                    <ellipse cx="270" cy="300" rx="9" ry="5" fill="#8d6e63" transform="rotate(-40 270 300)" opacity="0.5"/>
                </g>

                <ellipse cx="160" cy="345" rx="70" ry="12" fill="#000" opacity="0.05"/>
            </svg>

            {{-- Price badge --}}
            <div class="absolute bottom-4 left-12 w-22 h-22 rounded-full bg-grind-primary flex flex-col items-center justify-center animate-float">
                <span class="font-mono-grind text-[0.6rem] font-bold text-grind-muted tracking-wider">FROM</span>
                <span class="font-mono-grind text-xl font-bold text-white leading-tight">₱99</span>
            </div>
        </div>
    </div>

</section>
