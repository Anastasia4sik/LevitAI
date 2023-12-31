<aside class="menu">
  <div class="menu__main">
    <img src="{{ asset('/src/img/icons/sidemenu/menu.svg')}}" alt="Open Sidemenu" class="menu__main__btn">

    <img src="{{ asset('src/img/icons/sidemenu/logo-white.png')}}" alt="" class="menu__main__logo">
  </div>

  <div class="menu__container d-flex flex-column justify-content-between">
    <div class="">
      <img src="{{ asset('src/img/icons/sidemenu/cross.svg')}}" alt="Close Sidemenu" class="
                    menu__container__btn
                    menu__container__btn--cross
                ">

      <ul class="menu__container__list d-flex flex-column">
        <li class="menu__container__list__item">
          <a href="/">
            Home
          </a>
        </li>

        <li class="menu__container__list__item">
          <div class="menu__container__list__item__select">
            <div class="menu__container__list__item__select__label">
              My Account

              <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="menu__container__list__item__select__options">
              <li>
                <a href="#">
                  Building the Future
                </a>
              </li>

              <li>
                <a href="#">
                  What is LevitAI
                </a>
              </li>

              <li>
                <a href="#">
                  The NFT Gallery
                </a>
              </li>

              <li>
                <a href="#">
                  The Exchange Market
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu__container__list__item">
          <div class="menu__container__list__item__select">
            <div class="menu__container__list__item__select__label">
              Documentation

              <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="menu__container__list__item__select__options">
              <li>
                <a href="/documentation">
                  What is LevitAI
                </a>
              </li>

              <li>
                <a href="/roadmap">
                  Roadmap
                </a>
              </li>

              <li>
                <a href="/terms-use">
                  Terms Of Use
                </a>
              </li>

              <li>
                <a href="/privacy-policy">
                  Privacy Policy
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu__container__list__item">
          <div class="menu__container__list__item__select">
            <div class="menu__container__list__item__select__label">
              Discover

              <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="menu__container__list__item__select__options">
                <li>
                    <a href="/our-vision">
                        Our Vision
                    </a>
                </li>

                <li>
                    <a href="/metaverse">
                        The Metaverse
                    </a>
                </li>

              <li>
                    <a href="/partners">
                        Partners
                    </a>
              </li>

              <li>
                <a href="#">
                  The Exchange Market
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu__container__list__item">
          <div class="menu__container__list__item__select">
            <div class="menu__container__list__item__select__label">
              Your LevitAI World

              <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="menu__container__list__item__select__options">
              <li>
                <a href="#">
                  Building the Future
                </a>
              </li>

              <li>
                <a href="#">
                  What is LevitAI
                </a>
              </li>

              <li>
                <a href="#">
                  The NFT Gallery
                </a>
              </li>

              <li>
                <a href="#">
                  The Exchange Market
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu__container__list__item">
          <div class="menu__container__list__item__select">
            <div class="menu__container__list__item__select__label">
              Community

              <span class="arrow-down">&#9662;</span>
            </div>

            <ul class="menu__container__list__item__select__options">
                <li>
                    <a href="/contact-us">
                        Contact Us
                    </a>
                </li>

                <li>
                    <a href="/faq">
                        FAQ
                    </a>
                </li>

                <li>
                    <a href="/blog">
                    Blog
                    </a>
                </li>

                <li>
                    <a href="/team">
                        Our Team
                    </a>
                </li>

                <li>
                    <a href="/about-us">
                        About Us
                    </a>
                </li>

                <li>
                    <a href="/events">
                        The Events
                    </a>
                </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

    <img src="{{ asset('src/img/icons/sidemenu/logo.png')}}" alt="Logo" class="menu__container__logo">
  </div>

  <script>
    //menu dropdown
        const menulist = document.querySelectorAll(".menu__container__list__item__select");

        menulist.forEach((menuitem) => {
            const menulistOption = menuitem.querySelector(".menu__container__list__item__select__options");

            menuitem.addEventListener("click", function() {
                if (menulistOption?.classList.contains("open")) {
                    menulistOption.classList.remove("open");
                } else {
                    menulistOption.classList.add("open");
                }
            });
        });

    //menu visible
    const menuOpenBtn = document.querySelector(".menu__main__btn");
    const menuCloseBtn = document.querySelector(".menu__container__btn");
    const menuContainer = document.querySelector(".menu__container");

    menuOpenBtn.addEventListener("click", function() {
        menuContainer.style.transform = "translateX(0)";
    })

    menuOpenBtn.addEventListener("mouseenter", function() {
        menuOpenBtn.style.opacity = "0.6";

        setTimeout(() => {
            menuOpenBtn.style.opacity = "1";
            menuOpenBtn.src = '/src/img/icons/sidemenu/menu-hover.svg';
        }, 300);

    })

    menuOpenBtn.addEventListener("mouseleave", function() {
        menuOpenBtn.style.opacity = "0.6";

        setTimeout(() => {
            menuOpenBtn.style.opacity = "1";
            menuOpenBtn.src = '/src/img/icons/sidemenu/menu.svg';
        }, 300);

    })

    menuCloseBtn.addEventListener("click", function() {
        menuContainer.style.transform = "translateX(-100%)";
    })
  </script>
</aside>
