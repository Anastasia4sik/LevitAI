@php
    $copyLink = 'http://levitai-billionaire-42d508739ff8.herokuapp.com/';

    $referrals = [
        'user1' => [
            'id' => 1,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
        'user2' => [
            'id' => 2,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
        'user3' => [
            'id' => 3,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
        'user4' => [
            'id' => 4,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
        'user5' => [
            'id' => 5,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
        'user6' => [
            'id' => 6,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
        'user7' => [
            'id' => 7,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
        'user8' => [
            'id' => 8,
            'img' => 'src/img/photo/account/avatar-small.png',
            'name' => 'Artem',
            'surname' => 'Jonson',
            'date' => '12.06.2023',
            'info' => '+0.45753',
        ],
    ];

    $account = [
        'id' => 1,
        'photoTop' => 'src/img/photo/account/avatar-top.png',
        'photoSmall' => 'src/img/photo/account/avatar-small.jpg',
        'photoEdit' => 'src/img/photo/account/avatar-edit.jpg',
        'name' => 'Artem',
        'surname' => 'Jonson',
        'phone' => '+380 99 105 35 17',
        'mail' => 'gp.ugspl@gmail.com',
        'langs' => 'Ukraine, English, Polish',
        'nationality' => 'Ukrainian',
        'age' => '25',
        'sex' => 'Man',
        'hobby' => 'To take dance, to surf, to hike',
        'music' => 'jazz, hip-hop, rock, blues, neoclassical',
        'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'values' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'employment' => 'web design, graphic design, illustration',
        'referrals' => 6,
        'funds' => '12.454667',
        'operations' => 38,
    ];
@endphp

<x-base>
    <section class="referral">
        <x-menu />

        <x-header />

        <div class="referral__top d-flex flex-column align-items-center text-center">
            <h1 class="referral__top__title title-main">
                Referral <span class="title-main title-main--stroke">System</span>
            </h1>

            <p class="referral__top__desc desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt labore dolore magna aliqua.
            </p>

            <div class="referral__top__copy d-flex flex-row align-items-center">
                <input
                    type="text"
                    disabled
                    value="{{ $copyLink }}"
                    class="referral__top__copy__input"
                >

                <button
                    type="submit"
                    class="
                        complete__btn
                        d-flex
                        flex-row
                        align-items-center
                        button
                        referral__top__copy__btn
                    "
                    style="
                        gap: 0.4vw;
                        font-size: 0.8vw;
                        width: 9vw;
                    "
                    id="copy"
                >
                    <img
                        src="{{asset('src/img/icons/copy.svg')}}"
                        alt="Send"
                        class="complete__btn__img"
                        style="
                            padding: 15px;
                        "
                    >

                    Copy Link
                </button>
            </div>

            <div class="referral__top__line d-flex flex-row align-items-center">
                <hr>

                <p class="referral__top__line__text desc">
                    Or share on social networks
                </p>

                <hr>
            </div>

            <div class="referral__top__media d-flex flex-row align-items-center">
                <a href="https://t.me/snoopwest" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/telegram.svg')}}" alt="Telegram" class="referral__top__media__img">
                </a>

                <a href="https://twitter.com/?lang=uk" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/twitter.svg')}}" alt="Twitter" class="referral__top__media__img">
                </a>

                <a href="https://www.whatsapp.com/?lang=uk_UA" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/whatsapp.svg')}}" alt="What's app?" class="referral__top__media__img">
                </a>

                <a href="https://www.facebook.com/?locale=uk_UA" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/facebook.svg')}}" alt="Facebook" class="referral__top__media__img">
                </a>

                <a href="tel:+13058995577" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/phone.svg')}}" alt="phone" class="referral__top__media__img">
                </a>
            </div>

            <a href="#referrals" class="referral__top__button">
                <img src="{{ asset('src/img/icons/arrows/arrow-down-circle.png')}}" alt="To ">
            </a>
        </div>
    </section>

    <section id="referrals" class="referral__blocks">
        <div class="referral__referrals d-flex flex-row  justify-content-between">
            <div class="referral__referrals__content">
                <div class="referral__referrals__top">
                    <div class="referral__referrals__top__text d-flex flex-row align-items-center">
                        <h2 class="referral__referrals__top__text__title title-main">
                            Your
                        </h2>

                        <p class="referral__referrals__top__text__desc desc">
                            Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                        </p>
                    </div>

                    <h2 class="referral__referrals__top__title title-main title-main--stroke">
                        Referral
                    </h2>
                </div>

                <div class="referral__referrals__table d-flex flex-column">
                    @foreach ($referrals as $user)
                        <div
                            class="
                                referral__referrals__table__item
                                flex-row
                                justify-content-between
                                align-items-center
                                {{ $loop->index > 4 ? 'referral__referrals__table__item--hide' : '' }}
                            "
                        >
                        <div class="referral__referrals__table__item__left d-flex flex-row align-items-center">
                            <img src="{{ asset($user['img'])}}" alt="User" class="referral__referrals__table__item__img">

                            <div class="referral__referrals__table__item__main">
                            <p class="referral__referrals__table__item__main__name desc">
                                {{ $user['name']}} {{ $user['surname']}}
                            </p>

                            <p class="referral__referrals__table__item__main__date desc">
                                {{ $user['date']}}
                            </p>
                            </div>
                        </div>

                        <p class="referral__referrals__table__item__info desc">
                            {{ $user['info']}}
                        </p>
                        </div>
                    @endforeach

                    <button class="referral__referrals__table__btn desc d-flex flex-row align-items-center justify-content-end">
                        Show all referrals <img src="{{asset('src/img/icons/arrows/arrow-down.svg')}}" alt="Show more">
                    </button>
                </div>
            </div>

            <img src="{{ asset('src/img/referrals-bitcoin.png')}}" alt="" class="referral__referrals__img">
        </div>

        <div class="referral__statistic d-flex flex-row align-items-center justify-content-between">
            <img src="{{ asset('src/img/referrals-statistic.png')}}" alt="Referral Statistic" class="referral__statistic__img">

            <div class="referral__statistic__block">
                <div class="referral__statistic__top d-flex flex-column align-items-end">
                    <div class="referral__statistic__top__text d-flex flex-row align-items-center">
                        <p class="referral__statistic__top__text__desc desc">
                            Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                        </p>

                        <h2 class="referral__statistic__top__text__title title-main">
                            Your
                        </h2>
                    </div>

                    <h2 class="referral__statistic__top__title title-main title-main--stroke">
                        Statistic
                    </h2>
                </div>

                <div class="referral__statistic__info d-flex flex-row align-items-center justify-content-between">
                    <div class="referral__statistic__info__item d-flex flex-column align-items-center text-center">
                        <p class="referral__statistic__info__item__top">
                            Registered referrals
                        </p>

                        <div class="referral__statistic__info__item__block">
                            <img
                                src="{{ asset('src/img/icons/referrals/users.svg')}}"
                                alt="Registered referrals"
                                class="referral__statistic__info__item__block__img"
                            >

                            <p class="referral__statistic__info__item__block__text">
                                {{ $account['referrals']}}
                            </p>
                        </div>
                    </div>

                    <div class="referral__statistic__info__item d-flex flex-column align-items-center text-center">
                        <p class="referral__statistic__info__item__top">
                            Funds received
                        </p>

                        <div class="referral__statistic__info__item__block">
                            <img
                                src="{{ asset('src/img/icons/referrals/db.svg')}}"
                                alt="Funds received"
                                class="referral__statistic__info__item__block__img--funds"
                            >

                            <p class="referral__statistic__info__item__block__text--funds">
                                {{ $account['funds']}}
                            </p>
                        </div>
                    </div>

                    <div class="referral__statistic__info__item d-flex flex-column align-items-center text-center">
                        <p class="referral__statistic__info__item__top">
                            Completed operations
                        </p>

                        <div class="referral__statistic__info__item__block">
                            <img
                                src="{{ asset('src/img/icons/referrals/check.svg')}}"
                                alt="Completed operations"
                                class="referral__statistic__info__item__block__img"
                            >

                            <p class="referral__statistic__info__item__block__text">
                                {{ $account['operations']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="referral__transactions d-flex flex-column">
            <h2 class="referral__transactions__title title-main">
                Transactions
            </h2>

            <x-transactions />

            <a href="#" class="referral__transactions__btn complete__btn d-flex justify-content-center align-items-center">
                Show more
            </a>
        </div>

        <div class="referral__invite d-flex flex-column align-items-center justify-content-center">
            <h3 class="referral__invite__title title-main">
                Invite friends right now!
            </h3>

            <div class="referral__top__copy d-flex flex-row align-items-center">
                <input
                    type="text"
                    disabled
                    value="{{ $copyLink }}"
                    class="referral__top__copy__input"
                >

                <button
                    type="submit"
                    class="
                        complete__btn
                        d-flex
                        flex-row
                        align-items-center
                        button
                        referral__top__copy__btn
                    "
                    style="
                        gap: 0.4vw;
                        font-size: 0.8vw;
                        width: 9vw;
                    "
                    id="copy"
                >
                    <img
                        src="{{asset('src/img/icons/copy.svg')}}"
                        alt="Send"
                        class="complete__btn__img"
                        style="
                            padding: 15px;
                        "
                    >

                    Copy Link
                </button>
            </div>

            <div class="referral__top__line d-flex flex-row align-items-center">
                <hr>

                <p class="referral__top__line__text desc">
                    Or share on social networks
                </p>

                <hr>
            </div>

            <div class="referral__top__media d-flex flex-row align-items-center">
                <a href="https://t.me/snoopwest" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/telegram.svg')}}" alt="Telegram" class="referral__top__media__img">
                </a>

                <a href="https://twitter.com/?lang=uk" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/twitter.svg')}}" alt="Twitter" class="referral__top__media__img">
                </a>

                <a href="https://www.whatsapp.com/?lang=uk_UA" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/whatsapp.svg')}}" alt="What's app?" class="referral__top__media__img">
                </a>

                <a href="https://www.facebook.com/?locale=uk_UA" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/facebook.svg')}}" alt="Facebook" class="referral__top__media__img">
                </a>

                <a href="tel:+13058995577" target="_blank" class="referral__top__media__link">
                    <img src="{{ asset('src/img/icons/contact/phone.svg')}}" alt="phone" class="referral__top__media__img">
                </a>
            </div>
        </div>

    </section>

    <x-footer />

    <script>
        //copy
            const input = document.querySelector('.referral__top__copy__input');
            const copyBtn = document.querySelector('#copy');

            copyBtn.addEventListener('click', () => {
                navigator.clipboard.writeText(input.value)
                    .then(() => {
                        setTimeout(() => {
                            copyBtn.style.backgroundColor = '#fff';
                            copyBtn.style.color = '#0C002E';
                        }, 500);

                        setTimeout(() => {
                            copyBtn.style.backgroundColor = '#0C002E';
                            copyBtn.style.color = '#fff';
                        }, 1500);
                    }
                )
                    .catch(error => {
                        window.alert(`Failed to copy placeholder: ${error}`);
                    }
                );
            });

        //showMore
        document.addEventListener('DOMContentLoaded', function() {
            const blocks = document.querySelectorAll('.referral__referrals__table__item--hide');

            blocks.forEach((block) => {
                const button = document.querySelector('.referral__referrals__table__btn');

                button.addEventListener('click', function() {
                    if (block.style.display != 'flex') {
                        block.style.display = 'flex';

                        button.innerHTML = 'Hide <img src="src/img/icons/arrows/arrow-up.svg" alt="Show less">';
                    } else {
                        block.style.display = 'none';

                        button.innerHTML = 'Show all referrals <img src="src/img/icons/arrows/arrow-down.svg" alt="Show more">';
                    }
                });
            });
        });
    </script>
</x-base>
