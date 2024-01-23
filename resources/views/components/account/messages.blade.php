@php
@endphp

<x-base>
    <x-menu />

    <x-header />
    <section class="messages d-flex flex-row">
        <div class="messages__filter">
            <div class="messages__filter__item">
                <div class="messages__filter__item__top">
                    <img src="" alt="Image of the block of messages" class="messages__filter__item__top__img">

                    <img src="" alt="Number of messages" class="messages__filter__item__top__num">
                </div>

                <p class="messages__filter__item__title desc">

                </p>
            </div>
        </div>

        <div class="messages__dialogs">
            <div class="messages__dialogs__top d-flex flex-row align-items-center">
                <h3 class="messages__dialogs__top__title title-main">

                </h3>

                <div class="messages__dialogs__top__search">
                    <img src="" alt="Search" class="messages__dialogs__top__search__img">
                </div>

                <div class="messages__dialogs__top__add">
                    <img src="" alt="Add" class="messages__dialogs__top__add__img">
                </div>
            </div>

            <div class="messages__dialogs__item d-flex flex-row align-items-center">
                <img src="" alt="Photo" class="messages__dialogs__item__img">

                <div class="messages__dialogs__item__content">
                    <div class="messages__dialogs__item__content__top d-flex flex-row justify-content-between align-items-center">
                        <h4 class="messages__dialogs__item__content__top__name title-little">

                        </h4>

                        <p class="messages__dialogs__item__content__top__time desc">

                        </p>
                    </div>

                    <div class="messages__dialogs__item__content__bottom d-flex flex-row justify-content-between align-items-center">
                        <p class="messages__dialogs__item__content__bottom__text desc">

                        </p>

                        <img src="" alt="Read it" class="messages__dialogs__item__content__bottom__check">
                    </div>
                </div>
            </div>
        </div>

        <div class="messages__chat">
            <div class="messages__chat__top d-flex flex-row">
                
            </div>
        </div>
    </section>
</x-base>
