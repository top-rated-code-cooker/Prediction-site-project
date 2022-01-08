@include('layouts.header')
<div class="section__artists mt-100">
    <div class="container">
        <div class="space-y-30">
            <div class="section_head">
                <h2 class="header-title">BTC/USDT Prediction</h2>
            </div>
            <div class="section_body swiper_artists">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper position-relative">   
                @foreach($rounds as $round)
                    <!-- Slides -->
                    <div class="swiper-slide">
                    @if($round->cancelled == 1){
                        @include('cards.prediction_card_up', ['round' => $round])
                    @elseif($round->closed == 1){
                        @include('cards.prediction_card_execute', ['round' => $round])
                    @else{
                        @if($round->lockPrice < $round->closePrice){
                            @include('cards.prediction_card_up', ['round' => $round])
                        @elseif($round->lockPrice < $round->closePrice){
                            @include('cards.prediction_card_down', ['round' => $round])
                        @else{
                            @include('cards.prediction_card_same', ['round' => $round])
                        }
                        @endif
                    }
                    @endif
                    </div>
                @endforeach                    
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