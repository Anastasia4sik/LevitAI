@php
    $wallets = [
        'myWallets1' => [
            'id' => '1',
            'name' => 'Bitcoin',
            'acronym' => 'BTC',
            'icon' => '/src/img/icons/transactions/bitcoin.svg',
            'amount' => 0.236564,
        ],
        'myWallets2' => [
            'id' => '2',
            'name' => 'Ethereum',
            'acronym' => 'ETH',
            'icon' => 'src/img/icons/transactions/ethereum.svg',
            'amount' => 0.236564,
        ],
        'myWallets3' => [
            'id' => '3',
            'name' => 'Litecoin',
            'acronym' => 'LTK',
            'icon' => 'src/img/icons/transactions/L.svg',
            'amount' => 0.236564,
        ],
        'myWallets4' => [
            'id' => '4',
            'name' => 'Bitcoin',
            'acronym' => 'BTC',
            'icon' => 'src/img/icons/transactions/bitcoin.svg',
            'amount' => 0.236564,
        ],
        'myWallets5' => [
            'id' => '5',
            'name' => 'Ethereum',
            'acronym' => 'ETH',
            'icon' => 'src/img/icons/transactions/ethereum.svg',
            'amount' => 0.236564,
        ],
        'myWallets6' => [
            'id' => '6',
            'name' => 'Litecoin',
            'acronym' => 'LTK',
            'icon' => 'src/img/icons/transactions/L.svg',
            'amount' => 0.236564,
        ],
        'myWallets7' => [
            'id' => '7',
            'name' => 'Bitcoin',
            'acronym' => 'BTC',
            'icon' => 'src/img/icons/transactions/bitcoin.svg',
            'amount' => 0.236564,
        ],
        'myWallets8' => [
            'id' => '8',
            'name' => 'Ethereum',
            'acronym' => 'ETH',
            'icon' => 'src/img/icons/transactions/ethereum.svg',
            'amount' => 0.236564,
        ],
        'myWallets9' => [
            'id' => '9',
            'name' => 'Litecoin',
            'acronym' => 'LTK',
            'icon' => 'src/img/icons/transactions/L.svg',
            'amount' => 0.236564,
        ],
        'myWallets10' => [
            'id' => '10',
            'name' => 'Bitcoin',
            'acronym' => 'BTC',
            'icon' => 'src/img/icons/transactions/bitcoin.svg',
            'amount' => 0.236564,
        ],
        'walle11' => [
            'id' => '11',
            'name' => 'Ethereum',
            'acronym' => 'ETH',
            'icon' => 'src/img/icons/transactions/ethereum.svg',
            'amount' => 0.236564,
        ],
        'myWallets12' => [
            'id' => '12',
            'name' => 'Litecoin',
            'acronym' => 'LTK',
            'icon' => 'src/img/icons/transactions/L.svg',
            'amount' => 0.236564,
        ],
        'myWallets13' => [
            'id' => '13',
            'name' => 'Bitcoin',
            'acronym' => 'BTC',
            'icon' => 'src/img/icons/transactions/bitcoin.svg',
            'amount' => 0.236564,
        ],
        'myWallets14' => [
            'id' => '14',
            'name' => 'Ethereum',
            'acronym' => 'ETH',
            'icon' => 'src/img/icons/transactions/ethereum.svg',
            'amount' => 0.236564,
        ],
        'myWallets15' => [
            'id' => '15',
            'name' => 'Litecoin',
            'acronym' => 'LTK',
            'icon' => 'src/img/icons/transactions/L.svg',
            'amount' => 0.236564,
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
        'wallets' => 6,
        'funds' => '12.454667',
        'operations' => 38,
        'balance' => '1.299464'
    ];
@endphp

<x-base>
    <section class="myWallets">
        <x-menu />

        <x-header />

        <div class="myWallets__content">
            <div class="article__path d-flex flex-row ">
                <p class="article__path title-little">
                    <span>
                        <a href="/" class="article__path article__path--links title-little">
                            Home \&#160;
                        </a>
                    </span>
                    <span>
                        <a href="/wallet" class="article__path article__path--links title-little">
                            My Wallet \&#160;
                        </a>
                    </span>
                    Add Wallets
                </p>
            </div>

            <div class="myWallets__content__top">
                <div class="myWallets__content__top__row d-flex">
                    <h1 class="myWallets__content__top__title title-main">
                        My <span class="myWallets__content__top__title--span title-main title-main--stroke">Wallets</span>
                    </h1>

                    <div class="myWallets__content__top__info d-flex flex-column">
                        <p class="myWallets__content__top__desc desc">
                            Total Balance:
                        </p>

                        <p class="myWallets__content__top__desc__balance title-little">
                            {{ $account['balance'] }}
                        </p>
                    </div>
                </div>

                <h1 class="myWallets__content__top__title myWallets__content__top__title--desk title-main title-main--stroke">
                    Wallets
                </h1>
            </div>

            <div class="myWallets__content__list d-grid">
                @foreach($wallets as $wallet)
                    <div class="myWallets__content__list__item">
                        <div class="myWallets__content__list__item__top d-flex flex-row justify-content-between">
                            <div class="myWallets__content__list__item__top__title d-flex flex-row align-items-center">
                                <img src="{{ asset($wallet['icon'])}}" alt="Icon of the wallet crypto" class="myWallets__content__list__item__top__title__img">

                                <p class="myWallets__content__list__item__top__title__text">
                                    {{ $wallet['name'] }}
                                </p>
                            </div>

                            <div class="myWallets__content__list__item__top__title d-flex flex-column align-items-end">
                                <p class="myWallets__content__list__item__top__title__text">
                                    {{ $wallet['acronym'] }}
                                </p>

                                <p class="myWallets__content__list__item__top__title__text">
                                    {{ $wallet['amount'] }}
                                </p>
                            </div>
                        </div>

                        <img src="{{ asset('src/img/icons/transactions/graph.png')}}" alt="Graph of the wallets activities" class="myWallets__content__list__item__graph">


                    </div>
                @endforeach

                <div class="myWallets__content__list__item__add d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset('src/img/icons/transactions/addWallets.svg')}}" alt="Add one more wallet" class="myWallets__content__list__item__add--img">

                    <p class="myWallets__content__list__item__add--title">
                        Add Wallet
                    </p>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
</x-base>
