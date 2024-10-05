document.addEventListener('DOMContentLoaded', function() {
    var loginModal = document.getElementById('loginModal');
    var registerModal = document.getElementById('registerModal');
    var loginBtn = document.getElementById('loginBtn');
    var showRegisterBtn = document.getElementById('showRegisterBtn');
    var closeBtns = document.getElementsByClassName('close');

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
});
