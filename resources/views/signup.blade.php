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

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .full-height{
                height: 100vh;
            }

            .gradient-custom-2 {
                /* fallback for old browsers */
                background: #fccb90;

                /* Chrome 10-25, Safari 5.1-6 */
                background: -webkit-linear-gradient(to bottom, #FE535C, #42C7EA);

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: linear-gradient(to bottom, #FE535C, #42C7EA);
            }

            .gradient-custom-3 {
                /* fallback for old browsers */
                background: #fccb90;

                /* Chrome 10-25, Safari 5.1-6 */
                background: -webkit-linear-gradient(to right, #C850C0, #4158D0);

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: linear-gradient(to right, #C850C0, #4158D0);
                border: none;
            }

            @media (min-width: 768px) {
                .gradient-form {
                    height: 100vh !important;
                }
                }
                @media (min-width: 769px) {
                .gradient-custom-2 {
                    border-top-right-radius: .3rem;
                    border-bottom-right-radius: .3rem;
                }
            }

            .btn-outline-custom-danger {
                color:  #C850C0; /* Text color */
                border-color:  #C850C0; /* Border color */
            }

            .btn-outline-custom-danger:hover {
                color: white; /* Text color on hover */
                background-color:  #C850C0; /* Background color on hover */
                border-color:  #C850C0; /* Border color on hover */
            }

            .btn-login{
                width: 100%;
                border: none;
            }
            .section{
                min-height: calc(100vh - 20px);
                max-height: calc(100vh - 20px);
            }


            

            

            

            

            
            

            

            
        </style>

        
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

                        <div class="text-center pt-1 mb-3 pb-1">
                            <button class="btn btn-block fa-lg gradient-custom-3 mb-3 btn-login text-white" type="button">
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
