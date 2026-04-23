<section class="px-6 pb-24">
    <div class="max-w-300 mx-auto">

        @php
            $cardIdx = 0;
            $categories = [
               [
    'name'  => 'Espresso',
    'label' => 'The Classics',
    'items' => [
['name' => 'The Grind Espresso', 'fill' => '#3d1f10', 'bg' => '#3d1f10', 'subtitle' => 'Double shot. Dark roast.',         'desc' => 'Dense, bitter, unapologetically strong. The shot that starts every session.',          'price' => '₱99',  'badge' => 'Most Ordered', 'tags' => ['Espresso', 'Bold',     'Classic']],
['name' => 'Americano',          'fill' => '#6b4226', 'bg' => '#4a2c1a', 'subtitle' => 'Two shots over hot water.',        'desc' => 'No frills, no distractions. Just you, the work, and two clean shots.',                'price' => '₱109', 'badge' => null,           'tags' => ['Espresso', 'Clean',    'Light'  ]],
['name' => 'Flat White',         'fill' => '#9e6b3a', 'bg' => '#9e6b3a', 'subtitle' => 'Ristretto shots, microfoam.',      'desc' => 'Smooth enough to sip slow. Strong enough to keep you going.',                        'price' => '₱129', 'badge' => null,           'tags' => ['Espresso', 'Creamy',   'Smooth' ]],
['name' => 'Cortado',            'fill' => '#a0522d', 'bg' => '#7a3b1e', 'subtitle' => 'Equal parts, perfectly balanced.', 'desc' => 'Equal parts espresso and milk. Balanced for clarity and control.',   'price' => '₱109', 'badge' => 'Trending',           'tags' => ['Espresso', 'Balanced', 'Small'  ]],
    ],
],
               [
    'name'  => 'Cold Brew',
    'label' => 'Cold & Slow',
    'items' => [
        ['name' => 'Cold Brew Overflow', 'fill' => '#c8956c', 'bg' => '#8f5f3f', 'subtitle' => '18-hour steep.',         'desc' => 'Steeped 18 hours in cold water. The go-to for late nights and long focus blocks.',  'price' => '₱129', 'badge' => 'Staff Pick', 'tags' => ['Cold', 'Smooth', 'Strong']],
['name' => 'Nitro Cold Brew',    'fill' => '#6b4c1a', 'bg' => '#6b4c1a', 'subtitle' => 'Nitrogen-infused.',      'desc' => 'Nitrogen-charged and silky smooth. No dairy, no crash, just pure cold energy.',     'price' => '₱149', 'badge' => 'New',        'tags' => ['Cold', 'Creamy', 'Bold'  ]],
['name' => 'Cold Brew Tonic',    'fill' => '#5c4a2a', 'bg' => '#5c4a2a', 'subtitle' => 'Cold brew meets tonic.', 'desc' => 'Cold brew over tonic with a citrus twist. Unexpected, yet addictive.', 'price' => '₱139', 'badge' => null,         'tags' => ['Cold', 'Citrus', 'Crisp' ]],
    ],
],
             [
    'name'  => 'Specialty',
    'label' => 'Signatures',
    'items' => [
       ['name' => 'Matcha Hustle Latte', 'fill' => '#2d5a27', 'bg' => '#1a3d15', 'subtitle' => 'For the caffeine-curious.',   'desc' => 'Ceremonial matcha, oat milk, cinnamon. For when you are trying to be better.',     'price' => '₱119', 'badge' => 'Best Seller',  'tags' => ['Matcha',   'Creamy', 'Smooth']],
['name' => 'Peppermint Mocha',    'fill' => '#4db87a', 'bg' => '#1a4a2e', 'subtitle' => 'Cool, bold, refreshing.',     'desc' => 'Espresso, peppermint, dark chocolate. Order this when you need a reset.',           'price' => '₱129', 'badge' => null,   'tags' => ['Espresso', 'Minty',  'Bold'  ]],
['name' => 'Dirty Horchata',      'fill' => '#e8a0a0', 'bg' => '#8b3a3a', 'subtitle' => 'Espresso meets horchata.',    'desc' => 'Espresso over house made rice horchata. Weird choice. Always the right one.',       'price' => '₱129', 'badge' => 'Recommended',   'tags' => ['Espresso', 'Sweet',  'Unique']],
['name' => 'Lavender Fog',        'fill' => '#9b8ec4', 'bg' => '#4a3f6b', 'subtitle' => 'Earl grey and lavender.',     'desc' => 'Earl grey, lavender, oat milk. You worked hard enough. Wind down.',                 'price' => '₱149', 'badge' => null,   'tags' => ['Tea',      'Floral', 'Calm'  ]],
    ],
],
                [
                    'name'  => 'Snacks',
                    'label' => 'Fuel Up',
                    
                    'items' => [
                      ['name' => 'Butter Croissant', 'fill' => '#e8c98a', 'bg' => '#8b6914', 'subtitle' => 'Freshly baked daily.',      'desc' => 'Flaky, warm, buttery. The kind you order when you finally deserve a break.',     'price' => '₱49',  'badge' => null,          'tags' => ['Baked',  'Buttery', 'Flaky'  ]],
['name' => 'Banana Bread',     'fill' => '#d4a96a', 'bg' => '#7a5420', 'subtitle' => 'Dense, moist, chocolatey.',  'desc' => 'Dark chocolate chips, dense crumb. Order this when the work finally pays off.',  'price' => '₱79',  'badge' => null, 'tags' => ['Baked',  'Sweet',   'Rich'   ]],
['name' => 'Avocado Toast',    'fill' => '#7ab648', 'bg' => '#4a7c3f', 'subtitle' => 'Sourdough and smashed avo.', 'desc' => 'Smashed avo on sourdough with chili flakes and lemon. Eat well, work better.',  'price' => '₱99', 'badge' => 'Customer Favorite',          'tags' => ['Savory', 'Fresh',   'Filling']],
                    ],
                ],
            ];
        @endphp

        @foreach ($categories as $cat)
            <div class="mb-16">
                <div class="flex items-center gap-4 mb-8 pb-4 border-b-2 border-grind-primary w-fit">
                    <span class="font-mono-grind text-[0.65rem] tracking-[0.2em] text-grind-muted uppercase">{{ $cat['label'] }}</span>
                    <h2 class="font-display text-2xl font-black text-grind-muted uppercase">{{ $cat['name'] }}</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($cat['items'] as $item)
                        @php $cardIdx++; @endphp

                        <div class="group relative overflow-hidden rounded-xl transition-all duration-300 cursor-pointer shadow-sm">

                            {{-- TOP: light section with SVG cup --}}
                            <div class="relative bg-grind-text px-6 pt-6 pb-4">
                                <div class="h-6 mb-5">
                                    @if ($item['badge'])
                                        <span class="inline-block font-mono-grind text-[0.6rem] tracking-widest text-grind-bg bg-grind-primary px-3 py-1 rounded-sm uppercase">
                                            {{ $item['badge'] }}
                                        </span>
                                    @endif
                                </div>

                                <div class="flex justify-center mb-2">
                                    @if ($cat['name'] === 'Cold Brew')
                                    <svg width="85" height="102" viewBox="0 0 100 120" fill="none">
                                        <defs>
                                            <linearGradient id="dg{{ $cardIdx }}" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(0,0,0,0.5)"/>
                                                <stop offset="50%" stop-color="rgba(255,255,255,0.06)"/>
                                                <stop offset="100%" stop-color="rgba(0,0,0,0.5)"/>
                                            </linearGradient>
                                        </defs>
                                        <path d="M20 20 L25 100 L75 100 L80 20 Z" fill="{{ $item['fill'] ?? $cat['fill'] }}"/>
                                        <path d="M20 20 L25 100 L75 100 L80 20 Z" fill="url(#dg{{ $cardIdx }})"/>
                                        <ellipse cx="50" cy="22" rx="30" ry="5" fill="#1a1a1a" opacity="0.8"/>
                                        <rect x="30" y="18" width="40" height="6" rx="3" fill="#2a2520"/>
                                        <text x="50" y="65" text-anchor="middle" font-family="'Space Mono',monospace" font-size="7" fill="rgba(232,213,183,0.45)" letter-spacing="2">GRIND</text>
                                        <ellipse cx="50" cy="100" rx="25" ry="4" fill="#111" opacity="0.6"/>
                                    </svg>
                                    @elseif ($cat['name'] === 'Snacks' && $item['name'] === 'Butter Croissant')
                                    <svg width="85" height="102" viewBox="0 0 100 120" fill="none">
                                        <defs>
                                            <linearGradient id="dg{{ $cardIdx }}" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(0,0,0,0.4)"/>
                                                <stop offset="50%" stop-color="rgba(255,255,255,0.1)"/>
                                                <stop offset="100%" stop-color="rgba(0,0,0,0.4)"/>
                                            </linearGradient>
                                        </defs>
                                        <ellipse cx="50" cy="100" rx="30" ry="5" fill="#000" opacity="0.1"/>
                                        <path d="M22 82 Q18 50 42 28 Q55 18 68 28 Q85 48 78 82" stroke="{{ $item['fill'] ?? $cat['fill'] }}" stroke-width="18" stroke-linecap="round" fill="none"/>
                                        <path d="M22 82 Q18 50 42 28 Q55 18 68 28 Q85 48 78 82" stroke="url(#dg{{ $cardIdx }})" stroke-width="18" stroke-linecap="round" fill="none"/>
                                        <path d="M26 76 Q22 50 44 30" stroke="rgba(255,255,255,0.2)" stroke-width="2" stroke-linecap="round" fill="none"/>
                                        <path d="M30 80 Q26 54 48 34" stroke="rgba(255,255,255,0.12)" stroke-width="1.5" stroke-linecap="round" fill="none"/>
                                        <path d="M73 78 Q84 52 67 30" stroke="rgba(255,255,255,0.15)" stroke-width="2" stroke-linecap="round" fill="none"/>
                                    </svg>
                                    @elseif ($cat['name'] === 'Snacks' && $item['name'] === 'Banana Bread')
                                    <svg width="85" height="102" viewBox="0 0 100 120" fill="none">
                                        <defs>
                                            <linearGradient id="dg{{ $cardIdx }}" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(0,0,0,0.4)"/>
                                                <stop offset="50%" stop-color="rgba(255,255,255,0.1)"/>
                                                <stop offset="100%" stop-color="rgba(0,0,0,0.4)"/>
                                            </linearGradient>
                                        </defs>
                                        <ellipse cx="50" cy="100" rx="32" ry="5" fill="#000" opacity="0.1"/>
                                        <path d="M15 95 L15 58 Q15 35 50 32 Q85 35 85 58 L85 95 Z" fill="{{ $item['fill'] ?? $cat['fill'] }}"/>
                                        <path d="M15 95 L15 58 Q15 35 50 32 Q85 35 85 58 L85 95 Z" fill="url(#dg{{ $cardIdx }})"/>
                                        <path d="M20 57 Q20 40 50 37 Q80 40 80 57" stroke="rgba(255,255,255,0.2)" stroke-width="2" fill="none"/>
                                        <line x1="34" y1="38" x2="34" y2="95" stroke="rgba(0,0,0,0.15)" stroke-width="1.5"/>
                                        <line x1="50" y1="33" x2="50" y2="95" stroke="rgba(0,0,0,0.15)" stroke-width="1.5"/>
                                        <line x1="66" y1="38" x2="66" y2="95" stroke="rgba(0,0,0,0.15)" stroke-width="1.5"/>
                                        <circle cx="27" cy="65" r="2.5" fill="#3d1f10" opacity="0.5"/>
                                        <circle cx="45" cy="75" r="2" fill="#3d1f10" opacity="0.5"/>
                                        <circle cx="60" cy="62" r="2.5" fill="#3d1f10" opacity="0.45"/>
                                        <circle cx="72" cy="80" r="2" fill="#3d1f10" opacity="0.4"/>
                                        <circle cx="38" cy="85" r="2" fill="#3d1f10" opacity="0.4"/>
                                    </svg>
                                    @elseif ($cat['name'] === 'Snacks')
                                    <svg width="85" height="102" viewBox="0 0 100 120" fill="none">
                                        <defs>
                                            <linearGradient id="dg{{ $cardIdx }}" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(0,0,0,0.4)"/>
                                                <stop offset="50%" stop-color="rgba(255,255,255,0.1)"/>
                                                <stop offset="100%" stop-color="rgba(0,0,0,0.4)"/>
                                            </linearGradient>
                                        </defs>
                                        <ellipse cx="50" cy="100" rx="32" ry="5" fill="#000" opacity="0.1"/>
                                        <rect x="15" y="50" width="70" height="48" rx="5" fill="{{ $item['fill'] ?? $cat['fill'] }}"/>
                                        <rect x="15" y="50" width="70" height="48" rx="5" fill="url(#dg{{ $cardIdx }})"/>
                                        <rect x="15" y="50" width="70" height="7" rx="5" fill="rgba(0,0,0,0.15)"/>
                                        <path d="M20 57 Q20 42 50 38 Q80 42 80 57 L80 63 Q65 57 50 56 Q35 57 20 63 Z" fill="#5a8a3c"/>
                                        <path d="M25 57 Q25 45 50 42 Q75 45 75 57 L75 61 Q62 55 50 54 Q38 55 25 61 Z" fill="#7ab84e" opacity="0.7"/>
                                        <circle cx="50" cy="50" r="5" fill="#8b6914" opacity="0.55"/>
                                        <circle cx="30" cy="70" r="1.5" fill="#c0392b" opacity="0.6"/>
                                        <circle cx="55" cy="74" r="1.5" fill="#c0392b" opacity="0.5"/>
                                        <circle cx="70" cy="65" r="1.5" fill="#c0392b" opacity="0.55"/>
                                        <circle cx="42" cy="82" r="1" fill="#c0392b" opacity="0.5"/>
                                    </svg>
                                    @else
                                    <svg width="85" height="102" viewBox="0 0 100 120" fill="none">
                                        <defs>
                                            <linearGradient id="dg{{ $cardIdx }}" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(0,0,0,0.5)"/>
                                                <stop offset="50%" stop-color="rgba(255,255,255,0.06)"/>
                                                <stop offset="100%" stop-color="rgba(0,0,0,0.5)"/>
                                            </linearGradient>
                                        </defs>
                                        <path d="M20 20 L25 100 L75 100 L80 20 Z" fill="{{ $item['fill'] ?? $cat['fill'] }}"/>
                                        <path d="M20 20 L25 100 L75 100 L80 20 Z" fill="url(#dg{{ $cardIdx }})"/>
                                        <ellipse cx="50" cy="22" rx="30" ry="5" fill="#1a1a1a" opacity="0.8"/>
                                        <rect x="30" y="18" width="40" height="6" rx="3" fill="#2a2520"/>
                                        <text x="50" y="65" text-anchor="middle" font-family="'Space Mono',monospace" font-size="7" fill="rgba(232,213,183,0.45)" letter-spacing="2">GRIND</text>
                                        <ellipse cx="50" cy="100" rx="25" ry="4" fill="#111" opacity="0.6"/>
                                        <path d="M80 40 Q96 40 96 60 Q96 80 80 80" stroke="#2a2520" stroke-width="7" fill="none" stroke-linecap="round"/>
                                    </svg>
                                    @endif
                                </div>
                            </div>

                            {{-- BOTTOM: colored content area --}}
                           <div class="p-6 pt-5" style="background-color: {{ $item['bg'] ?? $cat['bg'] }}">
                                <div class="absolute top-0 left-0 w-0.75 h-0 bg-grind-primary group-hover:h-full transition-all duration-500 ease-out"></div>

                                <h3 class="font-display text-lg font-bold text-white mb-1 leading-tight">{{ $item['name'] }}</h3>
                                <p class="font-mono-grind text-[0.7rem] text-grind-primary opacity-70 tracking-wide mb-3">{{ $item['subtitle'] }}</p>
                                <p class="font-sans text-xs text-grind-accent opacity-55 leading-relaxed mb-4">{{ $item['desc'] }}</p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach ($item['tags'] as $tag)
                                        <span class="font-mono-grind text-[0.6rem] tracking-widest text-grind-accent border border-grind-border px-2.5 py-1 rounded-sm uppercase opacity-60">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>

                                <div class="flex items-center justify-between pt-4 border-t border-grind-border">
                                    <span class="font-display text-xl font-black text-grind-text">{{ $item['price'] }}</span>
                                    <button class="font-mono-grind text-[0.6rem] tracking-wider text-grind-bg bg-grind-primary px-4 py-2 rounded-sm hover:bg-grind-accent transition-colors duration-200 cursor-pointer border-none">
                                        Order →
                                    </button>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</section>
