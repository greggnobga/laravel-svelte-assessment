/** Select all elements you want to observe */
const elements = document.querySelectorAll('.animated-element');

/** Create an intersection observer instance */
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        /* Get the animation type from data attribute */
        const animationType = entry.target.dataset.animation;

        if (entry.isIntersecting) {
            /** Add the corresponding animation class */
            entry.target.classList.add('animate-animated', animationType);
        } else {
            /** Remove the classes when the element is out of viewport */
            entry.target.classList.remove('animate-animated', animationType);
        }
    });
});

/**  Observe each element */
elements.forEach((element) => observer.observe(element));
