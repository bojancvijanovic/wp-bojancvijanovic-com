<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <title>Bojan Cvijanovic</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <?php
    
    wp_head();

    ?>


</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M46.3455 27.0968H44.7102C43.6496 27.0968 42.7313 27.8014 42.446 28.8083C40.3205 36.3101 33.3428 41.8065 25.0499 41.8065C15.0679 41.8065 6.98811 33.8424 6.98811 24C6.98811 14.1592 15.0663 6.19359 25.0499 6.19359C33.3416 6.19359 40.3203 11.689 42.446 19.1915C42.7313 20.1986 43.6498 20.9033 44.7105 20.9033H46.3447C47.8867 20.9033 49.0101 19.4677 48.6254 17.9956C45.911 7.60678 36.3182 -0.0585979 24.9191 0.00033753C11.4659 0.0700149 0.677495 10.7884 0.705864 24.0517C0.734134 37.2828 11.6225 48 25.0499 48C36.4006 48 45.9366 40.3413 48.6318 29.9796C49.0122 28.5172 47.8768 27.0968 46.3455 27.0968V27.0968Z"
                        fill="white" />
                    <path
                        d="M30.74 23.112C32.156 23.376 33.32 24.084 34.232 25.236C35.144 26.388 35.6 27.708 35.6 29.196C35.6 30.54 35.264 31.728 34.592 32.76C33.944 33.768 32.996 34.56 31.748 35.136C30.5 35.712 29.024 36 27.32 36H16.484V10.872H26.852C28.556 10.872 30.02 11.148 31.244 11.7C32.492 12.252 33.428 13.02 34.052 14.004C34.7 14.988 35.024 16.104 35.024 17.352C35.024 18.816 34.628 20.04 33.836 21.024C33.068 22.008 32.036 22.704 30.74 23.112ZM21.524 21.24H26.132C27.332 21.24 28.256 20.976 28.904 20.448C29.552 19.896 29.876 19.116 29.876 18.108C29.876 17.1 29.552 16.32 28.904 15.768C28.256 15.216 27.332 14.94 26.132 14.94H21.524V21.24ZM26.6 31.896C27.824 31.896 28.772 31.608 29.444 31.032C30.14 30.456 30.488 29.64 30.488 28.584C30.488 27.504 30.128 26.664 29.408 26.064C28.688 25.44 27.716 25.128 26.492 25.128H21.524V31.896H26.6Z"
                        fill="white" />
                </svg>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#technology">Technologies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#myskills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mytimeline">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactme">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>



    <section id="home" class="intro-section">
        <div class="container">
            <div class="row align-items-center text-white">
                <div class="col-md-6 intros">
                    <h1 class="display-2">
                        <span class="display-2--intro">
                            Hello, my name is Bojan!
                        </span>
                        <span class="display-2--description lh-base">
                            I'm a web engineer with lots of experience in various areas. Explore this page to find out
                            more about me!
                        </span>
                    </h1>


                    <a href="#technology" class="rounded-pill btn-rounded">Let's go!
                        <span>
                            <i class="fas fa-arrow-right"></i>
                        </span>

                    </a>



                </div>

                <div class="col-md-6 mt-5 intros text-end">
                    <div class="video-box">
                      
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arts/logo.svg" class="img-fluid" alt="">
                       
                    </div>

                </div>
            </div>
        </div>

        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 160" version="1.1"
            xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(243, 106, 62, 1)" offset="0%" />
                    <stop stop-color="rgba(255, 179, 11, 1)" offset="100%" />
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="#ffffff"
                d="M0,48L26.7,56C53.3,64,107,80,160,93.3C213.3,107,267,117,320,125.3C373.3,133,427,139,480,136C533.3,133,587,123,640,109.3C693.3,96,747,80,800,77.3C853.3,75,907,85,960,93.3C1013.3,101,1067,107,1120,101.3C1173.3,96,1227,80,1280,77.3C1333.3,75,1387,85,1440,98.7C1493.3,112,1547,128,1600,130.7C1653.3,133,1707,123,1760,114.7C1813.3,107,1867,101,1920,106.7C1973.3,112,2027,128,2080,117.3C2133.3,107,2187,69,2240,50.7C2293.3,32,2347,32,2400,29.3C2453.3,27,2507,21,2560,26.7C2613.3,32,2667,48,2720,53.3C2773.3,59,2827,53,2880,45.3C2933.3,37,2987,27,3040,32C3093.3,37,3147,59,3200,61.3C3253.3,64,3307,48,3360,53.3C3413.3,59,3467,85,3520,80C3573.3,75,3627,37,3680,42.7C3733.3,48,3787,96,3813,120L3840,144L3840,160L3813.3,160C3786.7,160,3733,160,3680,160C3626.7,160,3573,160,3520,160C3466.7,160,3413,160,3360,160C3306.7,160,3253,160,3200,160C3146.7,160,3093,160,3040,160C2986.7,160,2933,160,2880,160C2826.7,160,2773,160,2720,160C2666.7,160,2613,160,2560,160C2506.7,160,2453,160,2400,160C2346.7,160,2293,160,2240,160C2186.7,160,2133,160,2080,160C2026.7,160,1973,160,1920,160C1866.7,160,1813,160,1760,160C1706.7,160,1653,160,1600,160C1546.7,160,1493,160,1440,160C1386.7,160,1333,160,1280,160C1226.7,160,1173,160,1120,160C1066.7,160,1013,160,960,160C906.7,160,853,160,800,160C746.7,160,693,160,640,160C586.7,160,533,160,480,160C426.7,160,373,160,320,160C266.7,160,213,160,160,160C106.7,160,53,160,27,160L0,160Z" />
        </svg>

    </section>


    <div id="technology"></div>
    <section id="technologies" class="technologies">
        <div class="container">
            <div class="row text-center">
                <h4 class="fw-bold lead mb-3">Some of the technologies I'm experienced with</h4>
                <div class="heading-line mb-5"></div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="/assets/images/technologies/technology-1.png"
                            alt="HTML" title="HTML" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-2.png"
                            alt="CSS" title="CSS" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-3.png"
                            alt="JavaScript" title="JavaScript" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-4.png"
                            alt="ECMAScript 6" title="ECMAScript 6" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-5.png"
                            alt="Bootstrap" title="Bootstrap" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-6.png"
                            alt="SASS" title="SASS" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-7.png"
                            alt="Node.js" title="Node.js" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-8.png"
                            alt="NPM" title="NPM" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-9.png"
                            alt="Puppeteer" title="Puppeteer" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-10.png"
                            alt="Python" title="Python" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-11.png"
                            alt="BASH" title="BASH" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-12.png"
                            alt="PowerShell" title="PowerShell" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-13.png"
                            alt="Git" title="Git" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-14.png"
                            alt="Subversion" title="Subversion" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-15.png"
                            alt="Jira" title="Jira" class="img-fluid"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="technologies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies/technology-16.png"
                            alt="Figma" title="Figma" class="img-fluid"></div>
                </div>

            </div>
        </div>
    </section>

    <div id="myskills"></div>

    <section id="skills" class="skills">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold">
                    My skills
                </h1>
                <div class="heading-line mb-1"></div>
            </div>
        </div>


        <div class="container">
            <div class="row pt-2 bp-2 mt-5 mb-3">
                <div class="col-md-6 border-right">
                    <div class="p-3">
                        <h2 class="fw-bold text-center">
                            I have experience in web development and engineering.
                        </h2>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="p-4 text-start">
                        <p class="skills-description">
                            I have worked on various projects - from small personal portfolio pages like this one to
                            large-scale commercial applications, like the UI of a booking engine for one of the biggest
                            hotel chains in the world.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 skills mt-4">
                    <div class="skills__content">
                        <div class="icon d-block fas fa-code mb-2"></div>
                        <h3 class="display-3--title mt-1">Web development</h3>
                        <p class="lh-lg skills-description"> I've always strived to create the visually appealing design
                            while also emphasizing performance. While working at my current position, I managed to raise
                            my skills to another level, and learn how to fully utilize lots of different tools. I learn
                            daily and always try to expand my tech skills as much as possible. My primary focus is on
                            building high-quality user interfaces, mostly relying on the power of SCSS combined with the
                            Bootstrap 5 framework.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 skills mt-4 text-end">
                    <div class="skills__pic">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skills/development.png" alt="Web development" class="img-fluid">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 skills mt-4 text-start large-scr-picture">
                    <div class="skills__pic">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skills/communication.png" alt="Communication skills" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 skills mt-4">
                    <div class="skills__content">
                        <div class="icon d-block fas fa-earth-americas mb-2"></div>

                        <h3 class="display-3--title mt-1">Communication skills</h3>
                        <p class="lh-lg skills-description">I have learned to communicate my ideas clearly and
                            concisely. My English teaching days have taught me how to easily approach people of
                            different age groups, nationalities, professions. I perfected my English skills, but also
                            gained something far more important - a heightened sensibililty to other people's thoughts
                            and intentions. This has helped me tremendously throughout my career, especially in the
                            context of a big international company.

                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 skills mt-4 text-start small-scr-picture">
                    <div class="skills__pic">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skills/communication.png" alt="Communication skills" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 skills mt-4">
                    <div class="skills__content">
                        <div class="icon d-block fas fa-chart-line mb-2"></div>

                        <h3 class="display-3--title mt-1">Business mindset</h3>
                        <p class="lh-lg skills-description"> As a web engineer, I've always been able to fully utilize
                            my business and economics background. I've been closely cooperating with project managers on
                            various tasks, and I've been able to understand and even improve the processes within the
                            organization. Additionally, understanding the details of how payment systems, databases and
                            many other core parts of e-commerce work, which I've learnt in college, significantly helped
                            me while working on my clients' websites.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 skills mt-4 text-end">
                    <div class="skills__pic">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skills/success.png" alt="Business mindset" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </section>



    <div id="mytimeline"></div>
    <section id="timeline" class="timeline">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold">Here's my story</h1>
                <div class="heading-line"></div>
                <p class="skills-description">The brief history of my work and education, in chronological order</p>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="accordion" id="myaccordion">


                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    2021 - Started working at TransPerfect
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#myaccordion">
                                <div class="accordion-body">
                                    Here I have grown into an independent web engineer. I've solved issues with many
                                    different parts of websites and web apps, raging from common CSS formatting problems
                                    to issues with APIs on proxy servers. I have shown innitiative and the willingness
                                    to keep growing as a developer by taking on more complex tasks every day. My desire
                                    is to keep moving forward into the world of front-end web development.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2020 - Started my own company
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#myaccordion">
                                <div class="accordion-body">
                                    My goal was to invest my skills, time, money and energy into creating an online
                                    teaching service that would benefit all its users. I've faced many obstacles, and
                                    I've learned so much during this time. Together with my wife and some of my
                                    colleages, I created a complete business plan for a future operation, that would be
                                    organized as a private limited company, and my responsibility was to develop the
                                    company's website. However, the changes in the online teaching market which we were
                                    all part of caused severe financial strains that finally ended the entrepreneurship.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    2022 - Graduated from the Faculty of Economics
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#myaccordion">
                                <div class="accordion-body">
                                    I'm very proud to say that I was a student of the Faculty of Economics in
                                    Kragujevac. I graduated with a GPA of 9,81 but refused to pursue further academic
                                    career in this field. I firmly believe that I am a creator and I'm only fulfilled in
                                    the roles that bring new challenges and exciting opportunities. During my studies, I
                                    have been chosen for a role of the Educational Quality Coordinator, as a member of
                                    the Student Parliamnet. My job was to make sure that the professors respect the
                                    students' needs when it comes to the exams, scheduling, and more. I also
                                    participated in competitions and, together with my team, won first place in
                                    international case study competitions, twice. I was elected 'Student of the year'
                                    for 2017. and 2018.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    2018 - Started teaching English online
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#myaccordion">
                                <div class="accordion-body">
                                    This is where I learned what a global job market looks like, how international teams
                                    work and cooperate and how to communicate in a real business environment. Needless
                                    to say, I had to go through months of tutorials, courses and trainings to prepare
                                    myself for this role. I've met people from all over the globe and it truly was an
                                    eye-opening experience. Another skill that I gained while teaching is the ability to
                                    explain my ideas plainly, so that even a five-year-old can understand them. The
                                    powers of this Feynman Technique are endless and it has become one of the most
                                    important components of my learning process.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    2016 - Graduated from the High School of Economics and Trade
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#myaccordion">
                                <div class="accordion-body">
                                    I graduated with the perfect GPA of 5.0 and the title of 'The Best Student of the
                                    Generation'. I've actively participated in countless extracurricular activities - I
                                    wrote articles for the school's magazine, designed it's covers, organized events and
                                    presented on them. I'd say that my greatest achievements in this period are the fist
                                    place in the national competition in Statistic, third place in Business Economics,
                                    and the fifth place in the national competition in Serbian language and literature.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    2016 - Graduated from the Musical High School 'Stevan Mokranjac'
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#myaccordion">
                                <div class="accordion-body">
                                    While attending the economics highschool, I also went to the second high school -
                                    I've studied music. I played piano and studied classical composing. I also played
                                    guitar and participated in different bands and orchestras. Music has always been my
                                    passion. I also graduated with the perfect score of 5.0, but I chose not to pursue
                                    the career in music as I was afraid that it could ruin my love for the art itself. I
                                    still play both piano and guitar and it brings so much joy in my life. I believe
                                    that composing music and creating software have many things in common and my
                                    artistic background definitely helps me with the creative part of web development.

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="contactme"></div>
    <section id="contact" class="get-started">

        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold">
                    Let's get in touch!
                </h1>
                <div class="heading-line"></div>
                <p class="lh-lg lead">
                </p>
            </div>

            <div class="row text-white">
                <div class="col-12 col-lg-6 gradient shadow p-3">
                    <div class="cta-info w-100">
                        <h4 class="display-4 fw-bold">
                            We're just a few clicks away.  
                        </h4>
                        <p class="lh-lg">
                            I'll be happy to answer your questions or schedule a meeting where we can talk more!
                        </p>
                        <h3 class="display-3--brief">
                            Contact info
                        </h3>
                        <ul class="cta-info__list">
                            <!--  <li> <i class="fa-solid fa-phone"></i></i></li> -->
                            <li> <i class="fa-solid fa-envelope"></i>contact@bojancvijanovic.com</li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6 bg-white shadow p-3">
                    <div class="form w-100 bp-2">
                        <h4 class="display-3--title mb-5">
                            Contact me
                        </h4>

                        <form action="https://formspree.io/f/xkneokel" class="row" method="POST">


                            <div class="col-lg-6 mb-3">
                                <input name="FirstName" type="text" placeholder="Name*" id="inputFirstName"
                                    class="form-control shadow form-control-lg" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input name="LastName" type="text" placeholder="Last name" id="inputLasttName"
                                    class="form-control shadow form-control-lg">

                            </div>
                            <div class="mb-3">

                                <input type="email" name="email" placeholder="Email*" id="inputEmail"
                                    class="form-control shadow form-control-lg" required>

                            </div>


                            <div class="mb-3">

                                <textarea name="message" rows="8" placeholder="Message*" id="message"
                                    class="form-control shadow form-control-lg" required></textarea>
                            </div>

                            <div class="text-center d-grid mt-1">
                                <button class="btn btn-primary rounded-pill pt-3 pb-3" type="submit">Send <i
                                        class="fas fa-paper-plane"></i></button>

                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="footer">
        <div class="footer-bottom pt-5 pb-5">
            <div class="container">
                <div class="row text-center text-white">
                    <div class="col-12">
                        <div class="footer-bottom__copyright">
                            © Copyright 2022 <a href="#">Bojan Cvijanovic</a> | Created by <a
                                href="mailto:contact@bojancvijanovic.com" target="_blank">Bojan Cvijanovic</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

<?php
    wp_footer();
?>

</body>

</html>