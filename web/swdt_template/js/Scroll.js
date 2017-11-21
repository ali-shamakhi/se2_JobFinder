
function hideScrolBlts(item){
  if(item.attr("data-display") == "hide"){          
    $('.scroll-bullet').css('opacity',0);
  }
  else{    
    $('.scroll-bullet').css('opacity',1);
  }
}

function scrollTo(hash){
  if(hash && $('section[data-target='+hash+']').size() > 0) {
    var posTop = $('section[data-target='+hash+']').offset().top;
    $("html,body").animate({'scrollTop': posTop },1000,'easeInOutExpo');
  }
}

function updateScrollBlts(hash){  
  if(hash && $('section[data-target="'+hash+'"]').size() > 0){
    var link = $(".scroll-bullet li a[href$='"+hash+"']"),
        index  = $('section[data-target="'+hash+'"]').index();

    scrol = index;

    hideScrolBlts(link);
    
    $(".scroll-bullet").removeClass('gray');
    $data_bg = $('.section').eq(scrol-1).attr('data-bg');
    if ($data_bg == "white") {
      $(".scroll-bullet").addClass('gray');
    }
    
    $(".scroll-bullet li").removeClass('active');
    link.parent().addClass('active');
  }
  
}

function updateSections(section)
{
  var newSection = prepareSection(section);
  scrollTo(newSection);
  updateScrollBlts(newSection);
}


$(document).ready( function() {
  
  $(".scroll-bullet li a").on('click', function(event){
    event.preventDefault();
    event.stopPropagation();
  	var target = prepareSection($(this).attr('href')),  	    
  	    index  = $('.section[data-target="'+target+'"]').index();
    //hide scroll bullets if data-display is "hide"
    // hideScrolBlts($(this));
    scrol = index;

    section = part[scrol];
    playSection(section);

    //bullet base color
    $(".scroll-bullet").removeClass('gray');
    $data_bg = $('.section').eq(scrol-1).attr('data-bg');
    if ($data_bg == "white") {
      $(".scroll-bullet").addClass('gray');
    }

    $(".scroll-bullet li").removeClass('active');
    $(this).parent().addClass('active');    
  	          	
  });

  $('.intro .footer .btn').on('click', function() {

    //scrol = 2;
    var target = 'about';
        //newtop = $('.section[data-target="'+target+'"]').offset().top;

    //bullet base color
    //$(".scroll-bullet").removeClass('gray');
    ////$data_bg = $('.section').eq(scrol-1).attr('data-bg');
    //
    //
    //
    //if ($data_bg == "white") {
    //  $(".scroll-bullet").addClass('gray');
    //}

    //$(".scroll-bullet li").removeClass('active');
    //$(".scroll-bullet li").eq(scrol-1).addClass('active');
    //
    //$("html,body").animate({scrollTop:  newtop + "px"}, 500, 'easeInOutExpo');



    playSection(target);



  });




});



/*mouseWhell*/
if($(window).width() > 1050) {

  scrol = 1;
  sizeOfSection = $('.section').size();

  var handleAvailable = true;

  function handle(delta) {

    // console.log(handleAvailable);

    if(handleAvailable == true){

      //console.log(scrol);

      if (delta < 0){

        handleAvailable = false;

        if(scrol >= sizeOfSection) {

          scrol = sizeOfSection;
          handleAvailable = true;

        } else {

          scrol = scrol+1;
          section = part[scrol];

          //bullet base color
          $(".scroll-bullet").removeClass('gray');
          $data_bg = $('.section').eq(scrol-1).attr('data-bg');
          if ($data_bg == "white") {
            $(".scroll-bullet").addClass('gray');
          }

          $(".scroll-bullet li").removeClass('active');
          $(".scroll-bullet li").eq(scrol-1).addClass('active');


          var item = $(".scroll-bullet li").eq(scrol-1);
          //hide scroll bullets if data-display is "hide"
          // hideScrolBlts(item.children('a'));

          playSection(section, 0);

        }

        // console.log(scrol,'down');

      }
      else if(delta > 0){

        handleAvailable = false;
        if(scrol > 1) {
          scrol = scrol-1;
          //var section = 'section'+scrol;
          section = part[scrol];

          //bullet base color
          $(".scroll-bullet").removeClass('gray');
          $data_bg = $('.section').eq(scrol-1).attr('data-bg');
          if ($data_bg == "white") {
            $(".scroll-bullet").addClass('gray');
          }

          $(".scroll-bullet li").removeClass('active');
          $(".scroll-bullet li").eq(scrol-1).addClass('active');
          playSection(section, 0);
        } else {
          scrol = 1;
          handleAvailable = true;
        }


        var item = $(".scroll-bullet li").eq(scrol-1);

        //hideScrolBlts(item.children('a'));

        // console.log(scrol,'up');

      }
    }
  }
  function prepareSection(section)
  {
      if(section.indexOf('/') > 1){
          return section.replace('/','-');
      }
      return section;
  }
  function playSection(section, x){
    var newSection = prepareSection(section);
    var $elem = $('.section[data-target="'+newSection+'"]' );
    if($elem.size()>0) {
      // $('html, body').animate({scrollTop: $('.section[data-target="'+section+'"]' ).offset().top + x}, 500,'easeInOutExpo');
      //window.location.hash = section;

      var state = {  };
      var title = '';


      var url = siteAdr+currPage+section;

      // changing language part
      var revLang = '';
      if(lang == 'fa'){
        revLang = '/en/';
      }else{
        revLang = '/fa';
      }
      var currpageLang = currPage.replace(lang,'');

      if($('.lang')){
          $('.lang').attr("href", siteUrl+revLang+currpageLang+section);
      }

      history.pushState(state, title, url);
      updateSections(section);
      //window.location.hash = section;
      setTimeout(function(){
        handleAvailable = true;
      }, 1000);
    } else {
      console.log('no');
    }
  }

  function wheel(event){
    var delta = 0;
    if (!event)
      event = window.event;
    if (event.wheelDelta) {
      delta = event.wheelDelta/120;
    } else if (event.detail) {
      delta = -event.detail/3;
    }
    if (delta)
      handle(delta);

    if (event.preventDefault)
      event.preventDefault();
    event.returnValue = false;
  }


  if (window.addEventListener)
    window.addEventListener('DOMMouseScroll', wheel, false);
  window.onmousewheel = document.onmousewheel = wheel;

}