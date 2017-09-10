@extends('layouts.app')

@section('content')

    <nav class="grey">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">REUNION</a>

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#contact">Contact</a></li>
                <li><a href="#google-form">Form</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="#contact">Contact</a></li>
                <li><a href="#google-form">Form</a></li>
            </ul>
        </div>
    </nav>

    <div class="parallax-container t-margin-bottom">
        <div class="section">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-3">Reunion Tono</h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">Tono Junior high school</h5>
                    <h5 class="header col s12 light white-text">21th century first graduates</h5>
                </div>

            </div>
        </div>
        <div class="parallax">
            <img src="/images/top.jpg" class="dark" style="max-height: 100%;">
        </div>
    </div>

    <div class="container t-margin-bottom">
        <!-- Page Content goes here -->

        <div class="t-margin-bottom">
            <h5 class="center-align" style="margin-bottom: 50px">
                <div style="margin-bottom: 20px">皆さん、お久しぶりです！</div>
                <div>元気にしていますか？</div>
            </h5>

            <p> 私たちが、遠野市立遠野中学校を卒業して早10余年の月日が経ちました。</p>
            <p>来年2018年には数え年で33歳になり、岩手県では古くからの習慣で「歳祝い」という行事があります。</p>
            <p> その為、このホームページを知っていただくことによって、より数多くの方々に参加していただけると考え、作成に至りました。</p>
        </div>

        <div id="first" class="section scrollspy t-margin-bottom" style="opacity: 0;">
            <div class="row">
                <div class="col s12 m6 parallax-container" style="max-height: 300px !important;">

                    <div class="section t-center">
                        <div class="row center">
                            <h5 class="header col s12 grey-text">歳祝いって？</h5>
                        </div>
                    </div>
                    <div class="parallax blur">
                        <img class="responsive-img" src="/images/koutei.jpg">
                    </div>

                </div>
                <div class="col s12 m6">
                    <p>
                        女性は数えの33歳、男性は同じく42歳が大厄。どこの地域でも厄払いは行うと思いますが、それが我が岩手県では「歳祝い」と呼ばれるイベントとなります。
                    </p>
                    <p>
                        要は、厄払いと託けて、同窓会も一緒にやって盛り上がろう！ってことです。
                    </p>
                </div>
            </div>
        </div>

        <div id="second" class="section scrollspy t-margin-bottom" style="opacity: 0;">
            <div class="row">
                <div class="col s12 m6 parallax-container" style="max-height: 300px !important;">

                    <div class="section t-center">
                        <div class="row center">
                            <h5 class="header col s12 black-text">誰が参加できるの？</h5>
                        </div>
                    </div>
                    <div class="parallax blur">
                        <img class="responsive-img" src="/images/shin_tai.jpg">
                    </div>

                </div>
                <div class="col s12 m6">
                    <p>
                        基本的には、平成13年度遠野市立遠野中学校卒業生の方ですが、途中で転校してしまったりした方もいますよね？
                    </p>
                    <p>
                        そ・こ・で、遠野中学校に１日でも在籍していた方であれば、誰でも参加オッケーにしました。
                        いいですよね？
                    </p>
                    とにかく数多くの方に参加していただきたいと考えておりますので、お誘い合わせの上ご参加いただければ幸いです。
                    </p>
                </div>
            </div>
        </div>


        <div id="date" class="row t-margin-bottom" style="opacity: 0;">
            <div class="uk-flex uk-flex-center">
                <div class="s12 m9">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title center-align">開催日時（仮）</span>
                            <p>
                                日時：平成30年１月２日（火） 18：00～
                            </p>
                            <p>
                                場所：あえりあ遠野中ホール
                            </p>
                            <p>
                                参加費：7,000円
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="etc" class="row t-margin-bottom" style="opacity: 0;">
            <h5 class="center-align">その他</h5>
            <div class="uk-flex uk-flex-center">
                <div class="s12 m6">
                    <p>
                        遠野市内の中学校の方との（同級生に限ります。）合同開催も考えております。
                    </p>
                    <p>
                        そんなご相談も承っております。下記の連絡先まで問い合わせください。
                    </p>
                </div>
            </div>
        </div>

        <div id="contact" class="row t-margin-bottom" style="opacity: 0;">
            <h5 class="center-align">お問い合わせ</h5>
            <div class="uk-flex uk-flex-center">
                <div class="s12 m6">
                    <p>
                        井手君のメール
                        テマナブのメール
                    </p>
                </div>
            </div>
        </div>

        <div id="google-form" class="t-margin-bottom">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSduBvUfhW7XphgI3EAeoFGpMnObDnZR4LNsA3N9UIw_h8TdbQ/viewform?embedded=true" width="100%" height="1379" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます...</iframe>
        </div>
    </div>



    <footer class="page-footer grey">
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
                selector: '#second', offset: 230, callback: function (el) {
                Materialize.fadeInImage($(el));
            }
            },
            {
                selector: '#date', offset: 270, callback: function (el) {
                Materialize.fadeInImage($(el));
            }
            },
            {
                selector: '#etc', offset: 300, callback: function (el) {
                Materialize.fadeInImage($(el));
            }
            },
            {
                selector: '#contact', offset: 330, callback: function (el) {
                Materialize.fadeInImage($(el));
            }
            }
        ];
        Materialize.scrollFire(options);

    </script>
@endsection