<section id="face" class="face d-flex align-items-center justify-content-between">
    <div class="face__text">
        <div class="face__text__top">
            <h2 class="face__text__top__title title-main">
                Rating <br> <span class="face__text__top__title--crypto title-main title-main--stroke">Crypto Token</span>
            </h2>

            <p class="face__text__top__desc desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>


        <div class="face__text__table">
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

    <script>
        //face
        window.addEventListener('scroll', function() {
            const faceWhite = document.getElementById('face-white');
            const faceMain = document.getElementById('face-main');
            const faceColor = document.getElementById('face-color');
            const scrollPosition = window.scrollY;

            const triggerDiv = document.getElementById('face');
            const triggerDivPosition = triggerDiv.offsetTop + window.innerHeight * 0.5;

            const opacity = 0.79 - (scrollPosition - triggerDivPosition) / triggerDiv.clientHeight;

            const limitedOpacity = Math.min(1, Math.max(0, opacity));

            console.log(triggerDivPosition);
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
    </script>
</section>
