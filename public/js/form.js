$(document).ready(function() {
    let modalWindow = document.querySelector("#modal-window");
    let closeModal = document.querySelector(".close-modal");
    let modalBtn = document.querySelector("#modal-button");

    $('#feedback').submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                showModal(result);
            },
            error: function () {
                showModal('Возникла ошибка на сервере! Ведутся технические работы.');
            },
        });
    });

    closeModal.addEventListener("click",function () {
        hideModal();
    });

    modalBtn.addEventListener("click",function () {
        hideModal();
    });

    function showModal(text) {
        modalWindow.querySelector("#modal-text").innerHTML = text;
        modalWindow.style.display = "block";
        setTimeout(function () {
            modalWindow.classList.add("show-modal");
        },100);
    }

    function hideModal() {
        modalWindow.classList.remove("show-modal");
        setTimeout(function () {
            modalWindow.style.display = "none";
        },400);
        window.history.back();
    }
});



