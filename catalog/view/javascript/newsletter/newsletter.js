(function ($) {

  function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  var didScroll = false;

  var interval = setInterval(function () {
  	if(didScroll) {

  		const view = localStorage.getItem('viewed');

  		if(!view)
  		{
        $.get("index.php?route=common/newsletter_template", function( string ) {

        $('body').append(string);

  			$('#overlay-page, #flex').show();
  			$('#flex').css({'display':'flex'});

        $('#no-thanks').on('click', function (e) {
    			e.preventDefault();
    			localStorage.setItem('viewed', 1);
    			$('#overlay-page, #flex').hide();
    		});

        $('#subscribe').on('click', function (e) {
          e.preventDefault();
          var error = false;

          if($('#firstname').val().length == 0)
          {
            $('#firstname').css({'border-color':'red'});
            error = true;
          } else {
            $('#firstname').css({'border-color':'#a6a6a6'});
          }

          if($('#lastname').val().length == 0)
          {
            $('#lastname').css({'border-color':'red'});
            error = true;
          } else {
            $('#lastname').css({'border-color':'#a6a6a6'});
          }

          if($('#email').val().length == 0 || !validateEmail($('#email').val()) )
          {
            $('#email').css({'border-color':'red'});
            error = true;
          } else {
            $('#email').css({'border-color':'#a6a6a6'});
          }

          if(!error) {

            $.post( "index.php?route=common/newsletter", { firstname: $('#firstname').val(), lastname: $('#lastname').val(), email: $('#email').val() })
              .done(function( data ) {

                if(parseInt(data) == 10)
                {
                  var thankyou = $('.right-side .thankyou').html();
                  $('.right-side').html(thankyou);

                } else if(parseInt(data) == 1) {
                  var problem = $('.right-side .problem').html();
                  $('.right-side').html(problem);
                } else if (parseInt(data) == 2) {
                  var allready = $('.right-side .allready').html();
                  $('.right-side').html(allready);
                }


                $('#close').on('click', function (e) {
                  e.preventDefault();
                  $('#overlay-page, #flex').hide();
                  localStorage.setItem('viewed', 1);
                })

              });

          }


        })

        });
  		}

  		clearInterval(interval);

  		}
  }, 8000);

  	setTimeout(function () {
  window.onscroll = function() {

      didScroll = true;

    }
  }, 2000)
})(jQuery);
