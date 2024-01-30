<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LoveLobby</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/signup.css" />

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Bootstrap JavaScript and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
    </head>
    <body class="antialiased">

    <section class="section gradient-form py-3" style="width: 600px;">
        <div class="container">
            <div class="card rounded-3 text-black">
                <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center mb-5">
                        <img src="/img/Lovelobbyy.png" style="width: 195px;" alt="logo">
                    </div>
                    <form>
                        <p>Please login to your account</p>
                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example11" class="form-control" placeholder="Username" />
                            <label class="form-label" for="form2Example11">Username</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example11" class="form-control" placeholder="Email address" />
                            <label class="form-label" for="form2Example11">Email</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example22" class="form-control" placeholder="Password"/>
                            <label class="form-label" for="form2Example22">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example23" class="form-control" placeholder="Confirm Password"/>
                            <label class="form-label" for="form2Example23">Confirm Password</label>
                        </div>

                        <div class="terms-container mb-2">
                                <input type="checkbox" class="notif-checkbox" id="checkboxSignUp">
                                <label for="checkboxSignUp" class="ms-2" data-toggle="modal" data-target="#exampleModal">I agree to<a class="text-muted" href=#!> Terms and Conditions</a></label>
                        </div>

                        <div class="text-center pt-1 mb-3 pb-1">
                        <a href="LoveLobby"><button class="btn btn-block fa-lg gradient-custom-3 mb-3 btn-login text-white" type="button">
                              <b>Sign Up</b>
                              </button>
                          
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Already have an account?</p>
                            <a href="LoveLobby"><button type="button" class="btn btn-outline-custom-danger">Log In</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <body>

                        <section id="termsAndConditions">

                            <ol>
                                <li>
                                    <strong>Eligibility:</strong> By using the LoveLobby app, you confirm that you are 18 years old or above. Users below
                                    this age are prohibited from accessing the platform.
                                </li>
                                <li>
                                    <strong>Responsibility for Actions:</strong> Users are solely responsible for their actions on LoveLobby. The
                                    platform does not assume responsibility for any consequences arising from user interactions, behavior, or content
                                    shared.
                                </li>
                                <li>
                                    <strong>Content Guidelines:</strong> Users agree not to share offensive, inappropriate, or illegal content.
                                    LoveLobby reserves the right to remove any content that violates these guidelines and may take appropriate action
                                    against the user.
                                </li>
                                <li>
                                    <strong>User Conduct:</strong> Users must conduct themselves in a respectful and lawful manner while using
                                    LoveLobby. Any harassment, abuse, or harmful behavior towards others is strictly prohibited.
                                </li>
                                <li>
                                    <strong>Account Security:</strong> Users are responsible for maintaining the security of their accounts. LoveLobby
                                    is not liable for any unauthorized access or use of user accounts.
                                </li>
                            </ol>
                        </section>

                        <section id="privacyPolicy">
                            <h5><strong>Privacy Policy</strong></h5>

                            <ol>
                                <li>
                                    <strong>Age Verification:</strong> LoveLobby requires users to be 18 years old or above. The app collects and
                                    processes age information to ensure compliance with this policy.
                                </li>
                                <li>
                                    <strong>Personal Information:</strong> LoveLobby may collect personal information, such as name, age, and location,
                                    to provide the app's services. This information is handled with utmost confidentiality and is not shared with third
                                    parties without user consent.
                                </li>
                                <li>
                                    <strong>Data Security:</strong> LoveLobby employs industry-standard security measures to protect user data. However,
                                    users should be aware of the inherent risks of online communication and take necessary precautions.
                                </li>
                                <li>
                                    <strong>Cookies and Analytics:</strong> LoveLobby may use cookies and analytics tools to enhance user experience and
                                    gather insights for app improvement. Users can manage cookie preferences in their settings.
                                </li>
                                <li>
                                    <strong>Third-Party Links:</strong> LoveLobby may contain links to third-party websites. Users are encouraged to
                                    review the privacy policies of these external sites, as LoveLobby is not responsible for their practices.
                                </li>
                            </ol>
                        </section>

                        <section id="acknowledgment">
                            <p>
                                By using LoveLobby, you acknowledge that you have read, understood, and agreed to these Terms & Conditions and the
                                Privacy Policy. LoveLobby reserves the right to update these documents periodically, and users are responsible for
                                staying informed about any changes.
                            </p>
                        </section>

                    </body>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I agree</button>
                </div>
                </div>
            </div>
        </div>
        

    
    
        


        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            
    </body>
</html>
