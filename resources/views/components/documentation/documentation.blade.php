@php
$docsInfo = [
'doc1' => [
'name' => 'First Paper',
'year' => 2021,
'language' => 'English',
],
'doc2' => [
'name' => 'Second Paper',
'year' => 2021,
'language' => 'English',
],
'doc3' => [
'name' => 'Third Paper',
'year' => 2021,
'language' => 'English',
],
'doc4' => [
'name' => 'Fourth Paper',
'year' => 2021,
'language' => 'English',
],
'doc5' => [
'name' => 'Fifth Paper',
'year' => 2021,
'language' => 'English',
],
'doc6' => [
'name' => 'Sixth Paper',
'year' => 2021,
'language' => 'English',
],
];
@endphp

<x-base>
  <div class="paper__main">
    <x-menu />

    <x-header />

    <section class="paper">
      <h3 class="paper__undertitle title-little">
        WHITEPAPER
      </h3>

      <h2 class="paper__title title-main">
        Download Our White <span class="paper__title__mob title-main title-main--stroke">Paper Today</span>
      </h2>

      <h2 class="paper__title paper__title--sec title-main--stroke title-main">
        Paper Today
      </h2>

      <div class="paper__list d-flex flex-column">
        <div class="paper__list__item d-flex">
            <div class="paper__list__item__top">
                <img src="{{ asset('src/img/icons/paper.svg')}}" alt="White Paper" class="paper__list__item__img">

                <h3 class="paper__list__item__content__title__mob title-little">
                    INTRODUCTION
                </h3>
            </div>

            <div class="paper__list__item__content">
                <h3 class="paper__list__item__content__title title-little">
                INTRODUCTION
                </h3>

                <p class="paper__list__item__content__desc desc">
                These are the terms and conditions (the ‘T&Cs’) Victoria VR, a.s. (‘we’, ‘us’, ‘our’, ‘Victoria VR) use to
                govern our websites and games (the “Games”, each a “Game”) (except where a Game or website sets out that
                other terms and conditions apply). We’ve tried to keep them as short as possible, to help you understand
                how you can use each of the Games and our websites.
                </p>

                <div class="paper__list__item__content__btns d-flex flex-row">
                <a href="#" class="
                                        complete__btn
                                        d-flex
                                        flex-row
                                        align-items-center
                                        button
                                    " style="
                                        gap: 21px;
                                        font-size: 16px;
                                        width: 145px;
                                    ">
                    <img src="{{asset('src/img/icons/eye.svg')}}" alt="View" class="complete__btn__img" style="
                                            padding: 14px;
                                        ">

                    View
                </a>

                <button class="
                                        complete__btn d-flex flex-row align-items-center button downloadDoc
                                    " style="
                                        gap: 21px;
                                        font-size: 16px;
                                        width: 185px;
                                    " data-name="First Paper">
                    <img src="{{asset('src/img/icons/download-line.svg')}}" alt="Download" class="complete__btn__img" style="
                                            padding: 14.7px 17.7px;
                                        ">

                    Download
                </button>
                </div>
            </div>
        </div>

        <div class="paper__list__item d-flex">
            <div class="paper__list__item__top">
                <img src="{{ asset('src/img/icons/paper.svg')}}" alt="White Paper" class="paper__list__item__img">

                <h3 class="paper__list__item__content__title__mob title-little">
                    INTRODUCTION
                </h3>
            </div>

          <div class="paper__list__item__content">
            <h3 class="paper__list__item__content__title title-little">
              INTRODUCTION
            </h3>

            <p class="paper__list__item__content__desc desc">
              These are the terms and conditions (the ‘T&Cs’) Victoria VR, a.s. (‘we’, ‘us’, ‘our’, ‘Victoria VR) use to
              govern our websites and games (the “Games”, each a “Game”) (except where a Game or website sets out that
              other terms and conditions apply). We’ve tried to keep them as short as possible, to help you understand
              how you can use each of the Games and our websites.
            </p>

            <div class="paper__list__item__content__btns d-flex flex-row">
              <a href="#" class="
                                    complete__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                    button
                                " style="
                                    gap: 21px;
                                    font-size: 16px;
                                    width: 145px;
                                ">
                <img src="{{asset('src/img/icons/eye.svg')}}" alt="View" class="complete__btn__img" style="
                                        padding: 14px;
                                    ">

                View
              </a>

              <button class="
                                    complete__btn d-flex flex-row align-items-center button downloadDoc
                                " style="
                                    gap: 21px;
                                    font-size: 16px;
                                    width: 185px;
                                " data-name="First Paper">
                <img src="{{asset('src/img/icons/download-line.svg')}}" alt="Download" class="complete__btn__img" style="
                                        padding: 14.7px 17.7px;
                                    ">

                Download
              </button>
            </div>
          </div>
        </div>

        <div class="paper__list__item d-flex">
            <div class="paper__list__item__top">
                <img src="{{ asset('src/img/icons/paper.svg')}}" alt="White Paper" class="paper__list__item__img">

                <h3 class="paper__list__item__content__title__mob title-little">
                    INTRODUCTION
                </h3>
            </div>

          <div class="paper__list__item__content">
            <h3 class="paper__list__item__content__title title-little">
              INTRODUCTION
            </h3>

            <p class="paper__list__item__content__desc desc">
              These are the terms and conditions (the ‘T&Cs’) Victoria VR, a.s. (‘we’, ‘us’, ‘our’, ‘Victoria VR) use to
              govern our websites and games (the “Games”, each a “Game”) (except where a Game or website sets out that
              other terms and conditions apply). We’ve tried to keep them as short as possible, to help you understand
              how you can use each of the Games and our websites.
            </p>

            <div class="paper__list__item__content__btns d-flex flex-row">
              <a href="#" class="
                                    complete__btn
                                    d-flex
                                    flex-row
                                    align-items-center
                                    button
                                " style="
                                    gap: 21px;
                                    font-size: 16px;
                                    width: 145px;
                                ">
                <img src="{{asset('src/img/icons/eye.svg')}}" alt="View" class="complete__btn__img" style="
                                        padding: 14px;
                                    ">

                View
              </a>

              <button class="
                                    complete__btn d-flex flex-row align-items-center button downloadDoc
                                " style="
                                    gap: 21px;
                                    font-size: 16px;
                                    width: 185px;
                                " data-name="First Paper">
                <img src="{{asset('src/img/icons/download-line.svg')}}" alt="Download" class="complete__btn__img" style="
                                        padding: 14.7px 17.7px;
                                    ">

                Download
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

      <x-docs :docsInfo="$docsInfo" />

    <x-footer />
  </div>

  <script>
    // download file
        const downloadButtons = document.querySelectorAll('.downloadDoc');

        downloadButtons.forEach((button) => {
            button.addEventListener('click', function() {
                const name = button.getAttribute('data-name');
                const fileUrl = `./src/docs/${name}.pdf`;


                fetch(fileUrl)
                .then(response => response.blob())
                .then(blob => {
                    const link = document.createElement('a');

                    link.download = `${name}.pdf`;

                    link.href = URL.createObjectURL(blob);

                    document.body.appendChild(link);

                    link.click();

                    document.body.removeChild(link);
                })
                .catch(error => {
                    console.error('Error fetching the file:', error);
                });
            });
        })
  </script>
</x-base>
