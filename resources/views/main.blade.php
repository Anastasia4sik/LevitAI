@php
    $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
@endphp
<x-base>
    <header id="head" class="header d-flex flex-row justify-content-end">
        <ul class="header__list d-flex flex-row align-items-center">
            <a href="/" class="header__list__item">
                Home
            </a>

        <div class="header__dropdown">
            <div class="header__dropdown__label">
            My Account
            <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="header__dropdown__options">
            <li>Documentation</li>
            <li>Discover</li>
            <li>Your LevitAI World</li>
            <li>Community</li>
            </ul>
        </div>

        <div class="header__dropdown">
            <div class="header__dropdown__label">
            Documentation
            <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="header__dropdown__options">
            <li>My Account</li>
            <li>Discover</li>
            <li>Your LevitAI World</li>
            <li>Community</li>
            </ul>
        </div>

        <div class="header__dropdown">
            <div class="header__dropdown__label">
            Discover
            <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="header__dropdown__options">
            <li>My Account</li>
            <li>Documentation</li>
            <li>Your LevitAI World</li>
            <li>Community</li>
            </ul>
        </div>

        <div class="header__dropdown">
            <div class="header__dropdown__label">
            Your LevitAI World
            <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="header__dropdown__options">
            <li>My Account</li>
            <li>Documentation</li>
            <li>Discover</li>
            <li>Community</li>
            </ul>
        </div>

        <div class="header__dropdown">
            <div class="header__dropdown__label">
            Community
            <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="header__dropdown__options">
            <li>My Account</li>
            <li>Documentation</li>
            <li>Discover</li>
            <li>Your LevitAI World</li>
            </ul>
        </div>
        </ul>
    </header>

    <section class="top">
        <h1 class="top__title">
            WelCome to ICO LEVITAI
        </h1>

        <div class="top__desc d-flex flex-column">
            <h3 class="top__desc__title">
                NFT Metaverse for Coin
            </h3>

            <p class="top__desc__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="top__desc__btns d-flex flex-row align-items-center">
                <x-button
                    img="src/img/icons/play.svg"
                    gap="9px"
                    pr="24px"
                    fs="14px"
                    width="inherit"
                    padding="0"
                    margin=""
                >
                    What is ICO LevitAI
                </x-button>

                <a href="" class="top__desc__btns__right d-flex flex-row align-items-center desc">
                    White Papers
                    <img src="{{asset('src/img/icons/arrow_right_short.svg')}}" alt="White Papers" class="top__desc__btns__right__img">
                </a>
            </div>
        </div>
    </section>

    <section class="about d-flex flex-column align-items-center">
        <h4 class="about__small">
            About ICO
        </h4>

        <h3 class="about__title">
            About Crypto ICO
        </h3>

        <p class="about__desc text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
    </section>

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
        </div>
    </section>

    <section class="rating d-flex flex-row justify-content-between align-items-center">
        <img src="{{ asset('src/img/photo/rating-cards.png')}}" alt="ICO Watchlist" class="rating__img">

        <div class="rating__text text-end">
            <h2 class="rating__text__title title-main">
                Rating
            </h2>

            <h2 class="rating__text__title rating__text__title--crypto title-main title-main--stroke">
                Crypto Token
            </h2>

            <p class="rating__text__desc desc">
                Lorem ipsum lor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            </p>
        </div>
    </section>

    <section class="whatCrypto d-flex flex-row justify-content-between align-items-center">
        <div class="whatCrypto__text">
            <h2 class="whatCrypto__text__title title-main">
                What Is
            </h2>

            <h2 class="whatCrypto__text__title whatCrypto__text__title--crypto title-main--stroke title-main">
                ICO Crypto?
            </h2>

            <p class="whatCrypto__text__desc desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <div class="whatCrypto__list d-flex flex-row align-items-center">
            <div class="whatCrypto__list__container flex-column">
                <div class="whatCrypto__list__item d-flex flex-row align-items-center">
                    <div class="whatCrypto__list__item__imgs d-flex flex-row align-items-center position-relative">
                        <img src="{{ asset('src/img/icons/category-bigLine-1.png')}}" alt="Line" class="whatCrypto__list__item__imgs__line--up position-absolute">

                        <img
                            src="{{asset('src/img/icons/category.png')}}"
                            alt="Category"
                            class="whatCrypto__list__item__img"
                        >
                    </div>

                    <div class="whatCrypto__list__item__text">
                        <h3 class="whatCrypto__list__item__text__title title-little">
                            Secure Storage
                        </h3>

                        <p class="whatCrypto__list__item__text__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>

                <div class="whatCrypto__list__item d-flex flex-row align-items-center">
                    <div class="whatCrypto__list__item__imgs d-flex flex-row align-items-center position-relative">
                        <img src="{{ asset('src/img/icons/category-littleLine-2.png')}}" alt="Line" class="whatCrypto__list__item__imgs__line--up position-absolute">

                        <img
                            src="{{asset('src/img/icons/category.png')}}"
                            alt="Category"
                            class="whatCrypto__list__item__img"
                        >
                    </div>

                    <div class="whatCrypto__list__item__text">
                        <h3 class="whatCrypto__list__item__text__title title-little">
                            Secure Storage
                        </h3>

                        <p class="whatCrypto__list__item__text__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>

                <div class="whatCrypto__list__item d-flex flex-row align-items-center">
                    <div class="whatCrypto__list__item__imgs d-flex flex-row align-items-center position-relative">
                        <img src="{{ asset('src/img/icons/category-littleLine-3.png')}}" alt="Line" class="whatCrypto__list__item__imgs__line--down position-absolute">

                        <img
                            src="{{asset('src/img/icons/category.png')}}"
                            alt="Category"
                            class="whatCrypto__list__item__img"
                        >
                    </div>

                    <div class="whatCrypto__list__item__text">
                        <h3 class="whatCrypto__list__item__text__title title-little">
                            Secure Storage
                        </h3>

                        <p class="whatCrypto__list__item__text__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>

                <div class="whatCrypto__list__item d-flex flex-row align-items-center">
                    <div class="whatCrypto__list__item__imgs d-flex flex-row align-items-center position-relative">
                        <img src="{{ asset('src/img/icons/category-bigLine-4.png')}}" alt="Line" class="whatCrypto__list__item__imgs__line--down position-absolute">

                        <img
                            src="{{asset('src/img/icons/category.png')}}"
                            alt="Category"
                            class="whatCrypto__list__item__img"
                        >
                    </div>

                    <div class="whatCrypto__list__item__text">
                        <h3 class="whatCrypto__list__item__text__title title-little">
                            Secure Storage
                        </h3>

                        <p class="whatCrypto__list__item__text__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="complete">
        <h2 class="complete__title--complete title-main title-main--stroke">
            We Complete
        </h2>

        <h2 class="complete__title title-main d-flex justify-content-center">
            Every Project Extra <br>Care As Customer
        </h2>

        <div class="complete__text">
            <p class="complete__desc desc">
                Globally transition of ours multidisciplinary applications for bleeding-edge vortals. harness o ours plug-and-plays networks without stand-alone bandwidth market harness competitive channels.
            </p>

            <p class="complete__desc desc">
                Seamlessly redefine ethical materials through inours high-payoff growth strategie appropriately envisioneer robust infrastructures before robust for the aynergistically generate B2B alignments after.
            </p>

            <x-button
                img="src/img/icons/arrow-black.svg"
                gap="21px"
                pr="0"
                fs="16px"
                width="189px"
                padding="15px"
                margin=""
            >
                Read More
            </x-button>
        </div>
    </section>

    <section class="choose d-flex flex-row">
        <div class="choose__list d-flex flex-column">
            <div class="choose__list__item">
                <h3 class="choose__list__item__reason title-little">
                    reason
                </h3>

                <p class="choose__list__item__num">
                    1
                </p>

                <div class="choose__list__item__text d-flex flex-column">
                    <h3 class="choose__list__item__text__title title-little">
                        Mobile Payment Make Easy
                    </h3>

                    <p class="choose__list__item__text__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>

            <div class="choose__list__item">
                <h3 class="choose__list__item__reason title-little">
                    reason
                </h3>

                <p class="choose__list__item__num">
                    2
                </p>

                <div class="choose__list__item__text d-flex flex-column">
                    <h3 class="choose__list__item__text__title title-little">
                        Sercurity & control over money
                    </h3>

                    <p class="choose__list__item__text__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>

            <div class="choose__list__item">
                <h3 class="choose__list__item__reason title-little">
                    reason
                </h3>

                <p class="choose__list__item__num">
                    3
                </p>

                <div class="choose__list__item__text d-flex flex-column">
                    <h3 class="choose__list__item__text__title title-little">
                        Protect your Privacy
                    </h3>

                    <p class="choose__list__item__text__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>

            <div class="choose__list__item">
                <h3 class="choose__list__item__reason title-little">
                    reason
                </h3>

                <p class="choose__list__item__num">
                    4
                </p>

                <div class="choose__list__item__text d-flex flex-column">
                    <h3 class="choose__list__item__text__title title-little">
                        Lifetime free transaction
                    </h3>

                    <p class="choose__list__item__text__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>

        <div class="choose__right">
            <h2 class="choose__right__title title-main">
                Why Choose
            </h2>

            <h2 class="choose__right__title--token title-main title-main--stroke">
                Our Token?
            </h2>

            <img
                src="{{ asset('src/img/photo/choose-img.jpg')}}"
                alt="Why choose our token?"
                class="choose__right__img"
            >
        </div>
    </section>

    <section id="face" class="face d-flex flex-row align-items-center justify-content-between">
        <div class="face__text">
            <div class="face__text__top d-flex flex-row align-items-center">
                <h2 class="face__text__top__title title-main">
                    Rating
                </h2>

                <p class="face__text__top__desc desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

            <h2 class="face__text__title face__text__title--crypto title-main title-main--stroke">
                Crypto Token
            </h2>

            <div class="face__text__table d-grid">
                <div class="face__text__table__item">
                    <h3 class="face__text__table__item__title title-little">
                        Secure Payment
                    </h3>

                    <p class="face__text__table__item__desc desc">
                        Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                    </p>
                </div>

                <div class="face__text__table__item">
                    <h3 class="face__text__table__item__title title-little">
                        Secure Payment
                    </h3>

                    <p class="face__text__table__item__desc desc">
                        Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                    </p>
                </div>

                <div class="face__text__table__item">
                    <h3 class="face__text__table__item__title title-little">
                        Secure Payment
                    </h3>

                    <p class="face__text__table__item__desc desc">
                        Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                    </p>
                </div>

                <div class="face__text__table__item">
                    <h3 class="face__text__table__item__title title-little">
                        Secure Payment
                    </h3>

                    <p class="face__text__table__item__desc desc">
                        Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                    </p>
                </div>
            </div>
        </div>

        <div class="face__image position-relative">
            <img
                src="{{ asset('src/img/photo/face/face-white.png')}}"
                alt="Face"
                class="face__img face__img--whiteposition-absolute"
                id="face-white"
            >

            <img
                src="{{ asset('src/img/photo/face/face-main.png')}}"
                alt="Face"
                class="face__img face__img--main position-absolute"
                id="face-main"
            >

            <img
                src="{{ asset('src/img/photo/face/face-color.png')}}"
                alt="Face"
                class="face__img face__img--color position-absolute"
                id="face-color"
            >
        </div>
    </section>

    <section class="market">
        <div class="market__top d-flex flex-row">
            <h2 class="market__top__title title-main title-main--stroke">
                Current
            </h2>

            <h2 class="market__top__title title-main">
                Market
            </h2>
        </div>

        <div class="market__last d-flex flex-row align-items-center">
            <p class="market__last__num desc">
                +0.36%
            </p>

            <p class="market__last__text desc">
                Market up in the last 24 hours
            </p>
        </div>

        <table class="market__table">
            <thead>
                <tr class="market__table__head">
                    <th class="market__table__head__item">
                        All tokens
                    </th>

                    <th class="market__table__head__item">
                        Savailable
                    </th>

                    <th class="market__table__head__item">
                        Gainers
                    </th>

                    <th class="market__table__head__item">
                        Losers
                    </th>

                    <th class="market__table__head__item">
                        T.Supply
                    </th>

                    <th class="market__table__head__item">
                        24h Volume
                    </th>
                </tr>
            </thead>

            <tbody class="market__table__body">
                <tr class="market__table__body__row">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <!-- hidden -->

                <tr class="market__table__body__row market__table__body__row--hide">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row market__table__body__row--hide">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row market__table__body__row--hide">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row market__table__body__row--hide">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>

                <tr class="market__table__body__row market__table__body__row--hide">
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset('src/img/icons/market/market-1.png')}}" alt="Market first" class="market__table__body__row__item--1__img">

                        Binance Coin BNC
                    </td>

                    <td class="market__table__body__row__item">
                        $46967.00
                    </td>

                    <td class="market__table__body__row__item">
                        <img src="{{ asset('src/img/icons/graph-top.svg')}}" alt="Graph top" class="market__table__body__row__item--3__img">

                        1.90%
                    </td>

                    <td class="market__table__body__row__item">
                        $43,9656200.00
                    </td>

                    <td class="market__table__body__row__item">
                        23M
                    </td>

                    <td class="market__table__body__row__item">
                        $93,967,200.30
                    </td>
                </tr>
            </tbody>
        </table>

        <button class="market__btn desc d-flex flex-row align-items-center">
            Show more <img src="{{asset('src/img/icons/arrow-down.svg')}}" alt="Show more">
        </button>
    </section>

    <section class="coin d-flex flex-row align-items-center justify-content-between">
        <div class="coin__images">
            <div class="coin__images__top d-flex flex-row">
                <img src="{{ asset('src/img/photo/coin-abstract.jpg')}}" alt="What is LevtAI coin?" class="coin__images__img coin__images__img--1">

                <img src="{{ asset('src/img/photo/coins.jpg')}}" alt="What is LevtAI coin?" class="coin__images__img coin__images__img--2">
            </div>

            <img src="{{ asset('src/img/photo/choose-img.jpg')}}" alt="What is LevtAI coin?" class="coin__images__img coin__images__img--3">
        </div>

        <div class="coin__text">
            <h3 class="coin__text__titleLittle title-little">
                Exchange your ICO
            </h3>

            <div class="coin__text__white d-flex flex-row align-items-center">
                <h2 class="coin__text__white__title title-main">
                    What Is
                </h2>

                <p class="coin__text__white__desc desc">
                    Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                </p>
            </div>

            <h2 class="coin__text__title title-main title-main--stroke">
                LevitAI Coin?
            </h2>

            <x-button
                img="src/img/icons/telegram.svg"
                gap="21px"
                pr="0"
                fs="16px"
                width="254px"
                padding="17px"
                margin="0 0 25px auto"
            >
                Join us on telegram
            </x-button>

            <div class="coin__text__blocks d-flex flex-row">
                <div class="coin__text__blocks__item">
                    <img src="{{ asset('src/img/icons/category.png')}}" alt="Secure Payment" class="coin__text__blocks__item__img">

                    <h3 class="coin__text__blocks__item__title title-little">
                        Secure Payment
                    </h3>

                    <p class="coin__text__blocks__item__desc desc">
                        Competently formula accurate value vertical outsourcing. Competently formula accurate value vertical outsourcing.
                    </p>
                </div>

                <div class="coin__text__blocks__item">
                    <img src="{{ asset('src/img/icons/category.png')}}" alt="Secure Payment" class="coin__text__blocks__item__img">

                    <h3 class="coin__text__blocks__item__title title-little">
                        Secure Payment
                    </h3>

                    <p class="coin__text__blocks__item__desc desc">
                        Competently formula accurate value vertical outsourcing. Competently formula accurate value vertical outsourcing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sales d-flex flex-row align-items-center">
        <div class="">
            <h2 class="sales__header--token title-main title-main--stroke">
                ICO Token
            </h2>

            <h2 class="sales__header title-main">
                Sales?
            </h2>

            <h3 class="sales__desc title-little">
                SALES INFO
            </h3>
        </div>

        <div class="sales__block">
            <div class="sales__block__btns d-flex flex-row justify-content-end align-items-center">
                <img
                    src="{{ asset('src/img/icons/arrow_right_short.svg')}}"
                    alt="Arrow Left"
                    class="
                        sales__block__btns__img
                        sales__block__btns__img--left
                    "
                    onclick="scrollCards(-1200)"
                >

                <img
                    src="{{ asset('src/img/icons/arrow_right_short.svg')}}"
                    alt="Arrow Right"
                    class="
                        sales__block__btns__img
                        sales__block__btns__img--right
                    "
                    onclick="scrollCards(1200)"
                >
            </div>

            <div class="sales__block__cards d-flex flex-row position-relative text-center">
                @foreach($array as $key => $number)
                    <div class="sales__block__cards__item">
                        <div class="sales__block__cards__item__top">
                            <p class="sales__block__cards__item__top__text desc">
                                0.5% Bonus <br> $2009/token
                            </p>
                        </div>

                        <h3 class="sales__block__cards__item__date title-little">
                            Jul 08 - Jul 2{{ $number }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="roadmap">
        <div class="roadmap__top d-flex flex-row justify-content-between">
            <div class="roadmap__top__text">
                <h2 class="title-main">
                    Our <span class="title-main--stroke">Strategy</span>
                </h2>

                <div class="roadmap__top__text__bottom d-flex flex-row">
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

        <img src="{{ asset('src/img/roadmap.png')}}" alt="" class="roadmap__img">
    </section>

    <section class="available text-center">
        <h2 class="available__title title-main">
            Also Available <span class=" title-main--stroke">LevitAI</span> <br>
            On <span class=" title-main--stroke">IOS</span> And <span class=" title-main--stroke">Android</span>
        </h2>

        <h3 class="available__desk title-little">
            We work for this task
        </h3>

        <div class="available__links d-flex flex-row justify-content-center">
            <a target="_blank" href="https://www.apple.com/app-store/" class="available__links__item">
                <img src="{{ asset('src/img/icons/download/app-store.png')}}" alt="Available on the App Store">
            </a>

            <a target="_blank" href="https://play.google.com/store/games?hl=uk&gl=US" class="available__links__item">
                <img src="{{ asset('src/img/icons/download/google-play.png')}}" alt="Get it on Google Play">
            </a>
        </div>
    </section>

    <section class="team">
        <h2 class="team__title title-main">
            Met Our <span class=" title-main--stroke">LevitAI</span> <br>
            <span class=" title-main--stroke">Team</span> Players
        </h2>

        <div class="team__list">
            <div class="team__list__item d-flex flex-row justify-content-between align-items-center">
                <div class="team__list__item__text">
                    <h2 class="team__list__item__title title-main">
                        Artem
                    </h2>

                    <h3 class="team__list__item__small title-little">
                        HEAD OF CEO
                    </h3>

                    <p class="team__list__item__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <div class="team__list__item__btns d-flex flex-row align-items-center">
                        <x-button
                            img="src/img/icons/arrow-black.svg"
                            gap="21px"
                            pr="32px"
                            fs="16px"
                            width="149px"
                            padding="15px"
                            margin=""
                        >
                            Email
                        </x-button>

                        <a href="https://twitter.com/?lang=uk" target="_blank" class="team__list__item__btns__item">
                            <img src="{{ asset('src/img/icons/twitter.png')}}" alt="Twitter">
                        </a>

                        <a href="https://www.pinterest.com/" target="_blank" class="team__list__item__btns__item">
                            <img src="{{ asset('src/img/icons/pinterest.png')}}" alt="Pinterest">
                        </a>
                    </div>
                </div>

                <div class="border-bottom"></div>

                <img src="{{ asset('src/img/photo/team.jpg')}}" alt="Team member" class="team__list__item__img">
            </div>

            <div class="team__list__item d-flex flex-row justify-content-between align-items-center">
                <div class="team__list__item__text">
                    <h2 class="team__list__item__title title-main">
                        Artem
                    </h2>

                    <h3 class="team__list__item__small title-little">
                        HEAD OF CEO
                    </h3>

                    <p class="team__list__item__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <div class="team__list__item__btns d-flex flex-row align-items-center">
                        <x-button
                            img="src/img/icons/arrow-black.svg"
                            gap="21px"
                            pr="32px"
                            fs="16px"
                            width="149px"
                            padding="15px"
                            margin=""
                        >
                            Email
                        </x-button>

                        <a href="https://twitter.com/?lang=uk" target="_blank" class="team__list__item__btns__item">
                            <img src="{{ asset('src/img/icons/twitter.png')}}" alt="Twitter">
                        </a>

                        <a href="https://www.pinterest.com/" target="_blank" class="team__list__item__btns__item">
                            <img src="{{ asset('src/img/icons/pinterest.png')}}" alt="Pinterest">
                        </a>
                    </div>
                </div>

                <div class="border-bottom"></div>

                <img src="{{ asset('src/img/photo/team.jpg')}}" alt="Team member" class="team__list__item__img">
            </div>

            <div class="team__list__item d-flex flex-row justify-content-between align-items-center">
                <div class="team__list__item__text">
                    <h2 class="team__list__item__title title-main">
                        Artem
                    </h2>

                    <h3 class="team__list__item__small title-little">
                        HEAD OF CEO
                    </h3>

                    <p class="team__list__item__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <div class="team__list__item__btns d-flex flex-row align-items-center">
                        <x-button
                            img="src/img/icons/arrow-black.svg"
                            gap="21px"
                            pr="32px"
                            fs="16px"
                            width="149px"
                            padding="15px"
                            margin=""
                        >
                            Email
                        </x-button>

                        <a href="https://twitter.com/?lang=uk" target="_blank" class="team__list__item__btns__item">
                            <img src="{{ asset('src/img/icons/twitter.png')}}" alt="Twitter">
                        </a>

                        <a href="https://www.pinterest.com/" target="_blank" class="team__list__item__btns__item">
                            <img src="{{ asset('src/img/icons/pinterest.png')}}" alt="Pinterest">
                        </a>
                    </div>
                </div>

                <div class="border-bottom"></div>

                <img src="{{ asset('src/img/photo/team.jpg')}}" alt="Team member" class="team__list__item__img">
            </div>
        </div>
    </section>

    <section class="strategy">
        <div class="strategy__top d-flex flex-column justify-content-end align-items-end">
            <div class="strategy__top__big d-flex flex-row align-items-end">
                <h2 class="title-main">
                    Our <span class="title-main--stroke">Strategy</span>
                </h2>

                <p class="strategy__top__big__desc desc">
                    Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                </p>
            </div>

                <h2 class="title-main">
                    & Roadmap
                </h2>
        </div>

        <div class="strategy__content d-flex flex-row align-items-center justify-content-between">
            <img src="{{ asset('src/img/photo/strategy.png')}}" alt="Our Strategy & Roadmap" class="strategy__content__img">

            <div class="strategy__content__list">
                <div class="strategy__content__list__item">
                    <p class="strategy__content__list__item__text desc">
                        Contingency: 40%
                    </p>

                    <div class="strategy__content__list__item__line">
                        <div class="strategy__content__list__item__line__color strategy__content__list__item__line__color--40"></div>
                    </div>
                </div>

                <div class="strategy__content__list__item">
                    <p class="strategy__content__list__item__text desc">
                        Partner/Investor: 20%
                    </p>

                    <div class="strategy__content__list__item__line">
                        <div class="strategy__content__list__item__line__color strategy__content__list__item__line__color--20"></div>
                    </div>
                </div>

                <div class="strategy__content__list__item">
                    <p class="strategy__content__list__item__text desc">
                        legal & Regulation: 15%
                    </p>

                    <div class="strategy__content__list__item__line">
                        <div class="strategy__content__list__item__line__color strategy__content__list__item__line__color--15"></div>
                    </div>
                </div>

                <div class="strategy__content__list__item">
                    <p class="strategy__content__list__item__text desc">
                        Operational: 15%
                    </p>

                    <div class="strategy__content__list__item__line">
                        <div class="strategy__content__list__item__line__color strategy__content__list__item__line__color--15"></div>
                    </div>
                </div>

                <div class="strategy__content__list__item">
                    <p class="strategy__content__list__item__text desc">
                        Product Development: 10%
                    </p>

                    <div class="strategy__content__list__item__line">
                        <div class="strategy__content__list__item__line__color strategy__content__list__item__line__color--10"></div>
                    </div>
                </div>

                <div class="strategy__content__list__item">
                    <p class="strategy__content__list__item__text desc">
                        Marketing: 5%
                    </p>

                    <div class="strategy__content__list__item__line">
                        <div class="strategy__content__list__item__line__color strategy__content__list__item__line__color--5"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="blog__top">
            <div class="blog__top__first d-flex flex-row align-items-center">
                <h2 class="blog__top__first__title title-main">
                    Recent
                </h2>

                <p class="blog__top__first__desc desc">
                    Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                </p>
            </div>

            <div class="blog__top__second d-flex flex-row align-items-center">
                <h2 class="blog__top__second__title title-main title-main--stroke">
                    Blog Post
                </h2>

                <x-button
                    img="src/img/icons/arrow-black.svg"
                    gap="20px"
                    pr="0"
                    fs="16px"
                    width="209px"
                    padding="16px"
                    margin=""
                >
                    Go to all posts
                </x-button>
            </div>
        </div>

        <div class="blog__swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="blog__swiper__slide swiper-slide">
                    <img src="{{ asset('src/img/photo/choose-img.jpg')}}" alt="slide">

                    <h3 class="blog__swiper__slide__title title-little">
                        Cryptocash Is A Clean & Modern Coin Service - Levitai
                    </h3>

                    <p class="blog__swiper__slide__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="blog__swiper__slide swiper-slide">
                    <img src="{{ asset('src/img/photo/slide2.jpg')}}" alt="slide">

                    <h3 class="blog__swiper__slide__title title-little">
                        Cryptocash Is A Clean & Modern Coin Service - Levitai
                    </h3>

                    <p class="blog__swiper__slide__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="blog__swiper__slide swiper-slide">
                    <img src="{{ asset('src/img/photo/choose-img.jpg')}}" alt="slide">

                    <h3 class="blog__swiper__slide__title title-little">
                        Cryptocash Is A Clean & Modern Coin Service - Levitai
                    </h3>

                    <p class="blog__swiper__slide__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="blog__swiper__slide swiper-slide">
                    <img src="{{ asset('src/img/photo/slide2.jpg')}}" alt="slide">

                    <h3 class="blog__swiper__slide__title title-little">
                        Cryptocash Is A Clean & Modern Coin Service - Levitai
                    </h3>

                    <p class="blog__swiper__slide__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="blog__swiper__slide swiper-slide">
                    <img src="{{ asset('src/img/photo/choose-img.jpg')}}" alt="slide">

                    <h3 class="blog__swiper__slide__title title-little">
                        Cryptocash Is A Clean & Modern Coin Service - Levitai
                    </h3>

                    <p class="blog__swiper__slide__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>

            <div class="blog__swiper__pagination swiper-pagination"></div>
        </div>
    </section>

    <footer class="footer ">
        <div class="footer__top d-flex flex-row justify-content-end align-items-center">
            <p class="footer__top__desc text-end">
                Monotonectally productivate virtual benefits vis-a-vis cks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
            </p>

            <a href="#head" class="footer__top__btn d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/back-top.svg')}}" alt="Back to the top">

                <p>
                    Back to the top
                </p>
            </a>
        </div>

        <p class="footer__levitai desc">
            Levitai.com
        </p>

        <p class="footer__rights desc">
            2023 LEVITAI,<br>
            All rights Reserved
        </p>

        <div class="footer__bottom">
            <h1 class="footer__bottom__title">
                Levitai project company
            </h1>
        </div>

    </footer>

    <script>
        const dropdowns = document.querySelectorAll(".header__dropdown");

        dropdowns.forEach((dropdown) => {
        const dropdownOptions = dropdown.querySelector(".header__dropdown__options");

        dropdown.addEventListener("mouseenter", function() {
            dropdownOptions.classList.add("open");
        });

        dropdown.addEventListener("mouseleave", function() {
            dropdownOptions.classList.remove("open");
        });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const blocks = document.querySelectorAll('.market__table__body__row--hide');

            blocks.forEach((block) => {
                const button = document.querySelector('.market__btn');

                button.addEventListener('click', function() {
                    if (block.style.display != 'table-row') {
                        block.style.display = 'table-row';

                        button.innerHTML = 'Show less <img src="{{ asset('src/img/icons/arrow-up.svg') }}" alt="Show less">';
                    } else {
                        block.style.display = 'none';

                        button.innerHTML = 'Show more <img src="{{ asset('src/img/icons/arrow-down.svg') }}" alt="Show more">';
                    }
                });
            });
        });

        //face

        window.addEventListener('scroll', function() {
            const faceWhite = document.getElementById('face-white');
            const faceMain = document.getElementById('face-main');
            const faceColor = document.getElementById('face-color');
            const scrollPosition = window.scrollY;

            const triggerDiv = document.getElementById('face');
            const triggerDivPosition = triggerDiv.offsetTop;

            const opacity = 0.79 - (scrollPosition - triggerDivPosition) / triggerDiv.clientHeight;

            const limitedOpacity = Math.min(1, Math.max(0, opacity));

            console.log(limitedOpacity)

            if (limitedOpacity === 1 || limitedOpacity <= 0.2) {
                faceWhite.style.opacity = 0;
                faceMain.style.opacity = 0;
                faceColor.style.opacity = 0.7;
            } else if (limitedOpacity === 1) {
                faceColor.style.opacity = 0.6;
            } else if (
                (limitedOpacity <= 0.99 && limitedOpacity >= 0.85) ||
                (limitedOpacity < 0.4 && limitedOpacity >= 0.26)
            ) {
                faceWhite.style.opacity = 0.8;
                faceMain.style.opacity = 0;
                faceColor.style.opacity = 0;
            } else if (
                (limitedOpacity < 0.85 && limitedOpacity >= 0.4)
            ) {
                faceWhite.style.opacity = 0;
                faceMain.style.opacity = 1;
                faceColor.style.opacity = 0;
            }
        });

        //sales

        const cardsContainer = document.querySelector('.sales__block__cards');
        const leftButton = document.querySelector('.sales__block__btns__img--left');
        const rightButton = document.querySelector('.sales__block__btns__img--right');

        function updateButtonPadding() {
            const canScrollLeft = cardsContainer.scrollLeft > 0;
            const canScrollRight = cardsContainer.scrollLeft < (cardsContainer.scrollWidth - cardsContainer.clientWidth);

            leftButton.style.padding = canScrollLeft ? '25px 27px' : '18px 20px';
            rightButton.style.padding = canScrollRight ? '25px 27px' : '18px 20px';
        }

        function scrollCards(scrollAmount) {
            cardsContainer.scrollLeft += scrollAmount;
        }

        cardsContainer.addEventListener('scroll', updateButtonPadding);

    </script>
</x-base>
