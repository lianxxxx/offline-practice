<section id="cta" class="relative py-15 px-6 overflow-hidden bg-grind-text">

    {{-- Decorative circles --}}

    {{-- Background tint --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background: linear-gradient(135deg, rgba(200,169,126,0.05) 0%, transparent 50%, rgba(200,169,126,0.03) 100%)"></div>

    {{-- Rules --}}
    <div class="absolute top-0 left-0 right-0 h-px opacity-20"
         style="background: linear-gradient(to right, transparent, #c8a97e, transparent)"></div>
    <div class="absolute bottom-0 left-0 right-0 h-px opacity-20"
         style="background: linear-gradient(to right, transparent, #c8a97e, transparent)"></div>

   

    <div class="max-w-800 mx-auto text-center relative z-10 ">

        <span class="font-mono-grind text-[0.7rem] tracking-[0.3em] text-grind-primary uppercase block mb-6">
            Your Next Session Starts Here
        </span>

        <h2 class="font-display font-black text-grind-muted text-whiteleading-[1.05] mb-6"
            style="font-size: clamp(2.8rem, 6vw, 5rem) ">
            Stop browsing.<br>
            Start <em class="text-grind-primary">building.</em>
        </h2>

        <p class="font-sans text-base text-grind-surface opacity-60 max-w-125 mx-auto leading-loose mb-12">
            Grab your favorite brew, claim a corner, and get to work. Grind is open late because your best ideas don't follow a 9-to-5 schedule.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="#menu"
               class="inline-flex items-center gap-3 bg-grind-primary  font-mono-grind text-xs text-grind-text tracking-widest px-8 py-3 rounded-sm hover:-translate-y-0.5 transition-all duration-200 no-underline">
                Order Now →
            </a>
            <a href="#contact"
               class="inline-flex items-center gap-3 bg-transparent text-grind-primary font-mono-grind text-xs tracking-widest px-10 py-4 rounded-sm border hover:-translate-y-0.5  transition-all duration-200 no-underline">
                Find Us
            </a>
        </div>

        {{-- Hours --}}
        <div class="flex flex-wrap justify-center gap-12 mt-16">
            @foreach(['Mon–Fri' => '7AM – 2AM', 'Weekends' => '8AM – 4AM', 'Holidays' => 'Never closed'] as $day => $time)
                <div class="text-center">
                    <p class="font-mono-grind text-[0.65rem] text-grind-primary  tracking-[0.15em] uppercase mb-1">{{ $day }}</p>
                    <p class="font-display text-lg text-grind-muted">{{ $time }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>