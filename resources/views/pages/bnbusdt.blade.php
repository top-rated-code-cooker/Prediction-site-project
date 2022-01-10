@include('layouts.header')
<div class="section__artists mt-100">
    <div class="container">
        <div class="space-y-30">
            <div class="section_head">
                <h2 class="header-title">BTC/USDT Prediction</h2>
            </div>
            <div class="section_body swiper_artists">
                <!-- Additional required wrapper -->
                <div class="owl-carousel">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.prediction_card_up')
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.prediction_card_same')
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.prediction_card_down')
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.prediction_card_execute')
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.prediction_card_enter')
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.prediction_card_wait')
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev move-btn"></div>
                <div class="swiper-button-next move-btn"></div>
            </div>
        </div>
    </div> 
</div>
@include('layouts.footer')