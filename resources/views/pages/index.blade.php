
@section("title","Miragetech")
@extends("layouts.theme")
  @section("maincontent")


  <script>

var i = 0;
var txt = 'Reflecting Innovation in Technological Solutions';
var speed = 200;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typing").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
window.onload = typeWriter;
</script>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="color: #3498db;">MirageTech</h1>
          <div class="typewriter"> <h2 data-aos="fade-up" data-aos-delay="400" id="typing" style="font: italic;"></h2></div>
         
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="btn-get-started scrollto">Switch On</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('frontend/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Who we are?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p style="text-align: justify;">
              We are an emerging technology firm committed to providing unique offers and solutions to our clients. We want to use technological advances to empower communities and individuals through digital transformation.
            </p>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
           <p style="text-align: justify;">
             We recognize that technology is constantly evolving and attempt to stay ahead of the curve. Our highly skilled team is committed to harnessing the power of technology to accelerate corporate growth and achieve amazing results.
            </p>
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="{{asset('frontend/assets/img/who.png')}}" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
            
              <i class="ri-wallet-2-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Cost Effective</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
             
              <i class="ri-lightbulb-flash-line" style="color: #5578ff;"></i>
              <h3><a href="">Innovative Ideas and Clarity</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              
              <i class="ri-team-line"  style="color: #e80368;"></i>
              <h3><a href="">Expert Team </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              
              <i class="ri-global-fill" style="color: #e361ff;"></i>
              <h3><a href="">Online Assistance </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Quality</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Easy Access</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Advanced Technologies</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Deliver beyond Commitment</a></h3>
            </div>
          </div>
        
          
          
         
        </div>

      </div>
    </section><!-- End Features Section -->

   
 <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Expertise</h2>
        
        </div>

        <div class="row">
          <div class="col-md-6 ">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="ri-code-s-slash-line"></i></div>
              <h4 class="title"><a href="">Website Development</a></h4>
              <p class="description">Our web development services range from creating responsive websites to creating e-commerce platforms. We use cutting-edge frameworks and technology to build visually appealing, user-friendly websites to elevate your online presence.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="ri-terminal-box-fill"></i></div>
              <h4 class="title"><a href="">Software Development</a></h4>
              <p class="description">We specialize in creating custom software solutions that are suited to our client’s specific requirements. We have the expertise to make your ideas into reality, whether it's a web application, mobile app, or business software.</p>
            </div>
          </div>
            
          <div class="col-md-6" style="margin-top: 20px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="ri-apps-line"></i></div>
              <h4 class="title"><a href="">App Development</a></h4>
              <p class="description">Our innovative approach to Application Development and Maintenance assists businesses in transforming their business applications. We construct with speed and agility, implementing novel technologies in order to assist clients tackle their current and future business objectives. We use a variety of frameworks, including ReactJS, Angular, VueJS, Spring, Struts, Laravel, Django, and others.</p>
            </div>
          </div>

          <div class="col-md-6" style="margin-top: 20px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="ri-git-repository-private-line"></i></div>
              <h4 class="title"><a href="">Cyber Security</a></h4>
              <p class="description">As the threat of cyber-attacks evolves we emphasize the safety of our clients' systems and data. Our cybersecurity solutions comprise network security, vulnerability assessments, penetration testing, and data protection to provide complete protection against potential threats.</p>
            </div>
          </div>

          <div class="col-md-6" style="margin-top: 20px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Graphic Design</a></h4>
              <p class="description">We appreciate the importance of aesthetically appealing designs in improving user experiences, efficiently expressing information, and developing strong brand identities. We offer graphic design services that provide full solutions to our clients, meeting both their technological and visual objectives.
                <br>
• LOGO and Branding
<br>
• Business Cards 
<br>
• Flyers and Brochures
</p>
            </div>
          </div>
 <div class="col-md-6" style="margin-top: 20px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="ri-team-line"></i></div>
              <h4 class="title"><a href="">Project Assistence</a></h4>
              <p class="description">We offer professional course-oriented project training and coaching to BCA, BE, B. Tech, MCA, M.Sc, and M.Tech students. We provide students with a diverse choice of modern technology-based projects, the majority of which are regarded as the top academic projects in various professional schools due to their high quality and innovative technological approach. Our knowledgeable staff handles academic project mentorship, providing students with hands-on experience in developing and completing projects.</p>
            </div>
          </div>



            <div class="col-md-12" style="margin-top: 20px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="ri-computer-fill"></i></div>
              <h4 class="title"><a href="">IT Consulting</a></h4>
              <p class="description">Our professional consultants provide strategic assistance and advice services to help businesses make smart IT decisions. We evaluate your company's requirements, recommend the best solutions, and help with implementation and ongoing support.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

 

   



  </main><!-- End #main -->

  
        @endsection