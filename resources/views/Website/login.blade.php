@extends('layouts.website')
<body id="homepage">

    <div id="wrapper">

        @extends('layouts.website_common_nav')

        {{-- <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <!-- section begin -->
            <section aria-label="section-login" class="full-height relative no-top no-bottom" data-stellar-background-ratio=".2" data-bgimage="{{asset('website/images/background/6.jpg')}}">

                <div id="particles-js"></div>

                <div class="overlay-bg t80">
                    <div class="center-y fadeScroll relative" data-scroll-speed="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <form name="loginForm" id='login_form' class="form-border img-shadow" method="post" action="{{url('Login-submit')}}">
                                        {{ csrf_field() }}
                                        <div class="padding40" data-bgcolor="#fff">
                                            <h3>Login to your account</h3>

                                            <div class="field-set">
                                                <label>Username</label>
                                                <input type='text' name='phone' id='name' class="form-control" placeholder="" required>
                                            </div>


                                            <div class="field-set">
                                                <label>Password</label>
                                                <input type='password' name='password' id='email' class="form-control" placeholder="" required>
                                            </div>


                                            <div class="spacer-single"></div>

                                            <div id='submit' class="pull-left">
                                                {{-- <input type='submit' id='send_message' value='Login' class="btn btn-custom color-2"> -
                                                <button class="btn btn-custom color-2" type="submit">Login</button>
                                            </div>

                                            <a href="#" class="pull-right mt10">Forget password</a>

                                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- section close -->
        </div>
        <!-- content close --> --}}





         <!-- subheader -->
         <section id="subheader" class="s2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-middle">
                        <h1>Login</h1>
                    </div>

                    <div class="col-md-6 text-middle">
                        <ul class="crumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="sep"></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-md-1">
                            {{-- <h3>Login underline style</h3> --}}
                            <form name="loginForm" id='login_form' class="form-underline" method="post" action="{{url('Login-submit')}}">
                                        {{ csrf_field() }}
                                <div class="field-set">
                                    <input type='text' name='phone' id='name' class="form-control" placeholder="Mobile No." required>
                                
                                </div>


                                <div class="field-set">
                                    <input type='text' name='password' id='email' class="form-control" placeholder="Password" required>
                                </div>


                                <div class="spacer-single"></div>

                                <div id='submit_1' class="pull-left">
                                    {{-- <input type='submit' id='send_message_1' value='Login' class="btn btn-custom color-2"> --}}
                                    <button class="btn btn-custom color-2" type="submit">Login</button>
                                </div>

                                {{-- <a href="#" class="pull-right mt10">Forget password</a> --}}

                                <div class="clearfix"></div>
                            </form>
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