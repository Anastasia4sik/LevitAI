<div class="integrations__article__content__video d-flex align-items-center justify-content-center">
    <div class="integrations__article__content__video__pause" style="width: {{$width}}">
        <div class="integrations__article__content__video__pause__text d-flex flex-row align-items-center">
            <img src="{{ asset('src/img/icons/logo.svg')}}" alt="Logo">

            <p class="integrations__article__content__video__pause__text__p desc">
                LevitAI project
            </p>
        </div>

        <img src="{{ asset('src/img/icons/video.svg')}}" alt="VideoPlayer" class="integrations__article__content__video__pause__img">
    </div>


    <video style="width: {{$width}}" controls class="integrations__article__content__video__content">
        <source src="{{ asset('src/video/video.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<script>
    const videoBtn = document.querySelector('.integrations__article__content__video__pause');
    const video = document.querySelector('.integrations__article__content__video__content');

    videoBtn.addEventListener('click', () => {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
        toggleVideoBtnDisplay();
    });

    video.addEventListener('pause', () => {
        toggleVideoBtnDisplay();
    });

    video.addEventListener('ended', () => {
        toggleVideoBtnDisplay();
    });

    function toggleVideoBtnDisplay() {
        videoBtn.style.display = video.paused ? 'block' : 'none';
    }
</script>
