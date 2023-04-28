<?php /* Template Name: Home */?>
<?php get_header(); ?>

<main class="home" id="main">
    <div class="container-md px-sm-4">
        <section class="categories">
            <div class="row gap-3 mb-3">
                <div class="col-sm bg-dark p-0">
                    <div class="card text-bg-dark">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/categories/for-her-bg.png" class="card-img" alt="for-her-bg">
                        <div class="card-img-overlay p-5">
                            <h2>for her</h2>
                            <a class="btn btn-outline-light link-btn py-0" href="catalog.html" role="button">to shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm bg-dark p-0">
                    <div class="card text-bg-dark">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/categories/for-him-bg.png" class="card-img" alt="for-her-bg">
                        <div class="card-img-overlay p-5">
                            <h2>for him</h2>
                            <a class="btn btn-outline-light link-btn py-0" href="catalog.html" role="button">to shop</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col bg-dark p-0">
                    <div class="card text-bg-dark">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/categories/for-children-bg-3.png" class="card-img" alt="for-her-bg">
                        <div class="card-img-overlay p-5">
                            <h2>for children</h2>
                            <a class="btn btn-outline-light link-btn py-0" href="catalog.html" role="button">to shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="groups">
            <ul class="p-0 m-0">
                <li class="row">
                    <div class="col bg-dark p-0">
                        <div class="card text-bg-dark">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/groups/accessories-bg.png" class="card-img" alt="for-her-bg">
                            <div class="card-img-overlay p-sm-5">
                                <h2>accessories</h2>
                                <div class="button-wrapper">
                                    <a class="btn btn-outline-light link-btn py-0 mx-2" href="#" role="button">
                                        shop for him
                                    </a>
                                    <a class="btn btn-outline-light link-btn py-0" href="#" role="button">
                                        shop for her
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row">
                    <div class="col bg-dark p-0">
                        <div class="card text-bg-dark">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/groups/bags-bg.png" class="card-img" alt="for-her-bg">
                            <div class="card-img-overlay p-sm-5">
                                <h2>woman`s spring bags</h2>
                                <a class="btn btn-outline-light link-btn py-0" href="catalog.html" role="button">to shop</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row">
                    <div class="col bg-dark p-0">
                        <div class="card text-bg-dark">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/groups/colab-bg.png" class="card-img" alt="for-her-bg">
                            <div class="card-img-overlay p-sm-5">
                                <h2>our colaborations</h2>
                                <a class="btn btn-outline-light link-btn py-0" href="catalog.html" role="button">to shop</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row">
                    <div class="col bg-dark p-0">
                        <div class="card text-bg-dark">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/groups/indian-bg.png" class="card-img" alt="for-her-bg">
                            <div class="card-img-overlay p-sm-5">
                                <h2>colection “india”</h2>
                                <a class="btn btn-outline-light link-btn py-0" href="catalog.html" role="button">to shop</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section class="contact">
            
            <div class="row gap-5 mb-3">
                <div class="col-md p-2">
                    <h3>support</h3>
                    <p>Tempor bibendum mi tellus augue urna nisi cursus nunc.</p>
                    <a href="#">contact</a>
                </div>
                <div class="col-md p-2">
                    <form class="needs-validation" novalidate>
                        <h3>find nearest shop</h3>
                        <p>Tempor bibendum mi tellus augue urna nisi cursus nunc.</p>
                        <div class="input-group">
                            <input type="text" class="form-control contact__input" placeholder="your city"
                                aria-label="your city">
                            <button class="btn btn-outline-secondary contact__btn" type="submit">
                                <img class="svg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/ion_search-outline.svg" alt="serch">
                            </button>
                            <button class="btn btn-outline-secondary contact__btn contact__btn-gps" type="submit">
                                <img class="svg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/ic_outline-location-searching.svg"
                                    alt="map-serch">
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md p-2">
                    <form class="needs-validation" novalidate>
                        <h3>subscribe for news</h3>
                        <p>Tempor bibendum mi tellus augue urna nisi cursus nunc.</p>
                        <div class="input-group">
                            <input type="email" class="form-control contact__input" placeholder="e-mail"
                                aria-label="e-mail">
                            <button class="btn btn-outline-secondary contact__btn contact__btn-arrow" type="submit">
                                <img class="svg svg-arrow-serch" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons-svg/icon-arrow-search.svg" alt="serch">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </section>
    </div>
</main>

<?php get_footer(); ?>
