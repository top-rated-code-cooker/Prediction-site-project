@include('layouts.header')

<div class="section__artists mt-100">
    <div class="container">
        <div class="space-y-20">
            <div class="section_head">
                <h2 class="header-title">Enjoy and Earn Money!</h2>
            </div>
            <div class="section_body swiper_artists">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper position-relative">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.live_card', ['category' => 'btc'])
                    </div>
                     <!-- Slides -->
                     <div class="swiper-slide">
                        @include('cards.live_card', ['category' => 'eth'])
                    </div>
                     <!-- Slides -->
                     <div class="swiper-slide">
                        @include('cards.live_card', ['category' => 'bnb'])
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        @include('cards.live_card', ['category' => 'event']);
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
