<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: user_login.php");
}
$qry = "select * from users where username=$_SESSION['username']";
$rs = mysqli_query($conn,$qry);
$getRow = mysqli_fetch_row($rs);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portfolio</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<!---setting navbar to scroll type-->
<body data-bs-spy="scroll" data-bs-target=".navbar">
<!---creating navbar and assignning it's proprty-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <span class="h3 fw-bold d-block d-lg-none">User homepage</span>
                <img src="./assets/images/iiitalogo.jpg" class="d-none d-lg-block rounded-circle" alt="iiita_logo">
            </a>
            <!--defined the class and property of button to be used in navbar-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!--new division for buttons of navbar-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
                    <!---by using #in href website shifts it's position without changing the pages-->
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#technical_Portfolio">Technical Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#non_Technical_Portfolio">Non-Technical Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#endorsments">Endorsments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guidlines">Guidelines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#help">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li> 
                </ul>
            </div>
    </div>
</nav>

<div id="content-wrapper">
        <!--instead of making new html for home we are adding content of home as sliding page-->
        <section id="home" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                    <h3 class = "welcome"> Welcome <?php echo $_SESSION['username']?> You can now use this website !</h3>
                        <h1 class="display-4 fw-bold" data-aos="fade-up">Exploring the <span class="text-brand">MULTIFACETED TALENTS</span></h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">IIITA Student Portfolio: Uncovering Hidden Talents and Technical Expertise.</p>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <a href="#view portfolio" class="btn btn-brand me-3">View portfolio</a>
                            <a href="#update portfolio" class="btn btn-brand me-3">Update Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //HOME -->

        <!-- Technical Portfolio -->
        <section id="technical_Portfolio" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h3 class="text-brand">Technical Portfolio</h3>
                        <h5>Technical Portfolio showcases proficiency in skills, level of expertise and completed courses.</h5>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-feather"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Relavant Work Experience</h5>
                            <p>Summer Intern at Google Inc.</p>
                            <p>Teaching Assistant at Coding Ninja</p>
                            <p>TAship of cp at Codeplus,IIITA</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-pencil-ruler"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Coding Challenges & Hackathon</h5>
                            <p>ICPC Qualifier from IIITA</p>
                            <p>7th Rank in Smart India Hackathon</p>
                            <p>Facebook hackerCup 548th rank holder</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-laptop-code"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Coursework</h5>
                            <p>Design and alalysis of Algorithm</p>
                            <p>Operating System | OOPs </p>
                            <p>DBMS | Software Engineering</p>
                             <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-laptop-code"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Open Source Contribution</h5>
                            <p>Google Summer of code</p>
                            <p>MLH Fellowship</p>
                            <p>OpenCode IIITA</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-feather"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Technical skills</h5>
                            <p>Web Devlopment</p>
                            <p>Machine Learning</p>
                            <p>Competitive Proggraming</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-pencil-ruler"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Technical certification</h5>
                            <p>Full Stack Devlopment course at udemy</p>
                            <p>Google codejam round 2 finalist</p>
                            <p>Meta HackerCup certificate of Participation</p>
                            <a href="#" class="link-custom">Read More</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Technical Portfolio -->

        <section id="projects" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h1>Recent Projects</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/project-1.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Airbase ticket booking</h4>
                                <p>Innovation that exceeds expectations.Vistar is an online airways ticket booking application for both IOS and android.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/project-2.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>UI/UX Application</h4>
                                <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/project-3.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Online resturant system</h4>
                                <p>Innovation that exceeds expectations."Ghar ka Kitchen" is a quick food ordering website built using modern and robust technolgy node js and mongodb </p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/project-4.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>E-commerce management dashboard</h4>
                                <p>Innovation that exceeds expectations. AJIO is a excellent E-commerce management bots for online seller on any platform such as amazon etc.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="non_Technical_Portfolio" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">NON TECHNICAL PORTFOLIO</h6>
                        <h4>Non-technical portfolio showcases diverse range of skills and experiences, making a well-rounded and valuable asset to a team.</h4>
                    </div>
                </div>
 
                <div class="row gy-5">
                    <div class="col-lg-6">

                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Awards & Honours</h4>
                                    <p class="text-brand mb-2">MUN IIITA delegate Awards</p>
                                    <p class="mb-0">Best fresher devlopment team</p>
                                    <p class="mb-0">Githero Award from GeekHaven,IIITA</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Artistic Talents</h4>
                                    <p class="text-brand mb-2">Classical Singer </p>
                                    <p class="mb-0">Sketching enthusiast</p>
                                    <p class="mb-0">Poetry Composer</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Athelatic Achievments</h4>
                                    <p class="text-brand mb-2">Captain of winning cricket team from IIITA at udghosh IIT kanpur</p>
                                    <p class="mb-0">Runner up in Chess competition.</p>
                                    <p class="mb-0">1st place in swimming competition.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Leadership and management</h4>
                                    <p class="text-brand mb-2">Team Player</p>
                                    <p class="mb-0">Event organisation and management skills</p>
                                    <p class="mb-0">Peers Interaction skills</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Soft Skills</h4>
                                    <p class="text-brand mb-2">Communication skills</p>
                                    <p class="mb-0">Public and coorporate Relations</p>
                                    <p class="mb-0">Multiple Language profficiency</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Volunteer Experience</h4>
                                    <p class="text-brand mb-2">Organising comitee of efervescens,Annual cultural fest of IIITA</p>
                                    <p class="mb-0">Festival Coordinator of HINT.</p>
                                    <p class="mb-0">Core Team Member of Web Devlopment Wing,GeekHaven.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <section id="endorsments" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">ENDORSMENTS</h6>
                        <h1>Formal acknowledgement</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">It gives me great pleasure to acknowledge Aryan's exceptional talents in computer programming.His ability to write efficient and effective code is remarkable, and he consistently demonstrates a deep understanding of all the techniques. Aryan's enthusiasm for technology is contagious, and I have no doubt that achieve great things in the field of computer science.</p>
                            <div class="person">
                                <h5 class="mb-0">A P Ghosh</h5>
                                <p class="mb-0">Director</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">I am thrilled to acknowledge Aryan's contributions to the class project this semester. His creativity and innovative thinking were critical to the success of the project.Aryan's leadership skills and ability to work collaboratively with his peers were also evident throughout the project, and I have no doubt that he will continue to be a valuable asset to any team he works with.</p>
                            <div class="person">
                                <h5 class="mb-0">SP submranyam</h5>
                                <p class="mb-0">Assistant Proffesor</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" data-aos="fade-up">

                        <div class="review shadow-effect bg-base p-4 rounded-4">
                            <div class="text-brand h5">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </div>
                            <p class="my-3">I would like to acknowledge Aryan's outstanding work in my course this semester. His dedication to learning and problem-solving is truly impressive, and he consistently produces work of the highest caliber. I have no doubt that John will continue to excel in his academic pursuits and make valuable contributions in his future career.</p>
                            <div class="person">
                                <h5 class="mb-0">Amaya Singhal</h5>
                                <p class="mb-0">Guest Lectuere</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section id="guidlines" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">Guidelines</h6>
                        <h1>Usefull Guides</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/blog-post-1.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">20 Mar, 2023</p>
                                <h5 class="mb-4">Portfolio Requirements</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/blog-post-2.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">22 Mar, 2023</p>
                                <h5 class="mb-4">Sample Portfolio</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/blog-post-3.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <p class="text-brand mb-2">23 Mar, 2023</p>
                                <h5 class="mb-4">Portfolio Deadlines</h5>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!---In case of any technical issue student would ask for help from admin-->
        <section id="help" class="full-height px-lg-5">
            <div class="container">

                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4" data-aos="fade-up">
                        <h6 class="text-brand">HELP</h6>
                        <h4>Stuck st some problem filling Portfolio ? </h4>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                        <form action="#" class="row g-lg-3 gy-3">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" placeholder="Enter subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" class="btn btn-brand">Contact Admin</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>
        <!-- //CONTACT -->

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Designed by <a href="#" class="fw-bold">theRuntimeTerrors</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="#"><i class="lab la-twitter"></i></a>
                            <a href="#"><i class="lab la-instagram"></i></a>
                            <a href="#"><i class="lab la-dribbble"></i></a>
                            <a href="#"><i class="lab la-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //FOOTER -->

    </div>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>



</body>


