
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
        <script src="{{ asset('admins/js/framework.js')}}"></script>
        <script src="{{ asset('admins/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('admins/js/simplebar.js')}}"></script>
        <script src="{{ asset('admins/js/main.js')}}"></script>
        <script src="{{ asset('admins/js/bootstrap-select.min.js')}}"></script>

        <script src="{{ asset('admins/js/chart.min.js')}}"></script>
        <script src=""{{ asset('admins/js/chart-custom.js')}}"></script>

        @stack('scripts')
