<section class="qna">
    <div class="qna__top">
        <div class="qna__top__first d-flex">
            <h2 class="qna__top__first__title title-main">
                <span class="title-main--stroke title-main">Frequently</span><br>Asked Question
            </h2>

            <p class="qna__top__first__desc desc">
                Monotonectally productivate virtual benefits vis-a-vis clicks-and-mortar lead ship. Seamlessly generate user friendly opportunitie after principle-centered e-markets. Proactively visualize functional
            </p>
        </div>
    </div>

    <div
        class="qna__block d-flex"
        @if(request()->is('faq'))
            style="
                background-image: url({{ asset('src/img/bc/bc-gna-faq.png')}});

                background-size: contain;
                background-position: left bottom;
            "
        @endif
    >
        <img src="{{ asset('src/img/photo/qna.png')}}" alt="Photos for QnA block" class="qna__block__img">

        <div class="qna__block__content">
            <div class="qna__block__content__btns d-flex flex-row align-items-center">
                <p class="qna__block__content__btns__item desc active" id="general">
                    General
                </p>

                <p class="qna__block__content__btns__item desc" id="token">
                    Token
                </p>

                <p class="qna__block__content__btns__item desc" id="client">
                    Client
                </p>

                <p class="qna__block__content__btns__item desc" id="ico">
                    Pre ICO
                </p>

                <p class="qna__block__content__btns__item desc" id="legal">
                    Legal
                </p>
            </div>

            <div class="qna__block__content__list">
                @foreach($qnaInfo as $blockKey => $block)
                    <div class="qna__block__content__list__group qna__block__content__list--{{ $block['name'] }}">
                        @foreach($block['items'] as $item)
                            <div class="qna__block__content__list__item">
                                <h3 class="qna__block__content__list__item__title title-little">
                                    {{ $item['num'] }} {{ $item['question'] }}
                                </h3>

                                <p class="qna__block__content__list__item__desc desc">
                                    {{ $item['answer'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
