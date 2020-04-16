<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rodrigo Palop: Web Developer Examples and Resources</title>
    
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    
    <link rel="stylesheet" href="css/big.css" /> 
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/forms.css" />
    
    <!-- Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!-- MenuMaker Plugin -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <!-- JS Script -->
    <script src="js/script.js"></script>  

    
  </head>
  
  <body>
    
    <!-- HEADER / NAVIGATION -->
    <header>
      <h1 class="title"><a href="index.html">Rodrigo Palop: Web Developer Examples and Resources</a></h1>

      <nav id="cssmenu">
        <ul>
          <!-- WEB110 -->
          <li><a href="index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>

          <!-- BIG -->
          <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>

          <!-- Gallery -->
          <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Gallery</a></li>

          <!-- Drop-down menu for Research Pages -->
          <li><a href="#"><i class="fa fa-fw fa-flask"></i> Research</a>
            <ul>
              <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
              <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
            </ul>
          </li>

          <!-- Drop-down menu for Google Pages -->
          <li><a href="#"><i class="fa fa-fw fa-google"></i> Google</a>
            <ul>
              <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
              <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
              <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
            </ul>
          </li>

          <li><a href="contact.php"><i class="fa fa-fw fa-book"></i> Contact</a></li>
        </ul>
      </nav>

    </header>
     
    <!--  MAIN / CONTENT WRAP  -->
    <main>
      
      <div id="section3">
        <a id="contact" class="js--wp-3" name="contact"></a>
        <div class="row">
          <div class="form-wrapper">
            <h1 class="contact-title">Contact</h1>
            <div class="form-inner-wrapper">
              <form id="contactForm" method="post" action="" method="post">	
                <div class="field-list clear">
                  <div id="name" class="form-item field email required">
                    <label class="title" for="name">Name <span class="required">*</span></label>
                    <input class="field-element" name="name" x-autocompletetype="name" type="text" spellcheck="false">
                  </div>
                  <div id="email" class="form-item field email required">
                    <label class="title" for="email">Email Address <span class="required">*</span></label>
                    <input class="field-element" name="email"  x-autocompletetype="email" type="text" id="email-field">
                  </div>
                  <div id="textarea" class="form-item field textarea required">
                    <label class="title" for="textarea-field">Message <span class="required">*</span></label>
                    <textarea class="field-element" id="textarea--field" name="message"></textarea>
                  </div>
                  <div id="contactResponse"></div>
                  <div class="form-button-wrapper form-button-wrapper--align-center">
                    <input class="button" type="submit" name="submit" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </main>
    
    <!-- FOOTER -->
    <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Contact Rodrigo Palop</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
     
  </body>
</html>