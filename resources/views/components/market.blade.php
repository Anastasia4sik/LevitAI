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
        <p class="market__last__num title-little">
            +0.36%
        </p>

        <p class="market__last__text title-little">
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

                    <td class="market__table__body__row__item market__table__body__row__item--available">
                        ${{ $item['available'] }}
                    </td>

                    <td class="market__table__body__row__item--3 market__table__body__row__item">
                        <img
                            src="{{ asset('src/img/icons/graph-' . $item['direction'] . '.svg')}}"
                            alt="Graph top"
                            class="market__table__body__row__item--3__img"
                        >

                        {{ $item['gainers'] }}%
                    </td>

                    <td class="market__table__body__row__item market__table__body__row__item--lose">
                        ${{ $item['losers'] }}
                    </td>

                    <td class="market__table__body__row__item market__table__body__row__item--supply">
                        {{ $item['supply'] }}
                    </td>

                    <td class="market__table__body__row__item">
                        ${{ $item['volume'] }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="market__mob">
        <h4 class="market__mob__head title-little">
            All Tokens
        </h4>

        @foreach($marketInfo as $key => $item)
            <div class="
                market__mob__block
                {{ $loop->index > 4 ? 'market__table__body__row--hide' : '' }}
                "
            >
                <div class="market__mob__title d-flex flex-row align-items-center">
                    <img src="{{ asset($item['img'])}}" alt="Market first" class="">

                    <p class="market__mob__title__name title-little">
                        {{ $item['title'] }}
                    </p>
                </div>

                <div class="market__mob__info flex-column">
                    <div class="market__mob__info__row d-flex flex-row align-items-center">
                        <h5 class="market__mob__info__row__title title-little">
                            Available:
                        </h5>

                        <p class="market__mob__info__row__text">
                            ${{ $item['available'] }}
                        </p>
                    </div>

                    <div class="market__mob__info__row d-flex flex-row align-items-center">
                        <h5 class="market__mob__info__row__title title-little">
                            Gainers:
                        </h5>

                        <img
                            src="{{ asset('src/img/icons/graph-' . $item['direction'] . '.svg')}}"
                            alt="Graph top"
                            class="market__mob__info__row"
                        >

                        <p class="market__mob__info__row__text">
                            {{ $item['gainers'] }}%
                        </p>
                    </div>

                    <div class="market__mob__info__row d-flex flex-row align-items-center">
                        <h5 class="market__mob__info__row__title title-little">
                            Losers:
                        </h5>

                        <p class="market__mob__info__row__text">
                            ${{ $item['losers'] }}
                        </p>
                    </div>

                    <div class="market__mob__info__row d-flex flex-row align-items-center">
                        <h5 class="market__mob__info__row__title title-little">
                            T.Supply:
                        </h5>

                        <p class="market__mob__info__row__text">
                            {{ $item['supply'] }}
                        </p>
                    </div>

                    <div class="market__mob__info__row d-flex flex-row align-items-center">
                        <h5 class="market__mob__info__row__title title-little">
                            24h Volume:
                        </h5>

                        <p class="market__mob__info__row__text">
                            ${{ $item['volume'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <button class="market__btn d-flex flex-row align-items-center title-little">
        Show more <img src="{{asset('src/img/icons/arrows/arrow-down.svg')}}" alt="Show more">
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ShowMore/ShowLess
                const blocks = document.querySelectorAll('.market__table__body__row--hide');

                blocks.forEach((block) => {
                    const button = document.querySelector('.market__btn');

                    button.addEventListener('click', function() {
                        if (block.style.display != 'table-row') {
                            block.style.display = 'table-row';

                            button.innerHTML = 'Show less <img src="src/img/icons/arrows/arrow-up.svg" alt="Show less">';
                        } else {
                            block.style.display = 'none';

                            button.innerHTML = 'Show more <img src="src/img/icons/arrows/arrow-down.svg" alt="Show more">';
                        }
                    });
                });

            //mob open/close
                const container = document.querySelectorAll('.market__mob__block')

                container.forEach((block) => {
                    const button = block.querySelector('.market__mob__title');
                    const info = block.querySelector('.market__mob__info');

                    button.addEventListener('click', function() {
                        if (info.style.display != 'flex') {
                            info.style.display = 'flex';
                        } else {
                            info.style.display = 'none';
                        }
                    });
                });
        })
    </script>
</section>
