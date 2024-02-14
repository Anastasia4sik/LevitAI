@php
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
@endphp

<x-base>
    <section class="">
        <x-menu />

        <x-header />

        <div class="transactionsBig d-flex flex-column">
            <div class="article__path d-flex flex-row ">
                <p class="article__path title-little">
                    <span>
                        <a href="/" class="article__path article__path--links title-little">
                            Home \&#160;
                        </a>
                    </span>
                    @if(request() -> is('wallet/transactions'))
                        <span>
                            <a href="/wallet" class="article__path article__path--links title-little">
                                My Wallet \&#160;
                            </a>
                        </span>
                    @else
                        <span>
                            <a href="/referral" class="article__path article__path--links title-little">
                                Referral System \&#160;
                            </a>
                        </span>
                    @endif
                    Transactions
                </p>
            </div>

            <div class="transactionsBig__top d-flex justify-content-between">
                <h2 class="transactionsBig__title title-main">
                    Transactions
                </h2>

                <div class="transactionsBig__top__btns d-flex flex-row align-items-center">
                    <button
                        type="submit"
                        class="
                            complete__btn
                            transactionsBig__top__btns__sec
                            d-flex
                            flex-row
                            align-items-center
                            button
                        "
                    >
                        <img src="{{asset('src/img/icons/filter.svg')}}" alt="Send" class="complete__btn__img" style="
                                            padding: 12px;
                                        ">

                        Filter
                    </button>

                    <button
                        type="submit"
                        class="
                            complete__btn
                            transactionsBig__top__btns__first
                            d-flex
                            flex-row
                            align-items-center
                            button
                        "
                    >
                        <img src="{{asset('src/img/icons/arrows/arrow-download2.svg')}}" alt="Send" class="complete__btn__img" style="
                                            padding: 12px 14px;
                                        ">

                        Download All
                    </button>
                </div>
            </div>

            <x-transactions />
        </div>

        <x-footer />
    </section>
</x-base>
