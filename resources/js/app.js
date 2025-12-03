/**
 * Bootstrap dependencies and libraries
 */
import './bootstrap';

/**
 * Custom JavaScript code for conference management
 */

window.confirmDelete = function(conferenceId, conferenceName) {
    Swal.fire({
        title: 'Ar tikrai norite ištrinti?',
        text: `Konferencija "${conferenceName}" bus ištrinta negrįžtamai!`,
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#2d7a3e',
        confirmButtonText: 'Taip, ištrinti!',
        cancelButtonText: 'Atšaukti',

        icon: null,

        showClass: {
            popup: '',
            backdrop: ''
        },
        hideClass: {
            popup: '',
            backdrop: ''
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + conferenceId).submit();
        }
    });
};
