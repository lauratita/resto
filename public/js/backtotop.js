/*
Theme : ESS Health Care
Author Name: Naveen Kumar Verma
Description: Healthcare - Responsive theme and desgin
Version: 1.0
license: https://euclidesoftwaresolutions.com/
Copyright 2021 ESS Authors
*/

/* bottom to top js */
$(document).ready(function() {
    $(window).on("scroll", function(){
        if ($(this).scrollTop() > 20) {
        $('#toTopBtn').fadeIn();
        } else {
        $('#toTopBtn').fadeOut();
        }
    });
    $('#toTopBtn').on("click", function(){
        $("html, body").animate({
        scrollTop: 0
        }, 500);
        return false;
    });
});

/* Header sticky js */
$(window).scroll(function(){
    if ($(window).scrollTop() >= 150) {
        $('.header-area').addClass('fixed-header');
    }
    else {
        $('.header-area').removeClass('fixed-header');
    }
});


(function () {
    'use strict';
    window.addEventListener('load', function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();



  /* Gallery lightbox js */
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}