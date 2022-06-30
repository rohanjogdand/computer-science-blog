<section id="explore">
                <div class="gallery">
                    <h4>GALLERY</h4>
                    <ul class="controls">

                        <li class="buttons active" data-filter="all">all</li>
                        <li class="buttons" data-filter="pencil">pencil</li>
                        <li class="buttons" data-filter="nature">nature</li>

                    </ul>

                    <div class="image-container">
                        <a href="img/1/1.jpg" class="image pencil">
                            <img src="img/1/1.jpg" alt="">
                        </a>
                        <a href="img/1/2.jpg" class="image pencil">
                            <img src="img/1/2.jpg" alt="">
                        </a>
                        <a href="img/1/3.jpg" class="image pencil">
                            <img src="img/1/3.jpg" alt="">
                        </a>

                        <a href="img/1/4.jpg" class="image nature">
                            <img src="img/1/4.jpg" alt="">
                        </a>

                        <a href="img/1/5.jpg" class="image nature">
                            <img src="img/1/5.jpg" alt="">
                        </a>
                    </div>

                </div>



                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
                </script>


                <script>
                    $(document).ready(function () {

                        $('.buttons').click(function () {
                            $(this).addClass('active').siblings().removeClass('active');

                            var filter = $(this).attr('data-filter')

                            if (filter == 'all') {
                                $('.image').show(400);
                            } else {
                                $('.image').not('.' + filter).hide(200);
                                $('.image').filter('.' + filter).show(200);
                            }
                        });

                        $('.gallery').magnificPopup({

                            delegate: 'a',
                            type: 'image',
                            gallery: {
                                enabled: true
                            }

                        });

                    });
                </script>

            </section>