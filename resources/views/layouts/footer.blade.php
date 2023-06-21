<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Menu</h4>
                <a class="btn btn-link" href="">Contacto</a>
                <a class="btn btn-link" href="">Servicios</a>
                <a class="btn btn-link" href="">Consultas</a>
                <a class="btn btn-link" href="">Cotizar</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dirección</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>N° telefono</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>Mail</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#"></a>Todos los derechos reservados

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Creado por <a class="border-bottom" href="">Desarrollo-pas2</a><br><br>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Quienes Somos</a>
                        <a href="">-----</a>
                        <a href="">-----</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->

<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>



<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $('#exampleModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })

    $(function() {
        $(".datepicker").datepicker({
            format: "dd-mm-yyyy",
            minDate: 0,
            language: "es",
            forceParse: false,
            todayHighlight: true,
            startDate: '1d',
            multidateSeparator: "-",
            daysOfWeekDisabled: "0,6"

        }).change(function() {

            let fecha = $('#fecha').val();
            const fechaFormateada = fecha.split("-").reverse().join("-");

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                url: "{{ url('/GetHora') }}",
                method: "POST",
                dataType: 'json',
                data: {
                    getFecha: fechaFormateada,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    console.log(data);
                }
            })


        })
    })
</script>


</body>

</html>
