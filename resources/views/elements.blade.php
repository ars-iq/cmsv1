<!DOCTYPE HTML>
<head>
<title>Bigshot | Elements</title>
<meta charset="utf-8">
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/assets/css/simple_menu.css">
<link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen">
<!-- JS Files -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/slides/slides.min.jquery.js"></script>
<script src="assets/js/cycle-slider/cycle.js"></script>
<script src="assets/js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="assets/js/tabify/jquery.tabify.js"></script>
<script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="assets/js/twitter/jquery.tweet.js"></script>
<script src="assets/js/scrolltop/scrolltopcontrol.js"></script>
<script src="assets/js/portfolio/filterable.js"></script>
<script src="assets/js/modernizr/modernizr-2.0.3.js"></script>
<script src="assets/js/easing/jquery.easing.1.3.js"></script>
<script src="assets/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="assets/js/swfobject/swfobject.js"></script>
<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox.css" media="all">
<script src="assets/js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body>
<div class="header">
  <!-- Logo/Title -->
  <div id="site_title"><a href="index.html"> <img src="img/logo.png" alt=""></a> </div>
  <!-- Main Menu -->
  <ol id="menu">
    <li><a href="index.html">Home</a>
      <!-- sub menu -->
      <ol>
        <li><a href="nivo.html">Nivo Slider</a></li>
        <li><a href="ei-slider.html">EI Slider</a></li>
        <li><a href="image-frontpage.html">Static Image</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href="#">Pages</a>
      <!-- sub menu -->
      <ol>
        <li><a href="magazine.html">Magazine</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="full-width.html">Full Width Page</a></li>
        <li><a href="columns.html">Columns</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href="elements.html">Elements</a></li>
    <li><a href="#">Galleries</a>
      <!-- sub menu -->
      <ol>
        <li><a href="gallery-simple.html">Simple</a></li>
        <li><a href="portfolio.html">Filterable</a></li>
        <li><a href="gallery-fader.html">Fade Scroll</a></li>
        <li><a href="video.html">Video</a></li>
        <li class="last"><a href="photogrid.html">PhotoGrid</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href="contact.html">Contact</a></li>
  </ol>
</div>
<!-- END header -->
<div id="container">
  <h1>Template Elements</h1>
  <div class="one-half">
    <div class="heading_bg">
      <h2>Tables</h2>
    </div>
    <table border="0">
      <th>First</th>
        <th>Second</th>
        <th>Third</th>
      <tr>
        <td>Some</td>
        <td>Data</td>
        <td>Goes</td>
      </tr>
      <tr>
        <td>Here</td>
        <td>In</td>
        <td>This</td>
      </tr>
      <tr>
        <td>Table</td>
        <td>Cool</td>
        <td>Oh Yeah!</td>
      </tr>
      <tr>
        <td>Another Row</td>
        <td>Almost There</td>
        <td>Last Cell</td>
      </tr>
    </table>
    <div class="heading_bg">
      <h2>CSS 3 Buttons</h2>
    </div>
    <p><a href="#" class="button">Button</a></p>
    <p><a href="#" class="button">Button With Long Text</a></p>
    <p><a href="#" class="button" style="font-size: 18px">Large Button</a></p>
    <p><a href="#" class="button" style="font-family: Georgia, 'Times New Roman', Times, serif ">Button With Custom Font</a></p>
  </div>
  <!-- END First Column -->
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Tabs</h2>
    </div>
    <ul id="tabify_menu" class="menu_tab" style="margin: 0;">
      <li class="active"><a href="#fane1">Tab 1</a></li>
      <li><a href="#fane2">Tab 2</a></li>
      <li><a href="#fane3">Tab 3</a></li>
    </ul>
    <div id="fane1" class="tab_content">
      <div class="tab_article"> <img src="img/thumb1.jpg" alt="">
        <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus tui.</p>
      </div>
      <div class="tab_article"> <img src="img/thumb2.jpg" alt="">
        <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus tui.</p>
      </div>
      <div class="tab_article"> <img src="img/thumb3.jpg" alt="">
        <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Perquiramus atque ut casus tui.</p>
      </div>
    </div>
    <div id="fane2" class="tab_content">
      <h3>Tab 2</h3>
      <p>Content 2</p>
    </div>
    <div id="fane3" class="tab_content">
      <h3>Tab 3</h3>
      <p>Content 3</p>
    </div>
    <div class="heading_bg" style="clear:both">
      <h2>Slider</h2>
    </div>
    <div id="slider3" class="nivoSlider" style="width: 465px; height: 280px"> <a href="#"><img title="Heading Here" src="img/demo/slide_11.jpg" alt="" width="465"></a> <img  src="img/demo/slide_21.jpg" alt="" width="465"  /> <img  src="img/demo/slide_31.jpg" alt="" width="465"  /> </div>
  </div>
  <!-- END Second Column -->
  <div style="clear:both; height: 40px"></div>
</div>
<!-- close container -->
<div id="footer">
  <!-- First Column -->
  <div class="one-fourth">
    <h3>Useful Links</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <h3>Terms</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Third Column -->
  <div class="one-fourth">
    <h3>Information</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
    <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
      Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
  </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <h3>Socialize</h3>
    <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div>
  <div style="clear:both"></div>
</div>
<!-- END footer -->
</body>
</html>