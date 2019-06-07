$('#myHeader').click(function(){
  if($('.burger').hasClass('chek')){
        $('.sticky').css('top', '0');
        $('nav').css('top', '-'+$('nav').height()+"px");



    $('.burger').toggleClass('chek');
}else{
  $('nav').css('display','block');
  $('.sticky').css('top', $('nav').height());
  $('.burger').toggleClass('chek');
  $('nav').css('top', '0');

}
})

$( window ).resize(function() {
  $('#nav').removeClass('kleiner');
  $('.logo1img').removeClass('kl2');

  if ($('#nav').height() > '100' ){
  $('#nav').addClass('kleiner');
  $('.logo1img').addClass('kl2');
}
});


$('.laad-meer').click(function(){
$(".g-rapper").css('height','auto')

});

$(document).on("submit", "#contactform", function(){

//$('#contactform').submit(function(event) {

    // get the form data
    // there are many ways to get this data using jQuery (you can use the class or id also)
    var formData = {
      'your-name'              : $('#contactform input[name=your-name]').val(),
        'your-email'              : $('#contactform input[name=your-email]').val(),
        'your-subject'              : $('#contactform textarea[name=your-subject]').val()

    };

    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'http://form:Zm9ybTpPb0k2ZkVJRGprUExVQ1BTc0VYYUhvbFM=@fietsatelierguldemond.nl/wordpress/wp-json/contact-form-7/v1/contact-forms/861/feedback', // the url where we want to POST
        data        : formData, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true,

    })
        // using the done promise callback
        .done(function(data) {

            // log data to the console so we can see
            console.log(data);
            if(data.status === 'mail_sent'){
            $('footer .mess').remove();
            $('#contactform').prepend('<p class="mess">Uw bericht is verzonden</p>');
            // here we will handle errors and validation messages
            }


        });

    // stop the form from submitting the normal way and refreshing the page
    event.preventDefault();
});


$(document).on("submit", "#bestelform", function(){



//$('#contactform').submit(function(event) {

    // get the form data
    // there are many ways to get this data using jQuery (you can use the class or id also)
    var formData = {
      'your-voorname'              : $('#bestelform input[name=your-voorname]').val(),
      'your-achtername'              : $('#bestelform input[name=your-achtername]').val(),
      'your-lengte'              : $('#bestelform input[name=your-lengte]').val(),
      'your-wensen'              : $('#bestelform textarea[name=your-wensen]').val(),
        'your-email'              : $('#bestelform input[name=your-email]').val(),
        'your-telefoon'              : $('#bestelform input[name=your-telefoon]').val(),
        'your-woonplaats'              : $('#bestelform input[name=your-woonplaats]').val(),
        'your-config'                : $('.overzicht-frame').text()+'kleur:'+$('.overzicht-kleur > p > span').css('backgroundColor')+$('.eindprijs').text()


    };

    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'http://form:Zm9ybTpPb0k2ZkVJRGprUExVQ1BTc0VYYUhvbFM=@fietsatelierguldemond.nl/wordpress/wp-json/contact-form-7/v1/contact-forms/892/feedback', // the url where we want to POST
        data        : formData, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true,

    })
        // using the done promise callback
        .done(function(data) {

            // log data to the console so we can see
            console.log(data);
            if(data.status === 'mail_sent'){
            $('#bestelform .mess').remove();
            $('#bestelform').append('<p class="mess">Uw bericht is verzonden</p>');
            // here we will handle errors and validation messages
            }


        });

    // stop the form from submitting the normal way and refreshing the page
    event.preventDefault();
});




$(document).on("click", ".g-rapper li", function(){
console.log('ha;lo')
  if (  $(this).hasClass('clickT')){
  //  $(".g-rapper li").attr('style','');
  //  $('.g-item').attr('style','');
//  $(this).css('width','calc(100% - 10em - 2px)');
//  $(this).css('height','calc(70vw * 0.75)');
// $(this).find('.g-item').css('height','calc(70vw * 0.5)');
  $(this).removeClass('clickT');
  $('section').css('position','relative');
  $('.content').css('position','relative');
  $('#kies-onderdelen').css('position','unset');

}else{
  $('section').css('position','unset');
  $('.content').css('position','unset');
   $(".g-rapper li").removeClass('clickT');
//  $(this).attr('style','');
//  $(this).find('.g-item').attr('style','');
  $(this).addClass('clickT');


}
});


function swipeFrames(){

$('.fiets-frame').each( function(){

})

}

$(document).on("click",".voor-uit",function() {
  vooruit();
});

$(document).on("click",".achter-uit",function() {
  achteruit();
});

tlr = 0;
function achteruit(){
  var eli = parseInt($('.fiets-frame').css('width'));
  var pad = parseInt($('.fiets-frame').css('padding'))*2;
  var tot = $('.fiets-frame').length
  if (tlr === 1){
    $(".achter-uit").css('display','none')
    $(".voor-uit").css('display','block')

    tlr--;
      $('.fiets-frames .fiets-ul').css('transform','translateX(-'+tlr*(eli+pad)+'px)')
  }else{tlr--;
    console.log(tlr);
    $(".voor-uit").css('display','block')

    $('.fiets-frames .fiets-ul').css('transform','translateX(-'+tlr*(eli+pad)+'px)')
  }
}
function vooruit(){
  console.log(tlr);
  var eli = parseInt($('.fiets-frame').css('width'));
  var pad = parseInt($('.fiets-frame').css('padding'))*2;
  if (tlr === $('.fiets-frame').length - 2){tlr++
      $(".voor-uit").css('display','none')
      $(".achter-uit").css('display','block')
      $('.fiets-frames .fiets-ul').css('transform','translateX(-'+tlr*(eli+pad)+'px)')
  }else{tlr++;
    $(".achter-uit").css('display','block')
    $('.fiets-frames .fiets-ul').css('transform','translateX(-'+tlr*(eli+pad)+'px)')
  }
}

$(document).ready(function(){

  $.ajax( {
    url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/menu',
    success: function ( data ) {

      $.each(data, function(i, item) {

$('nav ol').append('<li><a href="#'+data[i].slug+'"  data="'+data[i].object_id+'">'+data[i].title+'</a></li>');
$('#nav ol').append('<li><a href="#'+data[i].slug+'"  data="'+data[i].object_id+'">'+data[i].title+'</a></li>');

$('nav').css('top', '-'+$('nav').height()+"px");

if ($('#nav').height() > '100' ){
$('#nav').addClass('kleiner');
$('.logo1img').addClass('kl2');
}
      });
    },
    cache: false
    } );


    $.ajax( {
      url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/126&_embed',
      success: function ( data ) {

    $('footer .ztr').html(data.content.rendered);
    $('footer').attr('id', data.slug);
    $('footer .ztr').append('<form id="contactform"><table><tbody><tr><td>Naam</td><td><input type="text" name="your-name" value=""></td></tr><tr><td>Email</td><td><input type="email" name="your-email" value=""></td></tr><tr><td>Bericht</td><td><textarea id="subject" name="your-subject"  style="height:200px"></textarea></td></tr><tr><td></td><td><input type="submit" value="Verzenden"></td></tr></tbody></table></form>');
      },
      cache: false
      } );


    $.ajax( {
      url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/49&_embed',
      success: function ( data ) {

  $('.intro').html('<div class="wrap">'+data.content.rendered+'</div>');
  $( ".intro .wrap > p" ).wrapAll( "<div class='left'><div class='frame'><div class='intop' /></div></div>");

  $( ".intro figure" ).wrapAll( "<div class='right'><div class='frame'><div class='slideFig' /></div></div>");

  $( ".intop" ).wrap( "<div class='intop' />");



  $('.slideFig').slick({
    slidesToShow: 1,
    dots: true,
  //  autoplay: true,
  //  autoplaySpeed: 2000,


  });

//  $('.landing').css('background-image','url('+data['_embedded']['wp:featuredmedia'][0]['source_url']+')')
      },
      cache: false
      } );


  $.ajax( {
    url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/94&_embed',
    success: function ( data ) {

      $('.zelf-content').html(data.content.rendered+'<div class="prz"><span>VANAF:</span><p>&euro;</p><p class="rpris">'+$(data.excerpt.rendered).text()+'</p></div>')
  $('#zelf-samenstellen h1').html(data.title.rendered);

                   $('#zelf-samenstellen .left .frame').html('<img src="'+data['_embedded']['wp:featuredmedia'][0]['source_url']+'">')
                   $('.zelf-samenstellen123').attr('id', data.slug);
    },
    cache: false
    } );


    $.ajax( {
      url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/47&_embed',
      success: function ( data ) {
  $('#kant-en-klaar h1').html(data.title.rendered)
  $('#kant-en-klaar .after-content').html(data.content.rendered)
$('.kant-klaar123').attr('id', data.slug);
      },
      cache: false
      } );

    $.ajax( {
  url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/fiets_type/&_embed&order=asc',
    success: function ( data ) {

  $.each(data, function(i, item) {

  $('.g-rapper ol').append('<li class="noclickT"><div class="g-item" style="background-image:url('+data[i]['_embedded']['wp:featuredmedia'][0]['source_url']+')"></div><div class="g-onder">'+data[i].title.rendered+'<div class="price "> '+data[i].excerpt.rendered+' </div><br/><br/><br/>  <div class="g-text">'+data[i].content.rendered+'</div> <p class="btn">BESTEL</p> </div></li>');
  });

      },
      cache: false
    } );



});




    var bv = document.getElementById("main");
    var prevScrollpos =bv.scrollTop;

    // When the user scrolls the page, execute myFunction
    bv.onscroll = function() {if(!$('.burger').hasClass('chek')){myFunction()}};

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
console.log('scrrrr');
      var currentScrollPos = bv.scrollTop;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("myHeader").style.top = "0";

      } else {
        var hhgt = $('.logo2').height();
        document.getElementById("myHeader").style.top = "calc(-"+hhgt+"px - 2em - 2px)";
      }
      prevScrollpos = currentScrollPos;

      if (bv.scrollTop > sticky) {
        header.classList.add("sticky");
        $('.burger').css('display','inline');
      $(  '.logo2 div').css('display','inline');
        var higt = $('.logo2').height();
      //  $('.landing').css('padding-bottom', 'calc( 23vw + '+higt+'px + 20px)')
      } else {
        header.classList.remove("sticky");
        $('.burger').css('display','none');
        $(  '.logo2 div').css('display','none');

    //    $('.landing').css('padding-bottom','23vw');

      }
    }
//zelfs samenstel knoppem

$('.kies-frame-knop').click(function(e){
  e.preventDefault();
  kiesFrame();
  $('.kies-frame-knop').off( "click");
});

$(document).on("click","section",function() {
  if($('.burger').hasClass('chek')){
  $('.burger').click();
  }
})



$(document).on("click","#nav a",function(e) {

  if($(this).attr('data') === '47'){
    e.preventDefault();
    scrollnu($(this).attr('href'));
  }else if($(this).attr('data') === '49'){
    e.preventDefault();
    scrollnu($(this).attr('href'));  }else if($(this).attr('data') === '126'){
      e.preventDefault();
      scrollnu($(this).attr('href'));  }else if($(this).attr('data') === '123'){
    var ther = $(this).attr('href');
     if(!$(ther).length){
     e.preventDefault();
     laadBlog();}
}else{
  var ther = $(this).attr('href');
   if(!$(ther).length){
      e.preventDefault();
      var data = $(this).attr('data');
      console.log(data);

    laadPagina(data);
     }else{
       e.preventDefault();
     scrollnu($(this).attr('href'));
     }
  }
  //    kiesOnderdelen();
});
//menu knoppen

$(document).on("click","nav a",function(e) {
  $('.burger').click()

  if($(this).attr('data') === '47'){
    e.preventDefault();
    scrollnu($(this).attr('href'));  }else if($(this).attr('data') === '49'){
      e.preventDefault();
      scrollnu($(this).attr('href'));  }else if($(this).attr('data') === '126'){
        e.preventDefault();
        scrollnu($(this).attr('href'));  }else if($(this).attr('data') === '123'){
    var ther = $(this).attr('href');
     if(!$(ther).length){
     e.preventDefault();
     laadBlog();}
}else{
  var ther = $(this).attr('href');
   if(!$(ther).length){
      e.preventDefault();
      var data = $(this).attr('data');
      console.log(data);

    laadPagina(data);
  }else{
    e.preventDefault();
  scrollnu($(this).attr('href'));
  }
  }
  //    kiesOnderdelen();
});



function laadPagina(x){

//  e.preventDefault();
console.log(x);
var elii = null;
  $.ajax( {
    url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/'+x+'&_embed',
    success: function ( data ) {
      ellii = data.slug;
$('main #nr1').after('<section id="'+data.slug+'"><div class="content"><h1></h1><div class="wrap"><div class="left"><div class="frame"></div></div><div class="right"><div class="frame"></div></div></div></div></section>');
$('#'+data.slug+' .left .frame').append('<div ><img src="'+data['_embedded']['wp:featuredmedia'][0]['source_url']+'"></div>');
$('#'+data.slug+' h1').append(data.title.rendered)
$('#'+data.slug+' .right .frame').append('<div>'+data.content.rendered+'</div>')
scrollnu('#'+data.slug)

    $.ajax( {
      url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/page/parent='+x,
      success: function ( data ) {
        console.log(ellii);
        $.each(data, function(i, item) {

    $('main #'+ellii).after('<section id="'+data[i]['slug']+'"><div class="content tz"><div class="gul-helper"><img class="gul" src="img/gul3.svg"><h1></h1><p style="text-align:center">'+data[i]['excerpt']+'</p><div class="tbl"></div></div></div></section>');
    $('#'+data[i]['slug']+' h1').append((data[i]['image'] ? '<div class="" style="background-image:url('+data[i]['image'][0]+')"></div>' : data[i]['title']))
    $('#'+data[i]['slug']+' .tbl').append(data[i]['content']);
    console.log($('#'+data[i]['slug']+''));
    $('#'+data[i]['slug']+'').prev('section').find('.content').css('border','none');
    });

      },
      cache: false
    } );
    },
    cache: false
  } );








  };


function laadBlog(){
var name = null;
  $.ajax( {
    url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/123&_embed',
    success: function ( data ) {
name = data.slug;
      $('main #nr1').after('<section id="'+data.slug+'"><div class="content"><h1></h1><div class="after-content"></div></div></section>');
      $('#'+data.slug+' h1').append(data.title.rendered)
      $('#'+data.slug+' .after-content').append(data.content.rendered)

          scrollnu('#'+data.slug)


    },
    cache: false
  } );

  $.ajax( {
url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/posts/&_embed',
  success: function ( data ) {
$.each(data, function(i, item) {
$('#'+name+' .content').append('<article>'+(data[i]['_embedded']['wp:featuredmedia'] ? '<img class="" src="'+data[i]['_embedded']['wp:featuredmedia'][0]['source_url']+'">' : "")+data[i].content.rendered+'</article>')
} );
},
cache: false
} );

}



function laadOverzicht(){

  //  e.preventDefault();

  $('#kies-frame').after('<section id="overzicht"><div class="content"><h1></h1><div class="wrap"><div class="left"><div class="frame"></div></div><div class="right"><div class="frame"></div></div></div><a href="#bestel" class="">  <strong  class="knop">AFRONDEN</strong></a></div></section>');
 $('#overzicht').css('display','none');
  $('#overzicht .left .frame').append('<div ><img src="img/fiets1.png"></div>');
  $('#overzicht h1').html('jouw fiets');
  $('#overzicht .right .frame').append('<div><p style="text-align:left" class="overzicht-lijst"><span class="overzicht-frame"></span><span class="overzicht-kleur"></span><span class="overzicht-onderdelen"><strong>ONDERDELEN</strong><br/><br/></span></p></div>')


};


//vul laadOverzicht

$(document).on("click",".fiets-frames .fiets-frame",function() {
  if(!$(this).find('.maat1').length){

  $('.overzicht-frame').html('<strong>FRAME</strong>'+$(this).find('.fiets-text').html());
  $('.fiets-frame').css('background','');

  if(!$('#kies-kleur').length){
      kiesKleur();
    }else{
      scrollnu('#kies-kleur')

    }

    if(!$('#kies-onderdelen').length){
        kiesOnderdelen();
      }
   var ull = $(this).find('.fiets-img').attr('src')
   var vull = ull.substring(ull.lastIndexOf('/')+1);
   $('#kies-onderdelen svg').remove()
   $('.framesvg').remove()
   xhr = new XMLHttpRequest();
   xhr.open("GET",'img/'+vull.substring(5).slice(0, -4)+'.svg',false);
   // Following line is just to be on the safe side;
   // not needed if your server delivers SVG with correct MIME type
   xhr.overrideMimeType("image/svg+xml");
   xhr.send("");
   var resp = xhr.responseXML.documentElement;
   $('#kies-onderdelen .left .frame').append(resp);
//     $('#kies-onderdelen .left .frame').append('<img class="frameind" src="img/'+vull.substring(5).slice(0, -4)+'.svg">');

 $('#kies-onderdelen .left .frame').append('<img class="cat169"  src="img/wielenkleur1.png">');
    $('#kies-onderdelen .left .frame').append('<img class="framesvg" src="img/'+vull.substring(5)+'">');
     $('#kies-onderdelen .left .frame').append('<img class="cat17" src="img/zadel2.png">');
     $('#kies-onderdelen .left .frame').append('<img class="cat574" src="img/greep.png">');
     $('#kies-onderdelen .left .frame').append('<div class="prijsfix"></div>');


   console.log(vull.substring(5));
  $(this).css('background','#add2b1')

  }
});

$(document).on('click','.maat1', function(){
  $('.overzicht-frame').html('<strong>FRAME</strong>'+$(this).closest('.fiets-frame').find('.fiets-text').html());
    $('.fiets-frame').css('background','');
  $(this).closest('.fiets-frame').css('background','#add2b1');
  if(!$('#kies-kleur').length){
      kiesKleur();
    }else{
      scrollnu('#kies-kleur')

    }

});

$(document).on("click",".kleur p:nth-last-child(1)",function() {
  if($(this).hasClass('eigen-kkk')){

    $.ajax( {
      url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/62&_embed',
      success: function ( data ) {

$('#kies-kleur').after('<section id="kies-ral">'+data.content.rendered+'</section>')
scrollnu('#kies-ral')

      },
      cache: false
    } );

  }else{
$('.kleur p:nth-last-child(1)').css('border','');
$('.kleur p:nth-last-child(1)').css('width','3em');
$('.kleur p:nth-last-child(1)').css('height','3em');

$(this).css('border','4px solid #add2b1');
$(this).css('width','calc(3em - 8px)');
$(this).css('height','calc(3em - 8px)');
$('#kies-onderdelen svg path').css('fill', $(this).css('backgroundColor') );
$('.catitxral').remove();
rekentotaal()

$('.overzicht-kleur').html('<strong>KLEUR</strong><p><span style="width:2em;height:2em;display:inline-block;background-color:'+$(this).css('backgroundColor')+'"></span></p>')
  if(!$('#kies-onderdelen').length){
      kiesOnderdelen();
    }else{
      scrollnu('#kies-onderdelen')

    }
}
});

function rekentotaal() {
  var stt = 0;
  $('.catitx').each(function(){
    console.log('jjjj');
    stt +=  parseFloat($(this).html())
  });
  $('.ttal').remove();
  $('.eindprijs').append('<span class="ttal">totaal=€'+(parseFloat(stt)+parseFloat($('.prz .rpris').text()))+',-*</span>');
  $('.prijsfix').append('<span class="ttal">€'+(parseFloat(stt)+parseFloat($('.prz .rpris').text()))+',-*</span>');
}

$(document).on("click","#kies-ral tr",function() {
  $('.eigen-kkk').css('border','4px solid #add2b1');
  $('.eigen-kkk').css('width','calc(3em - 8px)');
  $('.eigen-kkk').css('height','calc(3em - 8px)');
  $('.eigen-kkk').css('background', $(this).find('td:nth-child(3)').css('backgroundColor'));
  $('.overzicht-kleur').html('<strong>KLEUR</strong><p><span style="width:2em;height:2em;display:inline-block;background-color:'+$(this).find('td:nth-child(3)').css('backgroundColor')+'"></span></p>')
  $('#kies-onderdelen svg path').css('fill',$(this).find('td:nth-child(3)').css('backgroundColor') );
  $('.catitxral').remove();
  $('.eindprijs').append('<span class="catitx catitx'+'ral'+'">+'+'75'+'</span><span class="onderdel catitx'+'ral'+'">'+'uw eigen kleur +75'+'<br></span>')

  rekentotaal()

  if(!$('#kies-onderdelen').length){
      kiesOnderdelen();
    }else{

      scrollnu('#kies-onderdelen')
    }
    $("#kies-ral").remove();
});
//   $(window).bind( 'hashchange', function(e) {
//
// routeTo()
//    });
//
//  function routeTo(){
//    if(window.location.hash === '#kies-frame'){
//    kiesFrame()}else
//    if(window.location.hash === '#kies-kleur'){
//        if($('#kies-frame')){kiesKleur()}else{kiesFrame()}
//      }else
//      if(window.location.hash === '#kies-onderdelen'){
//        if($('#kies-frame')){kiesOnderdelen()}else{kiesFrame()}
//      }else
//      if(window.location.hash === '#kant-klaar'){
//
//      }
//  }



    function kiesFrame(){
          $('.zelf-samenstellen123').after('<section id="kies-frame"><div class="content"><h1></h1></div></section>');
        //  e.preventDefault();

        laadOverzicht()

          $.ajax( {
            url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/43&_embed',
            success: function ( data ) {
              function imz(){
              if (data['_embedded']['wp:featuredmedia']){

              return  '<img class="onderdelen-img" src="'+data['_embedded']['wp:featuredmedia'][0]['source_url']+'">';
              }else{ return ''}
               };
               $('#kies-frame h1').append(data.title.rendered)
        $('#kies-frame .content').append('<div >'+ (data['_embedded']['wp:featuredmedia'] ? '<img class="onderdelen-img" src="'+data['_embedded']['wp:featuredmedia'][0]['source_url']+'">' : "")+data.content.rendered+'</div><div class="fiets-frames"><div class="voor-uit"></div><div class="achter-uit"></div><ul class="fiets-ul"></ul><div>');


        $.ajax( {
      url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/frame_type/&_embed',
        success: function ( data ) {
      $.each(data, function(i, item) {

      $('#kies-frame .fiets-ul').append('<li class="fiets-frame"><img class="fiets-img" src="'+data[i]['_embedded']['wp:featuredmedia'][0]['source_url']+'"><div class="fiets-text">'+data[i].content.rendered+'</div></li>');

      });


      if($('.fiets-ul').width() < '900' ){setSlick(1)}else{
      setSlick(3)}


          },
          cache: false
        } );

            },
            cache: false
          } );


         scrollnu('#kies-frame');
        }; //end function

    function kiesKleur(){

      $('#kies-frame').after('<section id="kies-kleur"><div class="content"><h1></h1><div class="wrap"><div class="left"><div class="frame"></div></div><div class="right"><div class="frame"></div></div></div></div></section>');
    //  e.preventDefault();


      $.ajax( {
        url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/36&_embed',
        success: function ( data ) {

    $('#kies-kleur .left .frame').append('<div >'+data.content.rendered+'<img src="'+data['_embedded']['wp:featuredmedia'][0]['source_url']+'"></div>');
    $('#kies-kleur h1').append(data.title.rendered)


        },
        cache: false
      } );


    //pak de kleur
        $.ajax( {
          url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/kleur_type/&_embed&order=asc',
          success: function ( data ) {
  $.each(data, function(i, item) {
  $('#kies-kleur .right .frame').append('<div class="kleur"><h2>'+data[i].title.rendered+'</h2>'+data[i].content.rendered+'</div>');
  });
  $('#kies-kleur .right .frame').append('<div class="kleur kleur-eigen"><p style="text-align: right; margin-right: 100px;">De seizoenskleur of je eigen kleur naar keuze, zoals bijvoorbeeld de kleur van je bedrijf +75,-.</p><p style="background:white;margin-right: 0;" class="cirkel eigen-kkk has-background">?</p></div>');

          },
          cache: false
        } );


        scrollnu('#kies-kleur')
      };


//on change onderdelen

      $(document).on("change","#kies-onderdelen select",function() {
        var str =  $(this).find("option:selected" ).attr('data') + " ";
        $('.cat'+$(this).parent().attr('id')+'').remove();
        $('.catitx'+$(this).parent().attr('id')+'').remove();

        $('#kies-onderdelen .left .frame').append('<img class="cat'+$(this).parent().attr('id')+'" src="'+str+'">');
       $(this).parent().find('p').html($(this).find("option:selected" ).attr('data-excerpt')+'')
       $(this).parent().find('.pris').html($(this).find("option:selected" ).attr('data-prijs')+'')

      $(this).find("option:selected" ).attr('data-prijs') ? $('.eindprijs').append('<span class="catitx catitx'+$(this).parent().attr('id')+'">+'+parseFloat(($(this).find("option:selected" ).attr('data-prijs')).replace(/(<([^>]+)>)/ig,""))+'</span><span class="onderdel catitx'+$(this).parent().attr('id')+'">'+$(this).find("option:selected" ).html()+'<br></span>'): '';

      rekentotaal()

})

//BESTEL
$(document).on("click",".bestelconfknop",function() {
bestelConfig();
$('.bestelconfknop').css("display","none");
});

function bestelConfig(){

$('#kies-onderdelen').after('<section id="bestel"><div class="content"><h1></h1><div class="wrap"><div class="left"><div class="frame"><div class="after-content"></div></div></div><div class="right"><div class="frame"><form id="bestelform"><table><tbody><tr><td>Uw voornaam</td><td><input type="text" name="your-voorname" value=""></td></tr><tr><td>Uw achternaam</td><td><input type="text" name="your-achtername" value=""></td></tr><tr><td>Uw lengte</td><td><input type="text" name="your-lengte" value=""></td></tr><tr><td>Uw opmerkingen of wensen</td><td><textarea name="your-wensen"></textarea></td></tr><tr><td>Uw email</td><td><input type="email" name="your-email" value=""></td></tr><tr><td>Uw telefoonnummer</td><td><input type="text" name="your-telefoon" value=""></td></tr><tr><td>Uw woonplaats</td><td><input type="text" name="your-woonplaats" value=""></td></tr><tr><td></td><td><input type="submit" value="Verzenden"></td></tr></tbody></table></form></div></div></div></section>');

$.ajax( {
  url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/pages/815&_embed',
  success: function ( data ) {
$('#bestel h1').html(data.title.rendered)
$('#bestel .after-content').html(data.content.rendered)

  },
  cache: false
  } );


};
  //maak onderdelen selecteer opties

  function kiesOnderdelen(){

  $('#kies-kleur').after('<section id="kies-onderdelen">'+
  '<div class="content"><h1></h1><div class="wrap"><div class="left"><div class="frame"></div></div><div class="right"><div class="frame"></div><div class="eindprijs"></div></div></div><a href="#bestel" class="bestelconfknop">  <strong  class="knop">AFRONDEN</strong></a></div></section>');
  // $('#kies-onderdelen .left .frame').append('<img src="img/config/drager.png"><img src="img/config/dragerlijn.png"><img src="img/config/framedames1.png"><img src="img/config/framedames1lijn.png"><img src="img/config/framedames2.png"><img src="img/config/framedames2lijn.png"><img src="img/config/frameheren.png"><img src="img/config/frameherenlijn.png"><img src="img/config/greep.png"><img src="img/config/kettinkast1.png"><img src="img/config/kettinkast2.png"><img src="img/config/kettinkast3.png"><img src="img/config/lamphoog1.png"><img src="img/config/lamphoog2.png"><img src="img/config/lamplaag1.png"><img src="img/config/lamplaag2.png"><img src="img/config/logos.png"><img src="img/config/mandje1.png"><img src="img/config/mandje2.png"><img src="img/config/rem.png"><img src="img/config/slot.png"><img src="img/config/spatborden.png"><img src="img/config/stippen.png"><img src="img/config/stuur.png"><img src="img/config/trapper.png"><img src="img/config/wielen.png"><img src="img/config/wielenkleur1.png"><img src="img/config/wielenkleur2.png"><img src="img/config/zadel1.png"><img src="img/config/zadel1kleur.png"><img src="img/config/zadel2.png">');

  //pak de onderdelen
    //  e.preventDefault();
      $.ajax( {
        url: 'http://fietsatelierguldemond.nl/wordpress/?rest_route=/wp/v2/onderdelen_type/&_embed&page=1&per_page=100',
        success: function ( data ) {
  //maak de catogorien
  $.each(data, function(i, item) {
    if (data[i].parent === 0){
      function im(){
      if (data[i]['_embedded']){

  return  '<img class="onderdelen-img" src="'+data[i]['_embedded']['wp:featuredmedia'][0]['source_url']+'">';
  }else{ return ''}
       };

    $( '#kies-onderdelen .right .frame' ).append('<form id='+data[i].id+'><select><option  data-prijs="" data="" data-excerpt="'+data[i].content.rendered+'">'+data[i].title.rendered+'</option></select><div class="pris"></div>'+ im()+data[i].content.rendered+'<br/></form>');
  }
  });
  //maak de opties
  $.each(data, function(i, item) {
    if (data[i].parent !== 0){
    $( '#kies-onderdelen #'+data[i].parent+' select' ).append('<option data-excerpt="'+data[i].content.rendered+'" data-prijs="'+data[i].excerpt.rendered+'" data="'+(data[i]['_embedded']['wp:featuredmedia'] ? data[i]['_embedded']['wp:featuredmedia'][0]['source_url']:"")+'">'+data[i].title.rendered+'</option>');
  }
  });


$('form  #17  select').val(2);
        // voeg style toe
//  styleOnderdelen();
        },
        cache: false
      } );

       scrollnu('#kies-onderdelen')
         $( '#kies-onderdelen .right .frame' ).append($('.overzicht-lijst').html());
     $('#overzicht').css('display','');
    };


    function setSlick(set){
      console.log('slick');
      $('.fiets-ul').slick({
        slidesToShow: set,
        dots: true,

      });
    };


  function styleOnderdelen(){
    $('select').each(function () {

        // Cache the number of options
        var $this = $(this),
            numberOfOptions = $(this).children('option').length;

        // Hides the select element
        $this.addClass('s-hidden');

        // Wrap the select element in a div
        $this.wrap('<div class="select"></div>');

        // Insert a styled div to sit over the top of the hidden select element
        $this.after('<div class="styledSelect"></div>');

        // Cache the styled div
        var $styledSelect = $this.next('div.styledSelect');

        // Show the first select option in the styled div
        $styledSelect.text($this.children('option').eq(0).text());

        // Insert an unordered list after the styled div and also cache the list
        var $list = $('<ul />', {
            'class': 'options'
        }).insertAfter($styledSelect);

        // Insert a list item into the unordered list for each select option
        for (var i = 0; i < numberOfOptions; i++) {

    var liedje = '<li rel="'+$this.children('option').eq(i).val() +'">'+($this.children('option').eq(i).attr('data') ? '<img src="'+$this.children('option').eq(i).attr('data')+'">':'')+'<p>'+ $this.children('option').eq(i).text()+'</p></li>';

          $list.append(liedje);
            // $('<li />', {
            //     text: $this.children('option').eq(i).text(),
            //     rel: $this.children('option').eq(i).val()
            // }).appendTo($list);
        }

        // Cache the list items
        var $listItems = $list.children('li');

        // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
        $styledSelect.click(function (e) {
            e.stopPropagation();
            $('div.styledSelect.active').each(function () {
                $(this).removeClass('active').next('ul.options').hide();
            });
            $(this).toggleClass('active').next('ul.options').toggle();
        });

        // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
        // Updates the select element to have the value of the equivalent option
        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            if(  $(this).parent().parent().parent().parent().hasClass('maat')){
              scrollnu('#nr5')

              $(this).closest('.in').click();
                $('#frame1').append('<span id="maat-overzicht"><br/>maat:'+$(this).text()+'</span>')
              }else{

                var seel = $(this).closest('form').find('h2').html()
if($('.overzicht-onderdelen').find('.'+seel).length){
  $('.overzicht-onderdelen').find('.'+seel).find('.od-text').html($(this).text())
}else{

    $('.overzicht-onderdelen').append('<span class="'+seel+'"><strong>'+seel+'</strong><br/><span class="od-text">'+$(this).text()+'</span></span><br/>')
}
              }

          $(this).parent().parent().find('div.styledSelect').html($(this).html());
            $list.hide();
            /* alert($this.val()); Uncomment this for demonstration! */
        });

        // Hides the unordered list when clicking outside of it
        $(document).click(function () {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });

  }

// $('a').click(function(event){
//   event.preventDefault();
//   scrollnu($(this).href)
// })
var doen = true;
function popta(e){
  if (doen){
  if(window.location.hash !== ''){
console.log('scroollnu:'+window.location.hash);
scrollnu(window.location.hash);
}
}
  }

  window.addEventListener("hashchange", popta);


function scrollnu(loc){
  if (isSmoothScrollSupported){
    doen = false;
  //  history.pushState({}, loc, loc);

  //  console.log($(loc).offset().top)
    window.location.hash = '';
    window.location.hash = loc;

    setTimeout(function () {
        doen = true;
    }, 1000);


  }else{
    console.log('jquiryscroll')
      //  var hash = window.location.hash;
  //  alert(hash)
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        //if (false)
        $('.main').animate({
          scrollTop: $(loc).offset().top - $('.main').offset().top + $('.main').scrollTop()
        //  scrollTop: $(loc).offset().top

        }, 800, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          //   window.location.hash = loc;
        });
    }
}


  var isSmoothScrollSupported = 'scrollBehavior' in document.documentElement.style;

// if (isSmoothScrollSupported){
//   console.log('nativscroll')
// }else{
//   console.log('jquiryscroll')
//
//   // Add smooth scrolling to all links
//   window.addEventListener("hashchange", doThisWhenTheHashChanges, false);
// function doThisWhenTheHashChanges(){
//         if (window.location.hash !== "") {
// //setTimeout( function(){
//
//   // Make sure this.hash has a value before overriding default behavior
//
//     // Prevent default anchor click behavior
//   //  event.preventDefault();
//
//     // Store hash
//     var hash = window.location.hash;
// alert(hash)
//     // Using jQuery's animate() method to add smooth page scroll
//     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//     $('.main').animate({
//       scrollTop: $(hash).offset().top
//     }, 800, function(){
//
//       // Add hash (#) to URL when done scrolling (default click behavior)
//   //    window.location.hash = hash;
//   });
//
// //}, 3000);
//
//
//     } // End if
//   };
//
// }
