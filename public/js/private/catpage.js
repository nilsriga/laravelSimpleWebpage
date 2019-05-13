


// CHAT
new Vue ({
  el:'#chat',
  data: {
     messages:[
          
      ],
     newMessageUsername: "",
     newMessageText: "",
      },
      created: function(){
        var that = this;
        $.getJSON('/chat/get-messages', function(resp){
          for (var index = 0; index < resp.length; index++) {
            var element = resp[index];
            console.log(element);
            var newAdd = {
              username: element.username,
              text: element.text,
              date: element.creater_at,
            }
            that.messages.push(newAdd);
          }
        });
      },
      methods: {
          sendMessage:function(){
              var newAdd = {
                  username: this.newMessageUsername,
                  text: this.newMessageText,
                  date: new Date ()
                 
              }
              this.messages.push(newAdd);
              this.newMessageText ='';
              $.post('/chat/save-message', newAdd, function(res) {
                console.log(res);
              })
          }
      }
 });




  
  
  
  
  
  $(document).ready(function() {
    $(".fancybox").fancybox();
	});


  // šis liek home page slaiderim riņķot w3 css

  var myIndex = 0;
  carousel();
  
  function carousel() {
      var i;
      var x = document.getElementsByClassName("slides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";           
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds

    }

    


//
  

//  šis iedarbina slaidus pirmajā lapā W3school cdn
  
  var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
      showDivs(slideIndex += n);
  }
  
  function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("slides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length};
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
  }







  // šis iedarbina punkus pirmajā lapā

  // function showDivs(n) {
  //   var i;
  //   var x = document.getElementsByClassName("slides");
  //   var dots = document.getElementsByClassName("slider-dot");
  //   if (n > x.length) {slideIndex = 1}    
  //   if (n < 1) {slideIndex = x.length}
  //   for (i = 0; i < x.length; i++) {
  //      x[i].style.display = "none";  
  //   }
  //   for (i = 0; i < dots.length; i++) {
  //      dots[i].className = dots[i].className.replace(" w3-black", "");
  //   }
  //   x[slideIndex-1].style.display = "block";  
  //   dots[slideIndex-1].className += " w3-black";
  // }

// 




// šis neko nedara
// $(document).ready(
//   $('[data-fancybox]').fancybox({
//     cyclic : true
//   })
// )
//



var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("slider-dot");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-black", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-black";
}






// modulus uzspiežot uz teksta index.html lapā. id=test
// $("#test").on('click', function() {

//   $.fancybox.open('<div class="message"><h2>Hello!</h2><p>You are awesome!</p></div>');

// });

//Reģistrācijas formas validācijas js

// $('#reg-form').submit(function(){
//   var errors = [];
//   $('.errors ul').html('');
//   $('.has-error').removeClass('has-error');
//   if ($('input[name="username"]').val() == '') {
//       errors.push('Please enter username');
//       $('input[name="username"]').addClass('has-error');
//   }
//   if ($('input[name="password"]').val() == '') {
//       errors.push('Please enter password');
//       $('input[name="password"]').addClass('has-error');
//   }
//   if ($('input[name="password"]').val().length < 8) {
//       errors.push('Password must be at least 8 symold');
//       $('input[name="password"]').addClass('has-error');
//   }
//   if ($('input[name="password2"]').val() == '') {
//       errors.push('Please retype the password');
//       $('input[name="password2"]').addClass('has-error');
//   }
//   if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
//       errors.push('Passwords must match');
//       $('input[name="password"]').addClass('has-error');
//       $('input[name="password2"]').addClass('has-error');
//   }
//   if ($('input[name="first_name"]').val() == '') {
//       errors.push('Please enter first name');
//       $('input[name="first_name"]').addClass('has-error');
//   }
//   if ($('select[name="country"]').val() == 0) {
//       errors.push('Please select coutnry');
//       $('select[name="country"]').addClass('has-error');
//   }
//   if ($('input[name="agree"]').is(":checked") == false) {
//       errors.push('Please agree with this amazng stuff');
//       $('input[name="agree"]').addClass('has-error');
//   }
//   if (errors.length > 0) {
//       // handle errors
//       for (var index = 0; index < errors.length; index++) {
//           var element = errors[index];
//           $('.errors ul').append('<li>' + element + '</li>');
//       }
//       $('.errors').show();
//       return false;
//   }
// });
//