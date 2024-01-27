<section
    class="strategy"
    @if(request()->is('roadmap'))
        style="
            margin-bottom: 13.8vh;
        "
    @endif
>
  <div class="strategy__top flex-column justify-content-end align-items-end">
    <div class="strategy__top__big d-flex flex-row align-items-end">
      <h2 class="title-main">
        Our <span class="title-main--stroke">Strategy</span>
      </h2>

      <p class="strategy__top__big__desc desc">
        Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user
        friendly opportunitie after principle-centered e-markets. Proactively visualize functional
      </p>
    </div>

    <h2 class="title-main">
      & Roadmap
    </h2>
  </div>

  <div class="strategy__top__mob">
      <h2 class="title-main strategy__top__mob__title">
        Our <span class="title-main--stroke">Strategy</span> & Roadmap
      </h2>

      <p class="strategy__top__mob__desc desc">
        Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user
        friendly opportunitie after principle-centered e-markets. Proactively visualize functional
      </p>
  </div>

  <div class="strategy__content d-flex align-items-center">
    <div class="strategy__anim d-flex align-items-center justify-content-center">
        <img src="{{ asset('src/img/photo/strategy/round.png')}}" alt="Our Strategy & Roadmap" class="strategy__anim__round">

        <img src="{{ asset('src/img/photo/strategy/logo.png')}}" alt="Our Strategy & Roadmap" class="strategy__anim__logo">
    </div>

    <div class="strategy__content__list">
        @foreach($strategyInfo as $key => $item)
            <div class="strategy__content__list__item">
                <p class="strategy__content__list__item__text desc">
                    {{ $item['name'] }}: {{ $item['percentage'] }}%
                </p>

                <div class="strategy__content__list__item__line">

                    <div
                        class="
                            strategy__content__list__item__line__color
                            strategy__content__list__item__line__color--{{ $item['percentage'] }}
                        "
                    >
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
</section>
