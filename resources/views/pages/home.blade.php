@include('layouts.header')

<div class="section__artists mt-100">    
        <div class="space-y-20">
            <div class="section_head">
                <h2 class="header-title">Enjoy and Earn Money!</h2>
            </div>
            <div class="section_body swiper_artists">
                <!-- Additional required wrapper -->
                <div class="owl-carousel">  
                    @include('cards.live_card', ['category' => 'btc'])                    
                   @include('cards.live_card', ['category' => 'btc'])
                    @include('cards.live_card', ['category' => 'btc'])
                     @include('cards.live_card', ['category' => 'btc'])
                      @include('cards.live_card', ['category' => 'btc'])                    
                    
                </div>               
            </div>
        </div>
   
</div>

@include('layouts.footer')
