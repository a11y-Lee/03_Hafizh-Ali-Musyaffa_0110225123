const submit_btn = document.getElementById('submit');
const toggle = document.getElementById('toggle');


toggle.addEventListener('click', () => {
    const passsword_input = document.getElementById('password');
    if (passsword_input.type === 'password') {
        passsword_input.type = 'text';
    } else {
        passsword_input.type = 'password';
    }
});

submit_btn.addEventListener('click', () => {
    console.log('login');
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    
    if (username === 'ahmad2017' && password === '1234567') {
        alert('Login Berhasil');
        window.location.href = 'home.html';
    } else {
        alert('Login Gagal: Periksa kembali username dan password Anda.');
    }
})

