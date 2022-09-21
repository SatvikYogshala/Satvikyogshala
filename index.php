<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Home - Satvik Yogshala</title>
    <meta charset="utf-8">
    <!--SEO-->

    <!--SEO-END-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "423533944862014", // Facebook page ID
            whatsapp: "+918126726747", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp,facebook", // Order of buttons
            pre_filled_message: "Namaste Satvik Yogshala", // WhatsApp pre-filled message
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<body>

    <!------navbar-->
    <?php include("navigation.php");?>
    <!-- nav-end -->

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('Assets/image/Slide/banner1.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Learn From the Best Yogis in Rishikesh</h2>
                       <!-- <p class="lead">This is a description for the first slide.</p> -->
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('Assets/image/Slide/banner2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Learn From the Best Yogis in Rishikesh</h2>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('Assets/image/Slide/banner1.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Learn From the Best Yogis in Rishikesh</h2>
                      
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!------about companey-->
    <section class="m-2">
        <div class="container p-1">
            <div class="row">
                <div class="col-12  text-center py-5">
                    <h1 class="display-3 w-font">YOGA TEACHER TRAINING RISHIKESH, INDIA</h1>
                    <p class="m-4 p-font">Satvik Yogshala, in collaboration with Yoga Alliance USA, is located at the Yoga Capital of the world, Rishikesh. Spirituality is key to your yoga practice. With our clear vision, we have uniquely designed our courses to provide you
                        with exceptional guidance so you can attain your goals. Whether you are a beginner or an advanced yogi, you will find yourself able to attain the confidence and knowledge necessary to enhance your journey here at Satvik Yogshala.
                        Our Teacher Training Courses include modalities from Traditional Hatha Yoga, Ashtanga Vinyasa, Meditation, Mantra, Yoga Philosophy, Yoga Anatomy, Yoga Physiology and Ayurveda. Our purpose is to promote growth, awareness and transform
                        individuals, which will be necessary to achieve transformation at a collective level.</p>
                </div>
            </div>
        </div>
    </section>
    <!--about-->
    <section class="p-2">
        <section>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-4">
                            <img class="img-fluid" src="Assets/image/WelcomeSection/Welcome-03.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4 h-font"> Best Yoga Retreat in rishikesh</h2>
                            <p class="p-font">Satvik Yogshala is organizing Yoga Retreat at Rishikesh. Every month we conduct several yoga retreat programs and yoga programs, so we have planned a Yoga Retreat which is under your budget and can be affordable. So pack your bags and start booking your Yoga at Satvik Yogshala in Rishikesh.
                            </p>
                            <div class="p-2"><a href="yoga-retreat.php" class="card-link"><button type="button"
                        class="btn btn-outline-primary">Read More</button></a></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </section>
    <hr>
    <!-----teachers yoga Training-->
    <!-- Our program -->
    <?php include("our-program.php");?>
    <!-- Our program end  -->
    <hr>
    <!-----yoga Retreat-->
    <section class="p-2 facilities-sec">
        <div class="container marketing">
            <div class="container-fluid text-center">
                <h2 class="h-font p-4">Facilities</h2>
                <!-- <p class="p-font p-1 mb-3">Lorem ipsum dolor sit amet consectetur Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, accusantium. Expedita, tenetur. ipsum dolor sit amet consectetur adipisicing elit. Eligendi animi tempora repellat explicabo alias
                    qui suscipit ducimus ipsam, doloremque iste. adipisicing elit. Eligendi, rem.</p> -->
            </div>
            <!--image-of-yoga-Retreat-->
            <div class="container p-3">
                <div class="row">
                    <!--col-1-->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card m-3">
                            <div class="card-body">
                                <img src="assets/image/food.jpg">
                                <h5 class="card-title h-font2 m-auto p-2"> Food</h5>
                                <p class="card-text text-muted m-auto p-2 p-font ">Satvik Yogshala provides light and healthy vegetarian foods. Fresh & delicious quality food. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card m-3">
                            <div class="card-body">
                                <img src="assets/image/Accomodation.jpg">
                                <h5 class="card-title h-font2 m-auto p-2"> Accomodation</h5>
                                <p class="card-text text-muted m-auto p-2 p-font ">Clean Accommodation at Peaceful Location, luxurious & comfortable rooms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card m-3">
                            <div class="card-body">
                                <img src="assets/image/spa.jpg">
                                <h5 class="card-title h-font2 m-auto p-2"> Spa</h5>
                                <p class="card-text text-muted m-auto p-2 p-font ">Satvik Yogshala offers you the best Spa for Ayurvedic treatments and massages.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card m-3">
                            <div class="card-body">
                                <img src="assets/image/travel1.jpg">
                                <h5 class="card-title h-font2 m-auto p-2"> Travel</h5>
                                <p class="card-text text-muted m-auto p-2 p-font ">We organize an excursion for leisure, education, or physical purposes twice in a month.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!--About Courses detail-->

    <section class="p-2">
        <div class="container marketing">
            <div class="container-fluid text-center">
                <h2 class="h-font p-4"> Blog</h2>
                <h3>YOGA TEACHER TRAINING COURSE (YTTC) IN RISHIKESH, INDIA: A LIFE-CHANGING EXPERIENCE</h3>
                <div class="info svelte-1lbh8pf"><span>Posted On : 11-11-2020</span></div>
                <p class="p-font p-3 mb-3">I got acquainted with yoga five years ago. I used to practice asana regularly on my own, and I also attended some classes once a week at a local studio. I loved its benefits of staying energized, positive, and calm. However, I sensed that
                    after a while, my practice (on physical, mental, spiritual level) was stagnating as if I had come to a dead-end in a maze.</p>
                    <div class="p-2"><a href="blog.php" class="card-link"><button type="button"
                    class="btn btn-outline-primary">Read More</button></a></div>
            </div>
            <!--image-of-teacher-yoga-training-->
            <div class="container-md">
                <img class="img-fluid p-2" src="Assets/image/blog.jpg" alt="">
            </div>
        </div>
        </div>
    </section>
    <hr>

    <!-----Schedule-->
   
    <!-----teachers-->
    <section class="p-2">
        <div class="container marketing px-2">
            <div class="container-fluid text-center">
                <h2 class="h-font p-4">Our Teachers</h2>
                <p class="p-font p-1 mb-3">We have some of the best teachers (Gurus) of india.</p>
            </div>
            <div class="container">
                <div class="text-center row card-deck">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="custom-card m-1">
                            <img src="Assets/image/Teachers/Teacher-01.jpg" class="card-img-top rounded-circle w-50 py-3 mx-auto" alt="...">
                            <div class="card-body py-2">
                                <h5 class="card-title">Pritam Rawat</h5>
                                <p class="card-text text-muted">Yoga Teacher</p>
                                <p class="p-font text-muted">Yogi Pritam, manager and Hatha Yoga Instructor of Anand Yog Rishikesh with considerable experience of teaching and practicing yoga is a gentle soul.</p>
                            </div>
                            <div class="p-2"><a href="yoga-teacher.php" class="card-link"><button type="button"
                              class="btn btn-outline-primary">Read More</button></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="custom-card m-1">
                            <img src="Assets/image/Teachers/Teacher-02.jpg" class="card-img-top rounded-circle w-50 py-3 mx-auto" alt="...">
                            <div class="card-body py-2">
                                <h5 class="card-title">Swami Manasananda</h5>
                                <p class="card-text text-muted">Yoga Teacher</p>
                                <p class="p-font text-muted">Gives beautiful Yoga training in Sivananda style, Hatha Yoga for both beginners and the advanced.He studied Yoga T.T.C, A.T.T.C ..</p>
                            </div>
                            <div class="p-2">
                                <a href="yoga-teacher.php" class=" card-link "><button type="button "
                              class="btn btn-outline-primary ">Read More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 ">
                        <div class="custom-card m-1 ">
                            <img src="Assets/image/Teachers/Teacher-03.jpg " class="card-img-top rounded-circle w-50 py-3 mx-auto " alt="... ">
                            <div class="card-body py-2 ">
                                <h5 class="card-title ">Yogi Pankaj Paswan</h5>
                                <p class="card-text text-muted ">Yogi Vipulraj</p>
                                <p class="p-font text-muted ">Pankaj Paswan is a certified yoga teacher possesses a Bachelor degree of arts in yoga & Naturopathy from Uttarakhand ...</p>
                            </div>
                            <div class="p-2">
                                <a href="yoga-teacher.php" class=" card-link "><button type="button "
                            class="btn btn-outline-primary ">Read More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 ">
                        <div class="custom-card m-1 ">
                            <img src="Assets/image/Teachers/Teacher-04.jpg " class="card-img-top rounded-circle w-50 py-3 mx-auto " alt="... ">
                            <div class="card-body py-2 ">
                                <h5 class="card-title ">Yogi Vipulraj</h5>
                                <p class="card-text text-muted ">Yoga Teacher</p>
                                <p class="p-font text-muted ">Yogi Vipulraj was born in the northern Indian traditional Aryan family. According to the tradition of his family, he started the spiritual and physical search</p>
                                <a href="yoga-teacher.php" class=" card-link "><button type="button "
                                  class="btn btn-outline-primary ">Read More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- gallery -->
    <section class="p-2 ">
        <div class="container gallery ">

            <div class="container-fluid text-center ">
                <h2 class="h-font p-4 ">Our Gallery</h2>
                <!-- <p class="p-font p-1 mb-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, rem.</p> -->

                <div class="row text-center text-lg-left ">

                    <div class="col-lg-4 col-md-6 col-6 ">
                        <a href="gallery.html " class="d-block mb-4 h-100 ">
                            <img class="img-fluid " src="Assets/image/Gallery/image-01.jpg " alt=" ">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ">
                        <a href="gallery.html " class="d-block mb-4 h-100 ">
                            <img class="img-fluid " src="Assets/image/Gallery/image-02.jpg " alt=" ">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ">
                        <a href="gallery.html " class="d-block mb-4 h-100 ">
                            <img class="img-fluid " src="Assets/image/Gallery/image-03.jpg " alt=" ">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ">
                        <a href="gallery.html " class="d-block mb-4 h-100 ">
                            <img class="img-fluid " src="Assets/image/Gallery/image-04.jpg " alt=" ">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ">
                        <a href="gallery.html " class="d-block mb-4 h-100 ">
                            <img class="img-fluid " src="Assets/image/Gallery/image-05.jpg " alt=" ">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ">
                        <a href="gallery.html " class="d-block mb-4 h-100 ">
                            <img class="img-fluid " src="Assets/image/Gallery/image-06.jpg " alt=" ">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!--map-->
    <section>
        <div class="embed-responsive embed-responsive-16by9 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13803.010392416822!2d78.3250741!3d30.1298921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1a502700c49680b7!2sSatvik%20Yogshala!5e0!3m2!1sen!2sin!4v1662972230353!5m2!1sen!2sin" width="600"
                height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <hr>
    <!-- container -->
    <!--------footer-->
    <?php include("footer.php");?>
    <!-- Footer end -->

    <!--script-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
    </script>
</body>

</html>