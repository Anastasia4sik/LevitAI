<section class="comments">
    <h2 class="title-main comments__title">
        Comments
    </h2>

    <form action="#" class="comments__form d-flex flex-column">
        <div class="comments__form__group d-flex">
            <input type="text" placeholder="Name" name="Name" class="comments__form__input contact__form__group__input" required>

            <input type="email" placeholder="Email" name="Email" class="comments__form__input contact__form__group__input" required>
        </div>

        <textarea name="Message" placeholder="Your Comment" class="comments__form__input"></textarea>

        <button
            type="submit"
            class="
                complete__btn
                comments__form__btn
                d-flex
                flex-row
                align-items-center
                button
            "
            style="

                font-size: 16px;
            "
        >
            <img
                src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                alt="Send"
                class="complete__btn__img"
                style="
                    padding: 15px;
                "
            >

            Comment
        </button>
    </form>

    <div class="comments__content">
        @foreach ($commentInfo as $item)
            @if ($item['position'] > 0)
                <div
                    class="comments__content__item flex-row align-items-baseline"
                    style="
                        padding-left: calc(36px * {{ $item['position'] }});
                        gap: 14px;
                        {{ $loop->iteration >= 5 ? 'display: none;' : 'display: flex;' }}
                    "
                >

                <img src="{{ asset('src/img/icons/arrows/corner-down-right.svg')}}" alt="Arrow">
            @else
                <div
                    class="comments__content__item"
                    style="padding-left: 0;
                    {{ $loop->iteration >= 5 ? 'display: none;' : 'display: flex;' }}"
                >
            @endif

                <div class="content">
                    <div class="comments__content__item__top d-flex flex-row align-items-center">

                        <img src="{{ asset($item['photo'])}}" alt="Users photo" class="comments__content__item__top__img">

                        <h3 class="comments__content__item__top__name">
                            {{ $item['name']}}
                        </h3>
                    </div>

                    <div class="comments__content__item__block">
                        <p class="comments__content__item__desc desc close">
                            {{ $item['desc']}}
                        </p>

                        <div class="comments__content__item__block__open">
                            <img src="{{ asset('src/img/icons/arrows/comment-open.svg')}}" alt="Open full comment" class="comments__content__item__block__open__img">
                        </div>
                    </div>

                    <div class="comments__content__item__bottom d-flex flex-row align-items-center">
                        <p class="comments__content__item__bottom__info">
                            {{ $item['date'] }} {{ $item['time']}}
                        </p>

                        <a href="#" class="comments__content__item__bottom__btn desc">
                            Replace
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

        <button
            type="submit"
            class="
                comments__content__btn
                button
            "
        >
            Load More
        </button>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            //more comments
                const moreBtn = document.querySelector('.comments__content__btn');
                const hiddenItems = document.querySelectorAll('.comments__content__item:nth-child(n+5)');

                moreBtn.addEventListener('click', function() {
                    hiddenItems.forEach(item => {
                        item.style.display = 'flex';
                    });

                    moreBtn.style.display = 'none';
                });

            //open comment
                const blocks = document.querySelectorAll('.comments__content__item__block');

                blocks.forEach((block) => {
                    const arrowOpen = block.querySelector('.comments__content__item__block__open');
                    const comment = block.querySelector('.comments__content__item__desc');

                    arrowOpen.addEventListener('click', function() {
                        if (comment.classList.contains('close')) {
                            comment.classList.add('open');
                            comment.classList.remove('close');
                        }

                        arrowOpen.style.display = 'none';
                    });
                })
        });
    </script>
</section>
