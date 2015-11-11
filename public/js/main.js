/*=============================================================
    Authour URL: www.designbootstrap.com
    
    http://www.designbootstrap.com/

    License: MIT

    http://opensource.org/licenses/MIT

    100% Free To use For Personal And Commercial Use.

    IN EXCHANGE JUST TELL PEOPLE ABOUT THIS WEBSITE
   
========================================================  */
$(document).ready(function () {

    /*====================================
          SUBSCRIPTION   SCRIPTS 
    ======================================*/

//
//   $("#postcontent").submit(function (e) {
//        e.preventDefault();
//        $.ajax({
//            type: "POST",
//            url: "subscribe.php",
//            data: $("#postcontent").serialize(),
//             success: function (response) {
//			  $('[name="email"]').val('');
//               // alert(response); // FOR ACTUAL RESPONSE
//			   alert('Thanks for  subscribing Us');
//            }
//        });
//        e.preventDefault();
//    });
//
//    // SCROLL SCRIPTS 
//    $('.scroll-me a').bind('click', function (event) { //just pass scroll-me class and start scrolling
//        var $anchor = $(this);
//        $('html, body').stop().animate({
//            scrollTop: $($anchor.attr('href')).offset().top
//        }, 1000, 'easeInOutQuad');
//        event.preventDefault();
//    });

//adding tootyip yo the links
$('a').tooltip({
  animated:'fade',
  placement:'bottom',
  color:'#48A5FF'
  });

$('#passwordResetModal').modal({
  backdrop:'static',
  keyboard:false
}); 
$('.delete-link').click(function(e){
  var deleteLink = $(this);
  e.preventDefault();
    bootbox.confirm("Are you sure you want to delete this report",function (result){
      if(result)
      {
	e.isDefaultPrevented = function(){
	  return false;
	}
	var url = deleteLink.attr('href');
	//bootbox.alert(url);
	redirect(url);
      }
    });
});

function redirect(url)
{
  window.location = url;
}
});