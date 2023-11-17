<button
    class="
        complete__btn
        d-flex
        flex-row
        align-items-center
        button
    "
    style="
        gap: {{$gap}};
        padding-right: {{$pr}};
        font-size: {{$fs}};
        width: {{$width}};
    "
>
    <img
        src="{{asset($img)}}"
        alt="Read More"
        class="complete__btn__img"
        style="
            padding: {{$padding}}
        "
    >

    {{$slot}}
</button>
