<section id="ishislider-1177883514" class="ishislider">
        <div class="owl-carousel">
            @foreach ($banners as $key =>$banner)
            <div class="item {{$key==0 ? "active":""}}">
                <a href="#" class="slideshow__link">
                    <img src="{{ asset('uploads/banner/'.$banner->image) }}"
                         alt="Feel Strong Feel Fashionable" class="img-responsive"/>
                    <div class="container">
                        <div class="slider-content col-lg-7 col-md-7 col-sm-8 col-xs-10 slider-content-center"
                             style="text-align:center">
{{--                            <div class="main-title" style="color: #ffffff">{{$banner->bannerName}}</div>--}}
                            <div class="desc" style="border-color: rgba(255, 255, 255, 0.9)">
{{--                                <p style="color: #ffffff">“Fashion is not something that exists in dresses only.--}}
{{--                                    Fashion is in the sky, in the street, fashion has to do with ideas, the way we--}}
{{--                                    live, what is happening</p>--}}
                            </div>
                            <div class="slider-btn"><span class="btn-default btn">SHOP NOW</span></div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <script type="text/javascript">
            $('#ishislider-1177883514 .owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                dots: true,
                autoplay: true,
                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                animateOut: 'fadeOut',
                dotsClass: 'owl-dots ishi-style-dot2',
                navClass: ["owl-prev ishi-style-nav4", "owl-next ishi-style-nav4"],
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });
        </script>
    </section>
