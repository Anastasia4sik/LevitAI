@php
    $teamInfo = [
        'member1' => [
        'name' => 'Artem Jonson',
        'position' => 'Head of CEO',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'twitter' => 'https://twitter.com/?lang=uk',
        'pinterest' => 'https://www.pinterest.com/',
        'mail' => 'test@test.com',
        'photo' => 'src/img/photo/team.jpg',
        ],
        'member2' => [
        'name' => 'Artem Jonson',
        'position' => 'Head of CEO',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'twitter' => 'https://twitter.com/?lang=uk',
        'pinterest' => 'https://www.pinterest.com/',
        'mail' => 'test@test.com',
        'photo' => 'src/img/photo/team2.jpg',
        ],
        'member3' => [
        'name' => 'Artem Jonson',
        'position' => 'Head of CEO',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'twitter' => 'https://twitter.com/?lang=uk',
        'pinterest' => 'https://www.pinterest.com/',
        'mail' => 'test@test.com',
        'photo' => 'src/img/photo/team.jpg',
        ],
        'member4' => [
        'name' => 'Artem Jonson',
        'position' => 'Head of CEO',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'twitter' => 'https://twitter.com/?lang=uk',
        'pinterest' => 'https://www.pinterest.com/',
        'mail' => 'test@test.com',
        'photo' => 'src/img/photo/team.jpg',
        ],
        'member5' => [
        'name' => 'Artem Jonson',
        'position' => 'Head of CEO',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'twitter' => 'https://twitter.com/?lang=uk',
        'pinterest' => 'https://www.pinterest.com/',
        'mail' => 'test@test.com',
        'photo' => 'src/img/photo/team2.jpg',
        ],
        'member6' => [
        'name' => 'Artem Jonson',
        'position' => 'Head of CEO',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'twitter' => 'https://twitter.com/?lang=uk',
        'pinterest' => 'https://www.pinterest.com/',
        'mail' => 'test@test.com',
        'photo' => 'src/img/photo/team.jpg',
        ],
    ];
@endphp

<x-base>
  <section class="teamPage">
    <x-menu />

    <x-header />

    <section class="teamPage__top topPage">
        <div
            class="
                teamPage__blog__container
                topPage__top
                d-flex
                flex-column
                justify-content-center
            "
        >
            <h2 class="topPage__top__title title-main">
                Team Member
            </h2>

            <div class="topPage__top__text d-flex align-items-center justify-content-center">
                <h2 class="topPage__top__text__title title-main title-main--stroke">
                    LevitAI
                </h2>

                <p class="topPage__top__text__desc desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore
                    magna aliqua. Ut ad minim veniam, nostrud exercitation ullamco laboris ut ea consequat. Lorem amet, sed do
                    tempor aliqua.
                </p>
            </div>

        </div>

        <a href="#team" class="topPage__top__arrowDown">
            <img src="{{ asset('src/img/icons/arrows/arrow-down-circle.png')}}" alt="To map">
        </a>
    </section>

    <div class="teamPage__block">
        <section id="team" class="teamPage__experts">
          <h3 class="teamPage__experts__undertitle title-little">
            Our team
          </h3>

          <h2 class="teamPage__experts__title title-main">
            Met Our <span class="title-main title-main--stroke">LevitAI Expert</span> Team
          </h2>

          <div class="teamPage__experts__swiper swiper-container">
            <div class="swiper-wrapper">
              @foreach($teamInfo as $key => $item)
              <div class="teamPage__experts__swiper__card swiper-slide">
                <img src="{{ asset($item['photo'])}}" alt="Expert Team Member" class="teamPage__experts__swiper__card__img">

                <h3 class="teamPage__experts__swiper__card__name title-little">
                  {{ $item['name'] }}
                </h3>

                <p class="teamPage__experts__swiper__card__position title-little">
                  {{ $item['position'] }}
                </p>

                <p class="teamPage__experts__swiper__card__desc desc">
                  {{ $item['desc'] }}
                </p>

                <div class="teamPage__experts__swiper__card__btns d-flex flex-row align-items-center">
                  <a href="mailto:{{ $item['mail']}}" class="
                                            complete__btn
                                            teamPage__experts__swiper__card__btns__btn
                                            d-flex
                                            flex-row
                                            align-items-center
                                            button
                                        " style="
                                            font-size: 16px;
                                            width: 149px;
                                        ">
                    <img src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Email" class="complete__btn__img"
                      style="
                                                padding: 13px;
                                            ">

                    Email
                  </a>

                  <a href="{{ $item['twitter'] }}" target="_blank" class="teamPage__experts__swiper__card__btns__item">
                    <img src="{{ asset('src/img/icons/media/twitter.png')}}" alt="Twitter">
                  </a>

                  <a href="{{ $item['pinterest'] }}" target="_blank" class="teamPage__experts__swiper__card__btns__item">
                    <img src="{{ asset('src/img/icons/media/pinterest.png')}}" alt="Pinterest">
                  </a>
                </div>
              </div>
              @endforeach
            </div>

            <div class="teamPage__experts__swiper__pagination swiper-pagination"></div>
          </div>
        </section>

        <section class="teamPage__advisor">
          <h2 class="teamPage__advisor__title title-main">
            Advisor
          </h2>

          <div class="teamPage__advisor__swiper swiper-container">
            <div class="swiper-wrapper">
              @foreach($teamInfo as $key => $item)
              <div class="teamPage__experts__swiper__card swiper-slide">
                <img src="{{ asset($item['photo'])}}" alt="Expert Team Member" class="teamPage__experts__swiper__card__img">

                <h3 class="teamPage__experts__swiper__card__name title-little">
                  {{ $item['name'] }}
                </h3>

                <p class="teamPage__experts__swiper__card__position title-little">
                  {{ $item['position'] }}
                </p>

                <p class="teamPage__experts__swiper__card__desc desc">
                  {{ $item['desc'] }}
                </p>

                <div class="teamPage__experts__swiper__card__btns d-flex flex-row align-items-center">
                  <a href="mailto:{{ $item['mail']}}" class="
                                            complete__btn
                                            teamPage__experts__swiper__card__btns__btn
                                            d-flex
                                            flex-row
                                            align-items-center
                                            button
                                        " style="
                                            font-size: 16px;
                                            width: 149px;
                                        ">
                    <img src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Email" class="complete__btn__img"
                      style="
                                                padding: 13px;
                                            ">

                    Email
                  </a>

                  <a href="{{ $item['twitter'] }}" target="_blank" class="teamPage__experts__swiper__card__btns__item">
                    <img src="{{ asset('src/img/icons/media/twitter.png')}}" alt="Twitter">
                  </a>

                  <a href="{{ $item['pinterest'] }}" target="_blank" class="teamPage__experts__swiper__card__btns__item">
                    <img src="{{ asset('src/img/icons/media/pinterest.png')}}" alt="Pinterest">
                  </a>
                </div>
              </div>
              @endforeach
            </div>

            <div class="teamPage__advisor__swiper__pagination swiper-pagination"></div>
          </div>
        </section>
    </div>

    <x-contact />

    <x-footer />
  </section>
</x-base>
