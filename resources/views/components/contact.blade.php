<section
    class="contact d-flex flex-column align-items-center"
    style="
        @if (request()->is('faq') || request()->is('events') )
            background: none;
        @else
            background-image: url({{ asset('src/img/bc/bc-teamPage-contact.png') }});
        @endif
    "
>
    <h2 class="contact__title title-main">
        Contact Us
    </h2>

    <div class="contact__media d-flex flex-row align-items-center">
        <a href="mailto:test@test.com" target="_blank" class="contact__media__link">
            <img src="{{ asset('src/img/icons/contact/mail.svg')}}" alt="Email" class="contact__media__img">
        </a>

        <a href="tel:+13058995577" target="_blank" class="contact__media__link">
            <img src="{{ asset('src/img/icons/contact/phone.svg')}}" alt="Phone" class="contact__media__img">
        </a>

        <a href="https://t.me/snoopwest" target="_blank" class="contact__media__link">
            <img src="{{ asset('src/img/icons/contact/telegram.svg')}}" alt="Telegram" class="contact__media__img">
        </a>
    </div>

    <form action="#" class="contact__form d-flex flex-column align-items-center">
        <div class="contact__form__group d-flex align-items-center">
            <input type="text" placeholder="Name" name="Name" class="contact__form__input contact__form__group__input">

            <input type="email" placeholder="Email" name="Email" class="contact__form__input contact__form__group__input">
        </div>

        <div class="contact__form__group d-flex align-items-center">
            <input type="phone" placeholder="Number" name="Number" class="contact__form__input contact__form__group__input">

            <input type="url" placeholder="Website" name="Website" class="contact__form__input contact__form__group__input">
        </div>

        <textarea name="Message" placeholder="Message" class="contact__form__input"></textarea>

        <button
            type="submit"
            class="
                complete__btn
                contact__form__btn
                d-flex
                flex-row
                align-items-center
                button
            "
            style="
                font-size: 20px;
            "
        >
            <img
                src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                alt="Send"
                class="complete__btn__img"
                style="
                    padding: 16px;
                "
            >

            Send
        </button>
    </form>
</section>
