<x-base>
  <x-menu />

  <x-header />

  <section class="contactPage">
    <div class="contactPage__container topPage d-flex flex-column align-items-center justify-content-center">
      <div class="
                        topPage__top
                        d-flex
                        flex-column
                        justify-content-center
                    ">
        <h2 class="topPage__top__title title-main">
          Contact <span class="contactPage__container__title__mob title-main title-main--stroke">us</span>
        </h2>

        <div class="topPage__top__text d-flex align-items-center">
          <h2 class="topPage__top__text__title contactPage__container__title__main title-main title-main--stroke">
            us
          </h2>

          <p class="topPage__top__text__desc desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore
            magna aliqua. Ut ad minim veniam, nostrud exercitation ullamco laboris ut ea consequat. Lorem amet, sed do
            tempor aliqua.
          </p>
        </div>

      </div>

      <a href="#contact-form" class="topPage__top__arrowDown">
        <img src="{{ asset('src/img/icons/arrows/arrow-down-circle.png')}}" alt="To map">
      </a>
    </div>

    <div id="contact-form" class="contactPage__bottom d-flex">
      <div class="contactPage__bottom__left d-flex flex-column">
        <h2 class="contactPage__bottom__left__title title-main">
          Feedback
        </h2>

        <div class="contactPage__bottom__left__text d-flex ">
          <h2 class="contactPage__bottom__left__text__title title-main title-main--stroke">
            form
          </h2>

          <div
            class="contactPage__bottom__left__text__media d-flex">
            <div class="contactPage__bottom__left__text__media__column d-flex flex-column">
              <a href="https://maps.app.goo.gl/Jm7MvvY67aTJmciKA"
                class="contactPage__bottom__left__text__media__column__desc d-flex flex-row align-items-center"
                target="_blank">
                <img src="{{ asset('src/img/icons/contactPage/location.svg')}}" alt="Location">

                <p class="desc">
                  Lviv National Opera
                </p>
              </a>

              <a href="https://www.levitai.com"
                class="contactPage__bottom__left__text__media__column__desc d-flex flex-row align-items-center"
                target="_blank">
                <img src="{{ asset('src/img/icons/contactPage/web.svg')}}" alt="Web Site">
                <p class="desc text-decoration-underline">
                  LevitAI.com
                </p>
              </a>

              <a href="mailto:LevitAI@gmail.com"
                class="contactPage__bottom__left__text__media__column__desc d-flex flex-row align-items-center"
                target="_blank">
                <img src="{{ asset('src/img/icons/contactPage/message.svg')}}" alt="Email">

                <p class="desc text-decoration-underline">
                  LevitAI@gmail.com
                </p>
              </a>
            </div>

            <div class="contactPage__bottom__left__text__media__column d-flex flex-column">
              <a href="Tel:+13058995577"
                class="contactPage__bottom__left__text__media__column__desc d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/contactPage/phone.svg')}}" alt="Location">

                <p class="desc">
                  +1(305) 899-5577
                </p>
              </a>

              <a href="Tel:+13058995100"
                class="contactPage__bottom__left__text__media__column__desc d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/contactPage/phone.svg')}}" alt="Web Site">

                <p class="desc">
                  +1(305) 899-5100
                </p>
              </a>

              <a href="https://t.me/snoopwest"
                class="contactPage__bottom__left__text__media__column__desc d-flex flex-row align-items-center"
                target="_blank">
                <img src="{{ asset('src/img/icons/contactPage/telegram.svg')}}" alt="Telegram">

                <p class="desc text-decoration-underline">
                  Telegram
                </p>
              </a>
            </div>
          </div>
        </div>

        <form action="#" class="contactPage__form d-flex flex-column">
          <div class="contactPage__form__group d-flex align-items-row">
            <input type="text" placeholder="Name" name="Name"
              class="contactPage__form__input contact__form__group__input">

            <input type="email" placeholder="Email" name="Email"
              class="contactPage__form__input contact__form__group__input">
          </div>

          <div class="contactPage__form__group d-flex align-items-row">
            <input type="phone" placeholder="Number" name="Number"
              class="contactPage__form__input contact__form__group__input">

            <input type="url" placeholder="Website" name="Website"
              class="contactPage__form__input contact__form__group__input">
          </div>

          <textarea name="Message" placeholder="Message" class="contactPage__form__input"></textarea>

          <button type="submit" class="
                                complete__btn
                                contact__form__btn
                                contactPage__form__btn
                                d-flex
                                flex-row
                                align-items-center
                                button
                            " style="
                                font-size: 16px;
                            ">
            <img src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Send" class="complete__btn__img" style="
                                    padding: 15px;
                                ">

            Send
          </button>
        </form>
      </div>

      <a href="https://maps.app.goo.gl/Jm7MvvY67aTJmciKA" target="_blank">
        <img src="{{ asset('src/img/location.jpg')}}" alt="Location" class="contactPage__bottom__img">
      </a>
    </div>
  </section>

  <x-footer />
</x-base>
