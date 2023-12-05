<section class="strategy">
    <div class="strategy__top d-flex flex-column justify-content-end align-items-end">
        <div class="strategy__top__big d-flex flex-row align-items-end">
            <h2 class="title-main">
                Our <span class="title-main--stroke">Strategy</span>
            </h2>

            <p class="strategy__top__big__desc desc">
                Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
            </p>
        </div>

            <h2 class="title-main">
                & Roadmap
            </h2>
    </div>

    <div class="strategy__content d-flex flex-row align-items-center justify-content-between">
        <img src="{{ asset('src/img/photo/strategy.png')}}" alt="Our Strategy & Roadmap" class="strategy__content__img">

        <div class="strategy__content__list">
            @foreach($strategyInfo as $key => $item)
                <div class="strategy__content__list__item">
                    <p class="strategy__content__list__item__text desc">
                        {{ $item['name'] }}: {{ $item['percentage'] }}%
                    </p>

                    <div class="strategy__content__list__item__line">
                        <div class="strategy__content__list__item__line__color strategy__content__list__item__line__color--{{ $item['percentage'] }}"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
