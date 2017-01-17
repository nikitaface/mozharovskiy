(function() {
    'use strict';
    // SLIDER-CITATIONS
    // SLIDER-CITATIONS
    $('.slider-citations').slick({
        dots: true
    });
    // FORM VALIDATION
    // FORM VALIDATION
    var $purchaseForm = $(".contact-us-block__form");
    var $contactusForm = $(".purchase-block__form");

    $purchaseForm.parsley();
    $contactusForm.parsley();
    //////
    var purchase_button = document.querySelectorAll('.book-block__btn'),
        purchase_overlay = document.querySelector('.purchase-overlay'),
        purchase_block = document.querySelector('.purchase-block'),
        purchase_close_btn = document.querySelector('.purchase-block__close');

    // PUCHASE OVERLAY
    // PUCHASE OVERLAY
    function purchase_popup() {

        if (!purchase_overlay) return;

        var purchase_inputs = document.querySelectorAll('.purchase-block__input'),
            purchase_form = document.querySelector('.purchase-block__form'),

            purchase_hidden_block = document.querySelector('.purchase-overlay .submit-block-hidden'),
            purchase_hidden_close_btn = document.querySelector('.purchase-overlay .submit-block-hidden__close');

        for (var i = 0; i < purchase_button.length; i++) {
            purchase_button[i].addEventListener('click', function () {
             //alert(10);
                purchase_overlay.style.visibility = "visible";
                purchase_overlay.style.opacity = "1";
                purchase_block.style.top = "50%";
            });
        }

        purchase_close_btn.addEventListener('click', function (e) {
            e.preventDefault();

            purchase_block.style.top = "-50%";

            setTimeout(function () {
                purchase_overlay.style.opacity = "0";
                purchase_overlay.style.visibility = "hidden";

                purchase_overlay.style.removeProperty('visibility');
                purchase_overlay.style.removeProperty('opacity');
                purchase_block.style.removeProperty('top');

                var parsleyReq = purchase_block.querySelectorAll('.parsley-required');
                var parsleySucces = purchase_block.querySelector('.parsley-succes');

                for (var i = 0, j = 0; i < purchase_inputs.length, j < parsleyReq.length; i++, j++) {
                    purchase_inputs[i].value = "";
                    purchase_inputs[i].classList.remove('parsley-success');
                    purchase_inputs[i].classList.remove('parsley-error');

                    parsleyReq[j].innerHTML = "";
                }
            }, 800);

        });

        purchase_form.addEventListener('submit', function (e) {

            e.preventDefault();

            var $purchase_form = $('.purchase-block__form');
            var data = $purchase_form.serialize();

            $.post('./purchase-submit.php', data, "json");

            purchase_block.style.transition = "opacity .5s, visibility .5s .5s";
            purchase_block.style.opacity = "0";
            purchase_block.style.visibility = "hidden";

            purchase_hidden_block.style.visibility = "visible";
            purchase_hidden_block.style.opacity = "1";

            setTimeout(function () {
                for (var i = 0; i < purchase_inputs.length; i++) {
                    purchase_inputs[i].value = "";
                }

            }, 600);
        });

        purchase_hidden_close_btn.addEventListener('click', function (e) {
            e.preventDefault();

            purchase_hidden_block.style.visibility = "hidden";
            purchase_hidden_block.style.opacity = "0";

            purchase_overlay.style.visibility = "hidden";
            purchase_overlay.style.opacity = "0";

            setTimeout(function () {
                purchase_block.style.removeProperty('transition');
                purchase_block.style.removeProperty('opacity');
                purchase_block.style.removeProperty('visibility');
                purchase_block.style.removeProperty('top');
                purchase_hidden_block.style.removeProperty('visibility');
                purchase_hidden_block.style.removeProperty('opacity');
                purchase_overlay.style.removeProperty('visibility');
                purchase_overlay.style.removeProperty('opacity');
            }, 600);
        });

    }

    purchase_popup();

    function contact_form() {

        var form = document.querySelector('.form'),
            form_form = document.querySelector('.form__form'),
            form_succes = document.querySelector('.form__succes');

        if (!form) return;
        form.onsubmit = function (event) {

            event.preventDefault();

            var $form = $('.form');
            var data = $form.serialize();

            $.post('./contact-form.php', data, "json");

            form_form.style.transform = "translateX(-120%)";
            form_succes.style.transform = "translate(0%, 32%)";

        };
    }

    contact_form();
    // MASONRY
    // MASONRY
    function isMasonry() {

        var elem = document.querySelector('.grid');

        if (!elem) return;

        var msnry = new Masonry( elem, {
            // options
            itemSelector: '.links__link',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            gutter: 10
        });

    }

    isMasonry();
    // BLUEIMP GALLERY
    // BLUEIMP GALLERY
    function photoGallery() {

        var div_links = document.getElementById('links');

        if (!div_links) return;

        div_links.onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
            if (target === div_links) return;
            blueimp.Gallery(links, options);
        };
    }

    photoGallery();

}());
