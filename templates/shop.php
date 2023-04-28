<?php /* Template Name: Shop */?>
<?php get_header(); ?>

<main class="catalog">
    <div class="container-md">
        <section class="filters">

            <h1 class="text-uppercase text-center mb-4">t-shirt for him</h1>

            <div class="row btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
                <div class="col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                    <label class="btn btn-outline-dark px-5" for="btnradio1">
                        <h2 class="text-lowercase m-0">coats</h2>
                    </label>
                </div>

                <div class="col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-dark px-5" for="btnradio2">
                        <h2 class="text-lowercase m-0">t-shirt</h2>
                    </label>
                </div>
                <div class="col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-dark px-5" for="btnradio3">
                        <h2 class="text-lowercase m-0">hoodie</h2>
                    </label>
                </div>
                <div class="col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                    <label class="btn btn-outline-dark px-5" for="btnradio4">
                        <h2 class="text-lowercase m-0">jeans</h2>
                    </label>
                </div>
                <div class="col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                    <label class="btn btn-outline-dark px-5" for="btnradio5">
                        <h2 class="text-lowercase m-0">sweaters</h2>
                    </label>
                </div>
                <div class="col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                    <label class="btn btn-outline-dark px-5" for="btnradio6">
                        <h2 class="text-lowercase m-0">shoes</h2>
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-1 px-4">
                <nav class="" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
                <a class="text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#filtersCollapse"
                    aria-expanded="false" aria-controls="filtersCollapse">
                    <h3 class="m-0">filters</h3>
                </a>

            </div>

            <div class="collapse" id="filtersCollapse">
                <form class="px-5 py-3" id="filter-form">
                    <div class="row gap-5 mb-3 form__inner">
                        <div class="col-md p-0">
                            <h3 class="mb-4 text-lowercase">colour</h3>
                            <ul class="list-unstyled p-0">
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="colour-black">
                                    <label class="form-check-label" for="color-black">
                                        black
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="colour-green">
                                    <label class="form-check-label" for="colour-green">
                                        green
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="colour-yellow">
                                    <label class="form-check-label" for="colour-yellow">
                                        yellow
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="colour-gray">
                                    <label class="form-check-label" for="colour-gray">
                                        gray
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="colour-blue">
                                    <label class="form-check-label" for="colour-blue">
                                        blue
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="colour-purple">
                                    <label class="form-check-label" for="colour-purple">
                                        purple
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md p-0">
                            <h3 class="mb-4 text-lowercase">size</h3>
                            <ul class="list-unstyled p-0">
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="size-S">
                                    <label class="form-check-label" for="size-S">
                                        S
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="size-M">
                                    <label class="form-check-label" for="size-M">
                                        M
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="size-L">
                                    <label class="form-check-label" for="size-L">
                                        L
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="size-XL">
                                    <label class="form-check-label" for="size-XL">
                                        XL
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="size-2XL">
                                    <label class="form-check-label" for="size-2XL">
                                        2XL
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="size-3XL">
                                    <label class="form-check-label" for="size-3XL">
                                        3XL
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md p-0">
                            <h3 class="mb-4 text-lowercase">collaboration</h3>
                            <ul class="list-unstyled p-0">
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="x-Netflix">
                                    <label class="form-check-label" for="x-Netflix">
                                        x Netflix
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="x-Gucci">
                                    <label class="form-check-label" for="x-Gucci">
                                        x Gucci
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="x-Nike">
                                    <label class="form-check-label" for="x-Nike">
                                        x Nike
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="x-Sony">
                                    <label class="form-check-label" for="x-Sony">
                                        x Sony
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="x-Fendi">
                                    <label class="form-check-label" for="x-Fendi">
                                        x Fendi
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="x-Naruto">
                                    <label class="form-check-label" for="x-Naruto">
                                        x Naruto
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md p-0">
                            <h3 class="mb-4 text-lowercase">print</h3>
                            <ul class="list-unstyled p-0">
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="no-print">
                                    <label class="form-check-label" for="no-print">
                                        no print
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="plant">
                                    <label class="form-check-label" for="plant">
                                        plant
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="anime">
                                    <label class="form-check-label" for="anime">
                                        anime
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="christmas">
                                    <label class="form-check-label" for="christmas">
                                        christmas
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="minimal">
                                    <label class="form-check-label" for="minimal">
                                        minimal
                                    </label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="checkbox" value="" id="films">
                                    <label class="form-check-label" for="films">
                                        films
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md p-0">
                            <button type="reset">
                                <h3 class="mb-4 text-lowercase">clear all</h3>
                            </button>
                        </div>
                    </div>
                    <h4 class="text-center mb-3">you can choose more than one filter</h4>
                    <div class="d-flex justify-content-center text-center">
                        <button type="submit" class="btn btn-dark px-3 py-1">accept</button>
                    </div>
                </form>

            </div>


        </section>
        <section class="cards">

            <ul class="row list-unstyled gap-3 justify-content-center">

                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 10.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 11.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>                            </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 12.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>                            </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 13.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>                            </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 10.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 11.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>                            </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 12.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>                            </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-md-7 card px-0">
                    <a href="tovar.html"><img src="../images/clothes/image 13.png" class="card-img-top" alt="..."></a>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title m-0">Card title</h5>
                            <div class="heart-wrapper"> 
                                <input type="checkbox" class="btn-check card-checkbox" id="card_id" autocomplete="off">
                                <label class="btn btn-outline-primary p-0" for="card_id"><img class="svg heart-svg" src="../images/icons-svg/mdi_cards-heart-outline.svg" alt=""></label>
                            </div>                            </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="d-flex justify-content-between align-content-center">
                            <h5 class="card-price">19,99 $</h5>
                            <ul class="list-unstyled d-flex gap-1 size-list">
                                <li class="text-muted ">M</li>
                                <li class="text-muted ">L</li>
                                <li class="text-muted ">XL</li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>

            <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item p-0">
                        <a class="page-link p-0" href="#" aria-label="Previous">
                            <img class="svg pagination-prev"
                                src="../images/icons-svg/material-symbols_arrow-back-ios-new.svg" alt="">
                        </a>
                    </li>

                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>

                    <li class="page-item p-0">
                        <a class="page-link p-0" href="#" aria-label="Next">
                            <img class="svg pagination-next"
                                src="../images/icons-svg/material-symbols_arrow-back-ios-new.svg" alt="">
                        </a>
                    </li>
                </ul>
            </nav>

        </section>
    </div>
</main>
<?php get_footer(); ?>