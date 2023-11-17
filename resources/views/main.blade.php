<x-base>
  <header class="header d-flex flex-row justify-content-end">
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

  <div class="top">
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
            >
                What is ICO LevitAI
            </x-button>

            <a href="" class="top__desc__btns__right d-flex flex-row align-items-center desc">
                White Papers
                <img src="{{asset('src/img/icons/arrow_right_short.svg')}}" alt="White Papers" class="top__desc__btns__right__img">
            </a>
        </div>
    </div>
  </div>

  <div class="about d-flex flex-column align-items-center">
    <h4 class="about__small">
        About ICO
    </h4>

    <h3 class="about__title">
        About Crypto ICO
    </h3>

    <p class="about__desc text-center">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>
  </div>

  <div class="aboutBig">
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
  </div>

  <div class="rating d-flex flex-row justify-content-between align-items-center">
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
  </div>

  <div class="whatCrypto d-flex flex-row justify-content-between align-items-center">
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
  </div>

  <div class="complete">
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
        >
            Read More
        </x-button>
    </div>
  </div>

  <div class="choose d-flex flex-row">
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
  </div>

  <div class="choose d-flex flex-row">
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
  </div>

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
  </script>
</x-base>
