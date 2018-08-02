function scrollToAnchor (anchor) {
    var aTag = $("a[name='"+ anchor +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}


$(document).ready(function(){
   
     $('body').on('click','a',function () {
     
          anchor = $(this).data('next-anchor');
          scrollToAnchor(anchor);
          return false; //prevent normal hyperlink activity
     });
     
     
});