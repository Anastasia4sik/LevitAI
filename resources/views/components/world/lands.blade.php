<x-base>
    <section class="discover">
        <x-menu />

        <x-header />

        <section class="discover__article">
                <p class="discover__article__undertitle title-little">
                    Levi Lands
                </p>

                <h2 class="discover__article__title title-main">
                    Acquire your own piece of
                </h2>

                <div class="discover__article__top d-flex flex-row align-items-center">
                    <h2 class="discover__article__top__title title-main title-main--stroke lh-90">
                        digital real estate
                    </h2>
                </div>

            <div class="discover__article__content lands__article__content d-flex flex-row justify-content-between align-items-center">
                <img
                    src="{{ asset('src/img/photo/lands/lands1.jpg')}}"
                    alt="Our vision photo"
                    class="discover__article__content__img lands__article__img lands__article__img--first"
                >

                <div class="discover__article__content__text">
                    <p class="discover__article__content__text__desc desc">
                        VR Lands are registered on the blockchain as NFT’s.
                        <br><br>
                        There will be a limited amount of pre-defined VR Lands available, which can be purchased and minted either through a VR Lands Sale or from another player.
                        <br><br>
                        The owners of the VR Land have absolute power over their VR Land and what they choose to do with it.
                    </p>

                    <a
                        href="#"
                        class="
                            complete__btn
                            lands__article__content__btn
                            d-flex
                            flex-row
                            align-items-center
                            button
                        "
                        style="
                            gap: 21px;
                            font-size: 16px;
                            width: 214px;
                        "
                    >
                        <img
                            src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                            alt="Send"
                            class="complete__btn__img"
                            style="
                                padding: 15px;
                            "
                        >

                        VR Lands Sale
                    </a>
                </div>
            </div>

            <div class="discover__article__content lands__article__content d-flex flex-row justify-content-between align-items-center">
                <div class="discover__article__content__text">
                    <h3 class="discover__article__content__text__title title-little">
                        VR Lands can be used:
                    </h3>

                    <p class="discover__article__content__text__desc desc">
                        For the construction of:
                        <br><br>
                        &ensp;&#x2022;    Utility buildings directly in the game (mines, warehouses, etc.)
                        <br>
                        &ensp;&#x2022;    Buildings for presentation (shops/stores, showrooms, etc.)
                        <br>
                        &ensp;&#x2022;    Private buildings (clubhouses, private enterprises, etc.)
                        <br>
                        &ensp;&#x2022;    A port to another world, game, or virtual reality
                        <br><br>
                        To trade
                        <br><br>
                        Rent with others
                    </p>

                    <a
                        href="#"
                        class="
                            complete__btn
                            lands__article__content__btn
                            d-flex
                            flex-row
                            align-items-center
                            button
                        "
                        style="
                            gap: 21px;
                            font-size: 16px;
                            width: 243px;
                        "
                    >
                        <img
                            src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                            alt="Send"
                            class="complete__btn__img"
                            style="
                                padding: 15px;
                            "
                        >

                        VR Lands Gitbook
                    </a>
                </div>

                <img
                    src="{{ asset('src/img/photo/lands/lands2.jpg')}}"
                    alt="Our vision photo"
                    class="discover__article__content__img lands__article__img lands__article__img--sec"
                >
            </div>

            <h3 class="discover__article__content__text__title title-little">
                VR Lands can be used:
            </h3>

            <p class="discover__article__content__text__desc desc">
                By purchasing VR Land you also receive the following bonuses:
                <br><br>
                &ensp;&#x2022;    Building
                <br>
                &ensp;&#x2022;    Mining Bonuses
                <br>
                &ensp;&#x2022;    Modifiers (for mining)
                <br>
                &ensp;&#x2022;    Mystery Boxes
                <br><br>
                The bonus will depend on what type and tier of VR Land you buy.
            </p>
        </section>

        <x-footer />
    </section>
</x-base>
