const header = document.querySelector("header");
const menuLinks = document.querySelectorAll("nav ul li .link[href^='#']");
const sections = document.querySelectorAll("section[id], footer[id]");
const activeClass = "active";

const getMenuHeight = () => (header ? header.offsetHeight : 0);

// Header fixo
window.addEventListener("scroll", () => {
    header.classList.toggle("fixed", window.scrollY > 0);
});

// Clique no menu
menuLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
        e.preventDefault();

        const id = link.getAttribute("href");
        const target = document.querySelector(id);

        if (target) {
            const menuHeight = getMenuHeight();
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const targetRect = target.getBoundingClientRect();
            const customOffset = parseInt(target.dataset.offset || "0", 10);

            const targetOffset = targetRect.top + scrollTop - menuHeight + customOffset;

            window.scrollTo({
                top: targetOffset,
                behavior: "smooth",
            });
        }
    });
});

// Atualizar active conforme scroll
window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY;
    const menuHeight = getMenuHeight();

    sections.forEach((section) => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - menuHeight + (parseInt(section.dataset.offset || "0", 10));
        const sectionId = section.getAttribute("id");

        if (scrollTop >= sectionTop && scrollTop < sectionTop + sectionHeight) {
            menuLinks.forEach((link) => link.classList.remove(activeClass));

            const activeLink = document.querySelector(`nav ul li a[href="#${sectionId}"]`);
            if (activeLink) activeLink.classList.add(activeClass);
        }
    });
});
