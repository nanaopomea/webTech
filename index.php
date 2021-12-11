<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Remeber to add a logo to your titlebar-->
  <title>Bienvenue</title>
  <link rel="stylesheet" href="styling.css" />
  <!--External Font style from Google fonts; Parisienne-->
  <!--I LIKE IT BETTER WHEN THE HTML ASPECT IS NOT RUNNING. WHAT TO DO?-->
  <!-- This has been commented out because it's presence distorts the outlook of the font
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
      rel="stylesheet"
    />
    -->
  <!--Link th Javascript running video-->
  <script src="video.js" defer></script>
  <!--The defer keyword tells it not to run until the mainpage has been run-->

  <!--Font Awesome Four bootstrap cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />

  <!--Adding BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>


<body>
  <header class="header">

    <nav>
      <!--LOGO LINK WOULD COME HERE SOMETIME-->
      <a href="index.php"><img src="images/ActualLogo.PNG" alt="Encore!" /></a>
      <div class="navigation-links" id="navigationLinks">
        <!--The close icon for when the screen is in a mobile view-->
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <!--Alittle java [onclick]-->

        <ul>
          <li><a href="events.php">Events</a></li>
          <li><a href="/views/visitus.php">Visit Us</a></li>
          <li><a href="Bookings.php">Bookings</a></li>
          <li><a href="venueHire.php">Venue Hire</a></li>
          <!--This would be like one's about-->
          <li><a href="">Our Story</a></li>
          <!--Put contact and map here-->
        </ul>
      </div>
      <!--The hamburger icon-->
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <!--navbar complete/ends here-->



    <!--This is for text on the running video. NOT WORKING-->
    <div class="text-onVideo">
      <h1>Welcome to our community</h1>
      <a href="#">Explore</a>
      <!--Link should go to where we have running shows-->
    </div>
    <!--Creating the dynamic video slot-->
    <div class="running-video">
      <video src="videos/Happy kid.mp4" loop autoplay class="slides"></video>
      <video src="videos/littleviolinist.mp4" loop autoplay class="slides"></video>
      <video src="videos/ochestra.mp4" loop autoplay class="slides"></video>
      <video src="videos/Pianist.mp4" loop autoplay class="slides"></video>

      <!--The HTML way of applying photoshop to the videos-->
      <div class="overlay"></div>
    </div>
  </header>

  <section class="streaming">
    <h2>We're thrilled you're here!</h2>
    <p id="COVIDUpdate">COVID-19 update as of Sunday 7th November, 2021</p>
    <h2>Highlights for upcoming weeks</h2>

    <!--Bootstrap aided cards [Bootstrap Grid]-->

    <div class="container ">
      <div class="row g-0 justify-content-center">
        <!--gx(g for everything) is supposed to make the gutter(space b/n images go away)-->
        <!--Creating the card. Bootstrap>component>card-->
        <!--CARD1,ROW1-->
        <div class="col-md-3">
          <div class="card-group">
            <div class="card">
              <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Classical Music</h5>
                <h2>William Shakespeare</h2>
                <h4>19 Nov 2022- 30 Nov 2020</h4>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>


          </div>
        </div>

        <!--CARD2, ROW1-->
        <div class="col-md-3">
          <div class="card-group">
            <div class="card">
              <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Contemporary Music</h5>
                <h2>William Shakespeare</h2>
                <h4>19 Nov 2022- 30 Nov 2020</h4>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>


          </div>







        </div>



        <!--CARD3 ROW1-->
        <div class="col-md-3">
          <div class="card-group">
            <div class="card">
              <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title">Dance</h5>
                <h2>William Shakespeare</h2>
                <h4>19 Nov 2022- 30 Nov 2020</h4>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>


          </div>
        </div>








        <!--Second row and its columns-->

        <div class="container ">
          <div class="row g-0 justify-content-center">
            <!--gx(g for everything) is supposed to make the gutter(space b/n images go away)-->
            <!--Creating the card. Bootstrap>component>card-->
            <!--CARD1,ROW2-->
            <div class="col-md-3">
              <div class="card-group">
                <div class="card">
                  <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
                  <div class="card-body text-center">
                    <h5 class="card-title">Family & kids</h5>
                    <h2>William Shakespeare</h2>
                    <h4>19 Nov 2022- 30 Nov 2020</h4>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural
                      lead-in to additional content. This content is a little bit
                      longer.
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>


              </div>
            </div>

            <!--CARD2, ROW2-->
            <div class="col-md-3">
              <div class="card-group">
                <div class="card">
                  <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
                  <div class="card-body text-center">
                    <h5 class="card-title">Musical Theatre</h5>
                    <h2>William Shakespeare</h2>
                    <h4>19 Nov 2022- 30 Nov 2020</h4>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural
                      lead-in to additional content. This content is a little bit
                      longer.
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>


              </div>







            </div>



            <!--CARD3 ROW2-->
            <div class="col-md-3">
              <div class="card-group">
                <div class="card">
                  <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
                  <div class="card-body text-center">
                    <h5 class="card-title">Comedy</h5>
                    <h2>William Shakespeare</h2>
                    <h4>19 Nov 2022- 30 Nov 2020</h4>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural
                      lead-in to additional content. This content is a little bit
                      longer.
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>


              </div>
            </div>

            <!--CARD4 ROW2-->
            <div class="col-md-3">
              <div class="card-group">
                <div class="card">
                  <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
                  <div class="card-body text-center">
                    <h5 class="card-title">Musical Theatre</h5>
                    <h2>William Shakespeare</h2>
                    <h4>19 Nov 2022- 30 Nov 2020</h4>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural
                      lead-in to additional content. This content is a little bit
                      longer.
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>


              </div>
            </div>























































            <div class="container ">
              <div class="row g-0 justify-content-center">
                <!--gx(g for everything) is supposed to make the gutter(space b/n images go away)-->
                <!--Creating the card. Bootstrap>component>card-->
                <!--CARD1,ROW3-->
                <div class="col-md-3">
                  <div class="card-group">
                    <div class="card">
                      <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
                      <div class="card-body text-center">
                        <h5 class="card-title">Family & kids</h5>
                        <h2>William Shakespeare</h2>
                        <h4>19 Nov 2022- 30 Nov 2020</h4>
                        <p class="card-text">
                          This is a wider card with supporting text below as a natural
                          lead-in to additional content. This content is a little bit
                          longer.
                        </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>


                  </div>
                </div>

                <!--CARD2, ROW3-->
                <div class="col-md-3">
                  <div class="card-group">
                    <div class="card">
                      <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
                      <div class="card-body text-center">
                        <h5 class="card-title">Dance</h5>
                        <h2>William Shakespeare</h2>
                        <h4>19 Nov 2022- 30 Nov 2020</h4>
                        <p class="card-text">
                          This is a wider card with supporting text below as a natural
                          lead-in to additional content. This content is a little bit
                          longer.
                        </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>


                  </div>







                </div>



                <!--CARD3 ROW3-->
                <div class="col-md-3">
                  <div class="card-group">
                    <div class="card">
                      <img src="images/Phantom.jfif" class="card-img-top" alt="..." />
                      <div class="card-body text-center">
                        <h5 class="card-title">Comedy</h5>
                        <h2>William Shakespeare</h2>
                        <h4>19 Nov 2022- 30 Nov 2020</h4>
                        <p class="card-text">
                          This is a wider card with supporting text below as a natural
                          lead-in to additional content. This content is a little bit
                          longer.
                        </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>


                  </div>
                </div>













































  </section>



  <script>
    //Hidding and showing the collapsed link [It isnt working irregardless of where I place it]
    var navigationlinks = document.getElementById(navigationlinks);

    function showMenu() {
      navigationlinks.style.right = "0";
    }

    function hideMenu() {
      navigationlinks.style.right = "-200px";
    }
  </script>
</body>

</html>