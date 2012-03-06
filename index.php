<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.1.7.1.js"></script>
  <link rel="stylesheet/less" type="text/css" href="style.less">
  <script type="text/javascript" src="js/less.js"></script>
  </head>

  <body>
    <header class="navbar navbar-fixed-top">
      <div id="logo">
      </div>
        <nav> 
           <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Submit</a></li>
              <li><a href="#contact">Buy</a></li>
              <li><a href="#contact">Gallery</a></li>
            </ul>
          </nav>
          <div id="search">
            <input type="text" class="span3" id="searchbox" placeholder="search">
          </div>
    </header>

  <ul id="circles">
     <li><a href="#main"><img src="img/circle-white.png"></a></li>
     <li><a href="#second"><img src="img/circle-white.png"></a></li>
     <li><a href="#"><img src="img/circle-white.png"></a></li>
     <li><a href="#"><img src="img/circle-white.png"></a></li>
  </ul> 

 <section id="main">
    <div class="story">
      <div id="mainContent">
          <h1>submit a picture of your place and<br> we make  it pretty.</h1>
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel ante massa, sed pretium 
            est. Proin a dui ut erat venenatis <br>gravida. Vivamus ipsum purus, rhoncus semper
            congue nec,  laoreet vel eros. Proin orci sapien, varius nec  <br>
            viverra sed, aliquet vel dolor. Maecenas</h2>

          <div id="mainSocial">
              <h3>like us on facebook</h3>
              <p>Cras porta elementum tortor quis gravida. Maecenas egestas euismod leo, a auctor 
                purus vestibulum sed. Duis nec sem odio. Sed sit amet hendrerit nibh.</p>
                <img src="img/like.png">
          </div>

          <div id="upload">
              <h3>Upload your own picture</h3>
              <input type="file">
              <input type="button" class="Ubutton" value="upload">
          </upload>    

      </div>

    
    </div>

 </section>

 <section id="second">
    <div class="story">
        <h1>paintings <br>
            scultptures <br>
            installations <br>
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus <br>  tincidunt ultrices sem, in molestie neque pellentesque eget. Maecenas rhoncus tempus blandit. Donec</p>

        <div id="fireplace" class="caption" data-function"right">
           <h3>Fireplace Installation</h3>
            <div class="likes">
                <i class="icon-heart icon-white"></i> <span><a href="#">325</a></span>
           </div>
           <div class="info">
               <i class="icon-user icon-white"></i> David Davidson - <span class="rate">$85/hr</span> 
           </div>

        </div>
        <!--<div class="arrow"></div>-->
    </div>


    <div id="rug" class="caption" data-function"right">
           <h3>Rug Installation</h3>
            <div class="likes">
                <i class="icon-heart icon-white"></i> <span><a href="#">100</a></span>
           </div>
           <div class="info">
               <i class="icon-user icon-white"></i> John Johnson - <span class="rate">$85/hr</span> 
           </div>

        </div>
        <!--<div class="arrow"></div>-->
    </div>

 </section>

 <section id="third">

      <h1>Sign up to <br>
        <span>Pickabella</span></h1>
       <div id="signupform">
         <input class="span3"></input><br>
        <input class="span3"></input><br>
        <input class="span3"></input>
       </div> 

     <div id="painting" class="caption" data-function"right">
           <h3>Abstract painting</h3>
            <div class="likes">
                <i class="icon-heart icon-white"></i> <span><a href="#">500</a></span>
           </div>
           <div class="info">
               <i class="icon-user icon-white"></i> David Davidson - <span class="rate">$1,600</span> 
           </div>
           <!--<div class="arrow"></div>-->
        </div>

      <div id="vase" class="caption" data-function"right">
           <h3>Ceramic Vase</h3>
            <div class="likes">
                <i class="icon-heart icon-white"></i> <span><a href="#">330</a></span>
           </div>
           <div class="info">
               <i class="icon-user icon-white"></i> Michael Jackson - <span class="rate">$850</span> 
           </div>
           <!--<div class="arrow"></div>-->
        </div>
    </div>

    <div id="stainless" class="caption" data-function"right">
           <h3>Ceramic Vase</h3>
            <div class="likes">
                <i class="icon-heart icon-white"></i> <span><a href="#">330</a></span>
           </div>
           <div class="info">
               <i class="icon-user icon-white"></i> Michael Jackson - <span class="rate">$450</span> 
           </div>
           <!--<div class="arrow"></div>-->
        </div>
    </div>

 </section>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!-- JavaScript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <!--<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  <!-- scripts concatenated and minified via ant build script-->

  <!-- end scripts-->
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  <script>

    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];

    Modernizr.load({

      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'

    });

  </script>
  <script type="text/javascript" src="js/nbw-parallax.js"></script>
  <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/jquery.inview.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#circles').localScroll();
    })

     $(document).ready(function(){
      $('#painting').localScroll();
    })
  </script>
  </body>
</html>
