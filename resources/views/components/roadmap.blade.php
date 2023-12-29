<section
    id="roadmap"
    class="roadmap"
    @if(request()->is('roadmap'))
        style="
            padding: 0;
        "
    @else
        style="
            padding: 100px 0 100px 0;
        "
    @endif
>
    @if(request()->is('roadmap'))
        <div
            class="roadmap__top d-flex flex-row justify-content-center align-items-center"
            style="
                background-image: url('{{asset('/src/img/bc/bc-strategy.png')}}');
                background-repeat: no-repeat;
                background-position: left top;
                background-size: auto;
            "
        >
            <div class="roadmap__top__text">
                <h2 class="title-main">
                    Our Strategy &
                </h2>

                <div
                    class="roadmap__top__text__bottom d-flex flex-row align-items-center"
                    style="
                        gap: 35px;
                    "
                >
                    <h2 class="title-main title-main--stroke">
                        Roadmap
                    </h2>

                    <p class="roadmap__top__text__bottom__desc desc">
                        Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                    </p>
                </div>
            </div>
        </div>
    @else
        <div class="roadmap__top d-flex flex-row justify-content-between">
            <div class="roadmap__top__text">
                <h2 class="title-main">
                    Our <span class="title-main--stroke">Strategy</span>
                </h2>

                <div
                    class="roadmap__top__text__bottom d-flex flex-row"
                    style="
                        gap: 0;
                    "
                >
                    <p class="roadmap__top__text__bottom__desc desc">
                        Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                    </p>

                    <h2 class="title-main">
                        & Roadmap
                    </h2>
                </div>
            </div>

            <img src="{{ asset('src/img/photo/choose-img.jpg')}}" alt="Our Strategy & Roadmap" class="roadmap__top__img">
        </div>
    @endif

    <img id="map" src="{{ asset('src/img//photo/roadmap/roadmap.png')}}" alt="" class="roadmap__img roadmap__img--map">

    <img id="line" src="{{ asset('src/img//photo/roadmap/line.png')}}" alt="" class="roadmap__img roadmap__img--line">
</section>
