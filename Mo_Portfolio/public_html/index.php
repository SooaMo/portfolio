<?php
//add the header
require('header.php');

?>

    <!-- ABOUT -->
    <section class=" about d-lg-flex justify-content-center align-items-center" id="about">
        <div class="bg_white container">
            <div class="row flex_center">
              <div class="col-lg-5 col-8 img_flex">
                <div class="about-image jpg">
                  <!-- img reference: Sooa(2022) drawing, Figma-->
                   <img src="img/profile/drawing.png" class="img-fluid" alt="working sooa drawing _by Mo"> 
                </div>
            </div>
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <div class="animated animated-text">
                          <div class="about-title">
                            <div class="mr-2"><h1>Hello, I'm</h1></div>
                              <div class="animated-info">
                                  <span class="animated-item"> Sooa Mo</span>
                                  <span class="animated-item"> Web Developer</span>
                                  <span class="animated-item"> UX Designer</span>
                              </div>
                            </div>
                          </div>

                        <div class="about-p">
                          <p>I am 4th year student majoring in <b>Interactive Arts and Technology</b> at Simon Fraser University. </p>
                            
                          <p>I have some skills in <b>3d modelling using OnShape, workflow, wireframe, prototyping using Figma </b> and designing the website using <b>HTML, CSS, and JavaScript.</b> </p>
                            
                          <p>I have various <b>team project experiences</b> through school.</p>

                          <p>I believe good design can emerge when I <b>collaborate</b> well with team members.</p>

                          <p>Finally, I always enjoy <b>learning new </b> things!</p>
                        </div>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="mailto:sma241@sfu.ca" class="btn mr-lg-2 custom-btn btn_flex" title="email to sma241@sfu.ca"><i class="material-icons">email</i> Email Me</a><!--icon:https://www.w3schools.com/icons/tryit.asp?filename=tryicons_google-email-->
                          <a href="https://www.youtube.com/channel/UCD7aft2uzSnMPiwY_x1r5sg" target="_blank" class="btn mr-lg-2 custom-btn btn_flex" title="sooa's youtube"><i class="material-icons">live_tv</i> YouTube</a><!--icon:https://www.w3schools.com/icons/tryit.asp?filename=tryicons_google-live_tv-->
                        </div>
                    </div>
                </div>

               

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="py-5" id="project">
        <div class="bg_white  container">
          <div class="row flex_center project_bg">

            <div class="col-lg-8 mx-auto text-center">
              <h2>Projects</h2>
            </div>

            <div class="col-md-5 col-sm-10">
              <a href="byenary.php" class="project_link">
                <div class="project_card">
                  <!--Mo(2022), created using Figma-->
                  <img src="img/byenary/byenaryTitle.png" class="card_img" alt="bye-nary project logo image" width="2400" height="1600">
                  <div class="card_bottom">
                    <h3 class="card_title"> Byenary </h3>
                    <p class="card_text"> Summer 2022 </p>
                    <p class="card_text"> I designed and created prototype using Figma</p>
                    <div class="tag card_tag">
                      <span> UI/UX Design</span>
                      <span> prototype</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-5 col-sm-10">
              <a href="chuchu.php" class="project_link">
                <div class="project_card">
                  <!--Mo(2022), created using Figma-->
                  <img src="img/chuchu/chuchuTitle.png" class="card_img" alt="ChuChu project logo image" width="2400" height="1600">
                  <div class="card_bottom">
                    <h3 class="card_title"> ChuChu </h3>
                    <p class="card_text"> Summer 2022 </p>
                    <p class="card_text"> I worked with a partner to design and develop a churros website.</p>
                    <div class="tag card_tag">
                      <span> UI/UX Design</span>
                      <span> HTML/CSS</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-5 col-sm-10">
              <a href="suba.php" class="project_link">
                <div class="project_card">
                  <!--Mo(2022), created using Figma-->
                  <img src="img/suba/subaTitle.png" class="card_img" alt="suba project logo image" width="2400" height="1600">
                  <div class="card_bottom">
                    <h3 class="card_title"> Suba </h3>
                    <p class="card_text"> Spring 2022 </p>
                    <p class="card_text"> I designed a flashlight for 6-year-old child with 3 teammates.</p>
                    <div class="tag card_tag">
                      <span>Product Design</span>
                      <span> 3D modeling</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



          </div>
        </div>
    </section>

<!-- Addd the footer -->
<?php
require('footer.php');
?>
