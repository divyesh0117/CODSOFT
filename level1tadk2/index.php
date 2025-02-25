<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour and Travel Agency</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section start -->

    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>T</span>ravel</a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>

    <!-- header section end -->

    <!-- login form container -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email" />
        <input type="password" class="box" placeholder="enter your password" />
        <input type="submit" value="login now" class="btn" />
        <input type="checkbox" id="remember" />
        <label for="remember">remembe me</label>
        <p>forget password?? <a href="#">click here</a></p>
        <p>Don't have an account? <a href="#">register now</a></p>
      </form>
    </div>

    <!-- home section start -->

    <section class="home" id="home">
      <div class="content">
        <h3>Adventure is worldwhile</h3>
        <p>Discover new place with us, Adventure awaits</p>
        <a href="#" class="btn">Discover more</a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="vid-1.mp4"></span>
        <span class="vid-btn" data-src="vid-2.mp4"></span>
        <span class="vid-btn" data-src="vid-3.mp4"></span>
        <span class="vid-btn" data-src="vid-4.mp4"></span>
        <span class="vid-btn" data-src="vid-5.mp4"></span>
      </div>

      <div class="video-container">
        <video src="vid-1.mp4" id="video-slider" loop autoplay muted></video>
      </div>
    </section>

    <!-- home section end -->

    <!-- book section start -->

    <section class="book" id="book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="book-img.svg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name" />
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guests" />
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" />
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" />
          </div>
          <input type="submit" class="btn" value="book now" />
        </form>
      </div>
    </section>

    <!-- book section end -->

    <!-- packege section start -->

    <section class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="p-1.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="p-2.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>hawai</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="p-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>sydney</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="p-4.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>paris</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="p-5.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>tokyo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="p-6.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>eypt</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- package section end -->

    <!-- service section start -->

    <section class="services" id="services">
      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>affordable hotels</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
            aliquid doloremque odio atque quo fugit!
          </p>
        </div>

        <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>food and drinks</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis
            id libero enim autem saepe nostrum?
          </p>
        </div>

        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>safty guide</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo
            maxime eum tenetur quos laboriosam error.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>around the world</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quasi
            aut minus sequi veniam alias?
          </p>
        </div>

        <div class="box">
          <i class="fas fa-plane"></i>
          <h3>fastest travel</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
            recusandae laudantium perspiciatis soluta, natus provident.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>adventure</h3>
        </div>
      </div>
    </section>

    <!-- service section end -->

    <!-- gallery section start -->

    <section class="gallery" id="gallery">

      <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="g-1.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-2.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-3.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-4.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-5.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-6.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-7.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-8.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

        <div class="box">
          <img src="g-9.jpg" alt="" />
          <div class="content">
            <h3>amazing place</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
              illum laboriosam a voluptatem.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- gallery section end -->

    <!-- review section start -->

    <section class="review" id="review">
      <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
      </h1>

      <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="box">
              <img src="pic1.png" alt="" />
              <h3>alia bhatt</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                numquam nihil, tenetur qui magnam ipsa aspernatur ab
                necessitatibus porro.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="box">
              <img src="pic2.png" alt="" />
              <h3>psi divyesh</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                numquam nihil, tenetur qui magnam ipsa aspernatur ab
                necessitatibus porro.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="box">
              <img src="pic3.png" alt="" />
              <h3>dipika</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                numquam nihil, tenetur qui magnam ipsa aspernatur ab
                necessitatibus porro.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="box">
              <img src="pic4.png" alt="" />
              <h3>sp vairag</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                numquam nihil, tenetur qui magnam ipsa aspernatur ab
                necessitatibus porro.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- review section end -->

    <!-- contact section start -->

    <section class="contact" id="contact">

      <h1 class="heading">
      <span>c</span>
      <span>o</span>
      <span>n</span>
      <span>t</span>
      <span>a</span>
      <span>c</span>
      <span>t</span>
      </h1>

      <div class="row">

        <div class="image">
          <img src="contact-img.svg" alt="">
        </div>

        <form action="">

          <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
          </div>

          <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
          </div>

          <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
          <input type="submit" class="btn" value="send message">

        </form>
      </div>
    </section>

    <!-- contact section end -->


    <!-- brand section -->

    <section class="brand-container">

      <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">

          <div class="swiper-slide"><img src="1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="2.jpg" alt=""></div>
          <div class="swiper-slide"><img src="3.jpg" alt=""></div>
          <div class="swiper-slide"><img src="4.jpg" alt=""></div>
          <div class="swiper-slide"><img src="5.jpg" alt=""></div>
          <div class="swiper-slide"><img src="6.jpg" alt=""></div>
        
        </div>
      </div>
    </section>




    <!-- footer section -->

    <section class="footer">
      <div class="box-container">

        <div class="box">
          <h3>about us</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, laudantium? Quam laborum veritatis provident sed quos.</p>
        </div>

        <div class="box">
          <h3>branch locations</h3>
          <a href="#">india</a>
          <a href="#">japan</a>
          <a href="#">usa</a>
          <a href="#">france</a>
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">book</a>
          <a href="#">packages</a>
          <a href="#">services</a>
          <a href="#">gallery</a>
          <a href="#">review</a>
          <a href="#">contact</a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a> 
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>

      </div>

      <h1 class="credit">credited by <span> psi divyesh </span> all rights reserved!! </h1> 

    </section>



    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script> 
  </body>
</html>
