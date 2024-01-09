<x-base>
    <section class="discover">
        <x-menu />

        <x-header />

        <section class="discover__article">
                <p class="discover__article__undertitle title-little">
                    Partner integrations
                </p>

                <h2 class="discover__article__title title-main">
                    Future-Proofing Through
                </h2>

                <div class="discover__article__top d-flex flex-row align-items-center">
                    <h2 class="discover__article__top__title title-main title-main--stroke lh-90">
                        Innovation
                    </h2>

                    <a
                        href="#"
                        class="
                            complete__btn
                            d-flex
                            flex-row
                            align-items-center
                            button
                        "
                        style="
                            gap: 21px;
                            font-size: 16px;
                            width: 188px;
                            height: 54px;
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

                        VR staking
                    </a>
                </div>


            <div class="discover__article__content integrations__article__content d-flex flex-row justify-content-between align-items-center">
                <img
                    src="{{ asset('src/img/photo/integrations.jpg')}}"
                    alt="Our vision photo"
                    class="discover__article__content__img"
                >

                <div class="discover__article__content__text">
                    <p class="discover__article__content__text__desc desc">
                    We have selected best-in-class technology partners to work with so we could bring Victoria VR to life.
                    <br><br>
                    From the underlying algorithms and tech infrastructure through to our hardware partners, we do not make any compromises as far as the creation of the best future proofed metaverse is concerned.
                    </p>

                    <h3 class="discover__article__content__text__title title-little">
                        Key Highlights
                    </h3>

                    <p class="discover__article__content__text__desc desc">
                        &ensp;&#x2022;  Best in class partnerships for underlying technologies providing an unrivalled experience
                        <br>
                        &ensp;&#x2022;    Built on Unreal Engine
                        <br>
                        &ensp;&#x2022;    Full Metahuman integration
                        <br>
                        &ensp;&#x2022;    Future proofed technology
                        <br>
                        &ensp;&#x2022;    Easily integrate a portal between other virtual worlds
                    </p>
                </div>
            </div>

            <div class="discover__article__content integrations__article__content d-flex flex-row justify-content-between align-items-center">
                <div class="discover__article__content__text">
                    <h3 class="discover__article__content__text__title title-little">
                        Welcome to MetaHumans
                    </h3>

                    <p class="discover__article__content__text__desc desc">
                        Using cutting edge technology from Unreal Engine, we have been able to create life-like 3D avatars never seen before in any other VR world experience.
                        <br><br>
                        &ensp;&#x2022;    Create your own realistic avatar with the most detailed customization ever
                        <br>
                        &ensp;&#x2022;    Billions of combinations
                        <br>
                        &ensp;&#x2022;    All avatars can express emotions and with various animations can show your mood or reactions
                    </p>
                </div>

                <x-video width="35vw"/>
            </div>
        </section>

        <x-footer />
    </section>
</x-base>
