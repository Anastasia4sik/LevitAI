<x-base>
  <div class="header d-flex flex-row justify-content-end">
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
  </div>

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
            <button class="top__desc__btns__left d-flex flex-row align-items-center button">
                <img src="{{asset('src/img/icons/play.png')}}" alt="Play" class="top__desc__btns__left__img">
                What is ICO LevitAI
            </button>

            <a href="" class="top__desc__btns__right">
                White Papers >
            </a>
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
