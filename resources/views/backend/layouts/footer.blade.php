<footer class="footer mt-auto py-3 bg-white text-center">
    <div class="container">
        <span class="text-muted">
            Copyright © <span id="year">2023</span>
            <a href="javascript:void(0);" class="text-dark fw-semibold">Valex</a>. Designed with
            <span class="bi bi-heart-fill text-danger"></span> by
            <a href="javascript:void(0);">
                <span class="fw-semibold text-primary text-decoration-underline">Spruko</span>
            </a>
            All rights reserved
        </span>
    </div>
</footer>


<script src="{{ asset('/assets/js/main.js') }}"></script>
<script src="{{ asset('/assets/js/ajax_submit.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.plainoverlay.min.js') }}"></script>

<!-- Sweet Alert library -->
<link rel="stylesheet" href="{{ asset('/assets/plugins/sweet-alert/sweetalert.css') }}">
<script src="{{ asset('/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>

<link rel="stylesheet" href="{{ asset('/assets/plugins/select2/select2.min.css') }}">
<script src="{{ asset('/assets/plugins/select2/select2.full.min.js') }}"></script>


<!-- Toastr  library -->
<link rel="stylesheet" href="{{ asset('/assets/plugins/toastr/toastr.min.css') }}">
<script src="{{ asset('/assets/plugins/toastr/toastr.min.js') }}"></script>

<!-- exmaple table-->
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<!-- icheck  library -->
<link rel="stylesheet" href="{{ asset('/assets/plugins/iCheck/all.css') }}">
<script src="{{ asset('/assets/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Datepicker library -->
<link rel="stylesheet" href="{{ asset('/assets/plugins/datepicker/datepicker3.css') }}">
<script src="{{ asset('/assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/jquery.printElement.min.js') }}"></script>

<script>
    $.fn.modal.Constructor.prototype.enforceFocus = function() {};
</script>
<script>
    function notify_view(type, message) {

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr[type](message);

    }
</script>
