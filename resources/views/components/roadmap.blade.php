<section
    id="roadmap"
    class="
        roadmap
        @if(request()->is('roadmap'))
            roadmap--page
        @endif
    "
>
    @if(request()->is('roadmap'))
        <x-header />

        <div
            class="roadmap__top topPage d-flex flex-column justify-content-center align-items-center"
        >
            <div class="roadmap__top__text topPage__top">
                <h2 class="title-main">
                    Our Strategy &
                </h2>

                <div
                    class="roadmap__top__text__bottom  d-flex flex-row align-items-center"
                >
                    <h2 class="title-main title-main--stroke topPage__top__text__title">
                        Roadmap
                    </h2>

                    <p class="roadmap__top__text__bottom__desc desc">
                        Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                    </p>
                </div>
            </div>

            <a href="#map" class="roadmap__top__arrowDown">
                <img src="{{ asset('src/img/icons/arrows/arrow-down-circle.png')}}" alt="To map">
            </a>
        </div>

        <img id="map" src="{{ asset('src/img/photo/roadmap/roadmap.png')}}" alt="" class="roadmap__img roadmap__img--map">
    @else
        <div class="roadmap__top d-flex">
            <div class="roadmap__top__text">
                <h2 class="roadmap__top__text__title title-main">
                    Our <span class="title-main--stroke">Strategy</span>
                </h2>

                <div
                    class="roadmap__top__text__bottom d-flex"
                    style="
                        gap: 0;
                    "
                >
                    <p class="roadmap__top__text__bottom__desc desc">
                        Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                    </p>

                    <h2 class="roadmap__top__text__title roadmap__top__text__title--bottom title-main">
                        & Roadmap
                    </h2>
                </div>
            </div>

            <img src="{{ asset('src/img/photo/choose-img.jpg')}}" alt="Our Strategy & Roadmap" class="roadmap__top__img">
        </div>

        <div class="roadmap__image">
            <img id="line" src="{{ asset('src/img//photo/roadmap/line.png')}}" alt="" class="roadmap__img roadmap__img--line">
        </div>
    @endif
</section>
