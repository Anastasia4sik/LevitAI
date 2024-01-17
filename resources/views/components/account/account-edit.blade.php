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
                            placeholder="Phone Number"
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

                            <option value="18" >
                                18
                            </option>

                            <option value="19" >
                                19
                            </option>

                            <option value="20" >
                                20
                            </option>

                            <option value="21" >
                                21
                            </option>

                            <option value="22" >
                                22
                            </option>

                            <option value="23" >
                                23
                            </option>

                            <option value="24" >
                                24
                            </option>

                            <option value="25" >
                                25
                            </option>

                            <option value="26" >
                                26
                            </option>

                            <option value="27" >
                                27
                            </option>

                            <option value="28" >
                                28
                            </option>

                            <option value="29" >
                                29
                            </option>

                            <option value="30" >
                                30
                            </option>

                            <option value="31" >
                                31
                            </option>

                            <option value="32" >
                                32
                            </option>

                            <option value="33" >
                                33
                            </option>

                            <option value="34" >
                                34
                            </option>

                            <option value="35" >
                                35
                            </option>

                            <option value="36" >
                                36
                            </option>

                            <option value="37" >
                                37
                            </option>

                            <option value="38" >
                                38
                            </option>

                            <option value="39" >
                                39
                            </option>

                            <option value="40" >
                                40
                            </option>

                            <option value="41" >
                                41
                            </option>

                            <option value="42" >
                                42
                            </option>

                            <option value="43" >
                                43
                            </option>

                            <option value="44" >
                                44
                            </option>

                            <option value="45" >
                                45
                            </option>

                            <option value="46" >
                                46
                            </option>

                            <option value="47" >
                                47
                            </option>

                            <option value="48" >
                                48
                            </option>

                            <option value="49" >
                                49
                            </option>

                            <option value="50" >
                                50
                            </option>

                            <option value="51" >
                                51
                            </option>

                            <option value="52" >
                                52
                            </option>

                            <option value="53" >
                                53
                            </option>

                            <option value="54" >
                                54
                            </option>

                            <option value="55" >
                                55
                            </option>

                            <option value="56" >
                                56
                            </option>

                            <option value="57" >
                                57
                            </option>

                            <option value="58" >
                                58
                            </option>

                            <option value="59" >
                                59
                            </option>

                            <option value="60" >
                                60
                            </option>

                            <option value="61" >
                                61
                            </option>

                            <option value="62" >
                                62
                            </option>

                            <option value="63" >
                                63
                            </option>

                            <option value="64" >
                                64
                            </option>

                            <option value="65" >
                                65
                            </option>

                            <option value="66" >
                                66
                            </option>

                            <option value="67" >
                                67
                            </option>

                            <option value="68" >
                                68
                            </option>

                            <option value="69" >
                                69
                            </option>

                            <option value="70" >
                                70
                            </option>

                            <option value="71" >
                                71
                            </option>

                            <option value="72" >
                                72
                            </option>

                            <option value="73" >
                                73
                            </option>

                            <option value="74" >
                                74
                            </option>

                            <option value="75" >
                                75
                            </option>

                            <option value="76" >
                                76
                            </option>

                            <option value="77" >
                                77
                            </option>

                            <option value="78" >
                                78
                            </option>

                            <option value="79" >
                                79
                            </option>

                            <option value="80" >
                                80
                            </option>

                            <option value="81" >
                                81
                            </option>

                            <option value="82" >
                                82
                            </option>

                            <option value="83" >
                                83
                            </option>

                            <option value="84" >
                                84
                            </option>

                            <option value="85" >
                                85
                            </option>

                            <option value="86" >
                                86
                            </option>

                            <option value="87" >
                                87
                            </option>

                            <option value="88" >
                                88
                            </option>

                            <option value="89" >
                                89
                            </option>

                            <option value="90" >
                                90
                            </option>

                            <option value="91" >
                                91
                            </option>

                            <option value="92" >
                                92
                            </option>

                            <option value="93" >
                                93
                            </option>

                            <option value="94" >
                                94
                            </option>

                            <option value="95" >
                                95
                            </option>

                            <option value="96" >
                                96
                            </option>

                            <option value="97" >
                                97
                            </option>

                            <option value="98" >
                                98
                            </option>

                            <option value="99" >
                                99
                            </option>
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
                            <option value="def" hidden selected>
                                Choose your nationality
                            </option>

                            <option value="ukrainian" >
                                Ukrainian
                            </option>
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
                            <option value="def" hidden selected>
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
