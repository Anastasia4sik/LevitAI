<section class="whatCrypto d-flex">
    <div class="whatCrypto__text">
        <h2 class="whatCrypto__text__title title-main">
            What Is
        </h2>

        <h2 class="whatCrypto__text__title whatCrypto__text__title--crypto title-main--stroke title-main">
            ICO Crypto?
        </h2>

        <p class="whatCrypto__text__desc desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div class="whatCrypto__list d-flex flex-row align-items-center">
        <div class="whatCrypto__list__container flex-column">
            @foreach($cryptoInfo as $key => $item)
                @php
                    $totalItems = count($cryptoInfo);

                    $lineImageClass = (
                        $loop->iteration === $totalItems || ($loop->iteration === $totalItems - 1)
                    )
                        ? 'whatCrypto__list__item__imgs__line--down'
                        : 'whatCrypto__list__item__imgs__line--up';
                @endphp

                <div class="whatCrypto__list__item d-flex flex-row">
                    <div class="whatCrypto__list__item__imgs d-flex flex-row align-items-center position-relative">
                        <img
                            src="{{ asset($item['img'])}}"
                            alt="Line"
                            class="{{ $lineImageClass }} position-absolute"
                        >

                        <img
                            src="{{asset('src/img/icons/category/category.png')}}"
                            alt="Category"
                            class="whatCrypto__list__item__img"
                        >
                    </div>

                    <div class="whatCrypto__list__item__text">
                        <h3 class="whatCrypto__list__item__text__title title-little">
                            {{ $item['title'] }}
                        </h3>

                        <p class="whatCrypto__list__item__text__desc">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
