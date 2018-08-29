<?php
/**
 * Template Name: Plantilla para Landing
 *
 * @package Tran With Me
 * @subpackage twm-mk01-theme
 * @since 1.0
 */
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php /* MAIN SLIDER */?>
        <section class="the-slider col-12">
            <?php the_content(); ?>
        </section>
        <?php /* ABOUT */ ?>
        <section class="the-about col-12">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="about-content col-8">
                        <div class="section-title">
                            <h1>
                                <?php _e('Train With ME', 'twm'); ?>
                            </h1>
                            <div class="custom-divider"></div>
                        </div>
                        <p>El método que te permite ser tu propio jefe, manejar tu horario, trabajar desde casa y, lo mejor,</p>
                        <p><strong>¡NO NECESITAS INVERTIR DINERO!</strong></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="necesidades" class="emprendedores-section col-12">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="emprendedores-title col-10">
                        <h2>¿Eres tú uno de los 10 emprendedores de Train With Me?</h2>
                        <div class="custom-divider"></div>
                    </div>
                    <div class="w-100"></div>
                    <div class="emprendedores-item col-4 animated fadeIn">
                        <div class="media media-custom">
                            <img class="align-self-start mr-3" src="<?php echo get_template_directory_uri(); ?>/images/emp-icon01.png" alt="Step 01" />
                            <div class="media-body">
                                <h5 class="mt-0">1.</h5>
                                Es Muy fácil comenzar.
                            </div>
                        </div>
                    </div>
                    <div class="emprendedores-item col-4 animated fadeIn">
                        <div class="media media-custom">
                            <img class="align-self-start mr-3" src="<?php echo get_template_directory_uri(); ?>/images/emp-icon02.png" alt="Step 02" />
                            <div class="media-body">
                                <h5 class="mt-0">2.</h5>
                                No tienes que comprar inventario, ya que no eres revendedor.
                            </div>
                        </div>
                    </div>
                    <div class="emprendedores-item col-4 animated fadeIn">
                        <div class="media media-custom">
                            <img class="align-self-start mr-3" src="<?php echo get_template_directory_uri(); ?>/images/emp-icon03.png" alt="Step 03" />
                            <div class="media-body">
                                <h5 class="mt-0">3.</h5>
                                Necesitas tiempo pero lo controlas tu, ya que serás tu propio jefe.
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                </div>

            </div>
        </section>
        <section class="emprendedores-contact-caller col-12">
            <div class="container">
                <div class="row emprendedores-start-content">
                    <div class="emprendedores-item col-4 animated fadeIn">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/emp_img_01.jpg" alt="Plan de Entrenamiento" class="img-fluid" />
                        <div class="emprendedores-item-title">
                            <h3>Plan de Entrenamiento y asesoria contínua</h3>
                        </div>
                    </div>
                    <div class="emprendedores-item col-4 animated fadeIn">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/emp_img_02.jpg" alt="Plan de Entrenamiento" class="img-fluid" />
                        <div class="emprendedores-item-title">
                            <h3>Material de lectura y videos con ejemplos</h3>
                        </div>
                    </div>
                    <div class="emprendedores-item col-4 animated fadeIn">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/emp_img_03.jpg" alt="Plan de Entrenamiento" class="img-fluid" />
                        <div class="emprendedores-item-title">
                            <h3>Método para lograr tu libertad financiera</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="emprendedores-contact-caller-container col-10">
                        <h2>Comienza a ver resultados desde la primera semana</h2>
                    </div>
                    <button class="btn btn-md btn-orange btn-caller"><?php _e('¡AGENDA UNA LLAMADA YA!', 'twm'); ?></button>
                </div>
            </div>
        </section>
        <section class="big-divider col-12">
            <div class="container">
                <div class="row">
                    <div class="big-divider-content col-12">
                        <div class="divider-text col-6">
                            <div class="divider-text-quote divider-text-quote-1"><span>“</span></div>
                            <p>Es la flexibilidad de Uber, con un ingreso de Post Grado, aprovechando tus cualidades, con un mentor que te ayuda y guía en todos los pasos.</p>
                            <div class="divider-text-quote divider-text-quote-2"><span>”</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="casos-exito" class="the-casos col-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="casos-slider-container col-12">
                        <div class="slider-container owl-carousel owl-theme">
                            <?php $args = array('post_type' => 'casos', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date'); ?>
                            <?php query_posts($args); ?>
                            <?php if (have_posts()) : $i = 1; ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <div class="slider-item slider-item-<?php echo $i; ?> item">
                                <div class="slider-item-wrapper">
                                    <?php the_post_thumbnail('casos_img', array('class' => 'img-fluid')); ?>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="slider-item-text">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <button class="btn-md btn-orange">VER HISTORIA</button>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="the-proximo col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>
                                <?php _e('Tú puedes ser el próximo', 'twm'); ?>
                            </h2>
                            <div class="custom-divider"></div>
                        </div>
                    </div>
                    <div class="proximo-img col-6">
                        <img src="" alt="">
                    </div>
                    <div class="proximo-text col-4 offset-md-1">
                        <h2>$100k anuales</h2>
                        <p>Nuestros asociados han logrado ganar $100k anuales. No necesitas comprar nada, ni te pediremos tu tarjeta de crédito. No es una fórmula mágica.</p>
                        <p><strong>TE MOSTRAREMOS PASO A PASO COMO LOGRARLO</strong></p>
                        <ul>
                            <li>¿Quieres ganar más dinero?</li>
                            <li>¿Estás dispuesto a aprender?</li>
                            <li>¿Te gusta hablar con la gente?</li>
                            <li>¿Tienes metas en tu vida?</li>
                            <li>¿Quieres libertad financiera?</li>
                        </ul>
                        <buttton class="btn btn-md btn-orange">¡AGENDA UNA LLAMADA YA!</buttton>
                    </div>
                </div>
            </div>
        </section>
        <section class="the-about col-12">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="about-content col-8">
                        <div class="section-title">
                            <h2>
                                <?php _e('La plataforma Train With ME', 'twm'); ?>
                            </h2>
                            <div class="custom-divider"></div>
                        </div>
                        <p>Te enseñaremos una metodología para que aprendas a monetizar dobre las compras regulares que hacen los usuarios en internet.</p>
                        <p><strong>Una manera diferente y eficiente de ganar dinero</strong></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
