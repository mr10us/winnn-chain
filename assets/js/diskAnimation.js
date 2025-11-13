gsap.registerPlugin(ScrollTrigger);

let tl = null;

function throttle(fn, wait) {
  let lastTime = 0;
  return function(...args) {
    const now = Date.now();
    if (now - lastTime >= wait) {
      lastTime = now;
      fn.apply(this, args);
    }
  };
}

function clearAnimations() {
  // Снимаем pin со всех ScrollTriggers
  ScrollTrigger.getAll().forEach(st => {
    if (st.pin) {
      gsap.set(st.pin, { clearProps: "all" });

      if (st.pinSpacer) {
        gsap.set(st.pinSpacer, { clearProps: "all" });
      }
    }
    st.kill(true);
  });

  // Убиваем timeline
  if (tl) {
    tl.kill();
    tl = null;
  }

  // Чистим диски
  gsap.set(".cube .toAnimate", { clearProps: "all" });
}



function setupAnimation() {
  if (!window.matchMedia("(min-width: 1280px)").matches) return;
  const section = document.querySelector(".hero");
  const unorderedDisks = gsap.utils.toArray(".cube .toAnimate");

  if (!section || unorderedDisks.length === 0) return;

  // DOM: [disk_1, disk_2, disk_3]
  // Нужен порядок анимации: 3 → 2 → 1
  const disks = [...unorderedDisks].reverse(); // [disk_3, disk_2, disk_1]
  const firstDisk = disks[0];
  const lastDisk = disks[disks.length - 1];

  const spacing = 50;
  const compressedSpacing = 35;
  const total = disks.length;

  gsap.set(disks, {
    yPercent: -150,
    opacity: 0,
    position: "absolute",
    top: 0,
    left: "50%",
    right: 0,
    transformOrigin: "center center",
    transform: "translateX(-50%)",
  });

  tl = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top top",
      end: "+=" + window.innerHeight * (total + 1),
      scrub: true,
      pin: true,
      invalidateOnRefresh: true,
    },
  });

  // Основная последовательность: 3 → 2 → 1
  disks.forEach((disk, index) => {
    const finalY = (index - total - (total - 1) / 2) * spacing * -1;

    const readableSpacing = 100;

    const previousDisk = index > 0 && disks[index - 1];
    const lastDisk = index === total - 1;

    tl.to(disk, {
      yPercent: 0,
      y: finalY - readableSpacing,
      opacity: 1,
      filter: "grayscale(0)",
      duration: 0.5,
      ease: "power2.out",
    });

    previousDisk &&
      tl.to(previousDisk, {
        y: finalY,
        filter: "grayscale(0.6)",
        duration: 0.5,
        ease: "power2.out",
      });

    tl.to(disk, {
      y: finalY - spacing,
      duration: 0.5,
      ease: "power2.out",
    });

    if (lastDisk) {
      tl.to(
        disk,
        {
          yPercent: 0,
          filter: "grayscale(0.6)",
          duration: 0.5,
          ease: "power2.out",
        },
        "<"
      );
    }
  });

  // Небольшая пауза перед финальной композицией
  tl.to({}, { duration: 0.1 });

  const firstFinalY = (-(total + 1) / 2 + total) * compressedSpacing;
  const lastFinalY = ((total + 1) / 2 + total) * compressedSpacing;

  tl.to(
    lastDisk,
    {
      yPercent: 0,
      opacity: 1,
      y: firstFinalY,
      filter: "grayscale(0)",
      zIndex: total + 11,
      duration: 0.5,
      ease: "power2.inOut",
    },
    "<"
  );
  tl.to(
    firstDisk,
    {
      yPercent: 0,
      opacity: 1,
      y: lastFinalY,
      zIndex: 0,
      duration: 0.7,
      ease: "power2.out",
    },
    "<"
  );
}

window.addEventListener("DOMContentLoaded", setupAnimation);

/* 
  Throttled resize — перезапуск анимации
*/
window.addEventListener(
  "resize",
  throttle(() => {
    clearAnimations();
    setupAnimation();
    ScrollTrigger.refresh();
  }, 300)
);