@php
    $strategyInfo = [
        'item1' => [
            'name' => 'Contingency',
            'percentage' => 40,
        ],
        'item2' => [
            'name' => 'Partner/Investor',
            'percentage' => 20,
        ],
        'item3' => [
            'name' => 'legal & Regulation',
            'percentage' => 15,
        ],
        'item4' => [
            'name' => 'Operational',
            'percentage' => 15,
        ],
        'item5' => [
            'name' => 'Product Development',
            'percentage' => 10,
        ],
        'item6' => [
            'name' => 'Marketing',
            'percentage' => 5,
        ],
    ];
@endphp

<x-base>
    <aside class="menu">
        <div class="menu__main">
            <img
                src="{{ asset('src/img/icons/sidemenu/menu.svg')}}"
                alt="Open Sidemenu"
                class="menu__main__btn"
            >

            <img
                src="{{ asset('src/img/icons/sidemenu/logo-white.png')}}"
                alt=""
                class="menu__main__logo"
                >
        </div>

        <div class="menu__container d-flex flex-column justify-content-between">
            <div class="">
                <img
                    src="{{ asset('src/img/icons/sidemenu/cross.svg')}}"
                    alt="Close Sidemenu"
                    class="
                        menu__container__btn
                        menu__container__btn--cross
                    "
                >

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
                                    <a href="/roadmap">
                                        Roadmap
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
                                Discover

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
                </ul>
            </div>

            <img
                src="{{ asset('src/img/icons/sidemenu/logo.png')}}"
                alt="Logo"
                class="menu__container__logo"
            >
        </div>
    </aside>

    <x-header />

    <x-roadmap />

    <x-strategy :strategyInfo="$strategyInfo" />

    <x-footer />
{{--
    <script>
        // header
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
            // ShowMore/ShowLess
            const blocks = document.querySelectorAll('.market__table__body__row--hide');

            blocks.forEach((block) => {
                const button = document.querySelector('.market__btn');

                button.addEventListener('click', function() {
                    if (block.style.display != 'table-row') {
                        block.style.display = 'table-row';

                        button.innerHTML = 'Show less <img src="{{ asset('src/img/icons/arrows/arrow-up.svg') }}" alt="Show less">';
                    } else {
                        block.style.display = 'none';

                        button.innerHTML = 'Show more <img src="{{ asset('src/img/icons/arrows/arrow-down.svg') }}" alt="Show more">';
                    }
                });
            });

            //qna
            const qnaBtns = document.querySelectorAll('.qna__block__content__btns__item');

            const listItems = document.querySelectorAll('.qna__block__content__list__group')

            qnaBtns.forEach((button) => {
                button.addEventListener('click', function() {
                    qnaBtns.forEach((btn) => {
                        btn.classList.remove('active')
                    });

                    button.classList.add('active');


                    listItems.forEach((item) => {
                        const categoryClass = 'qna__block__content__list--' + button.id.toLowerCase();

                        if (item.classList.contains(categoryClass)) {
                            item.style.display = 'block';

                            setTimeout(() => {
                                item.style.transform = 'translateX(0)';
                                item.style.opacity = '1';
                            }, 50);
                        } else {
                            item.style.display = 'none';
                            item.style.transform = 'translateX(100%)';
                            item.style.opacity = '0';
                        }
                    });
                })
            })
        });

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
                menuOpenBtn.src = 'src/img/icons/sidemenu/menu-hover.svg';
            }, 300);

        })

        menuOpenBtn.addEventListener("mouseleave", function() {
            menuOpenBtn.style.opacity = "0.6";

            setTimeout(() => {
                menuOpenBtn.style.opacity = "1";
                menuOpenBtn.src = 'src/img/icons/sidemenu/menu.svg';
            }, 300);

        })

        menuCloseBtn.addEventListener("click", function() {
            menuContainer.style.transform = "translateX(-100%)";
        })

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

        // download file
        const downloadButtons = document.querySelectorAll('.docs__content__list__item__btn');

        downloadButtons.forEach((button) => {
            button.addEventListener('click', function() {
                const fileUrl = `./src/docs/${button.id}.pdf`;

                fetch(fileUrl)
                .then(response => response.blob())
                .then(blob => {
                    const link = document.createElement('a');

                    link.download = `${button.id}.pdf`;

                    link.href = URL.createObjectURL(blob);

                    document.body.appendChild(link);

                    link.click();

                    document.body.removeChild(link);
                })
                .catch(error => {
                    console.error('Error fetching the file:', error);
                });
            });
        })

        //roadmap
        window.addEventListener('scroll', function() {
            const line = document.getElementById('line');
            const map = document.getElementById('map');
            const scrollPosition = window.scrollY;

            const triggerDiv = document.getElementById('roadmap');
            const triggerDivPosition = triggerDiv.offsetTop;

            const opacity = 0.79 - (scrollPosition - triggerDivPosition) / triggerDiv.clientHeight;

            const limitedOpacity = Math.min(1, Math.max(0, opacity));

            console.log(limitedOpacity);

            if (limitedOpacity > 0.85 || limitedOpacity <= 0.001) {
                line.style.opacity = 1;
                map.style.opacity = 0;

                setTimeout(() => {
                    map.style.display = 'none';
                    line.style.display = 'block';
                }, 1800);
            }else {
                line.style.opacity = 0;
                map.style.opacity = 1;

                setTimeout(() => {
                    line.style.display = 'none';
                    map.style.display = 'block';
                }, 1800);
            }
        });
    </script> --}}
</x-base>
