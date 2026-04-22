function handleScroll() {
    const navbar = document.getElementById("navbar");
    const logo = document.querySelector("#navbar img");
    const mobileMenu = document.getElementById("mobile-menu");

    if (!navbar) return;

    if (window.scrollY > 40) {
        navbar.classList.add(
            "bg-grind-bg",
            "backdrop-blur-md",
            "border-b",
            "border-grind-border",
            "!py-3",
        );
        document.querySelectorAll("#navbar ul a").forEach((a) => {
            a.classList.remove("text-stone-600", "hover:text-stone-900");
            a.classList.add("text-grind-accent", "hover:text-white");
        });
        logo.src = "/logo-transparent.png";
        mobileMenu.classList.remove("bg-grind-page");
        mobileMenu.classList.add("bg-grind-bg");
        document.querySelectorAll("#mobile-menu a").forEach((a) => {
            a.classList.remove("text-black");
            a.classList.add("text-grind-accent");
        });
    } else {
        navbar.classList.remove(
            "bg-grind-bg",
            "backdrop-blur-md",
            "border-b",
            "border-grind-border",
            "!py-3",
        );
        document.querySelectorAll("#navbar ul a").forEach((a) => {
            a.classList.remove("text-grind-accent", "hover:text-white");
            a.classList.add("text-stone-600", "hover:text-stone-900");
        });
        logo.src = "/logo.png";
        mobileMenu.classList.remove("bg-grind-bg");
        mobileMenu.classList.add("bg-grind-page");
        document.querySelectorAll("#mobile-menu a").forEach((a) => {
            a.classList.remove("text-grind-accent");
            a.classList.add("text-black");
        });
    }
}

function handleBurgerClick() {
    document.getElementById("mobile-menu")?.classList.toggle("hidden");
}

function initNavbar() {
    if (!document.getElementById("navbar")) return;

    window.removeEventListener("scroll", handleScroll);
    window.addEventListener("scroll", handleScroll);

    const burger = document.getElementById("burger");
    if (burger) {
        burger.removeEventListener("click", handleBurgerClick);
        burger.addEventListener("click", handleBurgerClick);
    }

    handleScroll();
}

document.addEventListener("DOMContentLoaded", initNavbar);
document.addEventListener("livewire:navigated", initNavbar);
