// Enable Tooltips Globally
$(document).ready(function () {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

  // Off Canvas Menu
  $('.navbar-nav').clone().prependTo('#off-canvas');

  $(function () {
    $(document).trigger('enhance');
  });

  // Form submit
  var resetButton = function (btn) {
    if (btn) {
      btn.removeAttr('disabled');
    }
  };

  $('#paybill-form').submit(function () {

    console.log('Form submit started...');

    var btn = $(this).find('.btn-submit-payment').first();

    if (btn) {
      btn.attr('disabled', true);
    }

    var formData = {
      // Extract values from the input fields
    };

    $.ajax({
      type     : 'POST',
      url      : '',
      data     : formData,
      dataType : 'json',
      encode   : true
    })
      .done(function (data) {
        console.log('Form successfully submitted...');
        // Do something here with the response

        resetButton(btn);
      })
      .fail(function (error) {
        // Set timeout just to make button animation visible
        setTimeout(function () {
          console.log('Form failed with the following data:');
          console.log(error);
          resetButton(btn);
        }, 2000);
      });

    // stop the form from submitting the normal way and refreshing the page
    event.preventDefault();
  });

});


// Example starter JavaScript for disabling form submissions if there are invalid fields
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

new WOW().init();