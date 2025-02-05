// (function () {
//     "use strict";

//     var lightboxVideo = GLightbox({
//         selector: '.glightbox'
//     });
//     lightboxVideo.on('slide_changed', ({ prev, current }) => {
//         console.log('Prev slide', prev);
//         console.log('Current slide', current);

//         const { slideIndex, slideNode, slideConfig, player } = current;
//     });

// })();

(function () {
    "use strict";

    // Initialize GLightbox
    var lightboxVideo = GLightbox({
        selector: '.glightbox',
    });

    // Handle slide change event
    lightboxVideo.on('slide_changed', ({ prev, current }) => {
        console.log('Prev slide', prev);
        console.log('Current slide', current);

        // Ensure only the current slide is focusable
        const allSlides = document.querySelectorAll('.glightbox-slide');
        allSlides.forEach(slide => {
            if (slide === current.slideNode) {
                slide.removeAttribute('aria-hidden'); // Ensure the current slide is accessible
                slide.removeAttribute('inert');
            } else {
                slide.setAttribute('aria-hidden', 'true'); // Hide inactive slides
                slide.setAttribute('inert', ''); // Prevent interaction with inactive slides
            }
        });
    });
})();