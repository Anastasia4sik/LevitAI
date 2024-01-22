@php
    $nationalityList = [
        'afghan',
        'albanian',
        'algerian',
        'american',
        'andorran',
        'angolan',
        'antiguans',
        'argentinean',
        'armenian',
        'australian',
        'austrian',
        'azerbaijani',
        'bahamian',
        'bahraini',
        'bangladeshi',
        'barbadian',
        'barbudans',
        'batswana',
        'belarusian',
        'belgian',
        'belizean',
        'beninese',
        'bhutanese',
        'bolivian',
        'bosnian',
        'brazilian',
        'british',
        'bruneian',
        'bulgarian',
        'burkinabe',
        'burmese',
        'burundian',
        'cambodian',
        'cameroonian',
        'canadian',
        'cape verdean',
        'central african',
        'chadian',
        'chilean',
        'chinese',
        'colombian',
        'comoran',
        'congolese',
        'costa rican',
        'croatian',
        'cuban',
        'cypriot',
        'czech',
        'danish',
        'djibouti',
        'dominican',
        'dutch',
        'east timorese',
        'ecuadorean',
        'egyptian',
        'emirian',
        'equatorial guinean',
        'eritrean',
        'estonian',
        'ethiopian',
        'fijian',
        'filipino',
        'finnish',
        'french',
        'gabonese',
        'gambian',
        'georgian',
        'german',
        'ghanaian',
        'greek',
        'grenadian',
        'guatemalan',
        'guinea-bissauan',
        'guinean',
        'guyanese',
        'haitian',
        'herzegovinian',
        'honduran',
        'hungarian',
        'icelander',
        'indian',
        'indonesian',
        'iranian',
        'iraqi',
        'irish',
        'israeli',
        'italian',
        'ivorian',
        'jamaican',
        'japanese',
        'jordanian',
        'kazakhstani',
        'kenyan',
        'kittian and nevisian',
        'kuwaiti',
        'kyrgyz',
        'laotian',
        'latvian',
        'lebanese',
        'liberian',
        'libyan',
        'liechtensteiner',
        'lithuanian',
        'luxembourger',
        'macedonian',
        'malagasy',
        'malawian',
        'malaysian',
        'maldivan',
        'malian',
        'maltese',
        'marshallese',
        'mauritanian',
        'mauritian',
        'mexican',
        'micronesian',
        'moldovan',
        'monacan',
        'mongolian',
        'moroccan',
        'mosotho',
        'motswana',
        'mozambican',
        'namibian',
        'nauruan',
        'nepalese',
        'new zealander',
        'ni-vanuatu',
        'nicaraguan',
        'nigerien',
        'north korean',
        'northern irish',
        'norwegian',
        'omani',
        'pakistani',
        'palauan',
        'panamanian',
        'papua new guinean',
        'paraguayan',
        'peruvian',
        'polish',
        'portuguese',
        'qatari',
        'romanian',
        'russian',
        'rwandan',
        'saint lucian',
        'salvadoran',
        'samoan',
        'san marinese',
        'sao tomean',
        'saudi',
        'scottish',
        'senegalese',
        'serbian',
        'seychellois',
        'sierra leonean',
        'singaporean',
        'slovakian',
        'slovenian',
        'solomon islander',
        'somali',
        'south african',
        'south korean',
        'spanish',
        'sri lankan',
        'sudanese',
        'surinamer',
        'swazi',
        'swedish',
        'swiss',
        'syrian',
        'taiwanese',
        'tajik',
        'tanzanian',
        'thai',
        'togolese',
        'tongan',
        'trinidadian or tobagonian',
        'tunisian',
        'turkish',
        'tuvaluan',
        'ugandan',
        'ukrainian',
        'uruguayan',
        'uzbekistani',
        'venezuelan',
        'vietnamese',
        'welsh',
        'yemenite',
        'zambian',
        'zimbabwean',
    ];

    $nums = [18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99]
@endphp

<x-base>
    <section
        class="accountEdit"
    >
        <x-menu />

        <x-header />

        <div class="accountEdit__section">
            <div class="article__path d-flex flex-row ">
                <a href="/" class="article__path__item article__path__item--links title-little">
                    Home \&#160;
                </a>

                <a href="/account" class="article__path__item article__path__item--links title-little">
                    My Account \&#160;
                </a>

                <p class="article__path__item title-little">
                    Edit Account
                </p>
            </div>

            <form
                action="#"
                class="accountEdit__section__form d-flex flex-column justify-content-center"
            >
                <h1 class="accountEdit__section__form__title title-main text-center d-flex justify-content-center">
                    Edit Account
                </h1>

                <div class="register__container__form__inputs accountEdit__section__form__inputs d-flex flex-row">
                    <div class="register__container__form__inputs__left d-flex flex-column accountEdit__section__form__left">
                        <label
                            for="registerName"
                            class="register__container__form__label title-little"
                        >
                            Name:
                        </label>

                        <input
                            id="registerName"
                            type="text"
                            class="register__container__form__input accountEdit__section__form__input"
                            placeholder="None"
                            required
                        >

                        <label
                            for="registerEmail"
                            class="register__container__form__label title-little"
                        >
                            Email:
                        </label>

                        <input
                            id="registerEmail"
                            type="email"
                            class="register__container__form__input accountEdit__section__form__input"
                            placeholder="None"
                            required
                        >
                    </div>

                    <div class="register__container__form__inputs__right d-flex flex-column accountEdit__section__form__right">
                        <label
                            for="registerLastName"
                            class="register__container__form__label title-little"
                        >
                            Last Name:
                        </label>

                        <input
                            id="registerLastName"
                            type="text"
                            class="register__container__form__input accountEdit__section__form__input"
                            placeholder="None"
                            required
                        >

                        <label
                            for="registerNickname"
                            class="register__container__form__label title-little"
                        >
                            Nickname:
                        </label>

                        <input
                            id="registerNickname"
                            type="text"
                            class="register__container__form__input accountEdit__section__form__input"
                            placeholder="None"
                            required
                        >
                    </div>
                </div>

                <label
                    for="registerPhone"
                    class="register__container__form__label title-little"
                >
                    Phone:
                </label>

                <div class="select-box accountEdit__section__form__select">
                    <div class="selected-option d-flex flex-row align-items-center accountEdit__section__form__select__option">
                        <div class="d-flex flex-row align-items-center">
                            <img src="https://flagcdn.com/w320/ua.png" alt="Flag">

                            <strong>+380</strong>

                            <img
                                src="{{ asset('src/img/icons/arrows/dropdown.svg')}}"
                                alt="Arrow"
                            >
                        </div>

                        <input
                            type="tel"
                            id="registerPhone"
                            name="registerPhone"
                            value="+380"
                            class="
                                register__container__form__input
                                accountEdit__section__form__select__option__input
                            "
                        >
                    </div>

                    <div class="options">
                        <ol>

                        </ol>
                    </div>
                </div>

                <label
                    for="registerLangs"
                    class="register__container__form__label title-little"
                >
                    Languages:
                </label>

                <input
                    id="registerLangs"
                    type="text"
                    class="register__container__form__input accountEdit__section__form__input"
                    placeholder="None"
                    required
                >

                <div class="register__container__form__inputs accountEdit__section__form__inputs d-flex flex-row">
                    <div class="d-flex flex-column accountEdit__section__form__first">
                        <label
                            for="registerAge"
                            class="register__container__form__label title-little"
                        >
                            Age:
                        </label>

                        <select class="register__container__form__input accountEdit__section__form__selectGroup accountEdit__section__form__input" name="registerAge" id="registerAge" defValue="def">
                            <option value="def" selected disabled>
                                Choose your age
                            </option>

                            @foreach ($nums as $item)
                                <option value="{{ $item }}" >
                                    {{$item}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex flex-column accountEdit__section__form__sec">
                        <label
                            for="registerNation"
                            class="register__container__form__label title-little"
                        >
                            Nationality:
                        </label>

                        <select class="register__container__form__input accountEdit__section__form__selectGroup accountEdit__section__form__input" name="registerNation" id="registerNation" defValue="def">
                            <option value="def" disabled selected>
                                Choose your nationality
                            </option>

                            @foreach ($nationalityList as $item)
                                <option value="{{$item}}" >
                                    {{$item}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex flex-column accountEdit__section__form__third">
                        <label
                            for="registerSex"
                            class="register__container__form__label title-little"
                        >
                            Sex:
                        </label>

                        <select class="register__container__form__input accountEdit__section__form__selectGroup accountEdit__section__form__input" name="registerSex" id="registerSex" defValue="def">
                            <option value="def" disabled selected>
                                Choose your sex
                            </option>

                            <option value="male" >
                                Male
                            </option>

                            <option value="female" >
                                Female
                            </option>
                        </select>
                    </div>
                </div>

                <label
                    for="registerHobby"
                    class="register__container__form__label title-little"
                >
                    Hobby:
                </label>

                <input
                    id="registerHobby"
                    type="text"
                    class="register__container__form__input accountEdit__section__form__input"
                    placeholder="None"
                    required
                >

                <label
                    for="registerMusic"
                    class="register__container__form__label title-little"
                >
                    Favorite style of music:
                </label>

                <input
                    id="registerMusic"
                    type="text"
                    class="register__container__form__input accountEdit__section__form__input"
                    placeholder="None"
                    required
                >

                <label
                    for="registerAbout"
                    class="register__container__form__label title-little"
                >
                    About myself:
                </label>

                <textarea
                    id="registerAbout"
                    class="register__container__form__input accountEdit__section__form__input"
                    placeholder="None"
                    required
                ></textarea>

                <label
                    for="registerValues"
                    class="register__container__form__label title-little"
                >
                    Values:
                </label>

                <input
                    id="registerValues"
                    type="text"
                    class="register__container__form__input accountEdit__section__form__input"
                    placeholder="None"
                    required
                >

                <label
                    for="registerEmployment"
                    class="register__container__form__label title-little"
                >
                    Type of employment:
                </label>

                <input
                    id="registerEmployment"
                    type="text"
                    class="register__container__form__input accountEdit__section__form__input accountEdit__section__form__input--last"
                    placeholder="None"
                    required
                >

                <button
                    type="submit"
                    class="
                        complete__btn
                        d-flex
                        flex-row
                        align-items-center
                        button
                    "
                    style="
                        gap: 15px;
                        font-size: 16px;
                        width: 195px;
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

                    Save Settings
                </button>
            </form>
        </div>

        <x-footer />
    </section>
</x-base>
