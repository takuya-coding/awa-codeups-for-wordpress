<?php get_header(); ?>
<main>
    <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">about&nbsp;us</h1>
            <div class="main-view__img">
                <picture>
                    <source
                        srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/aboutus-mv-pc.webp"
                        media="(min-width:768px)" type="image/webp" />
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/aboutus-mv-sp.webp"
                        alt="青空とシーサー" width="375" height="460" decoding="async">
                </picture>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>

    <div class="about-us layout-about-us">
        <div class="about-us__inner inner">
            <div class="about-us__content about-us-content">
                <div class="about-us-content__img">
                    <div class="about-us-content__img-sub about-us-content__img-sub--about-us">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-us1.webp"
                            alt="青い空と屋根の上のシーサー" width="400" height="606" decoding="async">
                    </div>
                    <div class="about-us-content__img-main about-us-content__img-main--about-us">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-us2.webp"
                            alt="二匹のチョウチョウウオが海の中を泳いでいる" width="345" height="228" decoding="async">
                    </div>
                </div>
                <h3 class="about-us-content__title about-us-content__title--about-us">
                    <span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span>
                </h3>
                <p class="about-us-content__text about-us-content__text--about-us">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                </p>
                <!-- <div class="about-us-content__body about-us-content__body-about--us">
                    <div class="about-us-content__unit about-us-content__unit--about-us">
                    </div>
                  </div> -->
            </div>
        </div>
    </div>

    <section class="gallery layout-gallery">
        <div class="gallery__inner inner">
            <div class="gallery__title section-title">
                <p class="section-title__en">gallery</p>
                <h2 class="section-title__ja">フォト</h2>
            </div>
            <div class="gallery__list">
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-pc.webp"
                        alt="無数のキンギョハナダイがサンゴ礁の周りを泳いでいる" width="345" height="523" decoding="async" loading="lazy">
                </div>
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery2.webp"
                        alt="美しい海の浅瀬付近にボートが浮かんでいる" width="345" height="219" decoding="async" loading="lazy">
                </div>
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery3.webp"
                        alt="二匹のチョウチョウウオが海底付近を泳いでいる" width="345" height="219" decoding="async" loading="lazy">
                </div>
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery4.webp"
                        alt="一匹の黄色い魚が泳いでいる" width="345" height="219" decoding="async" loading="lazy">
                </div>
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery5.webp"
                        alt="無数の魚がきれいな海の中を泳いでいる" width="345" height="219" decoding="async" loading="lazy">
                </div>
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery6.webp"
                        alt="魚がサンゴ礁の周りを泳いでいる" width="345" height="524" decoding="async" loading="lazy">
                </div>
            </div>
            <?php if (CFS()->get('gallery_group')): ?>
            <div class="gallery__list">
                <?php
                $fields = CFS()->get('gallery_group');
                foreach( $fields as $field ):
                ?>
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo esc_url($field['gallery_img']); ?>" alt="" decoding="async" loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="gallery__modal js-modal">
            <div class="gallery__modal-img js-modal-img">
            </div>
        </div>
    </section>

    <section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
        <div class="common-contact__inner inner">
            <div class="common-contact__wrapper">
                <div class="common-contact__shop-info">
                    <div class="common-contact__logo">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.svg"
                            alt="CodeUps">
                    </div>
                    <div class="common-contact__shop-info-wrapper">
                        <div class="common-contact__shop-info-text">
                            <p class="common-contact__address">沖縄県那覇市1&#045;1</p>
                            <a href="tel:+81-120-000-0000"
                                class="common-contact__tel">tel&#058;0120&#045;000&#045;0000</a>
                            <p class="common-contact__business-hours">営業時間&#058;8&#058;30&#045;19&#058;00</p>
                            <p class="common-contact__regular-holiday">定休日&#058;毎週火曜日</p>
                        </div>
                        <div class="common-contact__shop-info-map">
                            <div class="common-contact__map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401127!2d127.69486729999998!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1692299234684!5m2!1sja!2sjp"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-contact__more">
                    <div class="common-contact__title section-title">
                        <p class="section-title__en section-title__en--size">contact</p>
                        <h2 class="section-title__ja section-title__ja--position">お問い合わせ</h2>
                    </div>
                    <p class="common-contact__text">ご予約・お問い合わせはコチラ</p>
                    <div class="common-contact__button">
                        <a href="#" class="button">contact&nbsp;us<span class="button__arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>