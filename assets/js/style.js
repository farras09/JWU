$(window).scroll(function() {
    var s = $(window).scrollTop();
    if(s > 300){
        $('#nav-cont').removeClass('container');
        $('#nav-cont').addClass('container-scrolled');
        $('#menu-cont').addClass('container');
        $('.jwu-navbar').addClass('scrolled');
        $('#menu-col').addClass('col-sm-8');
        $('#brand-col').addClass('col-sm-4');
        
        $('#menu-col').removeClass('col-sm-12');

        $('a.to-top').addClass('scrolled');
    } 
    if(s < 300){
        $('#nav-cont').addClass('container');
        $('#nav-cont').removeClass('container-scrolled');
        $('#menu-cont').removeClass('container');
        $('.jwu-navbar').removeClass('scrolled');
        $('#menu-col').removeClass('col-sm-8');
        $('#brand-col').removeClass('col-sm-4');
        
        $('#menu-col').addClass('col-sm-12');

        $('a.to-top').removeClass('scrolled');
    }
    if(s > 310){
        $('.mobile-navbar').addClass('scrolled');
    }
    if(s < 310){
        $('.mobile-navbar').removeClass('scrolled');
    }
});

$(function(){

    //creating a style object for the ripple effect
    function RippleStyle(width, height, posX, posY){
      this.width = ( width <= height ) ? height : width;
      this.height = ( width <= height ) ? height : width;
      this.top = posY - (this.height * 0.5);
      this.left = posX - (this.width * 0.5);
    }
  
    $('.ripple-effect.dark-ripple').on('mousedown', function(e){
      //appending an element with a class name "btn-ripple"
      var rippleEl = $('<span class="btn-ripple dark"></span>').appendTo(this);
  
      //getting the button's offset position
      var pos = $(this).offset();
  
      //get the button's width and height
      var width = $(this).outerWidth();
      var height = $(this).outerHeight();
  
      //get the cursor's x and y position within the button
      var posX = e.pageX - pos.left;
      var posY = e.pageY - pos.top;
  
      //adding a css style to the ripple effect
      var rippleStyle = new RippleStyle(width, height, posX, posY);
      rippleEl.css(rippleStyle);
    });
  
    //this event listener will be triggered once the ripple animation is done
    $('.btn').on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', '.btn-ripple.dark', function(){
      $(this).remove();
    });
  });
$(function(){

    //creating a style object for the ripple effect
    function RippleStyle(width, height, posX, posY){
      this.width = ( width <= height ) ? height : width;
      this.height = ( width <= height ) ? height : width;
      this.top = posY - (this.height * 0.5);
      this.left = posX - (this.width * 0.5);
    }
  
    $('.ripple-effect.light-ripple').on('mousedown', function(e){
      //appending an element with a class name "btn-ripple"
      var rippleEl = $('<span class="btn-ripple light"></span>').appendTo(this);
  
      //getting the button's offset position
      var pos = $(this).offset();
  
      //get the button's width and height
      var width = $(this).outerWidth();
      var height = $(this).outerHeight();
  
      //get the cursor's x and y position within the button
      var posX = e.pageX - pos.left;
      var posY = e.pageY - pos.top;
  
      //adding a css style to the ripple effect
      var rippleStyle = new RippleStyle(width, height, posX, posY);
      rippleEl.css(rippleStyle);
    });
  
    //this event listener will be triggered once the ripple animation is done
    $('.btn').on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', '.btn-ripple.light', function(){
      $(this).remove();
    });
  });
  

$(document).ready(function(){
    // height: calc(100% - 145px - 301px - 3rem); 
    // var conHeight = ($('#con').height()) - 145 - 301;
    // $('.sidebar-2').css("height", conHeight);

    $('.overlay').click(function(){
        $('.sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('.sidebar .sidebar-menu li.has-child a').click(function (){
        var id = $(this).attr('id');
        $('.sidebar .sidebar-menu li.has-child a i.arrow#'+id+"Arrow").toggleClass('active');
    });
});
function menuToggle(){
    $('.sidebar.left').addClass('active');
    $('.overlay').addClass('active');
}
function sidebarToggle($id){
    $('.sidebar.right#'+$id).addClass('active');
    $('.overlay').addClass('active');
}
function sidebarClose(){
    $('.sidebar').removeClass('active');
    $('.overlay').removeClass('active');
}

function passVisible(){
    var ic = $('.pass-visible i').text();
    pwIcToggle(ic);

    var x = document.getElementById("password");
    var y = document.getElementById("re-password");
    if (x.type === "password" && y.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
}
function pwIcToggle($ic){
    if ($ic === "visibility"){
        $('.pass-visible i').text('visibility_off');
    } else {
        $('.pass-visible i').text('visibility');
    }
}
