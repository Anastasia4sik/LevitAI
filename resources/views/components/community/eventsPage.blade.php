<x-base>
    <section
        class="eventsPage"
    >
        <x-menu />

        <x-header />

        <section class="eventsPage__top topPage d-flex flex-column align-items-center justify-content-center">
            <div
                class="
                    eventsPage__blog__container
                    topPage__top
                    d-flex
                    flex-column
                    justify-content-center
                "
            >
                <div class="topPage__top__text d-flex flex-row align-items-center">
                    <h2 class="topPage__top__text__title title-main">
                        The
                    </h2>

                    <p class="topPage__top__text__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut ad minim veniam,  nostrud exercitation ullamco laboris ut ea consequat. Lorem  amet, sed do  tempor aliqua.
                    </p>
                </div>

                <h2 class="topPage__top__title title-main title-main--stroke">
                    Events
                </h2>
            </div>

            <a href="#events" class="topPage__top__arrowDown">
                <img src="{{ asset('src/img/icons/arrows/arrow-down-circle.png')}}" alt="To map">
            </a>
        </section>
    </section>

    <div class="eventsPage__content d-flex flex-column">
        <div class="eventsPage__content__block">
            <h3 class="eventsPage__content__block__title title-main">
                Viewing Virtual Sports Events
            </h3>

            <a
                href="/events/sports"
                class="
                    complete__btn
                    d-flex
                    flex-row
                    align-items-center
                    button
                "
                style="
                    gap: 23px;
                    font-size: 16px;
                    width: 229px;
                "
            >
                <img
                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                    alt="go to"
                    class="complete__btn__img"
                    style="
                        padding: 15px;
                    "
                >

                Go to section
            </a>
        </div>

        <div class="eventsPage__content__block">
            <h3 class="eventsPage__content__block__title title-main">
                Watching Virtual Concerts
            </h3>

            <a
                href="/events/concerts"
                class="
                    complete__btn
                    d-flex
                    flex-row
                    align-items-center
                    button
                "
                style="
                    gap: 23px;
                    font-size: 16px;
                    width: 229px;
                "
            >
                <img
                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                    alt="go to"
                    class="complete__btn__img"
                    style="
                        padding: 15px;
                    "
                >

                Go to section
            </a>
        </div>

        <div class="eventsPage__content__block">
            <h3 class="eventsPage__content__block__title title-main">
                Virtual Theater Performances
            </h3>

            <a
                href="/events/performances"
                class="
                    complete__btn
                    d-flex
                    flex-row
                    align-items-center
                    button
                "
                style="
                    gap: 23px;
                    font-size: 16px;
                    width: 229px;
                "
            >
                <img
                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                    alt="go to"
                    class="complete__btn__img"
                    style="
                        padding: 15px;
                    "
                >

                Go to section
            </a>
        </div>

        <div class="eventsPage__content__block">
            <h3 class="eventsPage__content__block__title title-main">
                View Virtual Training Courses
            </h3>

            <a
                href="/events/courses"
                class="
                    complete__btn
                    d-flex
                    flex-row
                    align-items-center
                    button
                "
                style="
                    gap: 23px;
                    font-size: 16px;
                    width: 229px;
                "
            >
                <img
                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                    alt="go to"
                    class="complete__btn__img"
                    style="
                        padding: 15px;
                    "
                >

                Go to section
            </a>
        </div>
    </div>

    <x-footer />
</x-base>
