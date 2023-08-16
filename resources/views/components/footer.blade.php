</main>
<footer class="container-fluid" style="background-color: #374a5e; color: #FFFFFF;">
    <div class="container">
        <div class="row p-5">
            <div class="col-md-6">
                <a href="">
                    <img id="logo_footer" src="http://innovation.associatedmedia.org/public/images/logo.png" class="img-fluid">
                </a>
                <p class="mt-5">Science and Technology Department is engaged in utilization of New and Renewable Sources of
                    Energy for meeting the needs of people with focus on un-electrified villages/hamlets and other deficit areas
                    besides harnessing the potential of Science &amp; Technology as instrument of Socio Economic change. The
                    Science and Technology has two wings under its Administrative Control viz J&amp;K Energy Development Agency
                    (JAKEDA) and J&amp;K Science, Technology &amp; Innovation Council..</p>
                <div class="d-inline mt-4 social">
                    <i aria-hidden="true" class="fab fa-facebook-f ml-2"></i>
                    <i aria-hidden="true" class="fab fab fa-twitter ml-2"></i>
                    <i aria-hidden="true" class="fab fab fa-linkedin-in ml-2"></i>
                    <i aria-hidden="true" class="fab fab fa-instagram ml-2"></i>
                </div>

            </div>

            <div class="col-md-1 p-2"></div>
            <div class="col-md-5 p-2">
                <h5 class="h4">Subscribe Now
                </h5>
                <p>Don't miss our future updates! Get Subscribed Today!</p>
                <div>
                    <input type="email" aria-label="email" name="email" class="form-control form-email" placeholder="Your mail here" required="">

                </div>
            </div>
        </div>
        <div class="row">
            <p class="text-center">©2023. Department of Science & Technology, Govt. of Jammu & Kashmir. All Rights Reserved.
            </p>
            <p class="text-center">Powered By : Associated Media</p>
        </div>
    </div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script>
    $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>
<script>
    $('.deptslider').slick({
        autoplay: true,
        autoplaySpeed: 1500,
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 5
    });

    $('.slider-section4').slick({
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        infinite: true,
        speed: 2000,
    });

    $('.partner-slider').slick({
        autoplay: true,
        autoplaySpeed: 1500,
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 2
    });
</script>
</body>

</html>