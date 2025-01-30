<div class="w-full ">
    <div class="swiper centered-slide-carousel swiper-container py-5">
        <div class="swiper-wrapper">
            @for ($i = 1; $i <= 4; $i++)
                <div class="swiper-slide">
                    <img class="carousel-item cursor-pointer w-full h-auto scale-95 hover:scale-105 hover:shadow-xl transition-all duration-150 ease-in"
                        draggable="false" src="{{ '/img/works-bnw/' . $i . '.png' }}" alt="{{ 'works-' . $i }}"
                        onmouseover="this.src='/img/works/{{ $i }}.png'"
                        onmouseout="this.src='/img/works-bnw/{{ $i }}.png'">
                </div>
            @endfor
        </div>

        <!-- Navigation Arrows -->
        <div class="flex justify-between lg:px-52 md:px-32 px-20">
            <!-- Left arrow -->
            <button id="prevBtn">
                <svg class="w-12 h-auto cursor-pointer hover:text-custom-green text-gray-700"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m4 12l-.354-.354l-.353.354l.353.354zm15 .5a.5.5 0 0 0 0-1zM9.646 5.646l-6 6l.708.708l6-6zm-6 6.708l6 6l.708-.708l-6-6zM4 12.5h15v-1H4z" />
                </svg>
            </button>

            <!-- Right arrow -->
            <button id="nextBtn">
                <svg class="w-12 h-auto cursor-pointer hover:text-custom-green text-gray-700"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m20 12l.354-.354l.353.354l-.353.354zm-15 .5a.5.5 0 0 1 0-1zm9.354-6.854l6 6l-.708.708l-6-6zm6 6.708l-6 6l-.708-.708l6-6zM20 12.5H5v-1h15z" />
                </svg>
            </button>
        </div>
    </div>
</div>

<style>
    .swiper-wrapper {
        width: 100%;
        height: max-content !important;
        padding-bottom: 40px !important;
        -webkit-transition-timing-function: linear !important;
        transition-timing-function: linear !important;
    }
</style>

<!-- Swiper JS -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".centered-slide-carousel", {
            slidesPerView: 2,
            spaceBetween: 10,
            speed: 600, // Smooth transition speed
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 2500, // Adjust speed here (2000ms = 2 seconds)
                disableOnInteraction: false
            },
            navigation: {
                nextEl: "#nextBtn",
                prevEl: "#prevBtn"
            },
            breakpoints: {
                1920: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                1028: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                990: {
                    slidesPerView: 3,
                    spaceBetween: 5
                }
            }
        });

        // Pause autoplay when hovered
        document.querySelector(".swiper-wrapper").addEventListener("mouseenter", function() {
            swiper.autoplay.stop();
        });

        // Resume autoplay when mouse leaves
        document.querySelector(".swiper-wrapper").addEventListener("mouseleave", function() {
            swiper.autoplay.start();
        });
    });
</script>
