<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="events_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />

</head>


<body>
    <nav>
        <!--LOGO LINK WOULD COME HERE SOMETIME-->

        <a href="index.php"><img src="images/ActualLogo.PNG" alt="Encore!" /></a>
        <div class="navigation-links" id="navigationLinks">
            <!--The close icon for when the screen is in a mobile view-->
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <!--Alittle java [onclick]-->

            <ul>
                <li><a href="events.php">Events</a></li>
                <li><a href="../views/visitus.php">Visit Us</a></li>
                <!-- <li><a href="Bookings.php">Bookings</a></li>-->
                <li><a href="venueHire.php">Venue Hire</a></li>
                <!--This would be like one's about-->
                <li><a href="">Our Story</a></li>
                <!--Put contact and map here-->
            </ul>
            <!--</div>-->
            <!--The hamburger icon-->
            <i class="fa fa-bars" onclick="showMenu()"></i>

            <!--User Account-->
            <a href="login.php"><i class="fas fa-user"></i></a>
    </nav>
    <!--NavBar Ends-->


    <div>


        <div class="container">
            <div class="CAL">
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">
                        <h1>May</h1>
                        <p>Fri May 29 2020</p>
                    </div>




                    <i class="fas fa-angle-right next"></i>
                </div>



                <div class="weekendays">
                    <div>Sunday</div>
                    <div>Monday</div>
                    <div>Tuesday</div>
                    <div>Wednesday</div>
                    <div>Thursday</div>
                    <div>Friday</div>
                    <div>Saturday</div>
                </div>



                <div class="days">
                    <div class="orev-days">26</div>
                    <div class="orev-days">27</div>
                    <div class="orev-days">28</div>
                    <div class="orev-days">29</div>
                    <div class="orev-days">30</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                    <div>10</div>
                    <div>11</div>
                    <div>12</div>
                    <div>13</div>
                    <div>14</div>
                    <div>15</div>
                    <div>16</div>
                    <div>17</div>
                    <div>18</div>
                    <div>19</div>
                    <div>20</div>
                    <div>21</div>
                    <div>22</div>
                    <div>23</div>
                    <div>24</div>
                    <div>25</div>
                    <div>26</div>
                    <div>27</div>
                    <div>28</div>
                    <div class="today">29</div>
                    <div>30</div>
                    <div>31</div>

                    <div class="next-date">1</div>
                    <div class="next-date">2</div>
                    <div class="next-date">3</div>
                    <div class="next-date">4</div>
                    <div class="next-date">5</div>
                    <div class="next-date">6</div>
                </div>
            </div>

            <div class="checkboxes">
                <label>Comedy</label>
                <input type="checkbox" name="Comedy" id=""> <br><br>
                <label>Dance</label>
                <input type="checkbox" name="Dance" id=""><br><br>
                <label">Opera</label>
                    <input type="checkbox" name="Opera" id=""><br><br>
                    <label>Kids& Family</label>
                    <input type="checkbox" name="Kids & Family" id=""><br><br>
                    <label>Musical</label>
                    <input type="checkbox" name="musical" id=""><br><br>
            </div>

        </div>





    </div>



    <script src="../public/Calendar.js"></script>
</body>

</html>