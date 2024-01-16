@php
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
    ];
@endphp

<x-base>
    <section
        class="account"
        style="
            background-image: url('{{ asset($account['photoTop'])}}')
        "
    >
        <x-menu />

        <x-header />

        <div
            class="account__section"
        >
            <div class="account__section__top">
                <div class="account__section__top__first d-flex flex-row align-items-center">
                    <h2 class="account__section__top__first__title title-main">
                        My
                    </h2>

                    <p class="account__section__top__first__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.
                    </p>
                </div>

                <div class="account__section__top__sec d-flex flex-row align-items-center">
                    <h2 class="account__section__top__sec__title title-main title-main--stroke">
                        Account
                    </h2>

                    <a
                        href="/account/edit"
                        class="
                            complete__btn
                            d-flex
                            flex-row
                            align-items-center
                            button
                        "
                        style="
                            gap: 15px;
                            font-size: 16px;
                            width: 190px;
                        "
                    >
                        <img
                            src="{{asset('src/img/icons/edit.svg')}}"
                            alt="Add"
                            class="complete__btn__img"
                            style="
                                padding: 14px;
                            "
                        >

                        Edit account
                    </a>
                </div>
            </div>

            <div class="account__section__table">
                <h3 class="account__section__table__title title-main">
                    TrinitySap
                </h3>

                <div class="account__section__table__blocks d-flex flex-row align-items-center justify-content-between">
                    <div class="account__section__table__blocks__item account__section__table__blocks__item--1">
                        <p class="account__section__table__blocks__item__title desc">
                            Name:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['name']}} {{ $account['surname']}}
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            Phone:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['phone']}}
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            Email:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['mail']}}
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            Language:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['langs']}}
                        </h4>
                    </div>

                    <div class="account__section__table__blocks__item account__section__table__blocks__item--2">
                        <p class="account__section__table__blocks__item__title desc">
                            Nationality:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['nationality']}}
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            Age:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['age']}}
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            Sex:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            @if ($account['sex'] === 'Man')
                                {{ $account['sex']}} &#9794;
                            @elseif ($account['sex'] === 'Woman')
                                {{ $account['sex']}} &#9792;
                            @else
                                {{ $account['sex']}}
                            @endif
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            Hobby:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['hobby']}}
                        </h4>
                    </div>

                    <div class="account__section__table__blocks__item account__section__table__blocks__item--3">
                        <p class="account__section__table__blocks__item__title desc">
                            Favorite style of music:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['music']}}
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            About myself:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['about']}}
                        </h4>
                    </div>

                    <div class="account__section__table__blocks__item account__section__table__blocks__item--4">
                        <p class="account__section__table__blocks__item__title desc">
                            Values:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['values']}}
                        </h4>

                        <p class="account__section__table__blocks__item__title desc">
                            Type of employment:
                        </p>

                        <h4 class="account__section__table__blocks__item__info title-little">
                            {{ $account['employment']}}
                        </h4>
                    </div>
                </div>
            </div>

            <div class="account__section__roadmap">
                <div class="account__section__roadmap__top">
                    <div class="account__section__roadmap__top__first d-flex flex-row align-items-center">
                        <h2 class="account__section__roadmap__top__first__title title-main">
                            Our <span class="title-main title-main--stroke">Strategy</span>
                        </h2>

                        <p class="account__section__roadmap__top__desc desc">
                            Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
                        </p>
                    </div>

                    <h2 class="account__section__roadmap__top__title title-main">
                        & Roadmap
                    </h2>
                </div>

                <div class="account__section__roadmap__content d-flex flex-row align-items-center justify-content-between">
                    <img src="{{ asset('src/img/photo/account/account-roadmap.png')}}" alt="Roadmap" class="account__section__roadmap__content__img">

                    <div class="account__section__roadmap__content__info">
                        <h3 class="account__section__roadmap__content__info__title title-little">
                            Virtual reality will soon replace television, cinema, business, communication, education, entertainment and even Internet search. Our vision for Victoria VR is to create a world where…
                        </h3>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#0C71DD"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                You don’t have to travel back and forth for an hour every day to get to school or work.
                            </p>
                        </div>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#500697"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                You don’t have to fly across the continent for an in person meeting.
                            </p>
                        </div>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#950574"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                You can visit the Moon without a space shuttle.
                            </p>
                        </div>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#0C016C"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                You can jump ten meters or fly free as a bird.
                            </p>
                        </div>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#B70DFF"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                You can be anything you want to be.
                            </p>
                        </div>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#A080ED"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                No one can dictate the opening hours of your business, where no one can shut your business, where no one can take it away from you, where there is no lockdown.
                            </p>
                        </div>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#40219B"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                You don’t have to fly across the continent for an in person meeting.
                            </p>
                        </div>

                        <div class="account__section__roadmap__content__info__block d-flex align-items-center flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.5" cy="7.5" r="7.5" fill="#F151FF"/>
                            </svg>

                            <p class="account__section__roadmap__content__info__desc desc">
                                You can jump ten meters or fly free as a bird.
                            </p>
                        </div>

                        <h3 class="account__section__roadmap__content__info__title title-little">
                            The first ever fully immersive virtual world giving ‘citizens’ no limits, realistic and boundless experience.
                        </h3>

                        <p class="account__section__roadmap__content__info__desc account__section__roadmap__content__info__desc--mb desc">
                            Your Place to Go for Work, Rest and Play.
                        </p>

                        <p class="account__section__roadmap__content__info__desc desc">
                            Using the world’s leading 3D rendering software from Unreal Engine, we will create the best user experience allowing you to design, create, build and trade in a metaverse that is constantly evolving.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <x-footer />
    </section>
</x-base>
