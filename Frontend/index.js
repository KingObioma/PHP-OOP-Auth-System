const tabButtons = document.querySelectorAll('.tabButton');
const formSections = document.querySelectorAll('.form-section');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        const target = button.getAttribute('data-target');
        formSections.forEach(section => {
            if (section.id === target) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
        tabButtons.forEach(btn => {
            if (btn === button) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    });
});

const togglePassword = document.querySelector('#show_hide_password .input-group-text');
const passwordInput = document.querySelector('#passwordInput');

togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    if (type === 'password') {
        togglePassword.innerHTML = '<i class="fas fa-eye-slash text-white"></i>';
    } else {
        togglePassword.innerHTML = '<i class="fas fa-eye text-white"></i>';
    }
});

const togglePassword2 = document.querySelector('#show_hide_password_2 .input-group-text');
const passwordInput2 = document.querySelector('#passwordInput_2');

togglePassword2.addEventListener('click', function () {
    const type = passwordInput2.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput2.setAttribute('type', type);

    if (type === 'password') {
        togglePassword2.innerHTML = '<i class="fas fa-eye-slash text-white"></i>';
    } else {
        togglePassword2.innerHTML = '<i class="fas fa-eye text-white"></i>';
    }
});

