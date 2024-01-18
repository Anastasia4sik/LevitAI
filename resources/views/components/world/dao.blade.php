<x-base>
  <section class="discover">
    <x-menu />

    <x-header />

    <section class="discover__article">
      <p class="discover__article__undertitle title-little">
        DAO Ekonomy
      </p>

      <h2 class="discover__article__title title-main">
        A world truly governed
      </h2>

      <div class="discover__article__top d-flex flex-row align-items-center">
        <h2 class="discover__article__top__title title-main title-main--stroke lh-90">
          by its community
        </h2>

        <a href="#" class="
                        complete__btn
                        d-flex
                        flex-row
                        align-items-center
                        button
                    " style="
                        gap: 21px;
                        font-size: 16px;
                        width: 188px;
                        height: 54px;
                    ">
          <img src="{{asset('src/img/icons/arrows/arrow-black.svg')}}" alt="Send" class="complete__btn__img" style="
                            padding: 15px;
                        ">

          VR staking
        </a>
      </div>

      <div class="discover__article__content future__article__content d-flex flex-row align-items-center">
        <img src="{{ asset('src/img/photo/dao.jpg')}}" alt="DAO economy" class="discover__article__content__img">

        <div class="discover__article__content__text">
          <p class="discover__article__content__text__desc desc">
            The world of Victoria VR is a Decentralized Autonomous Organization (DAO).
            <br><br>
            This means that users will be in control of the policies created to determine how the world behaves and
            evolves.
            <br><br>
            The DAO owns the most important smart contracts and assets that make up Victoria VR, giving control to the
            future evolution of Victoria VR to the people who create and play in this virtual space, the users.
          </p>

          <h3 class="discover__article__content__text__title title-little">
            Examples of decisions determined by the DAO:
          </h3>

          <p class="discover__article__content__text__desc desc">
            &ensp;&#x2022; VR Land development
            <br>
            &ensp;&#x2022; The Big Market VR’s marketplace fees
            <br>
            &ensp;&#x2022; Allocation of VR tokens
            <br>
            &ensp;&#x2022; Addition or subtraction of new wearables
            <br>
            &ensp;&#x2022; Community-run content servers
          </p>

          <h3 class="discover__article__content__text__title title-little mb-0 dao__bottom__title">
            All in-game assets and those directly created by the users are registered on the blockchain. Victoria VR
            World is fully owned by its users who create the rules for the whole community.
          </h3>
        </div>
      </div>

    </section>

    <x-footer />
  </section>
</x-base>