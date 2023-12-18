import createGlide from '/assets/js/elements/Glide.js';
import '/assets/js/elements/top-menu.js';


const firstSlider = createGlide({
    selector: '.top-slider',
    animationDuration: 800,
    autoplay: 6000
});

/**второй слайдер с более мелкими блоками */
const secondSlider = createGlide({
    selector: '.info_slide',
    animationDuration: 800,
    autoplay: false,
    perView: 4,
    gap: "32px",
    peek: {
        before: 16,
        after: 8
    },
    breakpoints: {
        1240: {
            perView: 3,
            gap: "24px",
        },
        800: {
            perView: 2,
            gap: "16px"
        },
        500:{
            perView: 1,
            bound: true
        }
    }
})