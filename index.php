<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Walid HASSANI</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleglobal.css">
                


                <!-- FANCYBOX -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script>
    !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
  </script>
  <script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
  <link rel="stylesheet" href="style.css" />
  <script type="text/javascript">
    $(document).ready(function() {
     
      /*
      *   Examples - various
      */

      
     
      $("#various3").fancybox({
        'width'       : '75%',
        'height'      : '75%',
        'autoScale'     : false,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      
    });
  </script>


                <!-- FANCYBOX -->

</head>
<body>

  <div class="panel panel-default" id="panel_default">
  
  <div class="panel-heading" >
    <h3 class="panel-title">
      <div class="bs-example">
        <ul class="nav nav-pills">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  About</a></li>
          <li><a href="resume.php"><span class="glyphicon glyphicon-user"></span> Resume</a></li>
          <li><a href="publication.php"><span class="glyphicon glyphicon-envelope"></span> Publications</a></li>
          <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
        </ul>
      </div>

    </h3>
  </div>
  
  <div class="panel-body">
    <div class="tab-pane active" >
      <div class="row vcard-header">
        <div class="col-md-7" style=" margin-left:30px; margin-top:30px;  margin-buttom:60px;">
          <h1 class="my-name" style ="font-family: 'alex_brushregular'">WALID HASSANI</h1>
          <h2 class="my-profession">Ph.D in Biomedical Robotics</h2>
          <p class="my-message">
            <strong><span class="glyphicon glyphicon-comment"></span>&nbsp;Welcome</strong> Since my master degree, my research concerns assistance and rehabilitation by the means of exoskeletons. Challenging to achieve intention-based human-exoskeleton interaction.
          </p>
        </div>
        <div class="col-md-3 col-md-offset-1 my-image">  
          <img src="images/photo.jpg" class="img-rounded" alt="Responsive image" style="width: 70%; padding-top: 10px;">
        </div>
      </div>
    </div>
  </div>
  
<!-- FANCYBOX HTML -->

<div id="content">
  

  <ul>
    
    <li><a id="various3" href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1">Iframe</a></li>
    
  </ul>


 <!-- FANCYBOXHTML -->
  


</div>




</body>
</html>                                               