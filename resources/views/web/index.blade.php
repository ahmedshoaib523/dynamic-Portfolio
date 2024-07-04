@extends('web.layouts.master')
@section('content')
    <section class="hero-section page-section scroll-to-page" id="home">
        <div class="custom-container">
            <div class="hero-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-home"></i> Welcome
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Greetings from
                        <span>Ahmed Shoaib</span>, Your Front-End & Back-End Developer
                    </h1>
                </div>
                <p class="scroll-animation" data-animation="fade_from_bottom">I design and develop beautifully
                    simple solutions, and I love what I do. It's as simple as that!</p>
                <a href="#portfolio" class="go-to-project-btn scroll-to scroll-animation" data-animation="rotate_up">
                    <img src="{{ asset('assets/web/images/round-text.png') }}" alt="Rounded Text">
                    <i class="fa-regular fa-arrow-down"></i>
                </a>

                <div class="facts d-flex">
                    <div class="left scroll-animation" data-animation="fade_from_left">
                        <h1>1+</h1>
                        <p>Years of <br>Experience</p>
                    </div>
                    <div class="right scroll-animation" data-animation="fade_from_right">
                        <h1>100+</h1>
                        <p>projects completed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area page-section scroll-to-page" id="about">
        <div class="custom-container">
            <div class="about-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-user"></i> About Me
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Every great design begins
                        with<br>
                        an even <span>better story</span></h1>
                </div>
                <p class="scroll-animation" data-animation="fade_from_bottom">Since starting my journey as
                    a freelance designer nearly 3 years ago, I’ve worked remotely with agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use. I'm quietly confident, naturally curious, and continually working on enhancing my skills, tackling one design challenge at a time.</p>
            </div>
        </div>
    </section>


    <section class="resume-area page-section scroll-to-page" id="resume">
        <div class="custom-container">
            <div class="resume-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-briefcase"></i> Resume
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Education &
                        <span>Experience</span>
                    </h1>
                </div>

                <div class="resume-timeline">
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2022 - Present</span>
                        <h2>Developer at Sybex Lab</h2>
                        <h3>Front-End Development</h3>
                        <p>HTML5, Bootstrap, CSS3, JavaScript, jQuery, WordPress</p>
                        <h3>Back-End Development</h3>
                        <p>PHP, Laravel, MySQL, ASP.NET MVC, SQL</p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2021 - 2024</span>
                        <h2>Higher Diploma in Software Engineering</h2>
                        <p>Aptech Star Gate, Karachi</p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2017 - 2019</span>
                        <h2>Intermediate</h2>
                        <p>Karachi Board</p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2015 - 2017</span>
                        <h2>Matriculation</h2>
                        <p>Karachi Board</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area page-section scroll-to-page" id="services">
        <div class="custom-container">
            <div class="services-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-stream"></i> Services
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">My
                        <span>Specializations</span>
                    </h1>
                </div>

                <div class="services-items">
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-code"></i>
                        <h2>Web Development</h2>
                        <p>I create and launch websites using Framer, Webflow, or WordPress, ensuring they are fully functional and visually appealing.</p>
                        <span class="projects">100+ Projects Completed</span>
                    </div>
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-paint-brush"></i>
                        <h2>UI/UX Design</h2>
                        <p>I design user interfaces and user experiences that are both beautiful and intuitive, enhancing user satisfaction and engagement.</p>
                        <span class="projects">50+ Projects Designed</span>
                    </div>
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-database"></i>
                        <h2>Backend Development</h2>
                        <p>I develop robust back-end solutions using PHP, Laravel, and MySQL, ensuring your website operates smoothly and efficiently.</p>
                        <span class="projects">30+ Backend Solutions Implemented</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills-area page-section scroll-to-page" id="skills">
        <div class="custom-container">
            <div class="skills-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-shapes"></i> my skills
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">My
                        <span>Advantages</span>
                    </h1>
                </div>

                <div class="row skills text-center">
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/web/images/figma.png') }}" alt="Figma">
                                <h1 class="percent">90%</h1>
                            </div>
                            <p class="name">Html</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/web/images/framer.png') }}" alt="Framer">
                                <h1 class="percent">80%</h1>
                            </div>
                            <p class="name">CSS</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/web/images/webflow.png') }}" alt="Webflow">
                                <h1 class="percent">70%</h1>
                            </div>
                            <p class="name">Javascript</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/web/images/laravel.png') }}" alt="Laravel/PHP">
                                <h1 class="percent">85%</h1>
                            </div>
                            <p class="name">Laravel/PHP</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/web/images/wordpress.png') }}" alt="WordPress">
                                <h1 class="percent">60%</h1>
                            </div>
                            <p class="name">ASP.Net MVC</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/web/images/wordpress.png') }}" alt="WordPress">
                                <h1 class="percent">70%</h1>
                            </div>
                            <p class="name">WordPress</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="portfolio-area page-section scroll-to-page" id="portfolio">
        <div class="custom-container">
            <div class="portfolio-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-grip-vertical"></i> portfolio
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured
                        <span>Projects</span>
                    </h1>
                </div>

                <div class="row portfolio-items">
                    <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                        <div class="portfolio-item portfolio-full">
                            <div class="portfolio-item-inner">
                                <a href="assets/images/portfolio1.png') }}" data-lightbox="example-1">
                                    <img src="{{ asset('assets/web/images/portfolio1.png') }}" alt="Portfolio">
                                </a>

                                <ul class="portfolio-categories">
                                    <li>
                                        <a href="#">Html</a>
                                    </li>
                                    <li>
                                        <a href="#">Css</a>
                                    </li>
                                    <li>
                                        <a href="#">Jquery</a>
                                    </li>
                                </ul>
                            </div>
                            <h2><a href="#">Coffee - Coffee House Website</a></h2>
                        </div>
                    </div>

                    <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                        <div class="portfolio-item portfolio-half">
                            <div class="portfolio-item-inner">
                                <a href="assets/images/portfolio2.webp') }}" data-lightbox="example-1">
                                    <img src="{{ asset('assets/web/images/portfolio2.webp') }}" alt="Portfolio">
                                </a>

                                <img src="{{ asset('assets/web/images/portfolio2.webp') }}" alt="Portfolio">

                                <ul class="portfolio-categories">
                                    <li>
                                        <a href="#">Html</a>
                                    </li>
                                    <li>
                                        <a href="#">Css</a>
                                    </li>
                                    <li>
                                        <a href="#">Jqurey</a>
                                    </li>
                                </ul>
                            </div>
                            <h2><a href="#">Music Band</a></h2>
                        </div>
                    </div>

                    <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                        <div class="portfolio-item portfolio-half">
                            <div class="portfolio-item-inner">
                                <a href="assets/images/portfolio3.webp') }}" data-lightbox="example-1">
                                    <img src="{{ asset('assets/web/images/portfolio3.webp') }}" alt="Portfolio">
                                </a>

                                <ul class="portfolio-categories">
                                    <li>
                                        <a href="#">Html</a>
                                    </li>
                                    <li>
                                        <a href="#">Css</a>
                                    </li>
                                    <li>
                                        <a href="#">Jqurey</a>
                                    </li>
                                </ul>
                            </div>
                            <h2><a href="#">Beauty</a></h2>
                        </div>
                    </div>

                    <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                        <div class="portfolio-item portfolio-half">
                            <div class="portfolio-item-inner">
                                <a href="assets/images/portfolio4.jpg') }}" data-lightbox="example-1">
                                    <img src="{{ asset('assets/web/images/portfolio4.jpg') }}" alt="portfolio">
                                </a>

                                <ul class="portfolio-categories">
                                    <li>
                                        <a href="#">Figma</a>
                                    </li>
                                    <li>
                                        <a href="#">React</a>
                                    </li>
                                </ul>
                            </div>
                            <h2><a href="#">Hinterland - Real Estate Site Redesign</a></h2>
                        </div>
                    </div>

                    <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                        <div class="portfolio-item portfolio-half">
                            <div class="portfolio-item-inner">
                                <a href="assets/images/portfolio5.jpg') }}" data-lightbox="example-1">
                                    <img src="{{ asset('assets/web/images/portfolio5.jpg') }}" alt="portfolio">
                                </a>

                                <ul class="portfolio-categories">
                                    <li>
                                        <a href="#">Framer</a>
                                    </li>
                                </ul>
                            </div>
                            <h2><a href="#">Lewis Portfolio Framer Template</a></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonial-area page-section scroll-to-page" id="testimonial">
        <div class="custom-container">
            <div class="testimonial-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-comment"></i> testimonial
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Trusted by <span>Hundered
                            Clients</span></h1>
                </div>

                <div class="testimonial-slider-wrap scroll-animation" data-animation="fade_from_bottom">
                    <div class="owl-carousel testimonial-slider owl-theme">
                        <div class="testimonial-item">
                            <div class="testimonial-item-inner">
                                <div class="author d-flex align-items-center">
                                    <img src="{{ asset('assets/web/images/testimonial-1.jpg') }}" alt="portfolio">
                                    <div class="right">
                                        <h3>Paublo Dybala</h3>
                                        <p class="designation">CEO of <span>IBM Global</span></p>
                                    </div>
                                </div>
                                <p>“Drake - A Developer with the creativity, professional and
                                    master of code. Much more than what i'm expect.
                                    High quality product & flexiable price. Recommended!.”</p>

                                <a href="#" class="project-btn">Project</a>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-item-inner">
                                <div class="author d-flex align-items-center">
                                    <img src="{{ asset('assets/web/images/testimonial-2.jpg') }}" alt="portfolio">
                                    <div class="right">
                                        <h3>Christina Morillo</h3>
                                        <p class="designation">Product Management of <span>Invision App
                                                Inc</span></p>
                                    </div>
                                </div>
                                <p>“Drake was a real pleasure to work with and we look
                                    forward to working with him again. He's definitely the kind of
                                    designer that you can trust with any project from A-Z.”</p>

                                <a href="#" class="project-btn">Project</a>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-item-inner">
                                <div class="author d-flex align-items-center">
                                    <img src="{{ asset('assets/web/images/testimonial-3.jpg') }}" alt="portfolio">
                                    <div class="right">
                                        <h3>Phil Foden</h3>
                                        <p class="designation">Director of <span>Envato LLC</span></p>
                                    </div>
                                </div>
                                <p>“Extremely profressional and fast service!. Drake is a master
                                    of code and he also very creative. We done 3 projects with
                                    him and certain will continue.”</p>

                                <a href="#" class="project-btn">Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-footer-nav">
                        <div class="testimonial-nav d-flex align-items-center">
                            <button class="prev"><i class="fa-regular fa-angle-left"></i></button>
                            <div id="testimonial-slide-count"></div>
                            <button class="next"><i class="fa-regular fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="clients-logos">
                    <h4 class="scroll-animation" data-animation="fade_from_bottom">work with 60+ brands
                        worldwide</h4>
                    <div class="row align-items-center">
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                            <img src="{{ asset('assets/web/images/client-1.png') }}" alt="client">
                        </div>
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                            <img src="{{ asset('assets/web/images/client-2.png') }}" alt="client">
                        </div>
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                            <img src="{{ asset('assets/web/images/client-3.png') }}" alt="client">
                        </div>
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                            <img src="{{ asset('assets/web/images/client-4.png') }}" alt="client">
                        </div>
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                            <img src="{{ asset('assets/web/images/client-5.png') }}" alt="client">
                        </div>
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                            <img src="{{ asset('assets/web/images/client-6.png') }}" alt="client">
                        </div>
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                            <img src="{{ asset('assets/web/images/client-7.png') }}" alt="client">
                        </div>
                        <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                            <img src="{{ asset('assets/web/images/client-8.png') }}" alt="client">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pricing-area page-section scroll-to-page" id="pricing">
        <div class="custom-container">
            <div class="pricing-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-dollar-sign"></i> pricing
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Pricing</span>
                    </h1>
                </div>

                <div class="pricing-table-items">
                    <div class="row">
                        <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <div class="top d-flex justify-content-between align-items-start">
                                        <h4>basic</h4>
                                        <p class="text-right">Have design ready to build?<br>
                                            or small budget</p>
                                    </div>
                                    <h1>$49 <span>/ hours</span></h1>
                                </div>
                                <ul class="feature-lists">
                                    <li>Need your wireframe</li>
                                    <li>Design with Figma, Framer</li>
                                    <li>Implement with Webflow, React, WordPress, Laravel/PHP</li>
                                    <li>Remote/Online</li>
                                    <li>Work in business days, no weekend.</li>
                                    <li>Support 6 months</li>
                                </ul>
                                <a href="#" class="theme-btn">pick this package</a>
                            </div>
                        </div>
                        <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <div class="top d-flex justify-content-between align-items-start">
                                        <h4>premium</h4>
                                        <p class="text-right">Not have any design?<br>
                                            Leave its for me</p>
                                    </div>
                                    <h1>$99 <span>/ hours</span></h1>
                                </div>
                                <ul class="feature-lists">
                                    <li>Don't need wireframe or anything</li>
                                    <li>Design with Figma, Framer from scratch</li>
                                    <li>Implement with Webflow, React, WordPress, Laravel/PHP</li>
                                    <li>Remote/Online</li>
                                    <li>Work with both weekend</li>
                                    <li>Support 12 months</li>
                                    <li>Your project alway be priority</li>
                                    <li>Customer care gifts</li>
                                </ul>
                                <a href="#" class="theme-btn">pick this package</a>
                            </div>
                        </div>
                    </div>
                    <p class="info scroll-animation" data-animation="fade_from_bottom">
                        Don't find any package match with your plan!<br>
                        Want to setup a new tailor-made package for only you?. <a href="#">Contact Us</a>
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-area page-section scroll-content" id="contact">
        <div class="custom-container">
            <div class="contact-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="fa-regular fa-dollar-sign"></i> contact
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Let's Work
                        <span>Together!</span>
                    </h1>
                </div>
                <h3 class="scroll-animation" data-animation="fade_from_bottom">ahmedshoaib9381@gmail.com
                </h3>
                <p id="required-msg">* Marked fields are required to fill.</p>

                <form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST"
                    action="void:;">
                    <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                        Your message was sent successfully.
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="full-name">full Name <sup>*</sup></label>
                                <input type="text" name="full-name" id="full-name" placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="email">Email <sup>*</sup></label>
                                <input type="email" name="email" id="email" placeholder="Your email adress">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="phone-number">phone <span>(optional)</span></label>
                                <input type="text" name="phone-number" id="phone-number"
                                    placeholder="Your number phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="subject">subject <sup>*</sup></label>
                                <select name="subject" id="subject">
                                    <option value="">Select a subject</option>
                                    <option value="subject1">Subject 1</option>
                                    <option value="subject2">Subject 2</option>
                                    <option value="subject3">Subject 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <label for="budget">your budget <span>(optional)</span></label>
                                <input type="number" name="budget" id="budget"
                                    placeholder="A range budget for your project">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <label for="message">message</label>
                                <textarea name="message" id="message" placeholder="Wrire your message here ..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group upload-attachment">
                                <div>
                                    <label for="upload-attachment">
                                        <i class="fa-regular fa-cloud-upload-alt"></i> add an attachment
                                        <input type="file" name="file" id="upload-attachment">
                                    </label>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group submit-btn-wrap">
                                <button class="theme-btn" name="submit" type="submit" id="submit-form">send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
