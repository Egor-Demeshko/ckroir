import createGlide from '/assets/js/elements/Glide.js';
import AnimatedLinks from '/assets/js/elements/AnimatedLinks';
import createTopMenuController from '/assets/js/elements/TOP_MENU/top-menu.js';
import createMobileMenuController from '/assets/js/elements/mobileMenu.js';
import '/assets/js/elements/createFixedMenu.js';
import '/assets/js/elements/goUp.js';
import '/assets/js/slowLoading.js';
import '/assets/js/elements/highContrast.js';
import popUpSendForm from './assets/js/elements/popUpSendForm';
import {createGalleryController} from "/assets/js/elements/GALLERY/galleryController.js";


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
});

const archive_slider = createGlide({
    selector: '.slider_archive',
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
});

/**Запускаем слайдер с сылками */
const animatedLinks = new AnimatedLinks({
    elementsClass: '#useful_links_slider'
});

createTopMenuController('menu');
createMobileMenuController('mobile_menu');
popUpSendForm(".header__contacts_contact-form", '[data-toggle="modal"]');
createGalleryController(createGlide);
