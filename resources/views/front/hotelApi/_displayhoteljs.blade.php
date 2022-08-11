@section('js')
    <script src="{{asset('assets/OwlCarousel/owl.carousel.min.js')}}"></script>

    <script>            window.addEventListener("pageshow", function (event) {
            var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
            if (historyTraversal) {
                window.location.reload();
            }
        });
        $('.owl-img').owlCarousel({
            items: 1,
            lazyLoad: true,
            loop: true,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 4000,
            margin: 10
        });
    </script>

    <script>

        $(document).ready(function(){
            let scrollTop = 0;
            let lastScrollTop = 0;
            $('.web').addClass('bg-header-blue');
            $(document).scroll(function(event){
                let scrolltop = $(this).scrollTop();
                if (scrolltop > lastScrollTop){

                    $('.web').addClass('bg-header-scroll').removeClass('bg-header-blue');
                    $('.web').css({'boxShadow': '0 0 20px rgba(0, 0, 0, .1)'});

                    $('.web').css({'transition': '.2s'});
                    $('#logo-jmb').css({'width': '95px'});
                    $('#logo-jmb').css({'height': '95px'});
                    $('#logo-jmb').css({'transition': '.2s'});
                } else {
                    /*au début*/
                    $('.web').addClass('bg-header-blue').removeClass('bg-header-scroll');
                    $('.web').css({'boxShadow': 'none'});
                    $('#logo-jmb').css({'width': '120px'});
                    $('#logo-jmb').css({'height': '120px'});
                }
            });
        });

    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $('#myCarousel').carousel({
            interval: false
        });
        $('#carousel-thumbs').carousel({
            interval: false
        });

        // handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr('id');
            var id = parseInt(id_selector.substr(id_selector.lastIndexOf('-') + 1));
            $('#myCarousel').carousel(id);
        });
        // Only display 3 items in nav on mobile.
        if ($(window).width() < 575) {
            $('#carousel-thumbs .row div:nth-child(4)').each(function() {
                var rowBoundary = $(this);
                $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
            });
            $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
                var boundary = $(this);
                $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
            });
        }
        // Hide slide arrows if too few items.
        if ($('#carousel-thumbs .carousel-item').length < 2) {
            $('#carousel-thumbs [class^=carousel-control-]').remove();
            $('.machine-carousel-container #carousel-thumbs').css('padding', '0 5px');
        }
        // when the carousel slides, auto update
        $('#myCarousel').on('slide.bs.carousel', function(e) {
            var id = parseInt($(e.relatedTarget).attr('data-slide-number'));
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-' + id + ']').addClass('selected');
        });
        // when user swipes, go next or previous
        $('#myCarousel').swipe({
            fallbackToMouseEvents: true,
            swipeLeft: function(e) {
                $('#myCarousel').carousel('next');
            },
            swipeRight: function(e) {
                $('#myCarousel').carousel('prev');
            },
            allowPageScroll: 'vertical',
            preventDefaultEvents: false,
            threshold: 75
        });


        $('#myCarousel .carousel-item img').on('click', function(e) {
            var src = $(e.target).attr('data-remote');
            if (src) $(this).ekkoLightbox();
        });
    </script>

    <script>
        $(document).ready(function () {
            //google-map
            lightGallery(document.getElementById('google-map'), {
                selector: 'this',
                iframeMaxWidth: '80%'
            });

        })
    </script>

<script>
    paths = [];

    $(document).ready(function () {
        $(".box-count").click(function () {
            paths = {!! json_encode($photos) !!};
            pathImg = {!! json_encode($pathImg) !!};

            var genEls = function(arr)
            {
                var els = [];
                for(i = 0; i <= (arr.length - 1); i++)
                {
                    els.push({
                        'src': pathImg + arr[i],
                    });
                }
                return els;
            }

            lightGallery(this, {
                dynamic: true,
                dynamicEl: genEls(paths)
            })

        });

    })
</script>




@endsection
