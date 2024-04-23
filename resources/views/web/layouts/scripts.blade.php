<script src="{{ asset('assets/web/js/jquery.js') }}"></script>
<script src="{{ asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/web/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/web/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/web/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/web/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/web/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/web/js/main.js') }}"></script>
<script src="{{ asset('assets/web/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/web/js/color.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
