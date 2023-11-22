gsap.registerPlugin(ScrollTrigger);

let tl_lp = gsap.timeline();

tl_lp.from("#title-landingpage", {opacity: 0, y: 150, duration: 1.5, ease: "power1.inOut"})
    .from("#sottotitolo-landingpage", {opacity: 0, y: 150, duration: 1.5, ease: "power1.inOut"}, 0.3)
    .from("#btn-landingpage", {opacity: 0, y: 150, duration: 1, ease: "power1.inOut"}, 1.5);

gsap.from("#p-dashboard", {
    opacity: 0,
    y: 150,
    duration: 1,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#dashboard-section",
        start: "top 10%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#citazione-title", {
    opacity: 0,
    y: 150,
    duration: 1,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#citazione-section",
        start: "top 70%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#citazione-subtitle", {
    opacity: 0,
    y: 150,
    duration: 1,
    ease: "power1.inOut",
    delay: 0.5,
    scrollTrigger: {
        trigger: "#citazione-section",
        start: "top 70%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#citazione-img", {
    opacity: 0,
    x: -300,
    duration: 0.8,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#citazione-section",
        start: "top 10%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#citazione-p", {
    opacity: 0,
    y: 150,
    duration: 1,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#citazione-section",
        start: "top 10%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#citazione-btn", {
    opacity: 0,
    y: 150,
    duration: 1,
    delay: 0.5,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#citazione-section",
        start: "top 10%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#banner-title", {
    opacity: 0,
    y: 150,
    duration: 1,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#banner-section",
        start: "top 70%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#banner-p", {
    opacity: 0,
    y: 150,
    duration: 1,
    delay: 0.5,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#banner-section",
        start: "top 60%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#banner-btns a", {
    opacity: 0,
    y: 150,
    duration: 1,
    delay: 0.5,
    ease: "power1.inOut",
    stagger: 0.2,
    scrollTrigger: {
        trigger: "#banner-section",
        start: "top 50%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#servizi-title", {
    opacity: 0,
    y: 150,
    duration: 1,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#servizi-section",
        start: "top 80%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#servizi-cards a", {
    opacity: 0,
    x: 150,
    duration: 0.7,
    ease: "power1.inOut",
    delay: 0.5,
    stagger: 0.7,
    scrollTrigger: {
        trigger: "#servizi-section",
        start: "top 40%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#faq-title", {
    opacity: 0,
    y: 150,
    duration: 1,
    ease: "power1.inOut",
    scrollTrigger: {
        trigger: "#faq-section",
        start: "top 80%",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from("#faq-questions", {
    opacity: 0,
    x: 150,
    duration: 0.7,
    ease: "power1.inOut",
    delay: 0.5,
    scrollTrigger: {
        trigger: "#faq-section",
        start: "top 40%",
        toggleActions: "play reverse play reverse",
    }
})