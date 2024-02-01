@php
    $myEvents = [
        'event1' => [
            'id' => 1,
            'photo' => 'src/img/photo/events/event1.png',
            'title' => 'Lorem ipsum dolor sit amet',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'date' => '12 Dec 2023',
            'time' => '12:46 pm',
        ],
        'event2' => [
            'id' => 2,
            'photo' => 'src/img/photo/events/event2.png',
            'title' => 'Lorem ipsum dolor sit amet',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'date' => '12 Dec 2023',
            'time' => '12:46 pm',
        ],
        'event3' => [
            'id' => 3,
            'photo' => 'src/img/photo/events/event3.png',
            'title' => 'Lorem ipsum dolor sit amet',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'date' => '12 Dec 2023',
            'time' => '12:46 pm',
        ],
        'event4' => [
            'id' => 4,
            'photo' => 'src/img/photo/events/event2.png',
            'title' => 'Lorem ipsum dolor sit amet',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'date' => '12 Dec 2023',
            'time' => '12:46 pm',
        ],
        'event5' => [
            'id' => 5,
            'photo' => 'src/img/photo/events/event1.png',
            'title' => 'Lorem ipsum dolor sit amet',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'date' => '12 Dec 2023',
            'time' => '12:46 pm',
        ],
    ];
@endphp

<x-base>
    <section class="myEvents eventsSection" style="background: none;">
        <x-menu />

        <x-header />

        <div class="myEvents__top d-flex align-items-center justify-content-between">
            <div class="myEvents__top__text">
                <div class="myEvents__top__text__content d-flex">
                    <h2 class="myEvents__top__title title-main">
                        My <span class="myEvents__top__title--mob title-main title-main--stroke">Events</span>
                    </h2>

                    <p class="myEvents__top__desc desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.
                    </p>
                </div>

                <h2 class="myEvents__top__title myEvents__top__title--sec title-main title-main--stroke">
                    Events
                </h2>
            </div>

            <img src="{{ asset('src/img/photo/my-events.png')}}" alt="">
        </div>

        <div class="eventsSection__content myEvents__content d-flex flex-row">
            @foreach($myEvents as $event)
                    <div
                        class="eventsSection__content__block"

                    >
                        <img
                            src="{{ asset('src/img/bc/event-reactangle.png')}}"
                            alt=""
                            class="eventsSection__content__block__bc"
                            style="
                                background-image: url('{{ asset($event['photo'])}}')
                            "
                        >

                        <h2 class="eventsSection__content__block__title title-main">
                            {{ $event['title'] }}
                        </h2>

                        <div class="eventsSection__content__block__bottom d-flex flex-column">
                            <a
                                href="
                                    /events/{{-- $category /--}}event-{{-- $event['id'] --}}
                                "
                                class="
                                    eventsSection__content__block__bottom__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                "
                            >
                                <img
                                    src="{{asset('src/img/icons/arrows/arrow-black.svg')}}"
                                    alt="go to"
                                    class="eventsSection__content__block__bottom__btn__img"
                                >

                                View the event
                            </a>

                            <p class="eventsSection__content__block__bottom__info title-little">
                                {{ $event['date'] }}
                            </p>

                            <p class="eventsSection__content__block__bottom__info title-little">
                                {{ $event['time'] }}
                            </p>
                        </div>
                    </div>
            @endforeach

            <div class="myEvents__disable">
                <p
                    class="myEvents__disable__text desc d-flex align-items-center justify-content-center"
                >
                    Will be available from January this year
                </p>
            </div>
        </div>

    </section>


    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mainBlock = document.querySelector('.eventsSection__content');
            const disableBlock = mainBlock.querySelector('.myEvents__disable');

            if (mainBlock.classList.contains('disable')) {
                disableBlock.style.display = 'block';
            } else {
                disableBlock.style.display = 'none';
            }
        });
    </script>
</x-base>
