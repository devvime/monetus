import { api } from '../helpers/api.js';
import Swal from 'sweetalert2';

export function login(ctx, next) {
    const loginForm = document.querySelector('#loginForm');
    loginForm.addEventListener('submit', event => {
        event.preventDefault();
        const form = new FormData(event.target);
        const data = {
            email: form.get('email'),
            password: form.get('password')
        };
        sendLogin(data)    
    });
}

async function sendLogin(data) {
    const loading = document.querySelector('#btn_submit #loading_btn');
    loading.classList.remove('d-none');
    await api.post('/api/auth', data).then(res => {
        if (res.error) {
            Swal.fire({
                icon: 'error',
                title: 'Ops',
                text: res.message
            });
        }

        if (res.token) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Success Login'
            }).then(e => {
                location.href = '/dashboard';
            });
        }
    });
    loading.classList.add('d-none');
}