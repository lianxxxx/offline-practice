<section class="px-6 pb-24">
    <div class="max-w-300 mx-auto">

        @php
            $categories = [
                [
                    'name'  => 'Espresso',
                    'label' => 'The Classics',
                    'items' => [
                        ['name' => 'The Grind Espresso',    'desc' => 'Double shot, dark roast. Dense, bitter, unapologetically strong.',          'price' => '₱99',  'badge' => 'Most Ordered'],
                        ['name' => 'Americano',             'desc' => 'Two shots over hot water. Clean and direct. No distractions.',              'price' => '₱105', 'badge' => null],
                        ['name' => 'Flat White',            'desc' => 'Ristretto shots, microfoam milk. Smooth power delivery.',                   'price' => '₱120', 'badge' => null],
                        ['name' => 'Cortado',               'desc' => 'Equal parts espresso and steamed milk. The balanced one.',                  'price' => '₱110', 'badge' => null],
                    ],
                ],
                [
                    'name'  => 'Cold Brew',
                    'label' => 'Cold & Slow',
                    'items' => [
                        ['name' => 'Cold Brew Overflow',    'desc' => '18-hour steep. Smooth, low-acid, dangerously easy to drink.',               'price' => '₱129', 'badge' => 'Staff Pick'],
                        ['name' => 'Nitro Cold Brew',       'desc' => 'Nitrogen-infused cold brew. Creamy without any dairy.',                     'price' => '₱145', 'badge' => 'New'],
                        ['name' => 'Cold Brew Tonic',       'desc' => 'Cold brew over tonic water with a citrus twist.',                           'price' => '₱135', 'badge' => null],
                    ],
                ],
                [
                    'name'  => 'Specialty',
                    'label' => 'Signatures',
                    'items' => [
                        ['name' => 'Matcha Hustle Latte',   'desc' => 'Ceremonial matcha, oat milk, cinnamon. For the caffeine-curious.',          'price' => '₱119', 'badge' => 'New'],
                        ['name' => 'Brown Sugar Oat Latte', 'desc' => 'Espresso, oat milk, homemade brown sugar syrup. Rich and warming.',         'price' => '₱125', 'badge' => null],
                        ['name' => 'Dirty Horchata',        'desc' => 'Espresso over house-made rice horchata. Unexpected and addictive.',         'price' => '₱130', 'badge' => null],
                        ['name' => 'Lavender Fog',          'desc' => 'Earl grey, lavender syrup, oat milk. The wind-down order.',                 'price' => '₱125', 'badge' => null],
                    ],
                ],
                [
                    'name'  => 'Snacks',
                    'label' => 'Fuel Up',
                    'items' => [
                        ['name' => 'Butter Croissant',      'desc' => 'Freshly baked. Flaky, buttery, pairs with anything.',                       'price' => '₱65',  'badge' => null],
                        ['name' => 'Banana Bread',          'desc' => 'Dense, moist, with dark chocolate chips.',                                  'price' => '₱75',  'badge' => 'Best Seller'],
                        ['name' => 'Avocado Toast',         'desc' => 'Sourdough, smashed avocado, chili flakes, lemon. The fuel.',                'price' => '₱160', 'badge' => null],
                    ],
                ],
            ];
        @endphp

        @foreach ($categories as $cat)
            <div class="mb-16">
                <div class="flex items-center gap-4 mb-8 pb-4 border-b border-grind-border">
                    <span class="font-mono-grind text-[0.65rem] tracking-[0.2em] text-grind-muted uppercase">{{ $cat['label'] }}</span>
                    <h2 class="font-display text-2xl font-black text-grind-muted">{{ $cat['name'] }}</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($cat['items'] as $item)
                        <div class="group relative p-6 rounded-xl border border-grind-border hover:border-grind-primary/30 hover:bg-grind-text/40 transition-all duration-300">

                            @if ($item['badge'])
                                <span class="inline-block font-mono-grind text-[0.55rem] tracking-widest text-grind-bg bg-grind-primary px-2.5 py-1 rounded-sm uppercase mb-4">
                                    {{ $item['badge'] }}
                                </span>
                            @else
                                <div class="mb-7"></div>
                            @endif

                            <h3 class="font-display text-lg font-bold text-grind-muted mb-2 leading-tight">{{ $item['name'] }}</h3>
                            <p class="font-sans text-xs text-grind-muted opacity-55 leading-relaxed mb-5">{{ $item['desc'] }}</p>

                            <div class="flex items-center justify-between pt-4 border-t border-grind-border">
                                <span class="font-display text-xl font-black text-grind-primary">{{ $item['price'] }}</span>
                                <button class="font-mono-grind text-[0.6rem] tracking-wider text-grind-bg bg-grind-primary px-4 py-2 rounded-sm hover:bg-grind-accent transition-colors duration-200 cursor-pointer border-none opacity-0 group-hover:opacity-100">
                                    Add →
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</section>
