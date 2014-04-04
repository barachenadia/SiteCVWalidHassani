<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Walid HASSANI</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleglobal.css">


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>


<script>


//when the page has loaded, run this function
$(document).ready(function () {
 //hide all sections tagged with the class "section" by default
    $('.section').hide();
    //when an h2 element is clicked
    $('p').click(function () {
        //add the class "open" (which changes the bg image to minus)
        $(this).toggleClass("open");
        //proceed to the next style and and make the hidden element 
        //visible; or if it's shown, make it hidden
        $(this).next().toggle();
    }); //end toggle

    //when the Expand All button is clicked
    $('#expandall').click(function () {
        //Show all elements marked with the "section" class
        $('.section').show();
        //and add the class "open" to the h2 element
        $('p').addClass("open");
    });

    //when the collapseall section is clicked
    $('#collapseall').click(function () {
        //hide all elements tagged with the "section" class
        $('.section').hide();
        //and remove the "open" class from the h2 element (this 
        //removes the minus sign graphic)
        $('p').removeClass("open");
    });

}); //end ready
</script>
</head>

<body>

  <div class="panel panel-default" style ="width: 1012px;
  margin-left: 94px;margin-top:48px;">
  <div class="panel-heading" >
    <h3 class="panel-title">
      <div class="bs-example">
        <ul class="nav nav-pills">
          <li ><a href="index.php"><span class="glyphicon glyphicon-home"></span>  About</a></li>
          <li class="active"><a href="resume.php"><span class="glyphicon glyphicon-user"></span> Resume</a></li>
          <li><a href="publication.php"><span class="glyphicon glyphicon-envelope"></span> Publications</a></li>
          <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
        </ul>
      </div>
    </h3>
  </div>

  <div class="panel-body">
    <div class="tab-pane" id="resume">
      <div class="col-md-7" id="resume_section">
        <div class="timeline-section">

          <!-- Timeline for Education  -->   
          <h3>
            <span class="glyphicon glyphicon-book" id="icon_education"></span> 
            EDUCATION
          </h3>   
          <ul class="timeline">
            <li>            
              <div class="timelineUnit">
                <h4>Ph.D in Robotics<span class="timelineDate"> expected in june 2014 </span></h4>
                <h5>University Paris-Est Créteil, France</h5>
                <p>Dissertation : Human-Based Modeling and Control of lower limb exoskeleton. </p> 
                <!-- Learn more -->
                <p style = "color : blue ; cursor: pointer;">Learn more ...</p>

                 <div class="section">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor magna, elementum sit amet adipiscing vitae, varius vitaeerat. Phasellus sodales, arcu sit amet facilisis condimentum, magna mifermentum augue, eget feugiat elit nulla euismod ligula. In mollis viverra magna sed placerat.
                 </div>

                

              </div>
            </li>
            <li>             
              <div class="timelineUnit">
                <h4>M.S in Robotics & AI <span class="timelineDate">2009</span></h4>
                <h5>University Paris-Est Créteil, France</h5>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. egestas.Vivamus sit amet ligula non lectus cursus egestas amet ligula non lectus cursus egestas. </p>
                <!-- Button trigger modal -->
                <p style = "color : blue ; cursor: pointer;">Learn more ...</p>

                 <div class="section">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor magna, elementum sit amet adipiscing vitae, varius vitaeerat. Phasellus sodales, arcu sit amet facilisis condimentum, magna mifermentum augue, eget feugiat elit nulla euismod ligula. In mollis viverra magna sed placerat.
                 </div>
                

              </div>
            </li>
            <li>             
              <div class="timelineUnit">
                <h4> Post-graduate in Automatics & Signal Processing <span class="timelineDate">2008</span></h4>
                <h5>University of Béjaia, Algeria</h5>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. egestas.Vivamus sit amet ligula non lectus cursus egestas amet ligula non lectus cursus egestas. </p>
                <!-- Button trigger modal -->
                <p style = "color : blue ; cursor: pointer;">Learn more ...</p>

                 <div class="section">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor magna, elementum sit amet adipiscing vitae, varius vitaeerat. Phasellus sodales, arcu sit amet facilisis condimentum, magna mifermentum augue, eget feugiat elit nulla euismod ligula. In mollis viverra magna sed placerat.
                 </div>
               

              </div>
            </li>
            <li>             
              <div class="timelineUnit">
                <h4> Electronic Engineer <span class="timelineDate">2007</span></h4>
                <h5>University of BÃ©jaia, Algeria</h5>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. egestas.Vivamus sit amet ligula non lectus cursus egestas amet ligula non lectus cursus egestas. </p>
                <!-- Button trigger modal -->
                <p style = "color : blue ; cursor: pointer;">Learn more ...</p>

                 <div class="section">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor magna, elementum sit amet adipiscing vitae, varius vitaeerat. Phasellus sodales, arcu sit amet facilisis condimentum, magna mifermentum augue, eget feugiat elit nulla euismod ligula. In mollis viverra magna sed placerat.
                 </div>
                                                
              </div>
            </li>
            <div class="clear"></div>
          </ul> 
          <!-- /Timeline for Education  -->              


          <!-- Timeline for Employment  -->   
          <h3 class="main-heading"><span>TEACHING EXPERIENCE</span></h3>   
          <ul class="timeline">
            <li>

              <div class="timelineUnit">
                <h4>Assistant Lecturer (ATER)<span class="timelineDate">2012 - Present</span></h4>
                <h5>University Paris-Est CrÃ©teil, France</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
              </div>
            </li>
            <li>

              <div class="timelineUnit">
                <h4>Part-time lecturer<span class="timelineDate">2010 - 2012</span></h4>
                <h5> Engineering School ESME-Sudria</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus. amet ligula non lectus Lorem ipsum dolor sit amet, consectetur adipiscing</p>
              </div>
            </li>
            <div class="clear"></div>
          </ul> 
          <!-- /Timeline for Employment  -->
          <!-- Timeline for Employment  -->   
          <h3 class="main-heading"><span>PROFESIONAL EXPERIENCE</span></h3>   
          <ul class="timeline">
            <li>

              <div class="timelineUnit">
                <h4>Biomedichal Engineer<span class="timelineDate">2009</span></h4>
                <h5>BÃ©jaia Medical Equipements (Kontron representent)</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
              </div>
            </li>
            <li>
              <div class="clear"></div>
            </ul> 
            <!-- /Timeline for Employment  -->

          </div>

        </div>
        <div class="col-md-4" style=" margin-top:30px;">

          <h3><span class="glyphicon glyphicon-signal" style="color:gold;"> </span> SKILLS</h3>   

          <div class="skills-section">

            <!-- Skills -->
            <div class="skill">
              <h4 style="font-weight:bold;">Modeling</h4> 

              <h5 class="my-skill"> Rigid-link munipulator 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
              </h5>
              <h5 class="my-skill"> Human body 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Human body Musculoskeletal 
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Human body Musculoskeletal 
              </h5>
            </div>
            <div class="skill">
              <h4>Nonlinear control Skills</h4> 
              <h5 class="my-skill">
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Passivity-Based
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Sliding Modes
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Saturation-Based 
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Optimal Control 
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Adaptive 
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                AI-Based (neural networks, Fuzzy logics) 
              </h5>
            </div>
            <div class="skill">
              <h4> Electronics developement </h4> 
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Electronics circuits 
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Real-time Microprocessor 
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                FPGA 
              </h5>
            </div>
            <div class="skill">
              <h4> Programming Skills</h4>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Matlab/Simulink, Maple
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                C/C++
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Python, Java 
              </h5>
              <h5 class="my-skill"> 
                <span class="pull-right">
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star-empty"></i>
                </span>
                Web developement 
              </h5>
            </div>

          </div>
        </div>

      </div>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </div>
  </div>
  </body>
  </html>                                               