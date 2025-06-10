import { api } from '../../helpers/api.js';
import Swal from 'sweetalert2';

export function registerUser() {
    const registerForm = document.querySelector('#registerForm');

    registerForm.addEventListener('submit', event => {
        event.preventDefault();
        const form = new FormData(event.target);
        const data = {
            name: form.get('name'),
            email: form.get('email'),
            password: form.get('password')
        };
        sendRegister(data);
    });
}

async function sendRegister(data) {
    const loading_register_btn = document.getElementById('loading_register_btn');
    loading_register_btn.classList.remove('d-none');
    
    await api.post('/api/register', data).then(response => {
        if (response.status === 200) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message
            }).then(e => {
                location.href = '/login';
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Ops',
                text: response.message
            });
        }
        loading_register_btn.classList.add('d-none');
    });
}