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
    <section class="exchange">
        <x-menu />

        <x-header />

        <section class="exchange__container d-flex flex-row">
            <div class="exchange__container__filter d-flex flex-column">
                <img
                    src="{{ asset('src/img/icons/heart.svg')}}"
                    alt="Heart"
                    class="exchange__container__filter__heart"
                >

                <div class="exchange__container__filter__dropdown dropdown">
                    <div class="exchange__container__filter__dropdown__top d-flex flex-row align-items-center justify-content-between">
                        <p class="exchange__container__filter__dropdown__top__title title-little">Filter</p>

                        <img
                            src="{{ asset('src/img/icons/arrows/dropdown.svg')}}"
                            alt="Arrow"
                            class="exchange__container__filter__dropdown__top__img"
                        >
                    </div>

                    <div class="exchange__container__filter__dropdown__content dropdown-content">
                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title">
                                Categories
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__list d-flex flex-column">
                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="all"
                                    >
                                    <span>
                                            All
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="art_culture"
                                    >
                                    <span>
                                            Art & culture
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="abstract_art"
                                    >

                                    <span>
                                        Abstract art
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="collectibles"
                                    >

                                    <span>
                                        Collectibles
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="renders"
                                    >

                                    <span>
                                        3D renders
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title exchange__container__filter__dropdown__content__block__title--range">
                                Price range
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__range">
                                <div class="exchange__container__filter__dropdown__content__block__range__slider slider">
                                    <div class="progress">

                                    </div>
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__values range-input">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__input d-flex flex-row align-items-center price-input">
                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-min" value="2500">
                                    </div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__span">to</div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-max" value="7500">
                                    </div>
                                </div>
                            </div>

                            <button
                                type="button"
                                class="
                                    complete__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                    button
                                " style="
                                    gap: 29px;
                                    font-size: 16px;
                                    width: 170px;
                                "
                            >
                                <img
                                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                                    alt="Read More"
                                    class="complete__btn__img"
                                    style="
                                        padding: 11px;
                                    "
                                >

                                Apply
                            </button>
                        </div>
                    </div>
                </div>

                <div class="exchange__container__filter__dropdown dropdown">
                    <div class="exchange__container__filter__dropdown__top d-flex flex-row align-items-center justify-content-between">
                        <p class="exchange__container__filter__dropdown__top__title title-little">Properties</p>

                        <img
                            src="{{ asset('src/img/icons/arrows/dropdown.svg')}}"
                            alt="Arrow"
                            class="exchange__container__filter__dropdown__top__img"
                        >
                    </div>

                    <div class="exchange__container__filter__dropdown__content dropdown-content">
                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title">
                                Categories
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__list d-flex flex-column">
                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="all"
                                    >
                                    <span>
                                            All
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="art_culture"
                                    >
                                    <span>
                                            Art & culture
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="abstract_art"
                                    >

                                    <span>
                                        Abstract art
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="collectibles"
                                    >

                                    <span>
                                        Collectibles
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="renders"
                                    >

                                    <span>
                                        3D renders
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title exchange__container__filter__dropdown__content__block__title--range">
                                Price range
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__range">
                                <div class="exchange__container__filter__dropdown__content__block__range__slider">
                                    <div class="progress">

                                    </div>
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__values">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__input d-flex flex-row align-items-center">
                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-min" value="2500">
                                    </div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__span">to</div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-max" value="7500">
                                    </div>
                                </div>
                            </div>

                            <button
                                type="button"
                                class="
                                    complete__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                    button
                                " style="
                                    gap: 29px;
                                    font-size: 16px;
                                    width: 170px;
                                "
                            >
                                <img
                                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                                    alt="Read More"
                                    class="complete__btn__img"
                                    style="
                                        padding: 11px;
                                    "
                                >

                                Apply
                            </button>
                        </div>
                    </div>
                </div>

                <div class="exchange__container__filter__dropdown dropdown">
                    <div class="exchange__container__filter__dropdown__top d-flex flex-row align-items-center justify-content-between">
                        <p class="exchange__container__filter__dropdown__top__title title-little">Status</p>

                        <img
                            src="{{ asset('src/img/icons/arrows/dropdown.svg')}}"
                            alt="Arrow"
                            class="exchange__container__filter__dropdown__top__img"
                        >
                    </div>

                    <div class="exchange__container__filter__dropdown__content dropdown-content">
                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title">
                                Categories
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__list d-flex flex-column">
                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="all"
                                    >
                                    <span>
                                            All
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="art_culture"
                                    >
                                    <span>
                                            Art & culture
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="abstract_art"
                                    >

                                    <span>
                                        Abstract art
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="collectibles"
                                    >

                                    <span>
                                        Collectibles
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="renders"
                                    >

                                    <span>
                                        3D renders
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title exchange__container__filter__dropdown__content__block__title--range">
                                Price range
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__range">
                                <div class="exchange__container__filter__dropdown__content__block__range__slider">
                                    <div class="progress">

                                    </div>
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__values">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__input d-flex flex-row align-items-center">
                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-min" value="2500">
                                    </div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__span">to</div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-max" value="7500">
                                    </div>
                                </div>
                            </div>

                            <button
                                type="button"
                                class="
                                    complete__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                    button
                                " style="
                                    gap: 29px;
                                    font-size: 16px;
                                    width: 170px;
                                "
                            >
                                <img
                                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                                    alt="Read More"
                                    class="complete__btn__img"
                                    style="
                                        padding: 11px;
                                    "
                                >

                                Apply
                            </button>
                        </div>
                    </div>
                </div>

                <div class="exchange__container__filter__dropdown dropdown">
                    <div class="exchange__container__filter__dropdown__top d-flex flex-row align-items-center justify-content-between">
                        <p class="exchange__container__filter__dropdown__top__title title-little">Info</p>

                        <img
                            src="{{ asset('src/img/icons/arrows/dropdown.svg')}}"
                            alt="Arrow"
                            class="exchange__container__filter__dropdown__top__img"
                        >
                    </div>

                    <div class="exchange__container__filter__dropdown__content dropdown-content">
                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title">
                                Categories
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__list d-flex flex-column">
                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="all"
                                    >
                                    <span>
                                            All
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="art_culture"
                                    >
                                    <span>
                                            Art & culture
                                        </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="abstract_art"
                                    >

                                    <span>
                                        Abstract art
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="collectibles"
                                    >

                                    <span>
                                        Collectibles
                                    </span>
                                </label>

                                <label class="exchange__container__filter__dropdown__content__block__list__label d-flex flex-row align-items-center">
                                    <input
                                        type="checkbox"
                                        class="
                                            filter-checkbox
                                            exchange__container__filter__dropdown__content__block__list__item
                                            desc
                                        "
                                        data-filter="renders"
                                    >

                                    <span>
                                        3D renders
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="exchange__container__filter__dropdown__content__block">
                            <p class="exchange__container__filter__dropdown__content__block__title exchange__container__filter__dropdown__content__block__title--range">
                                Price range
                            </p>

                            <div class="exchange__container__filter__dropdown__content__block__range">
                                <div class="exchange__container__filter__dropdown__content__block__range__slider">
                                    <div class="progress">

                                    </div>
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__values">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>

                                <div class="exchange__container__filter__dropdown__content__block__range__input d-flex flex-row align-items-center">
                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-min" value="2500">
                                    </div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__span">to</div>

                                    <div class="exchange__container__filter__dropdown__content__block__range__input__field">
                                        <input type="number" class="input-max" value="7500">
                                    </div>
                                </div>
                            </div>

                            <button
                                type="button"
                                class="
                                    complete__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                    button
                                " style="
                                    gap: 29px;
                                    font-size: 16px;
                                    width: 170px;
                                "
                            >
                                <img
                                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                                    alt="Read More"
                                    class="complete__btn__img"
                                    style="
                                        padding: 11px;
                                    "
                                >

                                Apply
                            </button>
                        </div>
                    </div>
                </div>

                <button
                    type="button"
                    class="
                        complete__btn
                        d-flex
                        flex-row
                        align-items-center
                        button
                    " style="
                        gap: 31px;
                        font-size: 16px;
                        width: 11vw;
                    "
                >
                    <img
                        src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                        alt="Read More"
                        class="complete__btn__img"
                        style="
                            padding: 10px;
                        "
                    >

                    to create
              </button>
            </div>

            <div class="exchange__container__table">
                <div class="exchange__container__table__catalog d-grid">
                    @foreach($market as $key => $item)
                        <a href="/exchange-market/item-">
                            <div class="exchange__container__table__catalog__block">
                                @if ($item['top'] === true)
                                    <p class="exchange__container__table__catalog__block__hot desc">
                                        hot
                                    </p>
                                @endif
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
                            </div>
                        </a>
                    @endforeach

                    <div class="exchange__container__table__catalog__disable">
                        <p class="exchange__container__table__catalog__disable__text desc d-flex align-items-center justify-content-center">
                            This window will be available according to the roadmap in May 2024
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <x-footer />
    </section>
</x-base>
