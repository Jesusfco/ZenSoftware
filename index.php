<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zen Software</title>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>        
        <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        
        <script src="materialize/js/materialize.min.js"></script>
        <script src="js/init.js"></script>
    </head>
    <body class="grey lighten-4">
        <div class="navbar-fixed">
            <nav class=" blue darken-4">
                <div class="nav-wrapper container">
                    <a href="#!" class="brand-logo"><img src="images/logo/logo.png" width="240px" style="margin-top: 5px;"></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#!" class="waves-effect waves-light">INICIO</a></li>
                        <li><a href="#!" class="waves-effect waves-light">QUIENES SOMOS</a></li>
                        <li><a href="#!" class="waves-effect waves-light">PROMOCIONES</a></li>
                        <li><a href="#!" class="waves-effect waves-light">GALERIA</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#!">INICIO</a></li>
                        <li><a href="#!">QUIENES SOMOS</a></li>
                        <li><a href="#!">PROMOCIONES</a></li>
                        <li><a href="#!">GALERIA</a></li>
                        
                        
                        
                    </ul>
                </div>
            </nav>
        </div>
        
        
         <div class="parallax-container">
            <div class="parallax"><img src="images/fondoindex.jpg"></div>
         </div>
       
        
  <div class="container scroll">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
        
        
        
        
        
       
        
        
        
          <footer class="page-footer blue darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue-grey darken-3">
            <div class="container">
            Zen Software
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        
        
        <script>
            var options = [
            {selector: '.scroll', offset: 200, callback: customCallbackFunc } },
            {selector: '.scrollfire', offset: 200, callback: function() {
                customCallbackFunc();
            } },
            ];
            Materialize.scrollFire(options);
  
        </script>
    </body>
</html>

