<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
<meta property="og:url"                content="http://iconoclash.nl" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Iconoclash" />
<meta property="og:description"        content="StreetArt Dordrecht" />
<meta property="og:image"              content="http://iconoclash.nl/wp-content/uploads/2018/04/web-hellingen-bierenbrood-768x512.jpg" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet">
<style media="screen">

::-webkit-scrollbar {
    width: 0px;
    background: transparent; /* make scrollbar transparent */
}
.slider div:nth-last-child(1) .voor-uit{
display:none;
}
.slider div:nth-child(1) .achter-uit{
display:none;
}
.achter-uit{
 z-index: 888;
-webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%, 0% 50%);
clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%, 0% 50%);
      width: 3em;
      height: 75vh;
      background: white;
cursor:pointer;
    margin-left: calc(100vw - 48px);
     transform: translateX(-200px);
    transition: transform 1s;
    position: absolute;}
.voor-uit{    display: block;
    z-index: 888;

    position: absolute;
    width: 3em;
    height: 75vh;
    background: white;
    cursor: pointer;
 -webkit-clip-path: polygon(0% 0%, 0 0, 100% 50%, 0 100%, 0% 100%);
clip-path: polygon(0% 0%, 0 0, 100% 50%, 0 100%, 0% 100%);


}
.ooo{
transform: translateX(0px);
}
  body{
    margin:0;
    padding:0;
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-weight:700;
  }
.disclaimer img{
margin-top:1em;
max-width: 60vw;
    height: auto;
}
.disclaimer{
    color:white;
    text-align:center;
        z-index:3000;
    position:fixed;
    top:10vh;
    left:10vw;
    width:80vw;
    height:80vh;
    background:rgba(65, 64, 64, 0.9490196078431372);
  }
.disclaimer .close-btn{
  cursor:pointer;
  padding:20px;
  position:absolute;
  top:0;
  right:0;
}
.close33{
  cursor:pointer;
  border:2px solid black;
  color:black;
  position:fixed;
  bottom:20px;
  padding:10px;
  background:white;
  display:inline;
  left:43%;
  bottom:12vh;
}
.dis-cont{

padding:40px;
}

.shiw{
display:inline!important;
}
.top{
filter:opacity(1)!important;
opacity:1!important;
z-index:9000!important;
}
.top1{
filter:opacity(1)!important;
opacity:1!important;
z-index:9100!important;
}
  .logo{
    font-size:1.2em;

  }
  .menu li span{
    font-size:0.8em;
    line-height: 0.8em;
    color: #938c72;
  }
  .menu ul{
    height:calc(75vh - 48px);

    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
  }
  .menu-1 ul{
    height:calc(75vh + 48px);
  }
  .menu li {
       background-color: #f1f1f1;
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
.menu li:hover {
    background-color: #555;
    color: white;
}
  .cont{
    overflow:hidden;
  }
  .view{
    transition:transform 1s;
    overflow:hidden;
    width:100vw;
    height:100vh;
  }
  .menu-btn{
    z-index:200;
    width:40px;
    height:40px;
    position:fixed;
    top:20px;
    left:20px;
  }
  .menu-bar{
    margin:6px;
    width:40px;
    height:7px;
    background:black;
    }
  .menu{
    font-weight:900;
    font-size:2em;
    transition:transform 1s;
    background:white;
   position:absolute;
    width:200px;
    height:100vh;
  }
  .menuin{
    transition:transform 1s;
    width:400px;
  }
  .menu-1{

position:absolute;
  }
  .hide{
      display:none!important;
}
  .show{
    display:block;
  }
  .menu-2{
    overflow-y: scroll;
    position: relative;
    float: right;

  }
.rap2{
  width:200px;
  overflow:hidden;
}
.fa-close{
  float:right;
  }
  .menu-2 .p2{
    width:292px;
    transition:transform 2s;
    margin:0px;
    background:black;
    color:white;
    display: block;
    padding: 8px 16px;
  }
  .menu-2 .rap2:hover > .p2{
     background:white;
    color:black;
    transform:translateX(-200px);
  }
  .menu-open2{
  transform:translateX(-200px);
  }
  .menu-close{
  transform:translateX(0px);
  }
  .menu-open{
  transform:translateX(200px);
  }
  .rapper{
      transform:translateY(-100vh);

  }
  .boven{
    overflow:hidden;
    position: absolute;
    background-size:cover;
    width:100vw;
    height:100vh;
  }
  .onder{

        overflow:hidden;
    width:200vw;
    height:100vh;
    background:#f0f0f0;
  }
.onder2{
float:right;
overflow:hidden;
    background:#f0f0f0;
width:100vw;
    height:100vh;

}
  .bovenin{
    overflow:hidden;
    background-size:cover;
    background-position:center;
    width:100vw;

  }
  .slider{
    overflow:hidden;
    height:calc(75vh + 48px);
    width:200vw;
transition:transform 1s;
  }
.slider div{
  float: left;
  background-size:cover;
  background-position:center;
  width:100vw;
  height:calc(75vh + 48px);
}
@keyframes slide {
  0% {
    transform: translateX(0%);
  }
  25% {
    transform: translateX(0%);
  }
  50% {
    transform: translateX(-50%);
  }
  75% {
    transform: translateX(-50%);
  }
  100% {
    transform: translateX(0);
  }
}
  .onderin{

    max-height: 10vh;

    overflow: scroll;
    padding: 2em 300px 3em 3em;

  }
    .prev{
      background:lightgray;
      position:absolute;
      width:80px;

      }
  #map{position:unset!important}
    .titel1{
    right: 30vw;
    top: 50vh;
    transition:transform 1.5s;
   z-index:900;
  background-color: white;
font-size: 3em;
position: fixed;
padding: 50px;
width: 200px;
float: right;
font-weight: bold;
  }
  .titel2{
    right: 30vw;
    top: 100vh;
    transition:transform 1.5s;
   z-index:900;
  background-color: white;
font-size: 3em;
position: fixed;
padding: 50px;
width: 200px;
float: right;
font-weight: bolder;
  }
  .onderding{
    width: 160px;
    color:#555;
    padding:20px;
transition:transform 1s;
  }
  .onderding a{
    color:black;
  }
  .onderding a:hover{
    color:darkgray;
  }
   .titel1 span{
    font-size:0.8em;
    line-height: 0.8em;
    color: #938c72;
  }
  .titel2 span{
    font-size:0.8em;
    line-height: 0.8em;
    color: #938c72;
  }
  .text{
font-size:1.3em;
    display:none;
    position:relative;
     max-width:75vw;
    font-weight:400;
    float:left;
  }
  .text a{
    color:#938c72;
  }
  .text a:hover{
    cursor:pointer;
    color:darkgray;
  }
  .next{
    background:lightgray;
    position:absolute;
    width:80px;
    margin-left:calc(100vw - 80px);
    float:left;
  }
.info{
color:black!important;
background-color:white!important;}

img[src*="?=mymarker"]{
display:none;
filter:opacity(0);
transition:filter 1s;
      transform:scale(0.97) ;
    -webkit-clip-path: polygon(0% 0%, 100% 0, 100% 90%, 65% 90%, 50% 100%, 35% 90%, 0% 90%);
    clip-path: polygon(0% 0%, 100% 0, 100% 90%, 65% 90%, 50% 100%, 35% 90%, 0% 90%);
  }
img[src*="back.png"]{

filter:opacity(0);
display:none;
transition:filter 1s;
    -webkit-clip-path: polygon(0% 0%, 100% 0, 100% 90%, 65% 90%, 50% 100%, 35% 90%, 0% 90%);
    clip-path: polygon(0% 0%, 100% 0, 100% 90%, 65% 90%, 50% 100%, 35% 90%, 0% 90%);
  }
.loader{
    z-index: 900;
    width: 100vw;
    height: 100vh;
    background: rgba(255, 255, 255, 0.85);
    position: absolute;
    display: flex;
    justify-content: center;
    vertical-align: middle;
    padding-top: calc(50vh - 40px);
}
@media only screen and (max-width: 1050px)  {
.slider {
height:auto;
}
.slider div{
height: 60vh;
}
.onderin{
padding:0 2em;
display:block;
   max-height: 40vh;

}
.bovenin{
overflow:scroll;
}
.text{
max-width:none;
}
.titel2{
    right: 0;
    height: 18vh;
    top: 181vh;
    /* bottom: auto; */
    transition: transform 1.5s;
    z-index: 900;
    background-color: white;
    font-size: 3em;
    position: fixed;
    padding: 50px;
}
.titel1 {

    /* top: 50vh; */
    transition: transform 1.5s;
    /* z-index: 900; */
    background-color: transparent;
    font-size: 2em;
    position: inherit;
    padding: 1em 0;
    width: auto;
    float: none;
    font-weight: bold;
}

.voor-uit, .achter-uit{
display:none;
}
.menu-2 .p2{
width:auto;
}

.menu-btn {


    width: auto;
     height: auto;


    background: white;
    border: 4px solid white;
}

.menuin{
    width: 80vw;
}

.menu ul {
    width: 80vw;
}
.menu-2{
transform: translateX(200px);
}
.menu-open {
    transform: translateX(80vw);
}
.onderding{
padding:1em;
width:auto;
}
.filter{
background:transparent;
transition:background 1s;
}
.menu-open .filter{
    z-index: 99;
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: rgba(8, 8, 8, 0.78);
}
.rap2{
width:auto;
}

.menu-close{
overflow:initial;
}



}


</style>
  <?php wp_head() ?>
</head>

<body>
<div class="loader">
 <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
  <path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
    <animateTransform attributeType="xml"
      attributeName="transform"
      type="rotate"
      from="0 25 25"
      to="360 25 25"
      dur="0.6s"
      repeatCount="indefinite"/>
    </path>
  </svg>
</div>
<?php
$post_id = 802;
$queried_post = get_post($post_id);
if ( get_post_status ( $post_id ) == 'publish' ) {
echo '<div class="disclaimer" id="disclaimer"> <div class="close-btn" onclick=\'document.getElementById("disclaimer").setAttribute("style","display:none")\'> <i class="fa fa-close" style="font-size:32px"></i> </div>';

$title = $queried_post->post_title;
echo '<div class="dis-cont">';
echo '<h1>' .$title. '</h1>';
echo  $queried_post->post_content;
echo '</div><div class="close33" onclick=\'document.getElementById("disclaimer").setAttribute("style","display:none")\'> OK,  IK HEB HET GELEZEN ! </div></div>';
};
?>


  <div class="cont">
    <div class="menu menu-open2 ">
      <div class="menuin">
      <div class="menu-1">
<ul>
<?php
$cats2 = get_categories();


      $cats = array_reverse($cats2);




				// loop through the categries
				foreach ($cats as $cat) {
					// setup the cateogory ID
					$cat_id= $cat->term_id;
					// Make a header for the cateogry
					echo "<li id=".$cat_id." onclick='meno(this);'>".$cat->name."  </li> ";   } ?>
</ul>

        <div class="onderding">© 2018 ICONOCLASH&nbsp;&nbsp;&nbsp;&nbsp;<br/><a href="https://www.instagram.com/iconoclash_078/"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.facebook.com/iconoclashdordrecht/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
    &nbsp;&nbsp;|&nbsp;&nbsp;<a href="mailto:info@iconoclash.nl"><i class="fa fa-envelope" aria-hidden="true"></i></a>
</div>
      </div>
      <div class="menu-2 hide">
  <div class="rap2">
        <div class="p2">\\\<<<\\\<i class="fa fa-close" style="font-size:32px"></i></div>
<li class="info">Info</li>
        </div>
<ul>
<?php
  $inzo=array();  $name2=array();
foreach ($cats as $cat) {
					// setup the cateogory ID
					$cat_id= $cat->term_id;
					// Make a header for the cateogry
					?> <?php
array_push($name2, ''. $cat_id.':"'. get_cat_name( $cat_id) . '"' );
array_push($inzo, ''. $cat_id.':"'. str_replace('"',  '\'', preg_replace( "/\r|\n/", "", category_description( $cat_id ))). '"' );
// create a custom wordpress query
					query_posts("cat=$cat_id&posts_per_page=100");
					// start the wordpress loop!
					if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php // create our link now that the post is setup


//array_push( $inzo, "'" .$cat_id.":".category_description($cat_id)."'")



?>

         <li id="<?php  the_ID()  ?>" onclick="hoover(this)" class="hide cat<?php  echo $cat_id  ?>   id<?php  the_ID()  ?>"><?php the_title(); ?> <br/><span><?php echo strip_tags(substr( get_the_excerpt(), 0, 75 )) ?></span></li>

<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>

				<?php } // done the foreach statement ?>

<?php wp_reset_query(); ?>


 </ul>
      </div>

          </div>

</div>
  <div class="view menu-close">
<div class="filter"></div>
    <div class="menu-btn">
<div class="menu-bar"></div>
<div class="menu-bar"></div>
<div class="menu-bar"></div>
    </div>

 <div class="rapper">
   <div class="onder">

<div class="onder2">
</div>

     <div class="bovenin">

       <div class="slider">



         <div ></div>
         <div ></div>
       </div>

     </div>
     <div class="onderin">
<div class="titel1">
     Danny Rumbl & Robert Visser
     <span>Varkenmarkt</span>

   </div>
       <div class="prev"></div>


<?php foreach ($cats as $cat) {
					// setup the cateogory ID
					$cat_id= $cat->term_id;
					// Make a header for the cateogry
					?> <?php


// create a custom wordpress query
					query_posts("cat=$cat_id&posts_per_page=100");
					// start the wordpress loop!
					if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php // create our link now that the post is setup ?>

<div class="text text<?php  the_ID()  ?>"> <?php echo wp_strip_all_tags( get_the_content() ); ?> </div>



<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>

				<?php } // done the foreach statement ?>

<?php wp_reset_query(); ?>



   <div class="next"></div>

       </div>

     </div>
<div class="boven">
<div class="titel2">
    <div class="logo"> Iconoclash<br/><span style="font-size:0.45em">DORDRECHT STREET ART</span></div>

  </div>
  <div id="map" style="position:inherit;">
  </div>
  <div class="preload" style="display:none">

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script>



        var grafs = [


   ];

          var markers = [];

          var map, infoWindow;


          function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 51.815766, lng: 4.666577},
              zoom: 16,
              zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    streetViewControl: false,
    rotateControl: false,
    fullscreenControl: false,
              styles:[
                { "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" }
                ] }, { "elementType": "labels", "stylers": [ { "visibility":
                "off" } ] }, { "elementType": "labels.icon", "stylers": [ {
                "visibility": "off" } ] }, { "elementType": "labels.text.fill",
                "stylers": [ { "color": "#616161" } ] }, { "elementType":
                "labels.text.stroke", "stylers": [ { "color": "#f5f5f5" } ] }, {
                "featureType": "administrative.land_parcel", "stylers": [ {
                "visibility": "off" } ] }, { "featureType":
                "administrative.land_parcel", "elementType": "labels.text.fill",
                "stylers": [ { "color": "#bdbdbd" } ] }, { "featureType":
                "administrative.neighborhood", "stylers": [ { "visibility":
                "off" } ] }, { "featureType": "poi", "elementType": "geometry",
                "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "poi",
                "elementType": "labels.text.fill", "stylers": [ { "color":
                "#757575" } ] }, { "featureType": "poi.park", "elementType":
                "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, {
                "featureType": "poi.park", "elementType": "labels.text.fill",
                "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType":
                "road", "elementType": "geometry", "stylers": [ { "color":
                "#ffffff" } ] }, { "featureType": "road", "elementType":
                "geometry.fill", "stylers": [ { "color": "#938c72" } ] }, {
                "featureType": "road.arterial", "elementType":
                "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, {
                "featureType": "road.highway", "elementType": "geometry",
                "stylers": [ { "color": "#dadada" } ] }, { "featureType":
                "road.highway", "elementType": "labels.text.fill", "stylers": [
                { "color": "#616161" } ] }, { "featureType": "road.local",
                "elementType": "labels.text.fill", "stylers": [ { "color":
                "#9e9e9e" } ] }, { "featureType": "transit.line", "elementType":
                "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, {
                "featureType": "transit.station", "elementType": "geometry",
                "stylers": [ { "color": "#eeeeee" } ] }, { "featureType":
                "water", "elementType": "geometry", "stylers": [ { "color":
                "#c9c9c9" } ] }, { "featureType": "water", "elementType":
                "geometry.fill", "stylers": [ { "color": "#4d4d4d" } ] }, {
                "featureType": "water", "elementType": "labels.text.fill",
                "stylers": [ { "color": "#9e9e9e" } ] } ]



            });




<?php $in=0; $b=0; $a=array(); $z=array(); $q=array(); $l=array(); $realimg=array();  $sliderimg=array();  $posttext=array(); $tit=array(); $subtit=array(); $slug=array(); $slug2=array();


 if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>



///

<?php


array_push($slug, ''.get_the_ID().':"'.get_post_field( 'post_name', get_post() ).'"' );
array_push($slug2, '"'.get_post_field( 'post_name', get_post() ).'":'.get_the_ID().'' );

array_push($tit, ''.get_the_ID().':"'.get_the_title().'"' );

array_push($subtit, ''.get_the_ID().':"'. strip_tags(substr( get_the_excerpt(), 0, 75 )) .'"' );





array_push($posttext, ''.get_the_ID().':\''. str_replace("'",  "",    preg_replace( "/\r|\n/", "",  preg_replace("/<img[^>]+\>/i", "", get_the_content()  ) )).'\'' );




// get the post object
$post = get_post( get_the_ID() );
// we need just the content
$content = $post->post_content;
// we need a expression to match things
$regex = '/src="([^"]*)"/';
// we want all matches
preg_match_all( $regex, $content, $matches );
// reversing the matches array
$matches = array_reverse($matches);

// we've reversed the array, so index 0 returns the result

array_push($sliderimg, ''.get_the_ID().':["'. implode( "\", \"", $matches[0] ).'"]');



if (has_post_thumbnail()){
   array_push($a,'["'. strip_tags(substr( get_the_excerpt(), 0, 60 )) .'",'.  get_post_meta($post->ID, 'Latitude', true) .', '. get_post_meta($post->ID, 'Longitude', true) .', '.$b++.']' );



array_push($realimg,'imi'.get_the_ID().':"'.get_the_post_thumbnail_url(get_the_ID(),'thumbnail').'?=mymarker'.get_the_ID().'"');



array_push($l,'{imi:{url: "back.png?='.get_the_ID().'", size: new google.maps.Size(271, 373), origin: new google.maps.Point(0, 0), anchor: new google.maps.Point(136.5, 373)}, shape:{coords: [1, 1, 1, 271, 271, 271, 271, 1],type: "poly"},  id:'.get_the_ID().', zin:'.$in++.' }');

array_push($q,'{imi:{url: "dot.png?='.get_the_ID().'", size: new google.maps.Size(26, 26), origin: new google.maps.Point(0, 0), anchor: new google.maps.Point(13, 13)}, shape:{coords: [1, 1, 1, 26, 26, 26, 26, 1],type: "poly"},  id:'.get_the_ID().', zin:290'.$in++.' }');

array_push($z,'{imi:{url: "'.get_the_post_thumbnail_url(get_the_ID(),'thumbnail').'?=mymarker'.get_the_ID().'", size: new google.maps.Size(271, 373), origin: new google.maps.Point(0, 0), anchor: new google.maps.Point(136.5, 373)}, shape:{coords: [1, 1, 1, 271, 271, 271, 271, 1], type: "poly" },  id:'.get_the_ID().', zin:11'.$in++.' }');

}


endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
<?php wp_reset_query(); ?>
//console.log( '<?php //echo implode( ", ", $a );  ?> ');


//<?php // echo implode( ', ', $a ); ?>
                                         // Adds markers to the map.

                                         // Marker sizes are expressed as a Size of X,Y where the origin of the image
                                         // (0,0) is located in the top left of the image.

                                  // Origins, anchor positions and coordinates of the marker increase in the X
                    // direction to the right and in the Y direction down.

 var beaches = [
                                        <?php echo implode( ", ", $a );  ?>
                                       ];

var imagedot = [
<?php echo implode( ", ", $q );  ?>

                    ];

var imageachter = [
<?php echo implode( ", ", $l );  ?>

                    ];


                    var image = [
<?php echo implode( ", ", $z );  ?>

                    ];

                    var image2 =

{imi:
   {
                        url: 'dot.png?=333',
                        // This marker is 20 pixels wide by 32 pixels high.
                        size: new google.maps.Size(26, 26),
                        // The origin for this image is (0, 0).
                        origin: new google.maps.Point(0, 0),
                        // The anchor for this image is the base of the flagpole at (0, 32).
                        anchor: new google.maps.Point(13, 13)
                      },
  shape:{
    coords: [1, 1, 1, 26, 26, 26, 26, 1],
    type: 'poly'
  },
  id:3677
}


 var image8 =

{imi:
   {
                        url: 'marker3.png?=mymarker333',
                        // This marker is 20 pixels wide by 32 pixels high.
                        size: new google.maps.Size(271, 373),
                        // The origin for this image is (0, 0).
                        origin: new google.maps.Point(0, 0),
                        // The anchor for this image is the base of the flagpole at (0, 32).
                        anchor: new google.maps.Point(136.5, 373)
                      },
  shape:{
    coords: [1, 1, 1, 271, 271, 271, 271, 1],
    type: 'poly'
  },
  id:3677
}



google.maps.event.addListenerOnce(map, 'tilesloaded', function(){
 setTimeout(function(){
console.log('end')
loaded();
      },2000);
});
                    // Shapes define the clickable region of the icon. The type defines an HTML
                    // <area> element 'poly' which traces out a polygon as a series of X,Y points.
                    // The final coordinate closes the poly by connecting to the first coordinate.
                    var shape = {
                      coords: [1, 1, 1, 26, 26, 26, 26, 1],
                      type: 'poly'
                    };
                    for (var i = 0; i < beaches.length; i++) {
                      var beach = beaches[i];
                      var marker = new google.maps.Marker({
                        position: {lat: beach[1] || -33.950198, lng: beach[2] || 151.259302},
                        map: map,
                        icon: imagedot[i].imi || image2.imi,
                        shape: imagedot[i].shape || image2.shape,
                        title: beach[0],
                        zIndex: imagedot[i].zin,
                        id: imagedot[i].id,
                        url: (imagedot[i].imi || image2.imi).url
                      });
   //  markers.push(marker);
//marker.setVisible(false);

                      google.maps.event.addListener(marker, 'click', function(event) {

map.panTo(this.position);


var realimg = {<?php echo implode( ", ", $realimg );  ?>};

var iii = 'imi'+ this.id;

var ho = this.id;

console.log(realimg[iii]);

$("img[src*='back.png?=']").parent().removeClass("shiw");
$("img[src*='?=mymarker']").parent().removeClass("shiw");
$("img[src*='back.png?="+ho+"']").parent().addClass("shiw");
$("img[src*='?=mymarker"+ho+"']").parent().addClass("shiw");
$("img[src*='back.png?=']").removeClass("shiw");
$("img[src*='?=mymarker']").removeClass("shiw");
$("img[src*='back.png?="+ho+"']").addClass("shiw");
$("img[src*='?=mymarker"+ho+"']").addClass("shiw");
$("img[src*='?=mymarker"+ho+"']").attr('src', realimg[iii] );

 setTimeout(function(){




$("img[src*='back.png?=']").parent().removeClass("top");
$("img[src*='?=mymarker']").parent().removeClass("top1");
$("img[src*='back.png?="+ho+"']").parent().addClass("top");
$("img[src*='?=mymarker"+ho+"']").parent().addClass("top1");
$("img[src*='back.png?=']").removeClass("top");
$("img[src*='?=mymarker']").removeClass("top1");
$("img[src*='back.png?="+ho+"']").addClass("top");
$("img[src*='?=mymarker"+ho+"']").addClass("top1");
 },10);

            //        $(".rapper").css( "transform","translateY(0vh)");
                        });

                    }




 for (var i = 0; i < beaches.length; i++) {
                      var beach = beaches[i];
                      var marker = new google.maps.Marker({
                        position: {lat: beach[1] || -33.950198, lng: beach[2] || 151.259302},
                        map: map,
                        icon: imageachter[i].imi || image2.imi,
                        shape: imageachter[i].shape || image2.shape,
                        title: beach[0],
                        zIndex: imageachter[i].zin,
                        id:imageachter[i].id,
                        url: (imageachter[i].imi || image2.imi).url
                      });
  //   markers.push(marker);
//marker.setVisible(false);

                    }


 for (var i = 0; i < beaches.length; i++) {
                      var beach = beaches[i];
                      var marker = new google.maps.Marker({
                        position: {lat: beach[1] || -33.950198, lng: beach[2] || 151.259302},
                        map: map,
                        icon: image[i].imi,
                        shape: image[i].shape ,
                        title: beach[0],
                        zIndex: image[i].zin,
                        id: image[i].id,
                        url: (image[i].imi).url
                      });
   //  markers.push(marker);
//marker.setVisible(false);
                      google.maps.event.addListener(marker, 'click', function(event) {

                                                      $(".rapper").css( "transform","translateY(0vh)");

//var latLng = marker.getPosition(); // returns LatLng object

var zz = this.id;
 doeit(zz);
                        });
                    }




          }

var countt = 0;

function bof(){
$(".rapper").css( "transform","translateY(-100vh)");
};

function doeit(ho){
tlr = 0;
var tits = {<?php  echo implode( ", ", $tit );?>};
var subtits = {<?php  echo implode( ", ", $subtit );?>};
var slid = {<?php echo implode( ", ", $sliderimg );?>};
var tx = {<?php echo implode( ", ",  $posttext );?>};
var slug1 = {<?php echo implode( ", ",  $slug );?>};


window.location.hash = slug1[ho];

if ($(".onder").hasClass("zip")){



   $(".onder > .onderin").html('<div class="titel1" style="right:130vw;">'+tits[ho]+'<br/><span>'+subtits[ho]+'</span></div><div class="text shiw">'+tx[ho]+'</div>');
    $(".onder").attr("style", "transform:translateX(0vw);");
   $(".onder").removeClass("zip");
if (slid[ho][0]) {
document.querySelectorAll(".onder > .bovenin .slider")[0].innerHTML = '';
document.querySelectorAll(".onder > .bovenin .slider")[0].setAttribute("style", "width:"+slid[ho].length+"00vw;");
    for (var p = 0; p < slid[ho].length; p++) {
console.log(slid[ho][1])
                   var idiv = document.createElement('div');
                       idiv.setAttribute("style", "background-image:url("+slid[ho][p]+")");
                   var zidiv = document.createElement('p');
                                                 zidiv.setAttribute("class", "achter-uit");
                                           idiv.appendChild(zidiv);
var gidiv = document.createElement('p');
                                                 gidiv.setAttribute("class", "voor-uit");
                                           idiv.appendChild(gidiv);
                         document.querySelectorAll(".onder > .bovenin .slider")[0].appendChild(idiv);
};
}else{
document.querySelectorAll(".onder > .bovenin .slider")[0].innerHTML = '';
var idiv = document.createElement('div');
                       idiv.setAttribute("style", "background-image:url(marker3.png)");


var zidiv = document.createElement('p');
                                                 zidiv.setAttribute("class", "achter-uit");
                                           idiv.appendChild(zidiv);
var gidiv = document.createElement('p');
                                                 gidiv.setAttribute("class", "voor-uit");
                                           idiv.appendChild(gidiv);
                         document.querySelectorAll(".onder > .bovenin .slider")[0].appendChild(idiv);

}
setTimeout(function(){
 $(".onder2").html('');
},1000);
}else{
    $(".onder").attr("style", "transform:translateX(-100vw);");
    $(".onder").addClass("zip");
    $(".titel1").css("right","30vw");
// setTimeout(function(){
    $(".onder2").html('<div class="bovenin" onclick="bof()"><div class="slider"></div></div><div class="onderin"><div class="titel1" style="right:130vw;"></div><div class="text shiw">'+tx[ho]+'</div></div>');
 //},1000);



if (slid[ho][0]) {
document.querySelectorAll(".onder2 .slider")[0].innerHTML = '';
document.querySelectorAll(".onder2 .slider")[0].setAttribute("style", "width:"+slid[ho].length+"00vw;");
    for (var p = 0; p < slid[ho].length; p++) {
//console.log(slid[ho][1])
                   var idiv = document.createElement('div');
                       idiv.setAttribute("style", "background-image:url("+slid[ho][p]+")");


var zidiv = document.createElement('p');
                                                 zidiv.setAttribute("class", "achter-uit");
                                           idiv.appendChild(zidiv);
var gidiv = document.createElement('p');
                                                 gidiv.setAttribute("class", "voor-uit");
                                           idiv.appendChild(gidiv);
                         document.querySelectorAll(".onder2 .slider")[0].appendChild(idiv);


};
}else{
document.querySelectorAll(".onder2 .slider")[0].innerHTML = '';
var idiv = document.createElement('div');
                       idiv.setAttribute("style", "background-image:url(marker3.png)");

var zidiv = document.createElement('p');
                                                 zidiv.setAttribute("class", "achter-uit");
                                           idiv.appendChild(zidiv);
var gidiv = document.createElement('p');
                                                 gidiv.setAttribute("class", "voor-uit");
                                           idiv.appendChild(gidiv);
                         document.querySelectorAll(".onder2 .slider")[0].appendChild(idiv);
}

setTimeout(function(){
 $(".onder > .bovenin .slider").html('');
},1000);


    }
//$(".onderin").attr("style", "transform:translateX("+(countt)+"00vw)");

                       document.querySelectorAll(".titel1")[0].innerHTML = tits[ho]+"<br/><span>"+subtits[ho]+"</span>";
                     //  var txx =  document.querySelectorAll(".text");
//for (var z = 0; z < txx.length; z++) {
//txx[z].setAttribute("style","display:none!important");

//};
                          //    document.querySelectorAll(".text"+ho)[0].setAttribute("style","display:inline!important");


};

var catdis = {<?php echo implode( ", ", $inzo );  ?>};
var name2 = {<?php echo implode( ", ", $name2 );  ?>};
$(".info").click(function (){
   $(".titel1").css("right","130vw");
     $(".rapper").css( "transform","translateY(0vh)");
if ($(".onder").hasClass("zip")){
    $(".onder").removeClass("zip");
$(".onder").attr("style","transform:translateX(0vw);");
   $(".onder > .bovenin .slider").html(catdis[$(this).attr("id")]);
                       document.querySelectorAll(".titel1")[0].innerHTML = name2[$(this).attr("id")];
  $(".onder > .bovenin .slider").attr("style", "width:100vw;    max-width: 60vw;   padding: 80px;");
$(".text").html('');
}else{

 $(".onder").attr("style", "transform:translateX(-100vw);");
    $(".onder").addClass("zip");
    $(".titel1").css("right","30vw");
$(".onder2").html('<div class="bovenin" onclick="bof()"><div class="slider">'+catdis[$(this).attr("id")]+'</div></div><div class="onderin"><div class="text shiw"></div></div>');
                       document.querySelectorAll(".titel1")[0].innerHTML =  name2[$(this).attr("id")];
$(".text").html('');
  $(".onder2 .slider").attr("style", "width:100vw;    max-width: 60vw;   padding: 80px;");
}


});
var app = 0;

function hoover(elem){


 doeit($(elem).attr("id"));



var realimg = {<?php echo implode( ", ", $realimg );  ?>};
var ho = $(elem).attr("id");
var iii = 'imi'+ho;

console.log(realimg[iii]);
$("img[src*='dot.png?="+ho+"']").click();
$("img[src*='back.png?=']").parent().removeClass("shiw");
$("img[src*='?=mymarker']").parent().removeClass("shiw");
$("img[src*='back.png?="+ho+"']").parent().addClass("shiw");
$("img[src*='?=mymarker"+ho+"']").parent().addClass("shiw");
$("img[src*='back.png?=']").removeClass("shiw");
$("img[src*='?=mymarker']").removeClass("shiw");
$("img[src*='back.png?="+ho+"']").addClass("shiw");
$("img[src*='?=mymarker"+ho+"']").addClass("shiw");
$("img[src*='?=mymarker"+ho+"']").attr('src', realimg[iii]);

 setTimeout(function(){

if (app === 0){app = 1;console.log(app) }else{
if($('body').width() < 1050){
$('.menu-btn').trigger('click');
  }
}



$("img[src*='back.png?=']").parent().removeClass("top");
$("img[src*='?=mymarker']").parent().removeClass("top1");
$("img[src*='back.png?="+ho+"']").parent().addClass("top");
$("img[src*='?=mymarker"+ho+"']").parent().addClass("top1");
$("img[src*='back.png?=']").removeClass("top");
$("img[src*='?=mymarker']").removeClass("top1");
$("img[src*='back.png?="+ho+"']").addClass("top");
$("img[src*='?=mymarker"+ho+"']").addClass("top1");
 },10);
}


function meno(elem){
var cati = $(elem).attr("id");
$(".info").attr("class","info");
$(".info").addClass("hide");
$(".info").addClass("cat"+cati);
$(".info").attr("id", cati);
$(".cat"+cati).toggleClass("hide show");

}

$(document).ready(function(){
$( "li:contains('Uncategorized ')" ).css( "display", "none" );
  $(".menu-btn").ready(function(){
if($('body').width() < 1050){

}else{
    $(".view").toggleClass("menu-close menu-open");
    $(".menu").toggleClass("menu-close menu-open2");
}
   })
   $(".menu-btn").click(function(){
     $(".view").toggleClass("menu-close menu-open");
     $(".menu").toggleClass("menu-close menu-open2");
$(".achter-uit").toggleClass('ooo')
    })
  // $(".boven").click(function(){
  //   $(".rapper").css( "transform","translateY(0vh)");
  //   $(".titel").css( "transform","translateY(-100px)");
  //   setTimeout(function(){
  //
  // },1000);
  // })




$(document).on("click",".voor-uit",function() {
     $(".rapper").css( "transform","translateY(0vh)");
  vooruit(this);
});

$(document).on("click",".achter-uit",function() {
     $(".rapper").css( "transform","translateY(0vh)");
  achteruit(this);
});

tlr = 0;
function achteruit(e){
tlr--
 $(e).closest('.slider').css('transform','translateX(-'+(tlr)+'00vw)')
console.log(tlr)
}
function vooruit(e){
tlr++
  $(e).closest('.slider').css('transform','translateX(-'+(tlr)+'00vw)')
  console.log(tlr);
}


   $(".slider").click(function(){
console.log($(this))
     $(".rapper").css( "transform","translateY(-100vh)");
    });
    $(".next").click(function(){
      $(".onderin").css( "transform","translateX(-100vw)");
     });
     $(".prev").click(function(){
       $(".onderin").css( "transform","translateX(100vw)");
      })
      $(".menu-1 li").click(function(){
        $(".menu-2").toggleClass("hide show");
      $(".menuin").css( "transform","translateX(-200px)");
      $(".onderding").css( "transform","translateX(200px)");
$(".achter-uit").toggleClass('ooo')
       })
  //     $(".menu-2 li").click(function(){
 //        $(".rapper").css( "transform","translateY(0vh)");
 //    setTimeout(function(){
 //        $(".view").toggleClass("menu-close menu-open");
  //       $(".menu").toggleClass("menu-close menu-open2");
 //  },1000);
 //        })
    $(".p2").click(function(){
       $(".menuin").css( "transform","translateX(0px)");
       $(".onderding").css( "transform","translateX(0px)");
$(".achter-uit").toggleClass('ooo')
       setTimeout(function(){

       $(".menu-2 li").removeClass("show");
       $(".menu-2 li").addClass("hide");
       $(".menu-2").toggleClass("hide show");
     },1000);
        })



})

function handleTouch(e) {
    var x = e.changedTouches[0].clientX;
  var total = this.clientWidth;
  var position = x - total;
  if ( position < 0 ) this.style.transform = 'translateX('+ (x-total) + 'px)'
  //else if (position >= 0) this.style.transform = 'translateX('+ 0 + 'px)'
}
function handleTouchEnd(e) {
    var x = e.changedTouches[0].clientX;
  var total = this.clientWidth;
  var position = x - total;
  this.style.transform = "";
 if ( position <= -180 ) {
console.log(-total*0.5)
$(".view").toggleClass("menu-close menu-open");
     $(".menu").toggleClass("menu-close menu-open2");};

}
//document.querySelector('.menu').addEventListener('touchstart', handleTouch, false)
document.querySelector('.menu').addEventListener('touchmove', handleTouch, false)
document.querySelector('.menu').addEventListener('touchend', handleTouchEnd, false)
//document.querySelector('.onder').addEventListener('touchstart', handleTouch2, false)
//document.querySelector('.onder').addEventListener('touchmove', handleTouch2, false)
//document.querySelector('.onder').addEventListener('touchend', handleTouchEnd2, false)

function handleTouch2(e) {
    var x = e.changedTouches[0].clientY;
  var total = this.parentNode.clientHeight;
  var position = x - total;
  if ( position < 0 ) this.parentNode.style.transform = 'translateY('+ (x-total) + 'px)'
  else if (position >= 0) this.parentNode.style.transform = 'translateY('+ 0 + 'px)'
}
function handleTouchEnd2(e) {
    var x = e.changedTouches[0].clientY;
  var total = this.parentNode.clientHeight;
  var position = x - total;
  this.style.transform = "";
  if ( position <= -total*0.5 ) this.parentNode.style.transform = 'translateY(-100vh)'

}

function loaded(){
var slug2 = {<?php echo implode( ", ",  $slug2 );?>};
if(window.location.hash) {
console.log('yes:'+(window.location.hash).substr(1)+' en:'+slug2[(window.location.hash).substr(1)])
$("#"+slug2[(window.location.hash).substr(1)]).trigger('click');
document.querySelector('.rapper').style.transform = 'translateY(0vh)';
} else {
$("#453").trigger('click');
}

$('.loader').remove();
setTimeout(function(){
document.querySelector('.rapper').style.transition = 'transform 1s';
document.querySelector('.onder').style.transition = 'transform 1s';
}, 1000)
}


        </script>
        <script src="https://maps.googleapis.com/maps/apiKEYKEYKEY"
        async defer></script>
  </div>
</div>

    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

</script>
