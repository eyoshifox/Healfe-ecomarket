// анимация кнопки каталога
var wrapperMenu = document.querySelector('.wrapper-menu');

wrapperMenu.addEventListener('click', function(){
  wrapperMenu.classList.toggle('open');  
})

// открытие каталога
$(document).ready( $(function(){
    var navbtn = $('.wrapper-menu');
    var status = false;
    
    $(navbtn).click(function(){
      if (status==false) {
        $("#sidebar").show();
        navbar.classList.add('scrolled')
        status = true;
      } else {
        $("#sidebar").hide();
        navbar.classList.remove('scrolled')
        status=false;
      }
    })

}))

// Регистрация
function ajaxForm(form, event) {
  event.preventDefault();

  let id = $(form).attr('id');

  $.ajax({
      url: $(form).attr('action'),
      type: $(form).attr('method'),
      data: new FormData(form),
      contentType: false,
      processData: false,
      success: function(res) {
          console.log(res);
          if(res.success == "success") window.location.href = '/';
      }, error: function(err) {
          console.log(err);
          if(err.responseJSON == 'errorLogin') {
              $('form#' + id + ' input').addClass('is-invalid');
              $('form#' + id + ' div.invalid-feedback').text('');
              $('form#' + id + ' div#passwordError').text('Неверный логин или пароль');
          } else {
              $('form#' + id + ' input').removeClass('is-invalid');
              $.each(err.responseJSON, function(index, value) {
                  $('form#' + id + ' input#'+index).addClass('is-invalid');
                  $('form#' + id + ' div#'+index+'Error').text(value);
              })
          }
      }
  });
}

// Добавление в корзину
function addToCart(id) {
  $.ajax({
      url: '/cart/add',
      type: 'GET',
      data: {
          id: id
      },
      success: function(result) {
          console.log(result);
      }, error: function(error) {
          console.log(error);
          if (error.responseJSON.error == 'amount') {
              $('div#errorAdd').slideDown(300);
              setTimeout(() => {$('div#errorAdd').slideUp(300);}, 6000);
          }
      }
  })
}

// Кол-во в корзине
function setCountCart(action, id) {
  $.ajax({
      url: '/cart/count',
      type: 'GET',
      data: {
          action: action,
          id: id
      },
      success: function(result) {
          $('span#count-'+id).text(result.count);
          $('b#sum-'+id).text(result.sumItem + ' руб.');
          $('b#sumAll').text('Общая сумма: '+ result.sum +' руб.')
      }, error: function(error) {
          console.log(error);
      }
  })
}

// ИЗменение цвета при скролле
var navbar = document.querySelector('.navbar')
window.onscroll = function() {
  if (window.pageYOffset > 850) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }
}

// для дропдавна
// var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
// var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
//   return new bootstrap.Dropdown(dropdownToggleEl)
// })


// new Swiper('.swiper',{
//     navigation:{
      
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev'
//     },

//     pagination:{
//         el: '.swiper-pagination',
//         clickable:true,
//     },
    
//     spaceBetween:30,
    
//     breakpoints:{
//     320: {
//         slidesPerView: 1,
//     },
//     640: {
//         slidesPerView: 1,
//     },
//     768: {
//         slidesPerView: 3,
//     },
//     1440: {
//         slidesPerView: 3,
//     }
//   },
// });

