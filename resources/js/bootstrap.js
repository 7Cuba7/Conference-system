/**
 * Load axios HTTP library for making AJAX requests
 */
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Load Bootstrap and dependencies
 */
import 'bootstrap';

/**
 * Load SweetAlert2 for beautiful modals
 */
import Swal from 'sweetalert2';
window.Swal = Swal;
