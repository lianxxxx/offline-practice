<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 px-8 py-6">
    <div class="max-w-300 mx-auto flex items-center justify-between">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2 no-underline group">
            <div class="w-9 h-9 rounded-full border border-[#c8a97e] flex items-center justify-center">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#c8a97e" stroke-width="2">
                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                    <line x1="6" y1="1" x2="6" y2="4"/>
                    <line x1="10" y1="1" x2="10" y2="4"/>
                    <line x1="14" y1="1" x2="14" y2="4"/>
                </svg>
            </div>
            <span class="font-display text-[1.4rem] font-black text-[#f5f0e8] tracking-tight">Grind</span>
        </a>

        {{-- Desktop links --}}
        <ul class="hidden md:flex items-center gap-10 list-none">
            @foreach(['Home' => '#hero', 'Menu' => '#menu', 'About' => '#features', 'Contact' => '#contact'] as $label => $href)
                <li>
                    <a href="{{ $href }}"
                       class="font-sans text-sm text-[#e8d5b7] opacity-70 hover:opacity-100 hover:text-[#c8a97e] tracking-wide transition-all duration-200 no-underline">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- Desktop CTA --}}
        <a href="#menu"
           class="hidden md:inline-block font-mono-grind text-xs font-bold tracking-widest text-[#1a1a1a] bg-[#c8a97e] px-5 py-2.5 rounded-sm hover:bg-[#e8d5b7] hover:-translate-y-0.5 transition-all duration-200 no-underline">
            Order Now
        </a>

        {{-- Burger --}}
        <button id="burger" class="md:hidden flex flex-col gap-1.5 cursor-pointer bg-transparent border-none p-1" aria-label="Toggle menu">
            <span class="block w-6 h-0.5 bg-[#c8a97e] transition-all duration-300"></span>
            <span class="block w-4.5 h-0.5 bg-[#c8a97e] transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-[#c8a97e] transition-all duration-300"></span>
        </button>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden md:hidden px-8 pt-4 pb-6 border-t border-[rgba(200,169,126,0.15)] mt-4">
        <ul class="list-none flex flex-col gap-5">
            @foreach(['Home' => '#hero', 'Menu' => '#menu', 'About' => '#features', 'Contact' => '#contact'] as $label => $href)
                <li>
                    <a href="{{ $href }}"
                       class="font-sans text-base text-[#e8d5b7] opacity-70 hover:opacity-100 hover:text-[#c8a97e] transition-all duration-200 no-underline">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar.classList.add('bg-[#1a1a1a]/95', 'backdrop-blur-md', 'border-b', 'border-[rgba(200,169,126,0.15)]', '!py-3');
        } else {
            navbar.classList.remove('bg-[#1a1a1a]/95', 'backdrop-blur-md', 'border-b', 'border-[rgba(200,169,126,0.15)]', '!py-3');
        }
    });

    document.getElementById('burger').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>