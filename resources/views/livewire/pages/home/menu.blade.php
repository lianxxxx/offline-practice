<section id="menu" class="relative pt-20 pb-40 px-6 overflow-hidden">

    <div class="absolute top-0 left-0 right-0 h-px opacity-20"
         style="background: linear-gradient(to right, transparent, var(--color-grind-primary), transparent)"></div>

    {{-- Ambient left glow --}}
    <div class="absolute -left-48 top-1/2 -translate-y-1/2 w-150 h-150 rounded-full pointer-events-none"
        style="background: radial-gradient(circle, color-mix(in srgb, var(--color-grind-primary) 5%, transparent), transparent 65%)"></div>

    <div class="max-w-300 mx-auto">

        {{-- Header --}}
        <div class="flex flex-col md:flex-row justify-between md:items-end gap-6 mb-16">
            <div>
                <span class="font-mono-grind text-[0.7rem] tracking-[0.3em] text-grind-primary uppercase">The Menu</span>
                <h2 class="font-display text-[clamp(2.5rem,5vw,4rem)] font-black text-grind-muted leading-none mt-3">
                    Sip <em class="text-grind-primary">better.</em>
                </h2>
            </div>

            <div class="max-w-xs">
                <p class="font-sans text-sm text-grind-muted opacity-60 leading-relaxed">
                    Crafted for the grind, poured for the focus. From the first spark of an idea to the slow sip of a job well done. We're here for every breakthrough.
                </p>
                <a href="{{ route('menu') }}" wire:navigate class="inline-flex items-center gap-2 font-sans text-sm text-grind-primary hover:font-medium transition-colors duration-200 no-underline mt-3 group">
                    See full menu
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Cards --}}
        @php
            $drinks = [
                [
                    'name'     => 'Cold Brew Overflow',
                    'subtitle' => '18-hour steep.',
                    'desc'     => 'Slow-steeped for 18 hours in cold water. Smooth, low-acid, and dangerously easy to drink. Pairs with debugging at 2AM.',
                    'price'    => '₱129',
                    'tags'     => ['Cold', 'Smooth', 'Strong'],
                    'badge'    => 'Staff Pick',
                    'fill'     => '#c8956c',
                    'bg'       => '#8f5f3f'
                ],
                [
                    'name'     => 'The Grind Espresso',
                    'subtitle' => 'Double shot. Dark roast.',
                    'desc'     => 'Two concentrated shots of our Cordillera blend. Dense, bitter, and unapologetically strong. The one that starts the session.',
                    'price'    => '₱99',
                    'tags'     => ['Espresso', 'Bold', 'Classic'],
                    'badge'    => 'Most Ordered',
                    'fill'     => '#3d1f10',
                    'bg'       => '#3d1f10',
                ],
                [
                    'name'     => 'Matcha Hustle Latte',
                    'subtitle' => 'For the caffeine-curious.',
                    'desc'     => 'Ceremonial grade matcha, oat milk, and a kiss of cinnamon. The choice of designers who say they\'re cutting back on coffee.',
                    'price'    => '₱119',
                    'tags'     => ['Matcha', 'Creamy', 'Smooth'],
                    'badge'    => 'New',
                    'fill'     => '#1a2e1a',
                    'bg'       => '#1a2e1a',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-0 rounded-xl overflow-hidden border border-black/8 shadow-sm">
            @foreach ($drinks as $idx => $drink)
                <div class="group relative overflow-hidden transition-all duration-300 cursor-pointer shadow-sm rounded-xl md:rounded-none">

                    {{-- TOP: white cup area --}}
                    <div class="relative bg-grind-text px-10 pt-8 pb-6">
                        <span class="inline-block font-mono-grind text-[0.6rem] tracking-widest text-grind-bg bg-grind-primary px-3 py-1 rounded-sm uppercase mb-6">
                            {{ $drink['badge'] }}
                        </span>

                        <div class="flex justify-center mb-2">
                            <svg width="100" height="120" viewBox="0 0 100 120" fill="none">
                                <defs>
                                    <linearGradient id="dg{{ $idx }}" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" stop-color="rgba(0,0,0,0.5)"/>
                                        <stop offset="50%" stop-color="rgba(255,255,255,0.06)"/>
                                        <stop offset="100%" stop-color="rgba(0,0,0,0.5)"/>
                                    </linearGradient>
                                </defs>
                                <path d="M20 20 L25 100 L75 100 L80 20 Z" fill="{{ $drink['fill'] }}"/>
                                <path d="M20 20 L25 100 L75 100 L80 20 Z" fill="url(#dg{{ $idx }})"/>
                                <ellipse cx="50" cy="22" rx="30" ry="5" fill="#1a1a1a" opacity="0.8"/>
                                <rect x="30" y="18" width="40" height="6" rx="3" fill="#2a2520"/>
                                <text x="50" y="65" text-anchor="middle" font-family="'Space Mono',monospace" font-size="7" fill="rgba(232,213,183,0.45)" letter-spacing="2">GRIND</text>
                                <ellipse cx="50" cy="100" rx="25" ry="4" fill="#111" opacity="0.6"/>
                                <path d="M80 40 Q96 40 96 60 Q96 80 80 80" stroke="#2a2520" stroke-width="7" fill="none" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>

                    {{-- BOTTOM: colored content area --}}
                    <div class="p-10 pt-8" style="background-color: {{ $drink['bg'] }}">

                        <div class="absolute top-0 left-0 w-0.75 h-0 bg-grind-primary group-hover:h-full transition-all duration-500 ease-out"></div>

                        <h3 class="font-display text-[1.4rem] font-bold text-white mb-1">{{ $drink['name'] }}</h3>
                        <p class="font-mono-grind text-[0.7rem] text-grind-primary opacity-70 tracking-wide mb-4">{{ $drink['subtitle'] }}</p>
                        <p class="font-sans text-sm text-grind-accent opacity-55 leading-relaxed mb-6">{{ $drink['desc'] }}</p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach ($drink['tags'] as $tag)
                                <span class="font-mono-grind text-[0.6rem] tracking-widest text-grind-accent border border-grind-border px-2.5 py-1 rounded-sm uppercase opacity-60">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>

                        <div class="flex items-center justify-between pt-5 border-t border-grind-border">
                            <span class="font-display text-[1.8rem] font-black text-grind-primary">{{ $drink['price'] }}</span>
                            <button class="font-mono-grind text-[0.7rem] tracking-wider text-grind-bg bg-grind-primary px-5 py-2.5 rounded-sm hover:bg-grind-accent transition-colors duration-200 cursor-pointer border-none">
                                Order →
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
