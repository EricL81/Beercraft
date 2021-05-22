window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('@popperjs/core');
require('bootstrap');
window.Glightbox = require('glightbox');
window.Isotope = require('isotope-layout');
window.Swiper = require('swiper/swiper-bundle');
require('./main');
require('./mi');