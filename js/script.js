gsap.from(".jumbotron img", { duration: 1.5, rotateY: 360, opacity: 0 });

gsap.from(".navbar", { duration: 1.5, y: -100, opacity: 0, ease: "bounce" });

gsap.from(".display-4", { duration: 4, x: -50, opacity: 0, delay: 0.5, ease: "elastic" });

// pluggin
// kalau mau instal pluggin lain, tinggal kasi koma saja di TextPlugin..
gsap.registerPlugin(TextPlugin);
gsap.to(".lead", { duration: 2, delay: 1.5, text: "College Student | Web Developer" });
// end pluggin
