
<section class="aboutBig">
    <div class="aboutBig__top d-flex flex-row align-items-center">
        <h2 class="aboutBig__title title-main">
            About
        </h2>

        <p class="aboutBig__desc desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <h2 class="aboutBig__title aboutBig__title--crypto title-main title-main--stroke">
        Crypto ICO
    </h2>

    <div class="aboutBig__cards d-flex flex-row">
        @foreach($array as $key => $number)
            <div class="aboutBig__cards__item d-flex flex-column justify-content-between">
                <div class="aboutBig__cards__item__top d-flex flex-row justify-content-between align-items-center">
                    <p class="aboutBig__cards__item__top__title">
                        Silver Visas<br>
                        USD 00,002.00
                    </p>

                    <div class="aboutBig__cards__item__top__percentage d-flex flex-row align-items-center">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph Up">
                        <p
                            class="
                                aboutBig__cards__item__top__percentage__text
                            "
                        >
                            1.90%
                        </p>
                    </div>
                </div>

                <img src="{{ asset('src/img/graph.png')}}" alt="Graph" class="aboutBig__cards__item__graph">
            </div>
        @endforeach
    </div>
</section>
