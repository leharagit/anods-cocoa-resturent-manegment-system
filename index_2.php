<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Anods Chocolate Lounge</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/b1.png" type="image/svg+xml">

  <!-- 
    - google font link
  --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style_1.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="Chero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->


   
  <div class="preload" data-preaload>
    <div class="circle"></div>
    <img src="./assets/images/b1.png" width="160" height="50" alt="Grilli - Home">
    <p class="text">anodscocoa</p>
    
  </div>
    



  <!-- 
    - #TOP BAR
  -->
    
  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          66 Gampolagedara Road,Pugoda 10660
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily : 7.30 am to 07.30 pm</span>
      </div>

      <a href="tel:+94 11 240 4299" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+94 11 240 4299</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:sales@anodscocoa.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">sales@anodscocoa.com </span>
      </a>

    </div>
  </div>




  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/b1.png" width="100" height="30" alt="Grilli - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/b1.png" width="160" height="50" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menus</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

         
          <li class="navbar-item">
            <a href="#contract" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

          <address class="body-4">
          Anods Chocolate Lounge | Pugoda, <br>
         Sri lanka
          </address>

          <p class="body-4 navbar-text">Open: 7.30 am - 7.30pm</p>

          <a href="mailto: sales@anodscocoa.com" class="body-4 sidebar-link"> sales@anodscocoa.combooking@grilli.com</a>

          <div class="separator"></div>

          <p class="contact-label">Booking Request</p>

          <a href="tel:+94776625625" class="body-1 contact-number hover-underline">
          +94776625625
          </a>
        </div>

      </nav>

      <a href="#reservation" class="btn btn-secondary">
        <span class="text text-1">Find A Table</span>

        <span class="text text-2" aria-hidden="true">Find A Table</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>
      

    </div>
  </header>





  <main>
    <article> 

  
      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/a2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Tradational & Hygine</p>

            <h1 class="display-1 hero-title slider-reveal">
              For the love of <br>
              delicious food
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>

         

          <li class="slider-item" data-hero-slider-item>

          

            <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>

            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br>
              tells a story
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#reservation" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Book A Table</span>
        </a>

      </section>





   
  

      <!-- 
        - #SERVICE
      -->
   
  
      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">Flavors For Royalty</p>

          <h2 class="headline-1 section-title">We Offer Top Notch</h2>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys
            standard dummy text ever.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/a2.jpg" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Sweets</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/a4.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Cocolote</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#drink" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/a55.png" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#drink">Drinks</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>




      <!-- 
        - #ABOUT
      -->

     
   
      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Story</p>

            <h2 class="headline-1 section-title">Every Fla vor Tells a Story</h2>

            <p class="section-text">
            We aspire to establish ourselves as the most premium dairy brand, providing only top-tier quality
             products. We are dedicated to combining innovation, sustainability,
             and community support to exceed customer expectations and craft a distinct brand identity.
            </p>

            <div class="contact-label">Book Through Call</div>

            <a href="tel:+94 11 240 4299" class="body-1 contact-number hover-underline">+94 11 240 4299</a>

            <a href="https://anodscocoa.com/about-us.html" class="btn btn-primary">
              <span class="text text-1">Read More</span>

              <span class="text text-2" aria-hidden="true">Read More</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets/images/w1.png" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./assets/images/badge-2.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

          <img src="./assets/images/s1.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>





        
      <!-- 
        - #SPECIAL DISH
      -->
         
  
      <section class="sp">
      <div class="container">
        <span class="slider" id="slider1"></span>
        <span class="slider" id="slider2"></span>
        <span class="slider" id="slider3"></span>
        <span class="slider" id="slider4"></span>
        <span class="slider" id="slider5"></span>
        <span class="slider" id="slider6"></span>
        <span class="slider" id="slider7"></span>

        <div class="imgContainer">

           <div class="slide_div" id="slide_1">
            <img src="./assets/images/q1.jpeg" alt="" class="img" id="img1">
            <a href="#slider1" class="button" id="button1"></a>
           </div>
           <div class="slide_div" id="slide_2">
            <img src="./assets/images/q2.jpeg" alt="" class="img" id="img2">
            <a href="#slider2" class="button" id="button2"></a>
           </div>
           <div class="slide_div" id="slide_3">
            <img src="./assets/images/q3.jpeg" alt="" class="img" id="img3">
            <a href="#slider3" class="button" id="button3"></a>
           </div>
           <div class="slide_div" id="slide_4">
            <img src="./assets/images/q4.jpeg" alt="" class="img" id="img4">
            <a href="#slider4" class="button" id="button4"></a>
           </div>
           <div class="slide_div" id="slide_5">
            <img src="./assets/images/q5.jpeg" alt="" class="img" id="img5">
            <a href="#slider5" class="button" id="button5"></a>
           </div>
           <div class="slide_div" id="slide_6">
            <img src="./assets/images/q7.jpeg" alt="" class="img" id="img6">
            <a href="#slider6" class="button" id="button6"></a>
           </div>
           <div class="slide_div" id="slide_7">
            <img src="./assets/images/q6.jpeg" alt="" class="img" id="img7">
            <a href="#slider7" class="button" id="button7"></a>
           </div>

        </div>
        
    </div>
    

    </section>

 

      <!-- 
        - #MENU
      -->
  
      <section class="section" aria-label="menu-label" id="menu">
        <div class="container">
          <h3 class="title">  Our menu </h3>

          <div class="products-container">
           
            <br>
            <h4 class="title" >  Drinks</h3>
            <br>
             <div class="product" data-name="p-1">
                <img src="images/e1.png" alt="">
                <h3>vanila Milkshake</h3>
                <div class="price">500LKR</div>
             </div>
       
             <div class="product" data-name="p-2">
                <img src="images/e2.png" alt="">
                <h3>Passion Fruit Juice</h3>
                <div class="price">300LKR</div>
             </div>
       
             <div class="product" data-name="p-3">
                <img src="images/e3.png" alt="">
                <h3>cocolote</h3>
                <div class="price">200LKR</div>
             </div>
         
             <br>
             <h4 class="title" id="Sweets">  Sweets</h4><br>
             <div class="product" data-name="p-4">
                <img src="images/p1.png" alt="">
                <h3>Cocolote</h3>
                <div class="price">200LKR</div>
             </div>
       
             <div class="product" data-name="p-5">
                <img src="images/p2.png" alt="">
                <h3>Cocolote</h3>
                <div class="price">200LKR</div>
             </div>
       
             <div class="product" data-name="p-6">
                <img src="images/p1.png" alt="">
                <h3>Cocolote</h3>
                <div class="price">200LKR</div>
             </div>
       
          </div>
       
       </div>
       
       <div class="products-preview">
       
          <div class="preview" data-target="p-1">
             <i class="fas fa-times"></i>
             <img src="images/e1.png" alt="">
             <h3>vanila Milkshake</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
             </div>
             <p>Moment of sheer bliss with our creamy cailla shakes.</p>
             <div class="price">500LKR</div>
             <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a><br>
               
             </div>
      
          </div>
       
          <div class="preview" data-target="p-2">
             <i class="fas fa-times"></i>
             <img src="images/e2.png" alt="">
             <h3>Passion Fruit Juice</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
             </div>
             <p>Feel the freshness,Savor the passion.</p>
             <div class="price">200LKR</div>
             <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
             </div>
          </div>
       
          <div class="preview" data-target="p-3">
             <i class="fas fa-times"></i>
             <img src="images/e3.png" alt="">
             <h3>Cocolote</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
             </div>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
             <div class="price">200LKR</div>
             <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
             </div>
          </div>
       
          <div class="preview" data-target="p-4">
             <i class="fas fa-times"></i>
             <img src="images/p1.png" alt="">
             <h3>Cocolote</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
             </div>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
             <div class="price">200LKR</div>
             <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
             </div>
          </div>
       
          <div class="preview" data-target="p-5">
             <i class="fas fa-times"></i>
             <img src="images/p2.png" alt="">
             <h3>Cocolote</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
             </div>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
             <div class="price">200LKR</div>
             <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
             </div>
          </div>
       
          <div class="preview" data-target="p-6">
             <i class="fas fa-times"></i>
             <img src="images/p1.png" alt="">
             <h3>Cocolote</h3>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
             </div>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
             <div class="price">200LKR</div>
             <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
             </div>
          </div>
       
        
        </div>
      </section>



      <!-- 
        - #TESTIMONIALS
      -->

      
      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">"</div>

          <p class="headline-2 testi-text">
            I wanted to thank you for inviting me down for that amazing dinner the other night. The food was
            extraordinary.
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./assets/images/testi-avatar.jpg" width="100" height="100" loading="lazy" alt="Sam Jhonson"
              class="img">

            <p class="label-2 profile-name">Sam Jhonson</p>
          </div>

        </div>
      </section>


   

      <!-- 
        - #RESERVATION
      -->
  
      <section class="reservation" id="reservation">
        <div class="container">
            <div class="form reservation-form bg-black-10">
                <!-- Reservation form --> 
              <form action="reservation.php" method="POST" class="form-left">
                    <h2 class="headline-1 text-center">Online Reservation</h2>

                    <p class="form-text text-center">
                        Booking request <a href="tel:+94776625625" class="link">+94776625625</a> or fill out the order form
                    </p>

                    <div class="input-wrapper">
                        <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field" required>

                        <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" required>
                    </div>

                    <div class="input-wrapper">
                        <label for="person">Number of People:</label>
                        <select name="person" class="input-field" required>
                            <option value="1-person">1 Person</option>
                            <option value="2-person">2 Person</option>
                            <option value="3-person">3 Person</option>
                            <option value="4-person">4 Person</option>
                            <option value="5-person">5 Person</option>
                            <option value="6-person">6 Person</option>
                            <option value="7-person">7 Person</option>
                        </select>
                    </div>
                    <label for="reservation-date">Reservation Date:</label>
                    <div class="icon-wrapper">
                        
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                  <input type="date" name="reservation-date" class="input-field">

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                 

                    <div class="input-wrapper">
                        <label for="reservation_time">Reservation Time:</label>
                        <select name="reservation_time" class="input-field" required>
                            <option value="08:00am">08:00 am</option>
                            <option value="09:00am">09:00 am</option>
                            <option value="10:00am">10:00 am</option>
                            <option value="11:00am">11:00 am</option>
                            <option value="12:00pm">12:00 pm</option>
                            <option value="01:00pm">01:00 pm</option>
                            <option value="02:00pm">02:00 pm</option>
                            <option value="03:00pm">03:00 pm</option>
                            <option value="04:00pm">04:00 pm</option>
                            <option value="05:00pm">05:00 pm</option>
                            <option value="06:00pm">06:00 pm</option>
                            <option value="07:00pm">07:00 pm</option>
                            <option value="08:00pm">08:00 pm</option>
                            <option value="09:00pm">09:00 pm</option>
                            <option value="10:00pm">10:00 pm</option>
                        </select>
                    </div>

                    <div class="input-wrapper">
                        <label for="message">Message:</label>
                        <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>
                    </div>

                    <button type="submit" class="btn btn-secondary">
                        <span class="text text-1">Book A Table</span>
                    </button>
                </form>

                <!-- Contact info on the right -->   
                <div class="form-right text-center">
                    <h2 class="headline-1 text-center">Contact Us</h2>

                    <p class="contact-label">Booking Request</p>
                    <a href="tel:+94776625625" class="body-1 contact-number">+94776625625</a>

                    <div class="separator"></div>

                    <p class="contact-label">Location</p>
                    <address class="body-4">
                    Anods Chocolate Lounge | Pugoda <br>
                        Sri lanka
                        <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15854.662971203987!2d80.0744016!3d6.9343985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3abf232317a37%3A0x5645dd8bd2d4c1b2!2sAnods%20Chocolate%20Lounge!5e0!3m2!1sen!2slk!4v1695662004289!5m2!1sen!2slk"
  width="400" 
  height="300" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
</address>
                </div>
            </div>
        </div>
    </section> 

      <!-- 
        - #FEATURES
      -->   
   
      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Why Choose Us</p>

          <h2 class="headline-1 section-title">Our Strength</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Hygienic Food</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Fresh Environment</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Skilled Chefs</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Event & Party</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

          </ul>

          <img src="./assets/images/s1.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./assets/images/s1.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>







 


  <!-- 
    - #FOOTER
  -->  
  
  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/q1.jpg')" id="contract">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="./assets/images/b1.png" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
           66 Gampolagedara Road,Pugoda 10660
          </address>

          <a href="sales@anodscocoa.com" class="body-4 contact-link">sales@anodscocoa.com</a>

          <a href="tel:+94776625625" class="body-4 contact-link">Booking Request : +94776625625</a>

          <p class="body-4">
          Daily : 7.30 am to 07.30 pm
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Get News & Offers</p>

          <p class="label-1">
            Subscribe us & Get <span class="span">25% Off.</span>
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribe</span>

              <span class="text text-2" aria-hidden="true">Subscribe</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="#menu" class="label-2 footer-link hover-underline">Menus</a>
          </li>

          <li>
            <a href="#about" class="label-2 footer-link hover-underline">About Us</a>
          </li>

          <li>
            <a href="#contract" class="label-2 footer-link hover-underline">Contact</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="https://web.facebook.com/anodscocoa/?_rdc=1&_rdr" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="https://anodscocoa.com/" class="label-2 footer-link hover-underline">Compay Site</a>
          </li>

          <li>
            <a href="https://www.linkedin.com/company/anods-cocoa-pvt-ltd-/posts/?feedView=all" class="label-2 footer-link hover-underline">LikedIn</a>
          </li>

        <li>
            <a href="https://www.google.com/maps/place/Anods+Chocolate+Lounge+%7C+Pugoda/@6.9605616,80.1019301,14.75z/data=!4m6!3m5!1s0x3ae3abf232317a37:0x5645dd8bd2d4c1b2!8m2!3d6.95527!4d80.1022742!16s%2Fg%2F11fs_jcc3z?authuser=0&entry=ttu&g_ep=EgoyMDI0MTAyMy4wIKXMDSoASAFQAw%3D%3D" class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2024 Lehara Oshan. All Rights Reserved | Crafted by <a href="https://github.com/leharagit"
            target="_blank" class="link">leharagit</a>
        </p>

      </div>

    </div>
    </footer>

    
  <!-- 
    - #BACK TO TOP
  -->
    

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

 
  


  <!-- 
    - custom js link
  -->
     
  <script src="./assets/js/script.js"></script>



  


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>


