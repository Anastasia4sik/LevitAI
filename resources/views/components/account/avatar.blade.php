<x-base>
    <section class="avatar">
        <x-menu />

        <x-header />

        <div class="avatar__section d-flex flex-row justify-content-between">
            <div class="avatar__section__content">
                <div class="avatar__section__content__top">
                    <div class="avatar__section__content__top__first d-flex flex-row align-items-center">
                        <h2 class="avatar__section__content__top__first__title title-main">
                            My
                        </h2>

                        <p class="avatar__section__content__top__first__desc desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.
                        </p>
                    </div>

                    <div class="avatar__section__content__top__sec d-flex flex-row align-items-center">
                        <h2 class="avatar__section__content__top__sec__title title-main title-main--stroke">
                            Avatar
                        </h2>

                        <a
                            href="/avatar/add"
                            class="
                                complete__btn
                                flex-row
                                align-items-center
                                button
                                avatar__section__content__top__sec__button
                            "
                            style="
                                gap: 15px;
                                font-size: 16px;
                                width: 178px;
                            "
                        >
                            <img
                                src="{{asset('src/img/icons/plus.svg')}}"
                                alt="Add"
                                class="complete__btn__img"
                                style="
                                    padding: 15px;
                                "
                            >

                            Add Avatar
                        </a>

                        <div class="avatar__section__content__top__sec__btns flex-row align-items-center">
                            <a
                                href="/avatar/edit"
                                class="
                                    complete__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                    button
                                "
                                style="
                                    gap: 17px;
                                    font-size: 16px;
                                    width: 177px;
                                "
                            >
                                <img
                                    src="{{asset('src/img/icons/edit.svg')}}"
                                    alt="Add"
                                    class="complete__btn__img"
                                    style="
                                        padding: 15px;
                                    "
                                >

                                Edit Avatar
                            </a>

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
                                    gap: 14px;
                                    font-size: 16px;
                                    width: 177px;
                                "
                            >
                                <img
                                    src="{{asset('src/img/icons/play.svg')}}"
                                    alt="Add"
                                    class="complete__btn__img"
                                    style="
                                        padding: 5px;
                                    "
                                >

                                Play meta
                            </a>
                        </div>
                    </div>
                </div>

                <div class="avatar__section__content__table d-grid">
                    <div class="avatar__section__content__table__item">
                        <h3 class="avatar__section__content__table__item__title title-little">
                            Secure Payment
                        </h3>

                        <p class="avatar__section__content__table__item__desc desc">
                            Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                        </p>
                    </div>

                    <div class="avatar__section__content__table__item">
                        <h3 class="avatar__section__content__table__item__title title-little">
                            Secure Payment
                        </h3>

                        <p class="avatar__section__content__table__item__desc desc">
                            Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                        </p>
                    </div>

                    <div class="avatar__section__content__table__item">
                        <h3 class="avatar__section__content__text__table__item__title title-little">
                            Secure Payment
                        </h3>

                        <p class="avatar__section__content__table__item__desc desc">
                            Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                        </p>
                    </div>

                    <div class="avatar__section__content__table__item">
                        <h3 class="avatar__section__content__text__table__item__title title-little">
                            Secure Payment
                        </h3>

                        <p class="avatar__section__content__table__item__desc desc">
                            Competently formula accurate value vertical outsourcing.Competently formula accurate value vertical outsourcing.
                        </p>
                    </div>
                </div>
            </div>

            <div class="avatar__section__photo">
                <p class="avatar__section__photo__text title-little">
                    You have not created your avatar yet
                </p>

                <img src="{{ asset('src/img/photo/avatar.jpg')}}" alt="" class="avatar__section__img">
            </div>
        </div>

        <x-footer />
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const photo = document.querySelector('.avatar__section__img');
            const page = document.querySelector('.avatar');
            const oneBtn = document.querySelector('.avatar__section__content__top__sec__button');
            const btnBlock = document.querySelector('.avatar__section__content__top__sec__btns');

            if (!photo.complete || photo.naturalWidth === 0) {
                oneBtn.style.display = 'flex';
                btnBlock.style.display = 'none';
                page.classList.add('avatar--1');
                page.classList.remove('avatar--2');
            } else {
                oneBtn.style.display = 'none';
                btnBlock.style.display = 'flex';
                page.classList.add('avatar--2');
                page.classList.remove('avatar--1');
            }
        })
    </script>
</x-base>
