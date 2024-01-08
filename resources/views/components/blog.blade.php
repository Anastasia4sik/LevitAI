@if(request()->is('blog'))
<section id="blog" class="blog" style="padding: 0 0 100px 105px">
  <div class="blog__top">
    <div class="blog__top__first d-flex flex-row align-items-center">
      <h2 class="blog__top__first__title title-main">
        Recent
      </h2>

      <h2 class="blog__top__second__title title-main title-main--stroke">
        Posts
      </h2>
    </div>
    @elseif(request()->is('events/event-*'))
    <section id="blog" class="blog" style="padding: 0 0 100px 105px">
      <div class="blog__top">
        <div class="blog__top__first d-flex flex-row align-items-center">
          <h2 class="blog__top__first__title title-main">
            Recent
          </h2>

          <h2 class="blog__top__second__title title-main title-main--stroke">
            Events
          </h2>
        </div>
        @else
        <section class="blog" style="padding: 176px 0 209px 105px; background-image: url('../../../public/src/img/bc/bc-blog.png');">
          <div class="blog__top">
            <div class="blog__top__first d-flex flex-row align-items-center">
              <h2 class="blog__top__first__title title-main">
                Recent
              </h2>

              <p class="blog__top__first__desc desc">
                Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate
                user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
              </p>
            </div>

            <div class="blog__top__second d-flex flex-row align-items-center">
              <h2 class="blog__top__second__title title-main title-main--stroke">
                Blog Post
              </h2>

              <a href="/blog" class="
                        complete__btn
                        d-flex
                        flex-row
                        align-items-center
                        button
                    " style="
                        gap: 20px;
                        font-size: 16px;
                        width: 209px;
                    ">
                <img src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Read More" class="complete__btn__img"
                  style="
                            padding: 16px;
                        ">

                Go to all posts
              </a>
            </div>
            @endif
          </div>

          <div class="blog__swiper swiper-container">
            <div class="swiper-wrapper">
              @foreach($blogInfo as $key => $item)
              <div class="blog__swiper__slide swiper-slide">
                <a href="/blog/post-">
                  <img src="{{ asset($item['photo'])}}" alt="slide">

                  <h3 class="blog__swiper__slide__title title-little">
                    {{ $item['title']}}
                  </h3>

                  <p class="blog__swiper__slide__desc desc">
                    {{ $item['desc']}}
                  </p>
                </a>
              </div>
              @endforeach
            </div>

            <div class="blog__swiper__pagination swiper-pagination"></div>
          </div>
        </section>
