@include('layouts.header')

<div class="section__artists mt-100">
    <div class="container">
        <div class="space-y-30">
            <div class="events-table">
                <table class="table table-condensed" style="border-collapse:collapse;">
                    <tbody>
                        @include('others.event')
                        @include('others.event')
                        @include('others.event')
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>

@include('layouts.footer')
