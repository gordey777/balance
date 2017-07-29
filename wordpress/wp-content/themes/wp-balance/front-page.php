<?php /* Template Name: Home Page */ get_header(); ?>

    <section class="section-1" role="main" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">

            <form action="">
            <h3 class="top-title">Ремонт под ключ от команды мастеров «Баланс» + дизайн-проект <br>
            в подарок с двойной выгодой: 100% качество и до 60% экономия</h3>
            <h3 class="white-bg">Вернем 100 000 рублей неустойки, если сорвем сроки хотя бы на один день</h3>

              <div class="white-bg">
                <h3>Получить на почту варианты ранее разработанных проектов под ваш размер</h3>
                <div class="col-md-4 col-sm-6 input_wrapp ">
                  <input type="text" class="text" placeholder="Ваше имя">
                </div>
                <div class="col-md-4 col-sm-6 input_wrapp">
                  <input type="text" class="text" placeholder="Тип дома">
                </div>
                <div class="col-md-4 col-sm-6 input_wrapp">
                  <input type="text" class="text" placeholder="Тип квартиры">
                </div>
                <div class="col-md-4 col-sm-6 input_wrapp">
                  <input type="text" class="text" placeholder="E-mail">
                </div>
                <div class="col-md-4 col-sm-6 input_wrapp">
                  <input type="text" class="text" placeholder="Телефон">
                </div>
                <div class="col-md-4 col-sm-6 input_wrapp">
                  <button class="red-button">Получить вирианты проектов</button>
                </div>
                <h3>Посмотрите, что мы делали ранее для квартир вашего типа.</h3>
              </div>
            </form>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->




  <?php if( have_rows('advantages' ) ): ?>
    <?php while ( have_rows('advantages' ) ) : the_row(); ?>
      <section class="advantages two-bloks">
        <div class="container">
          <div class="row flex-row">
            <div class="col-md-6 video_wrapp">
              <?php echo get_sub_field('video')["iframe"]; ?>
            </div>
            <div class="col-md-6">

              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              <span class="red-subtitle"><?php the_sub_field('subtitle'); ?></span>
              <div class="clearfix"></div>

              <?php if( get_sub_field('sub_adventage' ) ): ?>
                <?php while ( has_sub_field('sub_adventage' ) ) : ?>
                  <?php $image = get_sub_field('icon'); ?>
                  <div class="col-md-3 col-sm-6 icon">
                    <div class="row">
                      <?php if ( !empty($image)) : ?>
                      <div class="col-sm-12 col-xs-4">
                          <img src="<?php echo $image['url'] ?>">
                        </div>
                      <?php endif; ?>
                      <div class="col-sm-12 col-xs-8">
                        <p><?php the_sub_field('content'); ?></p>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php endif; ?>

              <div class="clearfix"></div>
              <a href="<?php the_sub_field('link'); ?>" class="button red-button"><?php the_sub_field('link_title'); ?></a>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /section -->
    <?php  endwhile; ?>
  <?php endif; ?>

    <section class="before-after">
      <div class="red-line">
        <h2>Большое лучше видится в процессе</h2>
      </div>
      <div class="photo_before" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/home-before.jpg);">
        <span class="before">До</span>
      </div>
      <div class="photo_after" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/home-after.jpg);">
        <span class="after">После</span>
        <a href="#" class="button red-button">Посетить объект</a>
      </div>
      <div class="clearfix"></div>
    </section><!-- /section -->

    <section class="slider-section">
      <div class="container">
        <div class="row">
          <h2 class="section-title">Ремонт под ключ</h2>
          <span class="red-subtitle">значит, Вам не о чем беспокоиться </span>
          <p>Мы предлагаем под ключ полный комплекс услуг, освобождая своих клиентов от массы хлопот и предлагая им высокоуровневый сервис.</p>
          <div class="two-slides owl-carousel owl-theme slides-content">
            <div class="ithem">
              <img src="<?php echo get_template_directory_uri(); ?>/img/content-slide1.jpg" alt="">
              <div class="slide-cont_wrapp">
                <div class="slide-cont">
                  <h3 class="title">Дизайн-проект</h3>
                  <p>Для каждого вверенного нам объекта наши специалисты разрабатывают уникальный дизайн-проект, оптимально отвечающий всем запросам заказчика. На протяжении всех этапов реализации проекта ведется строгий авторский надзор.</p>
                  <a href="#" class="slide-link">Связаться с нами +</a>
                </div>
              </div>
            </div>
            <div class="ithem">
              <img src="<?php echo get_template_directory_uri(); ?>/img/content-slide2.jpg" alt="">
              <div class="slide-cont_wrapp">
                <div class="slide-cont_wrapp">
                  <div class="slide-cont">
                    <h3 class="title">Дизайн-проект</h3>
                    <p>Для каждого вверенного нам объекта наши специалисты разрабатывают уникальный дизайн-проект, оптимально отвечающий всем запросам заказчика. На протяжении всех этапов реализации проекта ведется строгий авторский надзор.</p>
                    <a href="#" class="slide-link">Связаться с нами +</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="ithem">
              <img src="<?php echo get_template_directory_uri(); ?>/img/content-slide1.jpg" alt="">
              <div class="slide-cont_wrapp">
                <div class="slide-cont_wrapp">
                  <div class="slide-cont">
                    <h3 class="title">Дизайн-проект</h3>
                    <p>Для каждого вверенного нам объекта наши специалисты разрабатывают уникальный дизайн-проект, оптимально отвечающий всем запросам заказчика. На протяжении всех этапов реализации проекта ведется строгий авторский надзор.</p>
                    <a href="#" class="slide-link">Связаться с нами +</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg1.jpg');">
      <div class="container">
        <div class="row">
          <h2>Хотите знать больше о наших услугах и своих возможностях?</h2>
          <p>Воспользуйтесь бесплатной консультацией по телефону или в режиме онлайн</p>
          <form action="">
            <div class="col-md-4 input_wrapp ">
              <input type="text" class="text" placeholder="Ваше имя">
            </div>
            <div class="col-md-4 input_wrapp">
              <input type="text" class="text" placeholder="Телефон">
            </div>
            <div class="col-md-4 input_wrapp">
              <button class="red-button">Оставить заявку</button>
            </div>
          </form>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="reviews two-bloks">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="section-title">Нам доверяют</h2>
            <span class="red-subtitle">звезды шоу-бизнеса</span>
            <div class="clearfix"></div>
            <div class="col-sm-2 col-xs-4">
              <div class="row">
                <div class="photo-wrapp" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/review-photo.jpg);"></div>
              </div>
            </div>
            <div class="col-sm-10 col-xs-8 content">
              <p>Осталась очень довольна работой ремонт-бригады Владислава. Очень приятные люди, мастера своего дела. Вся работа по ремонту моей квартиры сделана качественно и на совесть: отличная работа по установке гипсокартонных потолков и арок, кладке паркетной доски и плитки, поклейки обоев и всего остального Осталась очень довольна работой ремонт-бригады Владислава. Очень приятные люди, мастера своего дела. Вся работа по ремонту моей квартиры сделана качественно и на совесть: отличная работа по установке гипсокартонных потолков и арок, кладке паркетной доски и плитки, поклейки обоев и всего остального</p>
              <p class="name">Алла Довлатова</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <img src="<?php echo get_template_directory_uri(); ?>/img/video-holder.jpg" alt="">
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="tabs_slider_section">
      <div class="red-line">
        <div class="container">
          <div class="row">
            <h2>Фотоотчет перед клиентом на каждом этапе работы</h2>
            <p>Нам нечего скрывать — мы работаем ответственно и честно, и поэтому в любой момент готовы предоставить клиенту подробный отчет о проделанном. А каждую неделю по собственной инициативе подготавливаем специальный фотоотчет о ходе и результатах работ.</p>
            </p>Или вы можете установить приложение и отслеживать ход работ Online с вашего телефона.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="tabs">
            <div class="tabs__caption">
              <div class="tab__label active col-xs-4"><div class="label">1-комнатная квартира</div></div>
              <div class="tab__label col-xs-4"><div class="label">Коттедж</div></div>
              <div class="tab__label col-xs-4"><div class="label">Офисное помещение</div></div>
            </div>

            <div class="tabs__content active">
              <div class="col-md-8 tab-slider">

                  <div class="two-slides owl-carousel owl-theme slides-content">
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 1</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 2</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 3</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-4 video">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/video-holder-tab.jpg" alt="">
              </div>
            </div>
            <div class="tabs__content">
              <div class="col-md-8 tab-slider">
                  <div class="two-slides owl-carousel owl-theme slides-content">
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 1</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 2</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 3</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-4 video">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/video-holder-tab.jpg" alt="">
              </div>
            </div>
            <div class="tabs__content">
              <div class="col-md-8 tab-slider">
                  <div class="two-slides owl-carousel owl-theme slides-content">
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 1</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 2</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                    <div class="ithem">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tab-slide.jpg" alt="">
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <h3 class="title">День 3</h3>
                          <p>Краткое описание Краткое описание Краткое описание Краткое описание</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-4 video">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/video-holder-tab.jpg" alt="">
              </div>
            </div>
          </div><!-- /.tabs-->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg2.jpg');">
      <div class="container">
        <div class="row">
          <h2>Изучим смету конкурентов и предостережем от ошибок</h2>
          <p>Если у вас уже имеется смета ремонта от другой компании, мы можем проверить ее на наличие подводных камней, слабых мест и попыток обмана. Но даже если в смете все чисто и правильно, предложим вам более выгодные условия и лучшие цены!</p>
          <form action="">
            <div class="col-md-4 input_wrapp ">
              <input type="text" class="text" placeholder="Телефон">
            </div>
            <div class="col-md-4 input_wrapp">
            <label for="file" class="file_label">
              <span class="file_input">Загрузить<i class="fa fa-angle-down"></i></span>
              <input id="file" type="file" class="file"></label>
            </div>
            <div class="col-md-4 input_wrapp">
              <button class="red-button">Оставить заявку</button>
            </div>
          </form>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="purity  two-bloks">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <img src="<?php echo get_template_directory_uri(); ?>/img/piurity.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="section-title">Чистота</h2>
            <span class="red-subtitle">После себя оставляем идеальную чистоту</span>
            <p>В отличие от подавляющего большинства конкурентов, мы завершаем ремонт тщательной генеральной уборкой объекта, а также вывозом скопившегося строительного мусора. После окончания нашей работы клиент может сразу же использовать помещение по назначению, ведь в нем будет идеальная чистота.</p>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->


    <section class="brand-slider-section">
      <div class="red-line">
        <div class="container">
          <div class="row">
            <h2>Готовы к серьезной проверке!</h2>
            <p>Гарантируя отличное качество выполненных работ и поставляемых материалов, мы полностью готовы к проверке независимыми экспертами. Более того, мы оплатим эту проверку из собственных средств!</p>
            <p>Выбирайте из этого списка или предложите свою экспертную компанию, которая будет осуществлять технический надзор.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1 brands_wrapp">
            <div class="four-slides owl-carousel owl-theme">
              <div class="ithem">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
              </div>
              <div class="ithem">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
              </div>
              <div class="ithem">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
              </div>
              <div class="ithem">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
              </div>
              <div class="ithem">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
              </div>
              <div class="ithem">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- / --><!-- section -->

    <section class="project-archiv" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/project-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 content">
            <h2><span class="red">458</span> завершенных проектов на любой вкус</h2>

            <a href="#" class="red-button button">Скачать каталог работ с подробными сметами</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="news-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title">Новости</h2>
          </div>
          <div class="col-md-4 looper">
            <div class="feature-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/news-loop.jpg" alt="">
            </div>
            <span class="date">19.02.2015</span>
            <h2 class="inner-title">Дизайн-проект</h2>
            <p>Для каждого вверенного нам объекта наши специалисты разрабатывают уникальный</p>
            <a href="#" class="post-link">Подробнее</a>
          </div>
          <div class="col-md-4 looper">
            <div class="feature-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/news-loop.jpg" alt="">
            </div>
            <span class="date">19.02.2015</span>
            <h2 class="inner-title">Дизайн-проект</h2>
            <p>Для каждого вверенного нам объекта наши специалисты разрабатывают уникальный</p>
            <a href="#" class="post-link">Подробнее</a>
          </div>
          <div class="col-md-4 looper">
            <div class="feature-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/news-loop.jpg" alt="">
            </div>
            <span class="date">19.02.2015</span>
            <h2 class="inner-title">Дизайн-проект</h2>
            <p>Для каждого вверенного нам объекта наши специалисты разрабатывают уникальный</p>
            <a href="#" class="post-link">Подробнее</a>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-2 col-md-offset-5">
            <a href="#" class="red-button button">Все новости</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg3.jpg');">
      <div class="container">
        <div class="row">
          <h2>Нужен качественный ремонт класса «Люкс» под ключ?</h2>
          <p>Оставьте заявку прямо сейчас, и мы бесплатно предложим вам 3 варианта дизайн-концепции на выбор!</p>
          <form action="">
            <div class="col-md-4 input_wrapp ">
              <input type="text" class="text" placeholder="Ваше имя">
            </div>
            <div class="col-md-4 input_wrapp">
              <input type="text" class="text" placeholder="Телефон">
            </div>
            <div class="col-md-4 input_wrapp">
              <button class="red-button">Оставить заявку</button>
            </div>
          </form>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

<?php get_footer(); ?>

