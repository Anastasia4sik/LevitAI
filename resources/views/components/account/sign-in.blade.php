<x-base>
    <section class="register">
        <x-menu />

        <x-header />

        <div class="register__container d-flex flex-row align-items-center">
            <div class="register__container__text">
                <h1 class="register__container__text__title title-little">
                    Sign in to the <br> Account
                </h1>

                <p class="register__container__text__desc desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                </p>
            </div>

            <form
                action="#"
                class="register__container__form signIn__container__form"
            >
                <div class="register__container__form__inputs gap-0 d-flex flex-column">
                        <label
                            for="signinLogin"
                            class="register__container__form__label title-little"
                        >
                            Login
                        </label>

                        <input
                            id="signinLogin"
                            type="text"
                            class="register__container__form__input w-100"
                            placeholder="None"
                            required
                        >

                        <label
                            for="signinPassword"
                            class="register__container__form__label title-little"
                        >
                            Password
                        </label>

                        <input
                            id="signinPassword"
                            type="password"
                            class="register__container__form__input w-100"
                            placeholder="None"
                            required
                        >
                </div>

                <p class="register__container__form__agree desk">
                    By continuing you agree to <span><a href="/terms-use" target="_blank">Terms of Use</a></span> and <span><a href="/privacy-policy" target="_blank">Privacy Policy</a></span>
                </p>

                <div class="register__container__form__btns d-flex flex-row align-items-center">
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
                            gap: 22px;
                            font-size: 16px;
                            width: 170px;
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

                        Sign in
                    </button>

                    <p class="desc">or</p>

                    <button
                        type="button"
                        class="
                            complete__btn
                            d-flex
                            flex-row
                            align-items-center
                            button
                        "
                        style="
                            gap: 22px;
                            font-size: 16px;
                            width: 170px;
                        "
                    >
                        <img
                            src="{{asset('src/img/icons/google.png')}}"
                            alt="Send"
                            class="complete__btn__img"
                            style="
                                padding: 0;
                            "
                        >

                        Google
                    </button>
                </div>

                <p class="register__container__form__question desc">
                    Don't have an account?
                </p>

                <a
                    href="/register"
                    class="register__container__form__link desc"
                >
                    Registration
                </a>
            </form>
        </div>

    </section>
</x-base>
