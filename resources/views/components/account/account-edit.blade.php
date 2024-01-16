<x-base>
    <section
        class="accountEdit"
    >
        <x-menu />

        <x-header />

        <div class="accountEdit__section">
            <div class="article__path d-flex flex-row ">
                <a href="/" class="article__path__item article__path__item--links title-little">
                    Home \&#160;
                </a>

                <a href="/account" class="article__path__item article__path__item--links title-little">
                    My Account \&#160;
                </a>

                <p class="article__path__item title-little">
                    Edit Account
                </p>
            </div>

            <form
                action="#"
                class="accountEdit__section__form d-flex flex-column align-items-center"
            >
                <h1 class="accountEdit__section__form__title title-main text-center">
                    Edit Account
                </h1>

                <div class="register__container__form__inputs d-flex flex-row">
                    <div class="register__container__form__inputs__left d-flex flex-column">
                        <label
                            for="registerName"
                            class="register__container__form__label title-little"
                        >
                            Name:
                        </label>

                        <input
                            id="registerName"
                            type="text"
                            class="register__container__form__input"
                            placeholder="None"
                            required
                        >

                        <label
                            for="registerEmail"
                            class="register__container__form__label title-little"
                        >
                            Email:
                        </label>

                        <input
                            id="registerEmail"
                            type="email"
                            class="register__container__form__input"
                            placeholder="None"
                            required
                        >
                    </div>

                    <div class="register__container__form__inputs__right d-flex flex-column">
                        <label
                            for="registerLastName"
                            class="register__container__form__label title-little"
                        >
                            Last Name:
                        </label>

                        <input
                            id="registerLastName"
                            type="text"
                            class="register__container__form__input"
                            placeholder="None"
                            required
                        >

                        <label
                            for="registerNickname"
                            class="register__container__form__label title-little"
                        >
                            Nickname:
                        </label>

                        <input
                            id="registerNickname"
                            type="text"
                            class="register__container__form__input"
                            placeholder="None"
                            required
                        >
                    </div>
                </div>

                <button
                    type="submit"
                    class="
                        complete__btn
                        d-flex
                        flex-row
                        align-items-center
                        button
                    "
                    style="
                        gap: 9px;
                        font-size: 16px;
                        width: 203px;
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

                    Create Account
                </button>
            </form>
        </div>

        <x-footer />
    </section>
</x-base>
