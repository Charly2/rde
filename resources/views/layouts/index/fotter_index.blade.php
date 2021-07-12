<!--<a href="#home" class="up_btn scroll"><i class="fas fa-angle-up"></i></a>-->


<script>

$(document).ready(function(){
    
    $('#ckckc').click(function(){
        t = $(this).children('.checkbox');
        if (t.hasClass('positive')){
            t.removeClass('positive');

        } else {
            t.addClass('positive');
            t.html('<svg id="i-checkmark" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="10.9375%"><path d="M2 20 L12 28 30 4" /></svg>');

        }
    });

});





</script>
<script type="text/javascript" src="{{asset('assets/js/fullpage.js')}}"></script>
<!--:::::jquery.waypoints.min.js :::::::-->
<script src="{{asset("assets/js/jquery.waypoints.min.js")}}"></script>
<!--:::::popper js :::::::-->
<script src="{{asset("assets/js/popper.min.js")}}"></script>
<!--:::::bootstrap js :::::::-->
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<!--:::::owl carousel js :::::::-->
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<!--::::: google map js:::::::-->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!--:::::modal video btn js :::::::-->
<script src="{{asset("assets/js/jquery-modal-video.min.js")}}"></script>
<!--:::::slick nav mobile menu js :::::::-->
<script src="{{asset("assets/js/jquery.slicknav.min.js")}}"></script>
<!--:::::counter js :::::::-->
<script src="{{asset("assets/js/jquery.counterup.js")}}"></script>
<!--:::::main js :::::::-->
<script src="{{asset("assets/js/main.js")}}"></script>

@yield('script')

</body>

</html>
