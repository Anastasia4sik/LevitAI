<section class="sales d-flex flex-row align-items-center">
    <div class="sales__top">
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
                src="{{ asset('src/img/icons/arrows/arrow_right_short.svg')}}"
                alt="Arrow Left"
                class="
                    sales__block__btns__img
                    sales__block__btns__img--left
                "
                onclick="scrollCards(-1200)"
            >

            <img
                src="{{ asset('src/img/icons/arrows/arrow_right_short.svg')}}"
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

    <script>
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
</section>
