$(function() { $(window).scroll(function() { 
    if($(this).scrollTop()>100) { 
                                  
    $('#BounceToTop').slideDown(200); } else { 
                                    
    $('#BounceToTop').slideUp(300); 
    }

    if($(this).scrollTop()>10 || $(this).scrollTop()>100){
    $('.navbar-inverse .navbar-inner').css({
      'webkit-box-shadow':'1px 5px 30px #494949',
      'border-bottom-color':'#258643',
      'border-bottom-width':'1px',
      'background-image': '-moz-linear-gradient(top, #f2f2f2, #f2f2f2)',
      'background-image': '-webkit-gradient(linear, 0 0, 0 100%, from(#f2f2f2), to(#f2f2f2))',
      'background-image': '-webkit-linear-gradient(top, #f2f2f2, #f2f2f2)',
      'background-image': '-o-linear-gradient(top, #f2f2f2, #f2f2f2)',
      'background-image': 'linear-gradient(to bottom, #f2f2f2, #f2f2f2)',
      'transition':' all 0.3s ease-in-out',

    });
    /*$('.navbar-inverse .brand').animate({
      'font-size':'21px'
    },300);*/

    }else{
    $('.navbar-inverse .navbar-inner').css({
      'webkit-box-shadow':'1px 3px 10px #494949',
      'border-bottom-color':'#258643',
      'border-bottom-width':'1px',
      'background-image': '-moz-linear-gradient(top, transparent, transparent)',
      'background-image': '-webkit-gradient(linear, 0 0, 0 100%, from(transparent), to(transparent))',
      'background-image': '-webkit-linear-gradient(top, transparent, transparent)',
      'background-image': '-o-linear-gradient(top, transparent, transparent)',
      'background-image': 'linear-gradient(to bottom, transparent, transparent)',
      'transition':' all 0.3s ease-in-out',
    }); 
    /*$('.navbar-inverse .brand').animate({
      'font-size':'20px',
      },300);*/
  }

});
$('#BounceToTop').click(function() { $('body,html').animate({scrollTop:0},200) .animate({scrollTop:0},0) .animate({scrollTop:0},0) .animate({scrollTop:0},0) .animate({scrollTop:0},0); }); });