<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 px-8 py-6">
    <div class="max-w-300 mx-auto flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}" wire:navigate.hover class="flex items-center gap-2 no-underline group">
            <img src="{{ asset('logo.png') }}"
                 alt="Grind Logo"
                 class="h-6 w-6 object-contain">
            <span class="text-3xl font-mono-grind font-bold text-grind-primary">GRIND</span>
        </a>

        {{-- Desktop links --}}
        <ul class="hidden md:flex items-center gap-10 list-none">
            <li>
                <a href="{{ route('home') }}" wire:navigate.hover
                   class="font-sans text-sm text-stone-600 hover:text-stone-900 font-medium tracking-wide transition-all duration-200 no-underline">
                    Home
                </a>
            </li>
            <li>
                <a href="#menu"
                   class="font-sans text-sm text-stone-600 hover:text-stone-900 font-medium tracking-wide transition-all duration-200 no-underline">
                    Menu
                </a>
            </li>
            <li>
                <a href="#features"
                   class="font-sans text-sm text-stone-600 hover:text-stone-900 font-medium tracking-wide transition-all duration-200 no-underline">
                    About
                </a>
            </li>
            <li>
                <a href="#contact"
                   class="font-sans text-sm text-stone-600 hover:text-stone-900 font-medium tracking-wide transition-all duration-200 no-underline">
                    Contact
                </a>
            </li>
        </ul>

        {{-- Desktop CTA --}}
        <a href="{{ route('menu') }}" wire:navigate.hover
           class="hidden md:inline-flex items-center gap-2 font-sans text-xs font-medium tracking-widest bg-grind-primary text-white px-7 py-2.5 rounded-lg hover:bg-grind-accent hover:text-stone-600 hover:-translate-y-0.5 transition-all duration-200 no-underline">
            Order Now
        </a>

        {{-- Burger --}}
        <button id="burger" class="md:hidden flex flex-col gap-1.5 cursor-pointer bg-transparent border-none p-1" aria-label="Toggle menu">
            <span class="block w-6 h-0.5 bg-grind-primary transition-all duration-300"></span>
            <span class="block w-4.5 h-0.5 bg-grind-primary transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-grind-primary transition-all duration-300"></span>
        </button>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden md:hidden pt-4 pb-6 border-t border-grind-border mt-4  -mx-8 px-8">
        <ul class="list-none flex flex-col gap-5">
            <li>
                <a href="{{ route('home') }}" wire:navigate.hover
                   class="font-sans text-base text-black transition-all duration-200 no-underline">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('menu') }}" wire:navigate.hover
                   class="font-sans text-base text-black transition-all duration-200 no-underline">
                    Menu
                </a>
            </li>
            <li>
                <a href="#features"
                   class="font-sans text-base text-black transition-all duration-200 no-underline">
                    About
                </a>
            </li>
            <li>
                <a href="#contact"
                   class="font-sans text-base text-black transition-all duration-200 no-underline">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
