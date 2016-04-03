
<div class="flexslider-container">
    <div class="flexslider">
        <ul class="slides">
            @foreach($sliders as $slider)
            <li style="background-image: url({{$slider->image}});">
                <div class="flex-capition">
                    <p class="flex-slider_title">{{ $slider->title }}</p>
                    <p>{{ $slider->text }}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            animationSpeed: 1800,
            slideshowSpeed: 14000
        });
    });
</script>