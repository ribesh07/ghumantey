<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="media.css" />

    <title>Travel Agency</title>
  </head>
  <body>
    <header>
      <nav>
        <h2>GHUMANTEY</h2>
        <ul id="menu_bx">
          <li><a href="#">Discover</a></li>
          <li><a href="#">Community</a></li>
          <li><a href="#">Special Deals</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="./loginPage/signup.php">REGISTER</a></li>
          <li><a href="./loginPage/login.php">Login</a></li>
        </ul>

        <i class="bi bi-three-dots"></i>
      </nav>
      <div class="content">
        <div class="contBox">
          <h1>The right destination for you and your family</h1>
          <p>
            Creative taglines have the capability of capturing the attention of
            customer
          </p>
          <button>Start your search</button>
        </div>
        <div class="tripBox">
          <div class="searchBox">
            <div class="card">
              <h4>Location <i class="bi bi-caret-down-fill"></i></h4>
              <input type="text" placeholder="Enter your destiny" />
            </div>
            <div class="card">
              <h4>Date <i class="bi bi-caret-down-fill"></i></h4>
              <input type="date" />
            </div>
            <div class="card">
              <h4>People <i class="bi bi-caret-down-fill"></i></h4>
              <input type="number" placeholder="How many people?" />
            </div>
            <input type="button" value="Explore Now" />
          </div>
          <div class="travelBox">
            <h4>Countries to travel</h4>
            <div class="cards">
              <div class="card">
                <h3>NEPAL <img src="./assets/icon/nepal.png" alt="" /></h3>
                <img src="./assets/img/nightKathmandu.jpg" alt="" />
                <div class="btn_city">
                  <a href="">Read Now</a>
                  <h5>
                    Kathmandu <br />
                    <span>$460</span>
                  </h5>
                </div>
              </div>
              <div class="card">
                <h3>
                  UNITED STATES
                  <img src="./assets/icon/united-states.png" alt="" />
                </h3>
                <img src="./assets/img/newyork.webp" alt="" />
                <div class="btn_city">
                  <a href="">Read Now</a>
                  <h5>
                    NewYork <br />
                    <span>$660</span>
                  </h5>
                </div>
              </div>
              <div class="card">
                <h3>RUSSIA <img src="./assets/icon/russia.png" alt="" /></h3>
                <img src="./assets/img/sanpitersburg.jpg" alt="" />
                <div class="btn_city">
                  <a href="">Read Now</a>
                  <h5>
                    Sanpitersburg <br />
                    <span>$960</span>
                  </h5>
                </div>
              </div>
              <div class="card">
                <h3>SPAIN <img src="./assets/icon/spain.png" alt="" /></h3>
                <img src="./assets/img/barcelona.jpg" alt="" />
                <div class="btn_city">
                  <a href="">Read Now</a>
                  <h5>
                    Barcelona <br />
                    <span>$860</span>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="offers">
      <h1>Best tour offers for you</h1>
      <p>choose your next destination</p>
      <div class="cards">
        <div class="card">
          <h3>Swoyambhunath Stupa</h3>
          <div class="imgText">
            <img src="./assets/img/swayambhuNight.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                5 Days <br />
                stupa
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Thamel</h3>
          <div class="imgText">
            <img src="./assets/img/ThamelNightView.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                2 nights<br />
                thamel
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Mardi Base Camp</h3>
          <div class="imgText">
            <img src="./assets/img/machapuchhreBground.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                5 Days <br />
                mardi
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Ghandruk-Village</h3>
          <div class="imgText">
            <img src="./assets/img/ghandruk.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                5 Days <br />
                trek
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Patan</h3>
          <div class="imgText">
            <img src="./assets/img/patan.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                5 Days <br />
                patan
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Pimbahal Pokhari</h3>
          <div class="imgText">
            <img src="./assets/img/pimbahalPokhari.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                5 Days <br />
                pimbhl
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Basantapur</h3>
          <div class="imgText">
            <img src="./assets/img/basantapurDurbar.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                5 Days <br />
                bsntp
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Bhaktapur</h3>
          <div class="imgText">
            <img src="./assets/img/bhaktapur.jpg" alt="" />
            <h4>Included: Air ticket, Hotel, Breakfast, Welcome drinks</h4>
            <div class="contBox">
              <div class="price">
                <div class="heart_chat">
                  <i class="bi bi-heart-fill"><span>34563</span></i>
                  <i class="bi bi-chat-fill"><span>362</span></i>
                </div>
                <div class="infoPrice">
                  <a href="">More Info</a>
                  <h4>$2648</h4>
                </div>
              </div>
              <div class="days">
                1 Day <br />
                Bktp
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination">
      <div class="des_box">
        <h4>Our Destinations</h4>
        <p>Choose your next destination</p>
        <li>Nepal</li>
        <li>Dubai</li>
        <li>USA</li>
        <li>Vietnam</li>
        <li>Russia</li>

        <h6>Included: Air ticket, Hotel, Breakfast, Tours, Airport transfer</h6>
        <button>Know More</button>
      </div>
      <div class="img_box">
        <img src="./assets/img/Main_plan.png" alt="" />
        <div class="msg">
          <img src="./assets/icon/nepal.png" alt="" />
          <div class="cont">
            <h4>Nepal</h4>
            <div class="icon">
              <i class="bi bi-heart-fill"><span>60563</span></i>
              <i class="bi bi-chat-fill"><span>550</span></i>
            </div>
          </div>
        </div>
        <div class="msg">
          <img src="./assets/icon/united-states.png" alt="" />
          <div class="cont">
            <h4>United-States</h4>
            <div class="icon">
              <i class="bi bi-heart-fill"><span>34563</span></i>
              <i class="bi bi-chat-fill"><span>362</span></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <h2>
        Subscribe & <br />
        get special discounts
      </h2>

      <div class="input">
        <input type="text" placeholder="Enter your Email Address" />
        <button>Subscribe</button>
      </div>
      <ul>
        <li>
          1324 <br />
          <h6>Years Serving the travel Industry</h6>
        </li>
        <li>
          1234 <br />
          <h6>
            Global <br />
            Partnership
          </h6>
        </li>
        <li>
          1423 <br />
          <h6>Industry Awards since 2020</h6>
        </li>
        <li>
          1453 <br />
          <h6>Subscribe <br />now</h6>
        </li>
      </ul>
      <div class="copyrightText">
        © 2023 Ghumantey.com<br> 
      </div>
    <!-- </footer>
    <footer class="copyrightText">
      
      , 
    </footer> -->
    <script src="index.js"></script>
  </body>
</html>
