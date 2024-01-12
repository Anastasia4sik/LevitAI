@php
    $market = [
        'post1' => [
            'id' => 1,
            'nft' => 'src/img/photo/nft/nft1.jpg',
            'user' => 'src/img/photo/nft/user1.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post2' => [
            'id' => 2,
            'nft' => 'src/img/photo/nft/nft2.jpg',
            'user' => 'src/img/photo/nft/user2.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post3' => [
            'id' => 3,
            'nft' => 'src/img/photo/nft/nft3.jpg',
            'user' => 'src/img/photo/nft/user1.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post4' => [
            'id' => 4,
            'nft' => 'src/img/photo/nft/nft4.jpg',
            'user' => 'src/img/photo/nft/user2.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post5' => [
            'id' => 5,
            'nft' => 'src/img/photo/nft/nft1.jpg',
            'user' => 'src/img/photo/nft/user1.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post6' => [
            'id' => 6,
            'nft' => 'src/img/photo/nft/nft2.jpg',
            'user' => 'src/img/photo/nft/user2.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post7' => [
            'id' => 7,
            'nft' => 'src/img/photo/nft/nft3.jpg',
            'user' => 'src/img/photo/nft/user1.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post8' => [
            'id' => 8,
            'nft' => 'src/img/photo/nft/nft4.jpg',
            'user' => 'src/img/photo/nft/user2.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post9' => [
            'id' => 9,
            'nft' => 'src/img/photo/nft/nft1.jpg',
            'user' => 'src/img/photo/nft/user1.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post10' => [
            'id' => 10,
            'nft' => 'src/img/photo/nft/nft2.jpg',
            'user' => 'src/img/photo/nft/user2.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post11' => [
            'id' => 11,
            'nft' => 'src/img/photo/nft/nft3.jpg',
            'user' => 'src/img/photo/nft/user1.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
        'post12' => [
            'id' => 12,
            'nft' => 'src/img/photo/nft/nft4.jpg',
            'user' => 'src/img/photo/nft/user2.jpg',
            'title' => 'Lorem ipsum',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => 3500,
            'top' => true,
        ],
    ]
@endphp

<x-base>
    <section class="item">
        <x-menu />

        <x-header />

        <div class="item__container">
            <div class="item__container__content d-flex flex-row">
                <div class="item__container__content__text">
                    <h2 class="item__container__content__text__title title-main">
                        Lorem ipsum
                    </h2>

                    <p class="item__container__content__text__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>

                    <div class="item__container__content__text__user d-flex flex-row align-items-center">
                        <img
                            src="{{ asset('src/img/photo/nft/user1.jpg')}}"
                            alt="User photo"
                            class="item__container__content__text__user__photo"
                        >

                        <div class="item__container__content__text__user__info">
                            <h4 class="item__container__content__text__user__info__title title-little">
                                Lorem ipsum
                            </h4>

                            <p class="item__container__content__text__user__info__undertitle desc">
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>

                    </div>
                    <p class="item__container__content__text__user__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.
                    </p>
                </div>

                <img src="{{ asset('src/img/photo/nft/nft2.jpg')}}" alt="Nft" class="item__container__content__nft">

                <div class="item__container__content__info">
                    <div class="qna__block__content__btns d-flex flex-row align-items-center">
                        <p class="qna__block__content__btns__item desc" id="info">
                            Info
                        </p>

                        <p class="qna__block__content__btns__item desc active" id="general">
                            Bids
                        </p>

                        <p class="qna__block__content__btns__item desc" id="prop">
                            Properties
                        </p>
                    </div>

                    <div class="qna__block__content__list">
                        <div class="qna__block__content__list__group qna__block__content__list--info">
                            <div class="item__container__content__info__list__item">

                            </div>
                        </div>

                        <div class="qna__block__content__list__group qna__block__content__list--general">
                            <div class="item__container__content__info__list__item">
                                <img
                                    src="{{ asset('src/img/exchange-graph.png')}}"
                                    alt="Graph"
                                    class="item__container__content__info__list__item__img"
                                >

                                <div class="item__container__content__info__list__item__row d-flex flex-row align-items-center">
                                    <div class="">
                                        <p class="item__container__content__info__list__item__row__num title-little">
                                            1.85 ETH
                                        </p>

                                        <p class="item__container__content__info__list__item__row__desc desc">
                                            Current place
                                        </p>
                                    </div>

                                    <div class="">
                                        <p class="item__container__content__info__list__item__row__num title-little">
                                            14H:25 min
                                        </p>

                                        <p class="item__container__content__info__list__item__row__desc desc">
                                            Remaining time
                                        </p>
                                    </div>
                                </div>

                                <a
                                    href="#"
                                    class="
                                            complete__btn
                                            d-flex
                                            flex-row
                                            align-items-center
                                            button
                                        " style="
                                            gap: 15px;
                                            font-size: 16px;
                                            width: 177px;
                                        ">
                                    <img
                                        src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Read More" class="complete__btn__img"
                                        style="
                                            padding: 13px;
                                        "
                                    >

                                    Place a bid
                                </a>
                            </div>
                        </div>

                        <div class="qna__block__content__list__group qna__block__content__list--prop">
                            <div class="item__container__content__info__list__item">
                                {{-- <p>
                                    properties
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item__container__slides">
                <h2 class="item__container__slides__title title-main">
                    More from this
                </h2>

                <div class="item__container__slides__row d-flex flex-row align-items-center">
                    <h2 class="item__container__slides__title title-main title-main--stroke">
                        collection
                    </h2>

                    <a
                        href="/exchange-market"
                        class="
                                complete__btn
                                d-flex
                                flex-row
                                align-items-center
                                button
                            " style="
                                gap: 15px;
                                font-size: 16px;
                                width: 153px;
                            ">
                        <img
                            src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Read More" class="complete__btn__img"
                            style="
                                padding: 15px;
                            "
                        >

                        View all
                    </a>
                </div>
            </div>

            <div class="item__container__swiper swiper-container">
                <div class="swiper-wrapper item__container__swiper__wrapper">
                    @foreach($market as $key => $item)
                        <div class="item__container__swiper__slide exchange__container__table__catalog__block card swiper-slide">
                            <a href="/exchange-market/item-">
                                <img
                                    src="{{ asset($item['nft'])}}"
                                    alt="NFT"
                                    class="exchange__container__table__catalog__block__nft"
                                >

                                <img
                                    src="{{ asset($item['user'])}}"
                                    alt="Owner"
                                    class="exchange__container__table__catalog__block__user"
                                >

                                <h4 class="exchange__container__table__catalog__block__title title-little">
                                    {{ $item['title'] }}
                                </h4>

                                <p class="exchange__container__table__catalog__block__desc desc">
                                    {{ $item['desc'] }}
                                </p>

                                <p class="exchange__container__table__catalog__block__price desc">
                                    ${{ $item['price'] }}
                                </p>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="item__container__swiper__pagination swiper-pagination"></div>
            </div>
        </div>

        <x-footer />
    </section>
</x-base>
