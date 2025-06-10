import { api } from '../../helpers/api.js';
import Swal from 'sweetalert2';

export function listUsers(ctx, next) {
    dataDelete()
}

function dataDelete() {
    const buttons = document.querySelectorAll('[data-delete]');
    
    buttons.forEach(button => {
        button.addEventListener('click', deleteUser);
    });
}

async function deleteUser(event) {
    const id = event.target.getAttribute('data-delete');
    const row = document.getElementById(id);
    const name = row.querySelector('[data-name]').textContent;

    Swal.fire({
        icon: 'warning',
        title: 'Attention',
        text: `Do you really want to delete the user: ${name}`,
        showCancelButton: true
    }).then(async result => {
        if (result.isConfirmed) {
            await api.delete(`/api/user/${id}`).then(response => {
                if (response.status === 200) {
                    row.remove();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ops',
                        text: response.message
                    });
                }
            }); 
        }
    });   
}