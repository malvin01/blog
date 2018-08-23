$(document)
.ready(function() {

  // fix main menu to page on passing
  $('.main.menu').visibility({
    type: 'fixed'
  });
  $('.overlay').visibility({
    type: 'fixed',
    offset: 80
  });

  // lazy load images
  $('.image').visibility({
    type: 'image',
    transition: 'vertical flip in',
    duration: 500
  });

  // show dropdown on hover
  $('.main.menu  .ui.dropdown').dropdown({
    on: 'hover'
  });
  
  $('.ui.form')
  .form({
      inline : true,
      delay : false,
      on : 'blur',
    fields: {
      email: {
        identifier  : 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Email harus diisi'
          },
          {
            type   : 'email',
            prompt : 'Email tidak valid'
          }
        ]
      },
      password: {
        identifier  : 'password',
        rules: [
          {
            type   : 'empty',
            prompt : 'Password harus diisi'
          },
         
        ]
      }
    }
  });
  $('.ui.checkbox')
  .checkbox();
})
;

