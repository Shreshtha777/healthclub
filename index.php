<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Website</title>
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.js"></script> -->

    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <header>
        <nav>
            <!-- left side menu  -->
            <div class="left-side-menu">
                <div class="logo">
                    <a href="#">
                        <img src="images/logo.png" alt="logo" />
                    </a>
                </div>

                <div class="sub-menu">
                    <a href="#">
                        <li>Home</li>
                    </a>
                    <a href="#section-two">
                        <li>About</li>
                    </a>
                    <a href="#section-third">
                        <li>Goals</li>
                    </a>
                    <a href="#section-five">
                        <li> CheckBMI</li>
                    </a>
                </div>
            </div>

            <!-- right side menu  -->
            <div class="right-side-menu">
                <div class="sub-menu">
                    <a href="admin/login.php">
                        <li>Log In</li>
                    </a>
                    <a href="#register"><button>Register</button></a>
                </div>
            </div>
        </nav>
    </header>

    <!-- our hero section start--------------- -->
    <section class="main-hero-section">
        <!-- left side code   -->
        <div class="hero-left-side">
            <h1>Healthy living simplified</h1>
            <p>
                Take control of your goals. Track calories, breakdown
                ingredients.Congratulations on taking a forward step to get in shape
                and feel great.
            </p>
            <div class="button-group">
                <a href="#">
                    <img src="images/appstore.png" alt="appstore" class="appStore" />
                </a>

            </div>
        </div>
        <!-- right side code   -->
        <div class="hero-right-side">
            <img src="images/humans.gif" alt="heropageImg" />
        </div>
    </section>

    <!-- our 2nd section start ------------------ -->

    <section class="common-section" id="section-two">
        <!-- left side of section 2  -->
        <div class="left-side">
            <figure>
                <img src="images/graphic.jpg" alt="section2" />
            </figure>
        </div>

        <!-- right side of section 2  -->
        <div class="right-side">
            <h2>Your Daily Healthy App</h2>
            <p>
                Habits And Lifestyle That Can Help You Live A Long And Healthy Life.
                Habits That Can Make Your Life Longer And Better. Be Better. Live Better.
                Learn Better.
            </p>
            <div class="button-group">
                <a href="https://www.buzzfeed.com/michelleno/apps-that-make-it-easy-to-eat-healthy">
                    <button class="common-button" style="background-color:green; color:aliceblue;">get started</button>
                </a>
                <button class="common-button-normal">how its work?</button>
            </div>
        </div>
    </section>

    <!-- --------- our 3rd section start-------- -->
    <section class="section-third" id="section-third">
        <h2>The Tools For Your Goals</h2>
        <p>
            Lamet minim mollit non deserunt ullamco est sit aliq do amet sint. Velit
            officia consequat
        </p>
        <div class="section-third-task">
            <div class="task-1">
                <img src="images/learn.png" alt="icon1" />
                <h3>Learn & Improve</h3>
                <p>
                    Lamet minim mollit non deserunt ullamco est sit aliq do amet sint.
                    Velit officia consequat
                </p>
            </div>

            <div class="task-2">
                <img src="images/watch.png" alt="icon1" />
                <h3>Time Management</h3>
                <p>
                    Lamet minim mollit non deserunt ullamco est sit aliq do amet sint.
                    Susbcribe to ThapaTechncial.
                </p>
            </div>

            <div class="task-3">
                <img src="images/stay.png" alt="icon1" />
                <h3>Stay Motivated</h3>
                <p>
                    Lamet minim mollit non deserunt ullamco est sit aliq do amet sint.
                    Velit officia consequat
                </p>
            </div>
        </div>
    </section>
    <!-- ------ our 4th section start ------------ -->

    <section class="common-section" id="section-four">
        <!-- right side of section 4 -->
        <div class="right-side">
            <h2>Create Your Own Fitness Journey</h2>
            <p>
                lamet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                sint. velit officia consequat duis enim velit mollit.
            </p>
            <div class="button-group">
                <a href="https://www.mensjournal.com/health-fitness/the-10-most-important-fitness-goals/"> <button
                        class="common-button" style="background-color: blue; color:aliceblue;">get
                        started</button>
                </a>


            </div>
        </div>

        <!-- left side of section 4  -->
        <div class=" left-side">
            <img src="images/yoga.jpg" alt="section2" />
        </div>
    </section>

    <section class="common-section" id="section-five">

        <!-- right side of section 5 -->
        <!-- ------- resgistation form ---------- -->
        <div class="right-side" id="register">

            <form action="register.php" method="POST">
                <h1>Yoga Registration form</h1>
                <input type="text" name="name" placeholder="Enter your name"><br>
                <input type="text" name="emial" placeholder="Enter your Email"><br>
                <input type="text" name="contact" placeholder="Enter your Contact"><br>
                <input type="submit" name="register" value="Register" class="btn ">


            </form>
            <!------------------ php code ------------->
            <?php
            if(isset($_GET['status'])){
                $message=$_GET['status'];
                echo "<h1>$message</h1>";

            }
         
            ?>
        </div>
        <!-- left side of section 5 -->
        <div class="left-side">
            <img src="images/businessman.jpg" alt="section 5" />
        </div>
    </section>

    <!-- ------- our 6th section start ---------- -->

    <section class="common-section" id="section-five">
        <!-- left side of section 6-->
        <div class="left-side">

            <!--=======calculater php code=======-->
            <?php
                      
                      $output="";
                      if (isset($_GET['calculate'])) {
                          $weight=$_GET['weight'];
                          $height=$_GET['height'];
                         
                          $heightInMs = $height/100;
                          $bmi = $weight/($heightInMs*$heightInMs);
                          $bmi=substr($bmi, 0, 5);
                          $message = "";
                          if ($bmi < 18.5) {
                              $message = "You are underweight.";
                          } elseif ($bmi >=18.5 && $bmi <= 24.9) {
                              $message = "Congrats!!! You have normal weight.";
                          } elseif ($bmi >24.9 && $bmi <=29.9) {
                              $message = "You are overweight.";
                          } else {
                              $message = "Be careful!!! You are obese.";
                          }
                          if ($message) {
                              $output = array(
                           "bmi"=>$bmi,
                           "message"=>$message
                          );
                          }
                         
                          
                      } 
                    
                      ?>

            <form action="" class="container">
                <h1>BMI calculater</h1>
                <label for="your weight"><b>Weight</b></label>
                <input type="text" placeholder="enter weight in kg" name="weight" required>

                <label for="your Height"><b>Height</b></label>
                <input type="text" placeholder="Height in cm " name="height" required>


                <?php
                    if ($output) {
                        echo $output['bmi'];
                        echo "<br>";
                        echo $output['message'];
                        echo "<br>";
                        
                    }                
                
                ?>

                <input type="submit" class="btn" name="calculate" value="calculate">
                <input type="reset" class="btn" value="clear">



            </form>
        </div>

        <!-- right side of section 6-->
        <div class="right-side">

            <h2>We Will Take Care Of Your Fitness Goals</h2>

            <div class="fitness-goals">
                <div class="rule1">

                    <h3>
                        We will take care of your fitness
                        goals
                    </h3>


                </div>

                <div class="rule2">
                    <h3>
                        Track your daily habits with water
                    </h3>

                </div>

                <div class="rule3">
                    <h3>Track your weight and waist</h3>

                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------- our 7th section start 
    ---------------------------------------------------------------------- -->

    <footer>
        <div class="logo-div">
            <img src="images/logo.png" alt="logo" />
            <p>Copyright@2021 shreshthaindoriya</p>
        </div>


    </footer>


</body>

</html>