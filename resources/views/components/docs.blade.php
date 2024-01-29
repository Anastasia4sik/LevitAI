<section
    class="
        docs
        @if(request()->is('documentation'))
            dosc-documentation
        @endif
    "
>
    <div
        class="
            docs__top
            @if(request()->is('documentation'))
                docs-documentation
            @endif
        "
    >
        <h2 class="docs__top__title title-main">
            @if(request()->is('documentation'))
                LevitAI <span class="title-main--stroke">Permit</span>
            @else
                Read <span class="title-main--stroke">LevitAI</span>
            @endif
        </h2>

        <div class="
            docs__top__block
            @if(request()->is('documentation'))
                d-none
            @else
                d-flex
            @endif
        ">
            <p class="docs__top__block__desc desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
            </p>

            <h2 class="docs__top__block__title title-main">
                Documents
            </h2>
        </div>
    </div>

    <div class="docs__content d-flex flex-row align-items-center justify-content-between">
        <img src="{{ asset('src/img/photo/docs.png')}}" alt="Read LevitAI Documents" class="docs__content__img">

        <div class="docs__content__list">
            @foreach($docsInfo as $key => $doc)
                <div class="docs__content__list__item d-flex flex-row align-items-center">
                    <div class="docs__content__list__item__start d-flex flex-row align-items-center">
                        <img src="{{ asset('src/img/icons/docs-icon.png')}}" alt="First Doc" class="docs__content__list__item__img">

                        <p class="docs__content__list__item__title desc">
                            {{ $doc['name'] }}
                        </p>
                    </div>

                    <p class="docs__content__list__item__date desc">
                        {{ $doc['year'] }}
                    </p>

                    <p class="docs__content__list__item__lang desc">
                        {{ $doc['language'] }}
                    </p>

                    <div class="docs__content__list__item__line"></div>

                    <button class="docs__content__list__item__btn downloadDoc flex-row align-items-center" data-name="{{ $doc['name']}}">
                        <img src="{{ asset('src/img/icons/arrows/arrow-download.svg')}}" alt="Download file" class="docs__content__list__item__btn__img">

                        <p class="docs__content__list__item__btn__text desc">Document</p>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>
