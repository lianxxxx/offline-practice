<section id="features" class="relative py-32 px-6 overflow-hidden">

    {{-- Top rule --}}
    <div class="absolute top-0 left-0 right-0 h-px opacity-30"
         style="background: linear-gradient(to right, transparent, #c8a97e, transparent)"></div>

    <div class="max-w-300 mx-auto">

        {{-- Header --}}
        <div class="mb-20">
            <span class="font-mono-grind text-[0.7rem] tracking-[0.3em] text-[#c8a97e] uppercase">Why Grind?</span>
            <div class="flex flex-col md:flex-row md:items-end gap-6 mt-3">
                <h2 class="font-display text-[clamp(2.5rem,5vw,4rem)] font-black text-[#f5f0e8] leading-none">
                    Built for the<br>
                    <em class="text-[#c8a97e]">deep work</em> era.
                </h2>
                <p class="font-sans text-sm text-[#e8d5b7] opacity-60 max-w-xs leading-relaxed md:pb-2">
                    Not your typical coffee shop. Grind is designed from the ground up for students, freelancers, and late-night builders.
                </p>
            </div>
        </div>

        {{-- Grid --}}
        @php
            $features = [
                [
                    'tag'   => '100 Mbps',
                    'title' => 'Blazing WiFi',
                    'desc'  => 'Fiber-speed internet that handles your Zoom calls, GitHub pushes, and 4K renders without breaking a sweat.',
                    'detail'=> 'Free · No time limit',
                    'icon'  => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12.55a11 11 0 0 1 14.08 0"/><path d="M1.42 9a16 16 0 0 1 21.16 0"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="currentColor"/></svg>',
                ],
                [
                    'tag'   => 'Focus Zones',
                    'title' => 'Study Space',
                    'desc'  => 'Quiet pods, communal tables, and standing desks. Reserve a spot or walk in — there\'s always room to think.',
                    'detail'=> '20+ seats available',
                    'icon'  => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>',
                ],
                [
                    'tag'   => 'Single Origin',
                    'title' => 'Premium Coffee',
                    'desc'  => 'Beans sourced from Cordillera highlands. Roasted in small batches. Every cup is an intentional act.',
                    'detail'=> 'From ₱99',
                    'icon'  => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>',
                ],
                [
                    'tag'   => 'Lo-fi Always On',
                    'title' => 'Good Vibes',
                    'desc'  => 'Curated ambient playlists. Never too loud, never too quiet. The right background to get into the zone.',
                    'detail'=> '0 ads, forever',
                    'icon'  => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[rgba(200,169,126,0.15)]">
            @foreach ($features as $i => $f)
                <div class="group relative bg-[#1a1a1a] p-10 overflow-hidden hover:bg-[#1f1f1f] transition-colors duration-300">

                    {{-- Number --}}
                    <span class="absolute top-6 right-6 font-mono-grind text-[0.65rem] text-[#6b6560] opacity-50">0{{ $i + 1 }}</span>

                    {{-- Icon --}}
                    <div class="text-[#c8a97e] mb-6">{!! $f['icon'] !!}</div>

                    {{-- Tag --}}
                    <p class="font-mono-grind text-[0.65rem] tracking-[0.15em] text-[#c8a97e] uppercase opacity-70 mb-3">{{ $f['tag'] }}</p>

                    {{-- Title --}}
                    <h3 class="font-display text-[1.4rem] font-bold text-[#f5f0e8] mb-3">{{ $f['title'] }}</h3>

                    {{-- Desc --}}
                    <p class="font-sans text-sm text-[#e8d5b7] opacity-60 leading-relaxed mb-6">{{ $f['desc'] }}</p>

                    {{-- Detail --}}
                    <p class="font-mono-grind text-[0.7rem] text-[#c8a97e] border-t border-[rgba(200,169,126,0.15)] pt-4">{{ $f['detail'] }}</p>

                    {{-- Hover glow --}}
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300"
                         style="background: radial-gradient(circle at 50% 120%, rgba(200,169,126,0.07), transparent 70%)"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>