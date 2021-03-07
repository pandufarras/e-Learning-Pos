
<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Leapost - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Leapost - Login">

    <!-- Favicon -->
    <link href="{{ asset('admins/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('admins/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/css/night-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/css/bootstrap.css') }}">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('admins/css/icons.css') }}">


</head>

<body>


    <!-- Content
    ================================================== -->
    <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
        <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
            <div class="uk-card-default p-5 rounded">
                <div class="mb-4 uk-text-center">
                    <h3 class="mb-0"> {{ config('app.name') }}</h3>
                    <p class="my-2">Login to Start Course.</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-mail"></i>
                            </span>
                            <input class="uk-input" name="email" type="email" placeholder="name@example.com">
                        </div>

                    </div>

                    <div class="uk-form-group">
                        <label class="uk-form-label"> Password</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input class="uk-input" name="password" type="password" placeholder="********">
                        </div>

                    </div>

                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> Practice Makes Perpect! </p>
                        </div>
                        <div class="uk-width-auto@s">
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>


    <!-- javaScripts
    ================================================== -->
    <script src="{{ asset('admins/js/framework.js') }}"></script>
    <script src="{{ asset('admins/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admins/js/simplebar.js') }}"></script>
    <script src="{{ asset('admins/js/main.js') }}"></script>
    <script src="{{ asset('admins/js/bootstrap-select.min.js') }}"></script>

</body>

</html>
