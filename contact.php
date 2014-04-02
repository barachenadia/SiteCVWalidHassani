<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Walid HASSANI</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleglobal.css">
</head>
<body>

  <div class="panel panel-default" id ="panel_default">
    <div class="panel-heading" >
      <h3 class="panel-title">
        <div class="bs-example">
          <ul class="nav nav-pills">
            <li>
              <a href="index.php"><span class="glyphicon glyphicon-home"></span>  About</a>
            </li>
            <li>
              <a href="resume.php"><span class="glyphicon glyphicon-user"></span> Resume
              </a>
            </li>
            <li>
              <a href="publication.php"><span class="glyphicon glyphicon-envelope"></span> Publications
              </a>
            </li>
            <li class="active"><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
          </ul>
        </div>
      </h3>
    </div>

    <div class="panel-body">
      <div class="tab-pane" >

        <!-- Adress -->
        <div class="row">

          <div class="col-md-11" style="margin-top:50px; margin-left:42px; margin-bottom:5px;">
            <iframe  border-radius:12px;  width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=45+Rue+Moli%C3%A8re,+Ivry-sur-Seine,+France&amp;aq=0&amp;oq=45+rue+moli%C3%A8re&amp;sll=41.665273,-91.53638&amp;sspn=0.041613,0.079222&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=45+Rue+Moli%C3%A8re,+94200+Ivry-sur-Seine,+France&amp;z=14&amp;ll=48.814575,2.394429&amp;output=embed"></iframe><br /><small>Afficher <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=45+Rue+Moli%C3%A8re,+Ivry-sur-Seine,+France&amp;aq=0&amp;oq=45+rue+moli%C3%A8re&amp;sll=41.665273,-91.53638&amp;sspn=0.041613,0.079222&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=45+Rue+Moli%C3%A8re,+94200+Ivry-sur-Seine,+France&amp;z=14&amp;ll=48.814575,2.394429" style="color:#0000FF;text-align:left">ICTCS - old</a> sur une carte plus grande</small>
          </div>
          <!-- Contact Info -->
          <div class="col-md-3 col-md-offset-1">
            <div class="contact-info">
              <h3 class="main-heading"><span>Contact info</span></h3>
              <ul>
                <li>45 rue Molère, 94200 Ivry-Sur-Seine, France<br /><br /></li>
                <li>Email: hassani@whassani.fr</li>
                <li>Phone: +33 619 137 550</li>
                <li>Website: www.whassani.fr</li>
              </ul>
            </div>
          </div>
          <!-- /Contact Info -->

          <!-- Contact Form -->
          <div class="col-md-7">
            <div class="contact-form">
              <h3 class="main-heading"><span>Let's keep in touch</span></h3>
              <div id="contact-status"></div>
              <form method="post" action="mailer/contact.php" id="contactform">
                <p>
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="input" >
                </p>
                <p>
                  <label for="email">Your Email</label>
                  <input type="text" name="email" class="input">
                </p>
                <p>
                  <label for="message">Your Message</label>
                  <textarea name="message" cols="65" rows="4" class="textarea" ></textarea>
                </p>
                <input type="submit" name="submit" value="Send your message" class="submit">

              </form>
            </div>
          </div>
        </div>
      </div>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


      <script src="js/bootstrap.min.js"></script>

    </div>

  </body>
  </html>                                               







































