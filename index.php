<?php get_header(); ?>


<section class="hero">

    <div class="ellipse ellipse__position--top-left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse/Ellipse 2.svg" alt="">
    </div>
    <div class="ellipse ellipse__position--top-right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse/Ellipse 1.svg" alt="">
    </div>
    <div class="ellipse ellipse__position--top-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse/Ellipse 3.svg" alt="">
    </div>
    </div>
    <div class="container">
        <div class="hero__content">
            <h1 class="hero__title fade-in-delay-1">Our Expertise in Action</h1>

            <p class="hero__text fade-in-delay-3">
                Every project is a chance to craft something unique and memorable. We
                go beyond tasks -analyzing needs and turning ideas into impactful
                solutions.
            </p>

            <a href="" class="button-primary modal__btn">Contact Us</a>
        </div>
    </div>

</section>

<!-- Modal -->
<div class="modal__wrapper">
    <div class="modal">
        <div class="modal__close"> <img src="<?php echo get_template_directory_uri(); ?>/img/cancel.svg" alt="cancel"
                width="10px" height="10px"></div>
        <h2 class="modal__title">Contact Us</h2>
        <form class="modal__body" action="">
            <input class="modal__input" type="text" placeholder="Enter your first name">
            <input class="modal__input" type="text" placeholder="Enter your phone number">
            <input class="modal__input" type="text" placeholder="Enter your last name">
            <input class="modal__input" type="text" placeholder="Enter your email">
            <input class="modal__input" type="text" placeholder="Enter your comment">
            <input class="button-secondary modal__btn" type="submit" value="Submit">
        </form>


    </div>
</div>
<!-- <a href="#" class="btn modal__btn modal__close">Open modal</a> -->

<section class="projects">
    <div class="container">
        <div class="projects__content portfolio__content">
            <h2 class="projects__content-title portfolio__content-title">
                Proud
                Projects -
            </h2>
            <span class="projects__content-text portfolio__content-text">clients trust Lucidica, and we<br />
                value each one of them.</span>
        </div>
    </div>
    <div class="swiper projects__slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide projects__slider-item">
                <img class="projects__slider-img" src="<?php echo get_template_directory_uri(); ?>/img/project-1.jpg"
                    alt="" />
                <h5 class="projects__slider-title">Lucidica Website</h5>
                <p class="projects__slider-text">
                    We developed a WordPress website for Lucidica, providing a modern, user-friendly, and
                    performance-optimized platform
                </p>
            </div>
            <div class="swiper-slide projects__slider-item">
                <img class="projects__slider-img" src="<?php echo get_template_directory_uri(); ?>/img/project-1.jpg"
                    alt="" />
                <h5 class="projects__slider-title">Project 2</h5>
                <p class="projects__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                    quos.
                </p>
            </div>
            <div class="swiper-slide projects__slider-item">
                <img class="projects__slider-img" src="<?php echo get_template_directory_uri(); ?>/img/project-1.jpg"
                    alt="" />
                <h5 class="projects__slider-title">Project 3</h5>
                <p class="projects__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                    quos.
                </p>
            </div>
            <div class="swiper-slide projects__slider-item">
                <img class="projects__slider-img" src="<?php echo get_template_directory_uri(); ?>/img/project-1.jpg"
                    alt="" />
                <h5 class="projects__slider-title">Project 4</h5>
                <p class="projects__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                    quos.
                </p>
            </div>
            <div class="swiper-slide projects__slider-item">
                <img class="projects__slider-img" src="<?php echo get_template_directory_uri(); ?>/img/project-1.jpg"
                    alt="" />
                <h5 class="projects__slider-title">Project 5</h5>
                <p class="projects__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                    quos.
                </p>
            </div>
            <div class="swiper-slide projects__slider-item">
                <img class="projects__slider-img" src="<?php echo get_template_directory_uri(); ?>/img/project-1.jpg"
                    alt="" />
                <h5 class="projects__slider-title">Project 6</h5>
                <p class="projects__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                    quos.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="<?php echo home_url(); ?>/projects" class="button-primary">Explore our work</a>
    </div>
</section>

<section class="impact">
    <div class="container">
        <div class="impact__wrapper">
            <div class="impact__blocks">
                <div class="impact__blocks-item">
                    <h6 class="impact__blocks-item__title">25+</h6>
                    <p class="impact__blocks-item__text">
                        Years of seccsefull collaborations worldwide - helping businesses
                        scale and grow
                    </p>
                </div>
                <div class="impact__blocks-item">
                    <h6 class="impact__blocks-item__title">100%</h6>
                    <p class="impact__blocks-item__text">
                        Individual approach to each project – we create solutions tailored
                        to your business goals.
                    </p>
                </div>
                <div class="impact__blocks-item">
                    <h6 class="impact__blocks-item__title">90%</h6>
                    <p class="impact__blocks-item__text">
                        Of clients become our friends and return to us again – based on
                        trust and quality.
                    </p>
                </div>
                <div class="impact__blocks-item">
                    <h6 class="impact__blocks-item__title">50+</h6>
                    <p class="impact__blocks-item__text">
                        Completed web projects – from landing pages to complex platforms
                        with deep integration.
                    </p>
                </div>
            </div>

            <div class="impact__content">
                <h2 class="impact__content-title">Proven Impact</h2>
                <p class="impact__content-text">
                    Our portfolio highlights real-world cases that demonstrate how
                    creativity, strategy, and attention to detail drive success.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="testimonials__content portfolio__content">
            <h2 class="testimonials__content-title portfolio__content-title">
                Proud
                Projects -
            </h2>
            <span class="testimonials__content-text portfolio__content-text">clients trust Lucidica, and we<br />
                value each one of them.</span>
        </div>
    </div>
    <div class="swiper testimonials__slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide testimonials__slider-item">
                <div class="testimonials__wrapper">
                    <div class="testimonials__slider-content">
                        <div class="testimonials__slider-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                        </div>
                        <div class="testimonials__slider-subtitle">CEO</div>
                        <div class="testimonials__slider-title">
                            User Name
                        </div>
                    </div>
                    <div class="testimonials__slider-content--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/user-img.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                </div>
                <a href="#" class="button-secondary">Read More</a>
            </div>


            <div class="swiper-slide testimonials__slider-item">
                <div class="testimonials__wrapper">
                    <div class="testimonials__slider-content">
                        <div class="testimonials__slider-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                        </div>
                        <div class="testimonials__slider-subtitle">CEO</div>
                        <div class="testimonials__slider-title">
                            User Name
                        </div>
                    </div>
                    <div class="testimonials__slider-content--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/user-img.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                </div>
                <a href="#" class="button-secondary">Read More</a>
            </div>
            <div class="swiper-slide testimonials__slider-item">
                <div class="testimonials__wrapper">
                    <div class="testimonials__slider-content">
                        <div class="testimonials__slider-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                        </div>
                        <div class="testimonials__slider-subtitle">CEO</div>
                        <div class="testimonials__slider-title">
                            User Name
                        </div>
                    </div>
                    <div class="testimonials__slider-content--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/user-img.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                </div>
                <a href="#" class="button-secondary">Read More</a>
            </div>
            <div class="swiper-slide testimonials__slider-item">
                <div class="testimonials__wrapper">
                    <div class="testimonials__slider-content">
                        <div class="testimonials__slider-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                        </div>
                        <div class="testimonials__slider-subtitle">CEO</div>
                        <div class="testimonials__slider-title">
                            User Name
                        </div>
                    </div>
                    <div class="testimonials__slider-content--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/user-img.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                </div>
                <a href="#" class="button-secondary">Read More</a>
            </div>
            <div class="swiper-slide testimonials__slider-item">
                <div class="testimonials__wrapper">
                    <div class="testimonials__slider-content">
                        <div class="testimonials__slider-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                        </div>
                        <div class="testimonials__slider-subtitle">CEO</div>
                        <div class="testimonials__slider-title">
                            User Name
                        </div>
                    </div>
                    <div class="testimonials__slider-content--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/user-img.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                </div>
                <a href="#" class="button-secondary">Read More</a>
            </div>
            <div class="swiper-slide testimonials__slider-item">
                <div class="testimonials__wrapper">
                    <div class="testimonials__slider-content">
                        <div class="testimonials__slider-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                        </div>
                        <div class="testimonials__slider-subtitle">CEO</div>
                        <div class="testimonials__slider-title">
                            User Name
                        </div>
                    </div>
                    <div class="testimonials__slider-content--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/user-img.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                </div>
                <a href="#" class="button-secondary">Read More</a>
            </div>
            <div class="swiper-slide testimonials__slider-item">
                <div class="testimonials__wrapper">
                    <div class="testimonials__slider-content">
                        <div class="testimonials__slider-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star" />
                        </div>
                        <div class="testimonials__slider-subtitle">CEO</div>
                        <div class="testimonials__slider-title">
                            User Name
                        </div>
                    </div>
                    <div class="testimonials__slider-content--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/user-img.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials__slider-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
                </div>
                <a href="#" class="button-secondary">Read More</a>
            </div>
        </div>


</section>




<?php get_footer(); ?>