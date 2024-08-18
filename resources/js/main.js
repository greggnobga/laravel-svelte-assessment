/** Add axios header. */
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/** Start svelte code. */
import Nav from '$components/Navigation.svelte';
import Carousel from '$components/Carousel.svelte';

/** Declare init function. */
function init() {
    document.querySelectorAll('.sv-nav').forEach((element) => {
        if (!element.hasChildNodes()) {
            new Nav({
                target: element,
            });
        }
    });

    document.querySelectorAll('.sv-carousel').forEach((element) => {
        if (!element.hasChildNodes()) {
            new Carousel({
                target: element,
            });
        }
    });
}

/** Run init function. */
init();

var targetNode = document.querySelector('body');
var config = { attributes: false, childList: true, subtree: true };

var callback = function (mutationsList, observer) {
    for (var mutation of mutationsList) {
        if (mutation.type == 'childList') {
            if (mutation.target.querySelector('.svelte-table')) {
                init();
            }
        }
    }
};

var observer = new MutationObserver(callback);

/** Start observing the target node for configured mutations  */
observer.observe(targetNode, config);

/** Add animate js. */
import '$vendors/animate.js';
