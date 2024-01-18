<x-base>
  <section class="register">
    <x-menu />

    <x-header />

    <div class="register__container d-flex flex-row align-items-center">
      <div class="register__container__text">
        <h1 class="register__container__text__title title-little">
          Register an <br> account
        </h1>

        <p class="register__container__text__desc desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        </p>
      </div>

      <form action="#" class="register__container__form">
        <div class="register__container__form__inputs d-flex flex-row">
          <div class="register__container__form__inputs__left d-flex flex-column">
            <label for="registerName" class="register__container__form__label title-little">
              Name:
            </label>

            <input id="registerName" type="text" class="register__container__form__input" placeholder="None" required>

            <label for="registerPassword" class="register__container__form__label title-little">
              Password
            </label>

            <input id="registerPassword" type="password" class="register__container__form__input" placeholder="None"
              required>

            <label for="registerEmail" class="register__container__form__label title-little">
              Email
            </label>

            <input id="registerEmail" type="email" class="register__container__form__input" placeholder="None" required>
          </div>

          <div class="register__container__form__inputs__right d-flex flex-column">
            <label for="registerLastName" class="register__container__form__label title-little">
              Last Name:
            </label>

            <input id="registerLastName" type="text" class="register__container__form__input" placeholder="None"
              required>

            <label for="registerRepPassword" class="register__container__form__label title-little">
              Repeat Password
            </label>

            <input id="registerRepPassword" type="password" class="register__container__form__input" placeholder="None"
              required>

            <label for="registerLogin" class="register__container__form__label title-little">
              Login
            </label>

            <input id="registerLogin" type="text" class="register__container__form__input" placeholder="None" required>
          </div>
        </div>

        <p class="register__container__form__agree desk">
          By continuing you agree to <span><a href="/terms-use" target="_blank">Terms of Use</a></span> and <span><a
              href="/privacy-policy" target="_blank">Privacy Policy</a></span>
        </p>

        <div class="register__container__form__btns d-flex flex-row align-items-center">
          <button type="submit" class="
                            complete__btn
                            d-flex
                            flex-row
                            align-items-center
                            button
                        " style="
                            gap: 9px;
                            font-size: 16px;
                            width: 203px;
                        ">
            <img src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Send" class="complete__btn__img" style="
                                padding: 15px;
                            ">

            Create Account
          </button>

          <p class="desc">or</p>

          <button type="button" class="
                            complete__btn
                            d-flex
                            flex-row
                            align-items-center
                            button
                        " style="
                            gap: 10px;
                            font-size: 16px;
                            width: 239px;
                        ">
            <img src="{{asset('src/img/icons/google.png')}}" alt="Send" class="complete__btn__img" style="
                                padding: 0;
                            ">

            Sing Up with Google
          </button>
        </div>

        <p class="register__container__form__question desc">
          Have an Account?
        </p>

        <a href="/sign-in" class="register__container__form__link desc">
          Login Now
        </a>
      </form>
    </div>

  </section>
</x-base>