 @extends('layouts.website')
<body id="homepage">

    <div id="wrapper">

        @extends('layouts.website_nav')

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <!-- section begin -->
            <section id="section-hero-2" class="full-height relative no-top no-bottom text-light " style="">

                <div id="particles-js"></div>

                <div class="overlay-bg t0">
                    <div class="center-y fadeScroll relative" data-scroll-speed="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mask">
                                        <h4 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color">Philosophy</span></h4>
                                    </div>
                                    <div class="mask">
                                        <h1 class="wow fadeInUp big" data-wow-delay="1s">Bring  Creative Solution<span class="id-color">.</span></h1>
                                    </div>
                                </div>
								
                                <div class="spacer-half"></div>
								
								<div class="col-md-6">
									<div class="mask">
										<p class="wow fadeInUp big" data-wow-delay="1.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
										eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt.
										</p>
                                    </div>
                                    <div class="spacer-half"></div>
                                    <a href="#section-about" class="wow fadeIn btn btn-custom" data-wow-delay="2s">Start Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <blockquote class="s1">For every complex problem, there is an answer that is clear, simple, and wrong.
                                <span class="by id-color">Words by H. L. Mencken</span>
                            </blockquote>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="mask">
                                <div class="cover">
                                    <h3><i class="id-color icon_easel_alt"></i><span>What Is Linea?</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                </div>
                                <img src="{{asset('/website/images/misc/1.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="mask">
                                <div class="cover">
                                    <h3><i class="id-color icon_cog"></i><span>What We Do?</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                </div>
                                <img src="{{asset('/website/images/misc/2.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-services" class="no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-bg t70">
                    <div class="container">

                        <div class="row sequence">
                            <div class="col-md-12 text-center">
                                <h2><span class="uptitle">Services</span>What We Do</h2>
                            </div>

                            <!-- feature box begin -->
                            <div class="col-md-4 col-sm-6 feature-box left mb30 sq-item wow sq-item wow">
                                <i class="icon_lightbulb_alt id-color"></i>
                                <div class="text">
                                    <h3>Design</h3>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                </div>
                            </div>
                            <!-- feature box close -->

                            <!-- feature box begin -->
                            <div class="col-md-4 col-sm-6 feature-box left mb30 sq-item wow">
                                <i class="icon_datareport id-color"></i>
                                <div class="text">
                                    <h3>Marketing</h3>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                </div>
                            </div>
                            <!-- feature box close -->

                            <!-- feature box begin -->
                            <div class="col-md-4 col-sm-6 feature-box left mb30 sq-item wow">
                                <i class="icon_camera_alt id-color"></i>
                                <div class="text">
                                    <h3>Photography</h3>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                </div>
                            </div>
                            <!-- feature box close -->

                            <!-- feature box begin -->
                            <div class="col-md-4 col-sm-6 feature-box left mb30 sq-item wow">
                                <i class="icon_tag_alt id-color"></i>
                                <div class="text">
                                    <h3>Branding</h3>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                </div>
                            </div>
                            <!-- feature box close -->

                            <!-- feature box begin -->
                            <div class="col-md-4 col-sm-6 feature-box left mb30 sq-item wow">
                                <i class="icon_pencil-edit id-color"></i>
                                <div class="text">
                                    <h3>Development</h3>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                </div>
                            </div>
                            <!-- feature box close -->

                            <!-- feature box begin -->
                            <div class="col-md-4 col-sm-6 feature-box left mb30 sq-item wow">
                                <i class="icon_search id-color"></i>
                                <div class="text">
                                    <h3>SEO</h3>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                </div>
                            </div>
                            <!-- feature box close -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-portfolio" aria-label="section-portfolio">
                <div class="container">

                    <!-- portfolio filter begin -->
                    <div class="row">
					
						<div class="col-md-12 text-center">
                            <h2><span class="uptitle">Recent</span>Portfolio</h2>
                        </div>

                        <div class="col-md-12 text-center">
                            <ul id="filters">
                                <li><a href="#" data-filter="*" class="selected">all projects</a></li>
                                <li><a href="#" data-filter=".illustration">illustration</a></li>
                                <li><a href="#" data-filter=".mobile">mobile</a></li>
                                <li><a href="#" data-filter=".photography">photography</a></li>
                                <li><a href="#" data-filter=".website">website</a></li>
                            </ul>




                            <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_3_cols grid sequence">

                                <!-- gallery item -->
                                <div class="item illustration website gallery-item">
                                    <div class="picframe wow">
                                        <a class="image-popup" href="{{asset('/website/images/portfolio/pf%20(1).jpg')}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="{{asset('/website/images/portfolio/pf%20(1).jpg')}}" class="wow" alt=""/>
										</a>
                                    </div>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item photography gallery-item">
                                    <div class="picframe wow">
                                        <a class="image-popup" href="{{asset('/website/images/portfolio/pf%20(2).jpg')}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="{{asset('/website/images/portfolio/pf%20(2).jpg')}}" class="wow" alt="" />
										</a>
                                    </div>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item illustration gallery-item">
                                    <div class="picframe wow">
                                        <a class="image-popup" href="{{asset('/website/images/portfolio/pf%20(3).jpg')}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="{{asset('/website/images/portfolio/pf%20(3).jpg')}}" class="wow" alt="" />
										</a>
                                    </div>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item photography illustration mobile gallery-item">
                                    <div class="picframe wow">
                                        <a class="image-popup" href="{{asset('/website/images/portfolio/pf%20(4).jpg')}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="{{asset('/website/images/portfolio/pf%20(4).jpg')}}" class="wow" alt="" />
										</a>
                                    </div>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item photography mobile website gallery-item">
                                    <div class="picframe wow">
                                        <a class="image-popup" href="{{asset('/website/images/portfolio/pf%20(5).jpg')}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="{{asset('/website/images/portfolio/pf%20(5).jpg')}}" class="wow" alt="" />
										</a>
                                    </div>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item mobile website gallery-item">
                                    <div class="picframe wow">
                                        <a class="image-popup" href="{{asset('/website/images/portfolio/pf%20(6).jpg')}}">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="{{asset('/website/images/portfolio/pf%20(6).jpg')}}" class="wow" alt="" />
										</a>
                                    </div>
                                </div>
                                <!-- close gallery item -->

                            </div>
                        </div>
                        <!-- portfolio filter close -->

                    </div>

                </div>


            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-process" class="text-light no-top no-bottom" data-bgcolor="#333" data-stellar-background-ratio=".2">
                <div class="overlay-bg t70">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2><span class="uptitle">STEPS</span>Our Process</h2>
                            </div>


                            <div class="col-md-12">
                                <div class="de_tab tab_steps style-2">
                                    <ul class="de_nav">
                                        <li class="active wow fadeInRight" data-wow-delay="0s"><span><i class="icon_lightbulb_alt"></i>Idea</span>
                                            <div class="arrow"></div>
                                        </li>
                                        <li class="wow fadeInRight" data-wow-delay=".3s"><span><i class="icon_easel"></i>Design</span>
                                            <div class="arrow"></div>
                                        </li>
                                        <li class="wow fadeInRight" data-wow-delay=".6s"><span><i class="icon_pencil-edit"></i>Develop</span>
                                            <div class="arrow"></div>
                                        </li>
                                        <li class="wow fadeInRight" data-wow-delay=".9s"><span><i class="icon_datareport"></i>Result</span>
                                            <div class="arrow"></div>
                                        </li>
                                    </ul>

                                    <div class="de_tab_content">

                                        <div id="tab1">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                            sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                        </div>

                                        <div id="tab2">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. Sed ut perspiciatis unde omnis
                                            iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                            quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        </div>

                                        <div id="tab3">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                            sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                        </div>

                                        <div id="tab4">
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                                            quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-testimonial" aria-label="section-testimonial" data-bgcolor="#f8f8f8">
                <div id="testimonial-carousel" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/1.jpg')}}" class="img-circle" alt="">
                                    <span>John, Pixar Studio</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/2.jpg')}}" class="img-circle" alt="">
                                    <span>Sarah, Microsoft</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/3.jpg')}}" class="img-circle" alt="">
                                    <span>Michael, Apple</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/4.jpg')}}" class="img-circle" alt="">
                                    <span>Thomas, Samsung</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/1.jpg')}}" class="img-circle" alt="">
                                    <span>John, Pixar Studio</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/2.jpg')}}" class="img-circle" alt="">
                                    <span>Sarah, Microsoft</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/3.jpg')}}" class="img-circle" alt="">
                                    <span>Michael, Apple</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi opt-2">
                            <blockquote>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                                <div class="de_testi_by">
                                    <img src="{{asset('/website/images/people/4.jpg')}}" class="img-circle" alt="">
                                    <span>Thomas, Samsung</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-team" class="text-light no-top no-bottom" data-bgcolor="#333" data-stellar-background-ratio=".2">
                <div class="overlay-bg t70">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2><span class="uptitle">Behind</span>The Scene</h2>

                                <div class="row sequence">

                                    <div class="col-md-3 col-sm-6 sq-item wow">
                                        <div class="profile_pic text-center">
                                            <figure class="picframe mb30">
                                                <a class="image-popup" href="{{asset('/website/images/team/1.jpg')}}">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                                <img src="{{asset('/website/images/team/1.jpg')}}" class="img-fluid" alt="">
                                            </figure>

                                            <h3>Oscar Helman</h3>
                                            <span class="subtitle">Founder & CEO</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 sq-item wow">
                                        <div class="profile_pic text-center">
                                            <figure class="picframe mb30">
                                                <a class="image-popup" href="{{asset('/website/images/team/2.jpg')}}">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                                <img src="{{asset('/website/images/team/2.jpg')}}" class="img-fluid" alt="">
                                            </figure>

                                            <h3>Isaac Nicholas</h3>
                                            <span class="subtitle">Founder & CEO</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 sq-item wow">
                                        <div class="profile_pic text-center">
                                            <figure class="picframe mb30">
                                                <a class="image-popup" href="{{asset('/website/images/team/3.jpg')}}">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                                <img src="{{asset('/website/images/team/3.jpg')}}" class="img-fluid" alt="">
                                            </figure>

                                            <h3>Rose Shipp</h3>
                                            <span class="subtitle">Founder & CEO</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 sq-item wow">
                                        <div class="profile_pic text-center">
                                            <figure class="picframe mb30">
                                                <a class="image-popup" href="{{asset('/website/images/team/4.jpg')}}">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                                <img src="{{asset('/website/images/team/4.jpg')}}" class="img-fluid" alt="">
                                            </figure>

                                            <h3>John Arnold</h3>
                                            <span class="subtitle">Founder & CEO</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section service begin -->
            <section id="section-side-1" class="side-bg no-padding">
                <div class="image-container col-md-6 pull-left">
                    <div class="background-image"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="inner-padding">
                            <div class="col-md-5 offset-md-7 wow fadeIn">
                                <h2><span class="uptitle">Limitless</span> Creative Ideas</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                    laborum..
                                </p>
                                <div class="spacer-single"></div>
                                <a href="contact.html" class="btn-custom">Contact Us</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section service close -->

            <!-- section begin -->
            <section id="section-fun-facts" class="pt40 pb40 text-light" data-bgcolor="#404040">
                <div class="container">

                    <div class="row sequence">
                        <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow">
                            <div class="de_count">
                                <h3 class="timer" data-to="8240" data-speed="2500">0</h3>
                                <span>Hours of Works</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow">
                            <div class="de_count">
                                <h3 class="timer" data-to="315">0</h3>
                                <span>Projects Done</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow" data-wow-delay=".5s">
                            <div class="de_count">
                                <h3 class="timer" data-to="250">0</h3>
                                <span>Satisfied Customers</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow">
                            <div class="de_count">
                                <h3 class="timer" data-to="32" data-speed="2500">0</h3>
                                <span>Awards Winning</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                            <h2><span class="uptitle">News</span>Latest Post</h2>
                        </div>
                    </div>
                </div>

                <div id="blog-carousel" class="owl-carousel owl-theme">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{asset('/website/images/blog/pic-blog-1.jpg')}}" alt="" />
                            </div>

                            <div class="post-text">
                                <h3><a href="news-single.html">Make Better User Interface</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <span class="post-date">Jan 5, 2021</span>
                                <span class="post-comment">1</span>
                                <span class="post-like">181</span>
                            </div>
                        </div>
                    </div>

                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{asset('/website/images/blog/pic-blog-2.jpg')}}" alt="" />
                            </div>

                            <div class="post-text">
                                <h3><a href="news-single.html">10 Web Design Tips From Experts</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <span class="post-date">Jan 5, 2021</span>
                                <span class="post-comment">1</span>
                                <span class="post-like">181</span>
                            </div>
                        </div>
                    </div>

                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{asset('/website/images/blog/pic-blog-3.jpg')}}" alt="" />
                            </div>

                            <div class="post-text">
                                <h3><a href="news-single.html">The Importance Of Web Design</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <span class="post-date">Jan 5, 2021</span>
                                <span class="post-comment">1</span>
                                <span class="post-like">181</span>
                            </div>


                        </div>
                    </div>

                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{asset('/website/images/blog/pic-blog-4.jpg')}}" alt="" />
                            </div>

                            <div class="post-text">
                                <h3><a href="news-single.html">Avoid These Erros In UI Design</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <span class="post-date">Jan 5, 2021</span>
                                <span class="post-comment">1</span>
                                <span class="post-like">181</span>
                            </div>
                        </div>
                    </div>

                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{asset('/website/images/blog/pic-blog-5.jpg')}}" alt="" />
                            </div>

                            <div class="post-text">
                                <h3><a href="news-single.html">Make Your Mobile Website Faster</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <span class="post-date">Jan 5, 2021</span>
                                <span class="post-comment">1</span>
                                <span class="post-like">181</span>
                            </div>
                        </div>
                    </div>

                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{asset('/website/images/blog/pic-blog-6.jpg')}}" alt="" />
                            </div>

                            <div class="post-text">
                                <h3><a href="news-single.html">How To Create Marketing Website</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <span class="post-date">Jan 5, 2021</span>
                                <span class="post-comment">1</span>
                                <span class="post-like">181</span>
                            </div>


                        </div>
                    </div>
                </div>

            </section>
            <!-- section close -->

        </div>
        <!-- content close -->

        
    </div>
     <!-- Wrapper close -->
   
</body>

