gsap.registerPlugin(ScrollTrigger);

let tl_lp = gsap.timeline();

tl_lp.from("#title-lp", {opacity: 0, y: 150, duration: 1.5, ease: "power1.inOut"})
    .from("#sottotitolo-lp", {opacity: 0, y: 150, duration: 1.5, ease: "power1.inOut"}, 0.3)
    .from("#btn-lp", {opacity: 0, y: 150, duration: 1, ease: "power1.inOut"}, 1.5);

