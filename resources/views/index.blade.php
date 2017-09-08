@extends('layouts.app')

@section('content')

    <nav>
        <div class="nav-wrapper container">
            <a href="#!" class="brand-logo center">Logo</a>

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
    </nav>

    <div class="parallax-container">
        <div class="section">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2">Parallax Theme</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
                </div>
                <div class="row center">
                    <a href="#" class="btn-large waves-effect waves-light purple lighten-1">Find more</a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax">
            <img src="/images/top.JPG" style="max-height: 100%">
        </div>
    </div>

    <div class="container">
        <!-- Page Content goes here -->


        <div id="first" class="section scrollspy" style="opacity: 0;">
            <div class="row">
                <div class="col s12 m6 parallax-container" style="max-height: 300px !important;">

                    <div class="section t-center">
                        <div class="row center">
                            <h5 class="header col s12 white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
                        </div>
                    </div>
                    <div class="parallax">
                        <img class="responsive-img" src="https://unsplash.imgix.net/reserve/nE6neNVdRPSIasnmePZe_IMG_1950.jpg?dpr=1.25&fit=crop&fm=jpg&h=700&q=75&w=1050">
                    </div>

                </div>
                <div class="col s12 m6">
                    <p class="flow-text">I am Flow Text</p>
                </div>
            </div>
        </div>

        <div id="second" class="section scrollspy" style="opacity: 0;">
            <div class="row">
                <div class="col s12 m6 parallax-container" style="max-height: 300px !important;">

                    <div class="section t-center">
                        <div class="row center">
                            <h5 class="header col s12 white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
                        </div>
                    </div>
                    <div class="parallax">
                        <img class="responsive-img" src="https://unsplash.imgix.net/reserve/nE6neNVdRPSIasnmePZe_IMG_1950.jpg?dpr=1.25&fit=crop&fm=jpg&h=700&q=75&w=1050">
                    </div>

                </div>
                <div class="col s12 m6">
                    <p class="flow-text">I am Flow Text</p>
                </div>
            </div>
        </div>



    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSduBvUfhW7XphgI3EAeoFGpMnObDnZR4LNsA3N9UIw_h8TdbQ/viewform?embedded=true" width="100%" height="1200" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます...</iframe>

    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Reunion Tono
            </div>
        </div>
    </footer>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
            $('.parallax').parallax();
        });

        $('.scrollspy').scrollSpy();

        var options = [
            {
                selector: '#first', offset: 200, callback: function (el) {
                Materialize.fadeInImage($(el));
            }
            },
            {
                selector: '#second', offset: 300, callback: function (el) {
                Materialize.fadeInImage($(el));
            }
            }
        ];
        Materialize.scrollFire(options);

    </script>
@endsection