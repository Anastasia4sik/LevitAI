@php
    $partners = [
        'partner1' => [
            'img' => 'src/img/icons/partners/dell.png',
            'link' => 'https://www.dell.com/uk-ua/lp/homepage',
        ],
        'partner2' => [
            'img' => 'src/img/icons/partners/dominance.png',
            'link' => 'https://store.steampowered.com/app/2175780/Dominance/?l=ukraine',
        ],
        'partner3' => [
            'img' => 'src/img/icons/partners/fund.png',
            'link' => 'https://www.google.com/search?q=non+fungible+funds&oq=non+fungible+fund&gs_lcrp=EgZjaHJvbWUqCQgAEAAYExiABDIJCAAQABgTGIAEMgYIARBFGDmoAgCwAgA&sourceid=chrome&ie=UTF-8#ip=1',
        ],
        'partner4' => [
            'img' => 'src/img/icons/partners/fund.png',
            'link' => 'https://www.google.com/search?q=non+fungible+funds&oq=non+fungible+fund&gs_lcrp=EgZjaHJvbWUqCQgAEAAYExiABDIJCAAQABgTGIAEMgYIARBFGDmoAgCwAgA&sourceid=chrome&ie=UTF-8#ip=1',
        ],
        'partner5' => [
            'img' => 'src/img/icons/partners/dell.png',
            'link' => 'https://www.dell.com/uk-ua/lp/homepage',
        ],
        'partner6' => [
            'img' => 'src/img/icons/partners/dominance.png',
            'link' => 'https://store.steampowered.com/app/2175780/Dominance/?l=ukraine',
        ],
        'partner7' => [
            'img' => 'src/img/icons/partners/dominance.png',
            'link' => 'https://store.steampowered.com/app/2175780/Dominance/?l=ukraine',
        ],
        'partner8' => [
            'img' => 'src/img/icons/partners/fund.png',
            'link' => 'https://www.google.com/search?q=non+fungible+funds&oq=non+fungible+fund&gs_lcrp=EgZjaHJvbWUqCQgAEAAYExiABDIJCAAQABgTGIAEMgYIARBFGDmoAgCwAgA&sourceid=chrome&ie=UTF-8#ip=1',
        ],
        'partner9' => [
            'img' => 'src/img/icons/partners/dell.png',
            'link' => 'https://www.dell.com/uk-ua/lp/homepage',
        ],
        'partner10' => [
            'img' => 'src/img/icons/partners/dell.png',
            'link' => 'https://www.dell.com/uk-ua/lp/homepage',
        ],
        'partner11' => [
            'img' => 'src/img/icons/partners/dominance.png',
            'link' => 'https://store.steampowered.com/app/2175780/Dominance/?l=ukraine',
        ],
        'partner12' => [
            'img' => 'src/img/icons/partners/fund.png',
            'link' => 'https://www.google.com/search?q=non+fungible+funds&oq=non+fungible+fund&gs_lcrp=EgZjaHJvbWUqCQgAEAAYExiABDIJCAAQABgTGIAEMgYIARBFGDmoAgCwAgA&sourceid=chrome&ie=UTF-8#ip=1',
        ],
        'partner13' => [
            'img' => 'src/img/icons/partners/fund.png',
            'link' => 'https://www.google.com/search?q=non+fungible+funds&oq=non+fungible+fund&gs_lcrp=EgZjaHJvbWUqCQgAEAAYExiABDIJCAAQABgTGIAEMgYIARBFGDmoAgCwAgA&sourceid=chrome&ie=UTF-8#ip=1',
        ],
        'partner14' => [
            'img' => 'src/img/icons/partners/dell.png',
            'link' => 'https://www.dell.com/uk-ua/lp/homepage',
        ],
        'partner15' => [
            'img' => 'src/img/icons/partners/dominance.png',
            'link' => 'https://store.steampowered.com/app/2175780/Dominance/?l=ukraine',
        ],
        'partner16' => [
            'img' => 'src/img/icons/partners/dominance.png',
            'link' => 'https://store.steampowered.com/app/2175780/Dominance/?l=ukraine',
        ],
        'partner17' => [
            'img' => 'src/img/icons/partners/fund.png',
            'link' => 'https://www.google.com/search?q=non+fungible+funds&oq=non+fungible+fund&gs_lcrp=EgZjaHJvbWUqCQgAEAAYExiABDIJCAAQABgTGIAEMgYIARBFGDmoAgCwAgA&sourceid=chrome&ie=UTF-8#ip=1',
        ],
        'partner18' => [
            'img' => 'src/img/icons/partners/dell.png',
            'link' => 'https://www.dell.com/uk-ua/lp/homepage',
        ],
    ];
@endphp
<x-base>
    <section class="partners">
        <x-menu />

        <x-header />

        <section class="partners__section">
            <h2 class="partners__section__title title-main">
                Partners
            </h2>

            <div class="partners__section__table d-grid">
                @foreach ($partners as $key => $partner)
                    <a
                        href="{{$partner['link']}}"
                        target="_blank"
                        class="partners__section__table__block d-flex align-items-center justify-content-center"
                    >
                        <img src="{{ asset($partner['img'])}}" alt="Dell" class="partners__section__table__block__img">
                    </a>
                @endforeach
            </div>
        </section>

        <x-footer />
    </section>
</x-base>
