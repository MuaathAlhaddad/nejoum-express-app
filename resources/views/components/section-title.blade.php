<div class="section-head {{ $alignment }} wt-small-separator-outer">
    @if(isset($heading))
        <h2 class="wt-title text-uppercase">{{ $heading }}</h2>
    @endif

    @if(isset($sub_heading))
        <h3 class="site-text-primary"> {{ $sub_heading }}</h3>
    @endif


    @if(isset($text))
        <p class="section-head-text"> {{ $text }} </p>
    @endif

</div>
