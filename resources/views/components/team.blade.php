@php
    $teamInfo = [
        'member1' => [
            'name' => 'Artem',
            'position' => 'Head of CEO',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'twitter' => 'https://twitter.com/?lang=uk',
            'pinterest' => 'https://www.pinterest.com/',
            'mail' => 'test@test.com',
            'photo' => 'src/img/photo/team.jpg',
        ],
        'member2' => [
            'name' => 'Artem',
            'position' => 'Head of CEO',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'twitter' => 'https://twitter.com/?lang=uk',
            'pinterest' => 'https://www.pinterest.com/',
            'mail' => 'test@test.com',
            'photo' => 'src/img/photo/team.jpg',
        ],
        'member3' => [
            'name' => 'Artem',
            'position' => 'Head of CEO',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'twitter' => 'https://twitter.com/?lang=uk',
            'pinterest' => 'https://www.pinterest.com/',
            'mail' => 'test@test.com',
            'photo' => 'src/img/photo/team.jpg',
        ],
    ];
@endphp

<section
    class="team"
    @if(request()->is('about-us'))
        style="
            padding: 100px 2vw 0 105px;

            background-image: url('{{asset('src/img/bc/bc-team-aboutPage.png')}}');
        "
    @else
        style="
            padding: 54px 2vw 0 105px;

            background-image: url('{{asset('src/img/bc/bc-team.png')}}');
            background-position: center -280px;
        "
    @endif
>
    <h2 class="team__title title-main">
        Met Our <span class=" title-main--stroke">LevitAI</span> <br>
        <span class=" title-main--stroke">Team</span> Players
    </h2>

    <div class="team__list">
        @foreach($teamInfo as $key => $item)
            <div class="team__list__item d-flex flex-row justify-content-between align-items-center">
                <div class="team__list__item__text">
                    <h2 class="team__list__item__title title-main">
                        {{ $item['name'] }}
                    </h2>

                    <h3 class="team__list__item__small title-little">
                        {{ $item['position'] }}
                    </h3>

                    <p class="team__list__item__desc desc">
                        {{ $item['desc'] }}
                    </p>

                    <div class="team__list__item__btns d-flex flex-row align-items-center">
                        <a
                            href="mailto:{{ $item['mail']}}"
                            class="
                                complete__btn
                                d-flex
                                flex-row
                                align-items-center
                                button
                            "
                            style="
                                gap: 21px;
                                font-size: 16px;
                                width: 149px;
                                padding-right: 32px;
                            "
                        >
                            <img
                                src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                                alt="Email"
                                class="complete__btn__img"
                                style="
                                    padding: 16px;
                                "
                            >

                            Email
                        </a>

                        <a
                            href="{{ $item['twitter'] }}"
                            target="_blank"
                            class="team__list__item__btns__item"
                        >
                            <img src="{{ asset('src/img/icons/media/twitter.png')}}" alt="Twitter">
                        </a>

                        <a
                            href="{{ $item['pinterest'] }}"
                            target="_blank"
                            class="team__list__item__btns__item"
                        >
                            <img src="{{ asset('src/img/icons/media/pinterest.png')}}" alt="Pinterest">
                        </a>
                    </div>
                </div>

                <div class="border-bottom"></div>

                <img src="{{ asset($item['photo'])}}" alt="Team member" class="team__list__item__img">
            </div>
        @endforeach
    </div>
</section>
