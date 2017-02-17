(function() {
  "use strict";
  $(document).ready(function() {
    var thisPageSection = getPageSection();
    var ajaxCall = 0;

    /*handling the infinite scroll load articles*/
    $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() > ($(document).height() - 100) && ajaxCall === 0) {
        var articleOffset = getArticleOffset();
        if (articleOffset < 10) {
          return false;
        }
        $('#ajax').show();
        /*this is where the ajax call will come*/
        ajaxCall = 1;
        $.ajax({
          url: base_url + "getmore/content",
          type: "GET",
          data: "type=" + thisPageSection + "&offset=" + articleOffset,
          dataType: "html",
          success: function(data) {
            $('.nodes').append('<article>' + data + '</article>');
            ajaxCall = 0;
            $('#ajax').hide();
          },
          error: function(e) {
            $('#ajax').hide();
          }
        });
      }
    });

    /*handling the google event to read page*/
    setTimeout(function() {
      _gaq.push(['_trackEvent', '15_seconds', 'read']);
      console.log("15 sec read");
    }, 15000);

    /*handling the subscribe button for subscription button*/
    $('#subscribe #subscribe-me').click(function() {
      var textBox = $('#subscribe #exampleInputEmail1');
      if (validateEmail(textBox.val()))
      {
        var emailAddress = textBox.val();
        addSubscriber(emailAddress);
      }
    });
  });
})();

/**
 * This function takes the url and returns the section
 * which is passed as a get parameter to the ajax call
 * for infinite load.
 * @returns {*}
 */
function getPageSection() {
  var pageURL = window.location.href;
  var urlObject = pageURL.split('/');

  /*this is to check the term page. Should come before main section*/
  if (urlObject[3] == 'justread' && urlObject[4] == 'content' && urlObject[5] == 'term') {
    return 'term/' + urlObject[6];
  }

  /*this is a main section web or travel*/
  if (urlObject[3] == 'justread' && urlObject[4] == 'content') {
    return urlObject[5];
  }

  /*this is for the home page*/
  if (urlObject[3] === '' && !urlObject[4]) {
    return 'home';
  }
}

/**
 * This function will check the number of teaser articles on the page
 * and and count them to return the offset number.
 * @returns {number}
 */
function getArticleOffset() {
  var count = 0;

  $('#content-col .nodes .teaser').each(function() {
    count++;
  });

  return count;
}

/**
 * Validate the email address through regex.
 * Taken from this url: http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
 * @param email
 * @returns {boolean}
 */
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function addSubscriber(emailAddress) {
  $('#ajax').show();
  $.ajax({
    url: base_url + "add-subscriber",
    type: "POST",
    data: "email=" + emailAddress,
    dataType: "text",
    success: function(data) {
      $('#subscribe .error').html('');
      $('#subscribe .success').html(data);
      $('#ajax').hide();

      $('#subscriber-block-container #exampleInputEmail1').val('');
      
      sendConfirmationEmail();
    },
    error: function(e, d, m) {
      $('#ajax').hide();
      var thisError = $.parseJSON(e.responseText);
      thisError = thisError.error.message;
      $('#subscribe .success').html('');
      $('#subscribe .error').html(thisError);

    }
  });
}

/*This function will trigger the event to send the confirmation mail to my inbox*/
function sendConfirmationEmail() {
  $.ajax({
    url: base_url + "confirmation-mail",
    type: "GET",
    dataType: "text",
    success: function(data) {},
    error: function(e, d, m) {}
  });
}