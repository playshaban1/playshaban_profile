<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle1"
            alt=""
          />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle2"
            alt=""
          />
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          
          <img src="./img/shapes/points1.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="logo">
              <img src="./img/logo_02.PNG"  alt="">
            </div>

            <div class="links">
              <ul>
                <li>
                  <a href="#header">Home</a>
                </li>
                <li>
                  <a href="#services">Services</a>
                </li>
                <li>
                  <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                  <a href="#about">About</a>
                </li>
                <!--
                <li>
                  <a href="#testimonials">Testimonials</a>
                </li>
                -->
                <li>
                  <a href="#contact">Contact</a>
                </li>
                <li>
                  <a href="#hireme" class="active">Hire me</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
            <div class="column-1">
              <h1 class="header-title">Shaban Khan</h1>
              <p class="text">
                Hi there!
                I am a Full Stack Developer and a competative programmer. 

              </p>
              <a href="#" class="btn">Download CV</a>
            </div>

            <div class="column-2 image">
              <img
                src="./img/shapes/points2.png"
                class="points points2"
                alt=""
              />
              <img src="./img/person_02.png" class="img-element z-index"  alt="" />
            </div>
          </div>
        </div>
      </header>

      <section class="services section" id="services">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="What I Do">Services</h3>
            <p class="text">
              As a free lancer . I have gained many skills like
            </p>
          </div>

          <div class="cards">
            <div class="card-wrap">
              <img
                src="./img/shapes/points3.png"
                class="points points1 points-sq"
                alt=""
              />
              <div class="card" data-card="UI/UX">
                <div class="card-content z-index">
                  <img src="./img/design-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Design</h3>
                  <p class="text">
                    I have done a few projects as a basic UI designer for my clients.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <div class="card" data-card="Code">
                <div class="card-content z-index">
                  <img src="./img/code-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Development</h3>
                  <p class="text">
                    I have a great expertise in web development. I made shopping , institutions , business websites and many more projects .
                    </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <img
                src="./img/shapes/points3.png"
                class="points points2 points-sq"
                alt=""
              />
              <div class="card" data-card="App">
                <div class="card-content z-index">
                  <img src="./img/app-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">App Development</h3>
                  <p class="text">
                    I am also great at making both Android and IOS apps. And also done a few projects for them.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      
      

      <section class="about section" id="about">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="My background">Who am I? </h3>
          </div>

          <div class="section-body grid-2">
            <div class="column-1">
              <h3 class="title-sm">Hello, I'm</h3>
              <p class="text">
                Shaban Khan , A Full Stack Developer and a great programmer. I have completed my Bachelor's in Computer Application in June , 2022. I am also a 5 star coder on Hacker-Rank. I am currently a freelancer and have contributed to various open source projects on github .
                <br>
                You can find me by my username "@playshaban" on almost any social platform.   
              </p>
              <div class="skills">
                <div class="skill html">
                  <h3 class="skill-title">HTML</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="100%"></div>
                  </div>
                </div>
                <div class="skill css">
                  <h3 class="skill-title">CSS</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title">JavaScript</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title"> React Js </h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title"> Node Js</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="80%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title"> Anguar </h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title"> PHP</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title"> MySQL</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title"> C / C++ </h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="95%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title">Python 3</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title"> Java</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                
              </div>
              <a href="#" class="btn">Read more</a>
            </div>

            <div class="column-2 image">
              <img src="./img/shapes/points4.png" class="points" alt="" />
              <img src="./img/person-01.PNG" class="z-index" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="records">
        <div class="overlay overlay-sm">
          <img src="./img/shapes/square.png" alt="" class="shape square1" />
          <img src="./img/shapes/square.png" alt="" class="shape square2" />
          <img src="./img/shapes/circle.png" alt="" class="shape circle" />
          <img
            src="./img/shapes/half-circle.png"
            alt=""
            class="shape half-circle"
          />
          <img src="./img/shapes/wave.png" alt="" class="shape wave wave1" />
          <img src="./img/shapes/wave.png" alt="" class="shape wave wave2" />
          <img src="./img/shapes/x.png" alt="" class="shape xshape" />
          <img src="./img/shapes/triangle.png" alt="" class="shape triangle" />
        </div>

        <div class="container">
          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="24">0</h2>
              <h4 class="sub-title">Projects</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle active">
              <h2 class="number" data-num="15">0</h2>
              <h4 class="sub-title">Happy Clients</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="202">0</h2>
              <h4 class="sub-title">Work Hour</h4>
            </div>
          </div>

        </div>
      </section>
      <!-- 
      <section class="blog section">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Last News">My blog</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo,
              deserunt?
            </p>
          </div>

          <div class="blog-wrapper">
            <div class="blog-wrap">
              <img
                src="./img/shapes/points3.png"
                alt=""
                class="points points-sq"
              />

              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog1.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">March, 19 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum, dolor sit amet elit. rem poimus? Tempora
                    expedita eos autem! Lorem ipsum, dolor sit met.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="blog-wrap">
              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog2.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">August, 02 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum, dolor sit amet elit. Sint atque culpa repellat
                    sunt sit amet nobis! Lorem ipsum dolor sit amet.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="blog-wrap">
              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog3.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">December, 12 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum dolor sit, amet elit. enim numquam, laborum
                    earum? Lorem ipsum dolor sit amet.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="testimonials section" id="testimonials">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="What People Say">Testimonials</h3>
          </div>

          <div class="testi-content grid-2">
            <div class="column-1 reviews">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Laudantium adipisci veniam debitis quas, sapiente
                      repellendus mollitia. Laboriosam labore voluptate quos?
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Matias Butt</h3>
                      <h5 class="review-job">Photographer, Paris</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Fugiat voluptate consequatur aut tenetur fugit error
                      molestiae quaerat ex odio rem?
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Romeo Herbert</h3>
                      <h5 class="review-job">CEO, Munich</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Cupiditate voluptatum enim nemo quod amet dolorum aliquam,
                      sapiente omnis eaque consectetur.
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Jack Costa</h3>
                      <h5 class="review-job">Director of THR, London</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Perspiciatis ab incidunt, dicta quam inventore ipsum
                      dolor. Consectetur nam incidunt error!
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Reiss Mccartney</h3>
                      <h5 class="review-job">Engineer, San Francisco</h5>
                    </div>
                  </div>
                </div>

                <div class="review-nav swiper-button-prev">
                  <i class="fas fa-long-arrow-alt-left"></i>
                </div>
                <div class="review-nav swiper-button-next">
                  <i class="fas fa-long-arrow-alt-right"></i>
                </div>
              </div>
            </div>

            <div class="column-2 image">
              <img src="./img/testi.png" alt="" class="img-element" />
            </div>
          </div>
        </div>
      </section>
      -->

      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-box">
            <div class="contact-info">
              <h3 class="title">Get in touch</h3>
              <p class="text">
                 For any project work , do contact me on given details . Or You can send me a message on the contact box. 
              </p>
              <div class="information-wrap">
                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <p class="info-text">Patna, Bihar 800001 </p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-paper-plane"></i>
                  </div>
                  <p class="info-text">email.playshaban@gmail.com</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <p class="info-text">+91 70709 21343</p>
                </div>
              </div>
            </div>
            
            <form action="project.php" method="post" class="contact-form">
              <h3 class="title">Contact me</h3>
              <input type="text" name="form" value="002" hidden>
              <div class="row">
                <input
                  type="text"
                  class="contact-input" name="fname"
                  placeholder="First Name"
                />
                <input
                  type="text"
                  class="contact-input" name="lname"
                  placeholder="Last Name"
                />
              </div>

              <div class="row">
                <input type="text" class="contact-input" name="phone" placeholder="Phone" />
                <input type="email" class="contact-input" name="email" placeholder="Email" />
              </div>

              <div class="row">
                <textarea
                  name="msg"
                  class="contact-input textarea" 
                  placeholder="Message"
                ></textarea>
              </div>
              <button class="btn" type="submit">Send</button>
            </form>
          </div>
        </div>
      </section>

      <section class="hireme" id="hireme">
        <div class="container">
          <h3 class="title">Let's talk about Job </h3>
          <p class="text">
            I am happy to join as a full time Web Developer, anywhere in India.
            
          </p>
          <a href="https://www.linkedin.com/in/playshaban/" class="btn">Hire me</a>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm">About this page </h3>
            <p class="text">
              This page is built on pure HTML and CSS. If you want to copy the code. Just send me a message.
            </p>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Links</h3>
            <ul>
              <li>
                <a href="#services">Services</a>
              </li>
              <li>
                <a href="#portfolio">Portfolio</a>
              </li>
              <li>
                <a href="#about">About</a>
              </li>
              
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Services</h3>
            <ul>
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">Web Dev</a>
              </li>
              <li>
                <a href="#">App Design</a>
              </li>
              <li>
                <a href="#">Marketing</a>
              </li>
              <li>
                <a href="#">UI Design</a>
              </li>
            </ul>
          </div>


          
          <div class="grid-4-col footer-newstletter" >
            <h3 class="title-sm">Subscribe</h3>
            <p class="text">
              Lorem ipsum dolor, sit amet ipsum dolor sit amet.
            </p>
            <div class="footer-input-wrap">
              <input type="email" class="footer-input" placeholder="Email" />
              <a href="#" class="input-arrow">
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div> 
        </div>

        <div class="bottom-footer">
          <div class="copyright">
            <p class="text">
              Copyright&copy;2022 All rights reserved | Made by 
              <span>Shaban Khan</span>
            </p>
          </div>

          <div class="followme-wrap">
            <div class="followme">
              <h3>Follow me</h3>
              <span style="margin: 20px; color: grey;"> @ playshaban </span>
              <div class="social-media">
                <a href="https://www.linkedin.com/in/playshaban/">
                  <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="https://twitter.com/playshaban">
                  <i class="fab fa-twitter"></i>
                </a>

                <a href="https://www.facebook.com/playshaban">
                  <i class="fab fa-facebook-f"></i>
                </a>
                
                <a href="https://www.instagram.com/playshaban/">
                  <i class="fab fa-instagram"></i>
                </a>
                
              </div>
            </div>

            <div class="back-btn-wrap">
              <a href="#" class="back-btn">
                <i class="fas fa-chevron-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
  </body>
</html>
