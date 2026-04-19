document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");
    const logo = document.querySelector("#navbar img");
    const mobileMenu = document.getElementById("mobile-menu");

    if (!navbar) return;

    window.addEventListener("scroll", () => {
        if (window.scrollY > 40) {
            navbar.classList.add(
                "bg-[#1a1a1a]/95",
                "backdrop-blur-md",
                "border-b",
                "border-[rgba(200,169,126,0.15)]",
                "!py-3",
            );
            document.querySelectorAll("#navbar ul a").forEach((a) => {
                a.classList.remove("text-stone-600", "hover:text-stone-900");
                a.classList.add("text-[#e8d5b7]", "hover:text-white");
            });
            logo.src = "/logo-transparent.png";
            mobileMenu.classList.remove("bg-[#f8f8f8]");
            mobileMenu.classList.add("scrolled-dark");
            document.querySelectorAll("#mobile-menu a").forEach((a) => {
                a.classList.remove("text-black");
                a.classList.add("text-[#e8d5b7]");
            });
        } else {
            navbar.classList.remove(
                "bg-[#1a1a1a]/95",
                "backdrop-blur-md",
                "border-b",
                "border-[rgba(200,169,126,0.15)]",
                "!py-3",
            );
            document.querySelectorAll("#navbar ul a").forEach((a) => {
                a.classList.remove("text-[#e8d5b7]", "hover:text-white");
                a.classList.add("text-stone-600", "hover:text-stone-900");
            });
            logo.src = "/logo.png";
            mobileMenu.classList.remove("scrolled-dark");
            mobileMenu.classList.add("bg-[#f8f8f8]");
            document.querySelectorAll("#mobile-menu a").forEach((a) => {
                a.classList.remove("text-[#e8d5b7]");
                a.classList.add("text-black");
            });
        }
    });

    document.getElementById("burger")?.addEventListener("click", () => {
        document.getElementById("mobile-menu")?.classList.toggle("hidden");
    });
});
