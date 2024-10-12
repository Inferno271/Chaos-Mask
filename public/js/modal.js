document.addEventListener('DOMContentLoaded', function() {
    var loginModal = document.getElementById('loginModal');
    var registerModal = document.getElementById('registerModal');
    var loginBtn = document.getElementById('loginBtn');
    var showRegisterBtn = document.getElementById('showRegisterBtn');
    var closeBtns = document.getElementsByClassName('close');
    const loginForm = document.getElementById('loginForm');

    function openModal(modal) {
        modal.style.display = 'block';
        document.body.classList.add('modal-open');
    }

    function closeModal(modal) {
        modal.style.display = 'none';
        document.body.classList.remove('modal-open');
    }

    if (loginBtn) {
        loginBtn.onclick = function(e) {
            e.preventDefault();
            openModal(loginModal);
        }
    }

    if (showRegisterBtn) {
        showRegisterBtn.onclick = function(e) {
            e.preventDefault();
            closeModal(loginModal);
            openModal(registerModal);
        }
    }

    for (var i = 0; i < closeBtns.length; i++) {
        closeBtns[i].onclick = function() {
            closeModal(this.closest('.modal'));
        }
    }

    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            closeModal(event.target);
        }
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
                credentials: 'same-origin'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.redirect) {
                    window.location.href = data.redirect;
                } else {
                    throw new Error('Unexpected response from server');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Произошла ошибка при входе. Пожалуйста, попробуйте еще раз.');
            });
        });
    }
});
