<section id="menu" class="relative py-32 px-6 overflow-hidden">

    <div class="absolute top-0 left-0 right-0 h-px opacity-20"
         style="background: linear-gradient(to right, transparent, #c8a97e, transparent)"></div>

    {{-- Ambient left glow --}}
    <div class="absolute -left-48 top-1/2 -translate-y-1/2 w-150 h-150 rounded-full pointer-events-none"
         style="background: radial-gradient(circle, rgba(200,169,126,0.05), transparent 65%)"></div>

    <div class="max-w-300 mx-auto">

        {{-- Header --}}
        <div class="flex flex-col md:flex-row justify-between md:items-end gap-6 mb-16">
            <div>
                <span class="font-mono-grind text-[0.7rem] tracking-[0.3em] text-[#c8a97e] uppercase">The Menu</span>
                <h2 class="font-display text-[clamp(2.5rem,5vw,4rem)] font-black text-[#f5f0e8] leading-none mt-3">
                    Sip <em class="text-[#c8a97e]">better.</em>
                </h2>
            </div>
            <a href="#contact"
               class="self-start md:self-auto font-mono-grind text-[0.7rem] tracking-wider text-[#c8a97e] no-underline border border-[rgba(200,169,126,0.15)] px-5 py-2.5 rounded-sm hover:bg-[rgba(200,169,126,0.1)] transition-colors duration-200 whitespace-nowrap">
                View Full Menu →
            </a>
        </div>

        {{-- Cards --}}
        @php
            $drinks = [
                [
                    'name'     => 'The Grind Espresso',
                    'subtitle' => 'Double shot. Dark roast.',
                    'desc'     => 'Two concentrated shots of our Cordillera blend. Dense, bitter, and unapologetically strong. The one that starts the session.',
                    'price'    => '₱99',
                    'tags'     => ['Espresso', 'Bold', 'Classic'],
                    'badge'    => 'Most Ordered',
                    'fill'     => '#3d1f10',
                ],
                [
                    'name'     => 'Cold Brew Overflow',
                    'subtitle' => '18-hour steep.',
                    'desc'     => 'Slow-steeped for 18 hours in cold water. Smooth, low-acid, and dangerously easy to drink. Pairs with debugging at 2AM.',
                    'price'    => '₱129',
                    'tags'     => ['Cold', 'Smooth', 'Strong'],
                    'badge'    => 'Staff Pick',
                    'fill'     => '#1c1008',
                ],
                [
                    'name'     => 'Matcha Hustle Latte',
                    'subtitle' => 'For the caffeine-curious.',
                    'desc'     => 'Ceremonial grade matcha, oat milk, and a kiss of cinnamon. The choice of designers who say they\'re cutting back on coffee.',
                    'price'    => '₱119',
                    'tags'     => ['Matcha', 'Creamy', 'Smooth'],
                    'badge'    => 'New',
                    'fill'     => '#1a2e1a',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-[rgba(200,169,126,0.15)]">
            @foreach ($drinks as $idx => $drink)
                <div class="group relative bg-[#1a1a1a] p-10 overflow-hidden hover:bg-[#1d1d1d] transition-colors duration-300 cursor-pointer">

                    {{-- Hover left accent line --}}
                    <div class="absolute top-0 left-0 w-0.75 h-0 bg-[#c8a97e] group-hover:h-full transition-all duration-500 ease-out"></div>

                    {{-- Badge --}}
                    <span class="inline-block font-mono-grind text-[0.6rem] tracking-widest text-[#1a1a1a] bg-[#c8a97e] px-3 py-1 rounded-sm uppercase mb-6">
                        {{ $drink['badge'] }}
                    </span>

                    {{-- Mini cup SVG --}}
                    <div class="flex justify-center mb-8">
                        <svg width="100" height="120" viewBox="0 0 100 120" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                    {{-- Name --}}
                    <h3 class="font-display text-[1.4rem] font-bold text-[#f5f0e8] mb-1">{{ $drink['name'] }}</h3>
                    <p class="font-mono-grind text-[0.7rem] text-[#c8a97e] opacity-70 tracking-wide mb-4">{{ $drink['subtitle'] }}</p>

                    {{-- Desc --}}
                    <p class="font-sans text-sm text-[#e8d5b7] opacity-55 leading-relaxed mb-6">{{ $drink['desc'] }}</p>

                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach ($drink['tags'] as $tag)
                            <span class="font-mono-grind text-[0.6rem] tracking-widest text-[#e8d5b7] border border-[rgba(200,169,126,0.15)] px-2.5 py-1 rounded-sm uppercase opacity-60">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    {{-- Price + CTA --}}
                    <div class="flex items-center justify-between pt-5 border-t border-[rgba(200,169,126,0.15)]">
                        <span class="font-display text-[1.8rem] font-black text-[#c8a97e]">{{ $drink['price'] }}</span>
                        <button class="font-mono-grind text-[0.7rem] tracking-wider text-[#1a1a1a] bg-[#c8a97e] px-5 py-2.5 rounded-sm hover:bg-[#e8d5b7] transition-colors duration-200 cursor-pointer border-none">
                            Order →
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>