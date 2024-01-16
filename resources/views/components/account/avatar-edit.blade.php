<x-base>
  <section class="avatarEdit">
    <x-menu />

    <x-header />

    <div class="avatarEdit__section d-flex flex-column justify-content-between">
      <div class="avatarEdit__section__content">

        <div class="article__path d-flex flex-row ">
          <a href="/" class="article__path__item article__path__item--links title-little">
            Home \&#160;
          </a>

          <a href="/avatar" class="article__path__item article__path__item--links title-little">
            My Avatar \&#160;
          </a>

          <p class="article__path__item title-little">
            Edit Avatar
          </p>
        </div>

        <div class="avatarEdit__section__content__top">
          <div class="avatarEdit__section__content__top__first d-flex flex-row align-items-center">
            <h2 class="avatarEdit__section__content__top__first__title title-main">
              My
            </h2>

            <p class="avatarEdit__section__content__top__first__desc desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt labore dolore magna aliqua.
            </p>
          </div>

          <h2 class="avatarEdit__section__content__top__title title-main title-main--stroke">
            Avatar Edit
          </h2>
        </div>
      </div>


      <img src="{{ asset('src/img/photo/account/avatar-edit.jpg')}}" alt="" class="avatarEdit__section__img">
    </div>

    <x-footer />
  </section>
</x-base>