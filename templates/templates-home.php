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
                        <h1>
                            <?php _e('Train With ME', 'twm'); ?>
                        </h1>
                        <div class="custom-divider"></div>
                        <p>El método que te permite ser tu propio jefe, manejar tu horario, trabajar desde casa y, lo mejor,</p>
                        <p><strong>¡no necesitas invertir dinero!</strong></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="emprendedores-section col-12">
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
                <div class="row emprendedores-end-content">
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
            </div>
        </section>
        <section class="emprendedores-contact-caller col-12">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="emprendedores-contact-caller-container col-10">
                        <h2>Comienza a ver resultados desde la primera semana</h2>
                    </div>
                    <button class="btn btn-md btn-caller"><?php _e('¡AGENDA UNA LLAMADA YA!', 'twm'); ?></button>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
