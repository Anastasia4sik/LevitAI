<section class="market">
    <div class="market__top d-flex flex-row">
        <h2 class="market__top__title title-main title-main--stroke">
            Current
        </h2>

        <h2 class="market__top__title title-main">
            Market
        </h2>
    </div>

    <div class="market__last d-flex flex-row align-items-center">
        <p class="market__last__num desc">
            +0.36%
        </p>

        <p class="market__last__text desc">
            Market up in the last 24 hours
        </p>
    </div>

    <table class="market__table">
        <thead>
            <tr class="market__table__head">
                <th class="market__table__head__item">
                    All tokens
                </th>

                <th class="market__table__head__item">
                    Available
                </th>

                <th class="market__table__head__item">
                    Gainers
                </th>

                <th class="market__table__head__item">
                    Losers
                </th>

                <th class="market__table__head__item">
                    T.Supply
                </th>

                <th class="market__table__head__item">
                    24h Volume
                </th>
            </tr>
        </thead>

        <tbody class="market__table__body">
            @foreach($marketInfo as $key => $item)
                <tr
                    class="
                        market__table__body__row
                        {{ $loop->index > 4 ? 'market__table__body__row--hide' : '' }}
                    "
                >
                    <td class="market__table__body__row__item market__table__body__row__item--1">
                        <img src="{{ asset($item['img'])}}" alt="Market first" class="market__table__body__row__item--1__img">

                        {{ $item['title'] }}
                    </td>

                    <td class="market__table__body__row__item">
                        ${{ $item['available'] }}
                    </td>

                    <td class="market__table__body__row__item--3">
                        <img
                            src="{{ asset('src/img/icons/graph-' . $item['direction'] . '.svg')}}"
                            alt="Graph top"
                            class="market__table__body__row__item--3__img"
                        >

                        {{ $item['gainers'] }}%
                    </td>

                    <td class="market__table__body__row__item">
                        ${{ $item['losers'] }}
                    </td>

                    <td class="market__table__body__row__item">
                        {{ $item['supply'] }}
                    </td>

                    <td class="market__table__body__row__item">
                        ${{ $item['volume'] }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button class="market__btn desc d-flex flex-row align-items-center">
        Show more <img src="{{asset('src/img/icons/arrows/arrow-down.svg')}}" alt="Show more">
    </button>
</section>
