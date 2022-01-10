@include('layouts.header')
<div class="section__artists mt-100">   
    <div class="space-y-30">
        <div class="section_head">
            <h2 class="header-title">BTC/USDT Prediction</h2>
        </div>
        <div class="section_body swiper_artists">
            <!-- Additional required wrapper -->
            <div class="owl-carousel">   
            @foreach($rounds as $round)
                @if($round->cancelled == 1)
                    @include('cards.card_live', ['round' => $round])
                @elseif($round->closed == 1)
                    @include('cards.card_complete', ['round' => $round])
                @else
                    @if($round->lockPrice < $round->closePrice)
                        @include('cards.card_next', ['round' => $round])
                    @elseif($round->lockPrice < $round->closePrice)
                        @include('cards.card_live', ['round' => $round])
                    @else
                        @include('cards.card_later', ['round' => $round])
                    
                    @endif
                
                @endif               
            @endforeach                    
            </div>
        </div>
    </div>    
</div>
@include('layouts.footer')