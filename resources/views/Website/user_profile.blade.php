@extends('layouts.website')
<body id="homepage">

    <div id="wrapper">

        @extends('layouts.website_common_nav')  

        <!-- subheader -->
        <section id="subheader" class="s2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-middle">
                        <h1>Profile</h1>
                    </div>

                    <div class="col-md-6 text-middle">
                        <ul class="crumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="sep"></li>
                            <li>Profile</li>
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
                        <div class="col-md-8 offset-md-2">
                          
                            <form name="registerForm" class="form-border" method="post" action="{{url('profile-submit')}}">
                                {{ csrf_field() }}
                                {{-- @php dd($data); @endphp; --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>First Name:</label>
                                            <input type='text' name='f_name' id='f_name' class="form-control" value="{{$user->name}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Last Name:</label>
                                            <input type='text' name='l_name' id='l_name' value="{{$user->l_name}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Email Address:</label>
                                            <input type='email' name='email' id='email' value="{{$user->email}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>About Information:</label>
                                            <input type='text' name='text' id='email'  class="form-control">
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Phone:</label>
                                            <input type='text' name='phone' id='phone' value="{{$user->phone}}"  class="form-control" required>
                                        </div>
                                    </div>

                                   

                                    <div class="spacer-single"></div>

                                    <div class="col-md-12">

                                        {{-- <div id='submit' class="pull-left">
                                            <input type='submit' id='send_message' value='Register Now' class="btn btn-custom color-2">
                                        </div> --}}
                                        <button class="btn btn-custom color-2" type="submit">Update</button>

                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
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