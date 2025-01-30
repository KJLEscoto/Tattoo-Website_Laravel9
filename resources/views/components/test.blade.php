<!-- HTML CODE -->
<div class="w-full relative">
    <div class="swiper centered-slide-carousel swiper-container relative">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <span class="text-3xl font-semibold text-indigo-600">Slide 1</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <span class="text-3xl font-semibold text-indigo-600">Slide 2</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <span class="text-3xl font-semibold text-indigo-600">Slide 3</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <span class="text-3xl font-semibold text-indigo-600">Slide 4</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <span class="text-3xl font-semibold text-indigo-600">Slide 5</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <span class="text-3xl font-semibold text-indigo-600">Slide 6</span>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- CSS CODE -->
<style>
    .swiper-wrapper {
        width: 100%;
        height: max-content !important;
        padding-bottom: 64px !important;
        -webkit-transition-timing-function: linear !important;
        transition-timing-function: linear !important;
        position: relative;
    }

    .swiper-pagination-bullet {
        background: #4F46E5;
    }

    .swiper-pagination-bullet-active {
        background: #4F46E5 !important;
    }
</style>

<!-- JAVASCRIPT CODE -->
<script>
    var swiper = new Swiper(".centered-slide-carousel", {
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2000, // 2 seconds delay for each slide
            disableOnInteraction: false,
        },
        speed: 600, // Smooth transition speed
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".centered-slide-carousel .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            990: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });

    // Stop autoplay when hovering over the carousel
    document.querySelector('.centered-slide-carousel').addEventListener('mouseover', function() {
        swiper.autoplay.stop();
    });

    // Start autoplay when hover ends
    document.querySelector('.centered-slide-carousel').addEventListener('mouseout', function() {
        swiper.autoplay.start();
    });
</script>
