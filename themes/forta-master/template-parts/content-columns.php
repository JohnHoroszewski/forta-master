<?php
/**
 * Template part for displaying page content in columns-template.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>

<?php if ( get_field( 'header_image' ) ) :
    $headerImage = get_field( 'header_image' ); ?>

    <section class="header-image" style="background-image: url( '<?php echo $headerImage[ 'url' ] ?>' );"></section>

<?php else : ?>
    
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="constrain">

        <h1><?php the_title(); ?></h1>

        <?php if ( the_content() ) : ?>
            <section class="page-top">
                <?php the_content(); ?>
            </section>
        <?php endif; ?>

    </div>
    <?php if ( have_rows( 'columns_section' ) ) : ?>

        <?php while ( have_rows( 'columns_section' ) ) : the_row(); ?>

            <section class="<?php the_sub_field( 'columns_section_title' ); ?> <?php the_sub_field( 'background_color' ); ?>" >
        
                <div class="constrain">

                    <?php if ( get_sub_field( 'columns_section_title' ) ) : ?>
                        <h2><?php the_sub_field( 'columns_section_title' ); ?></h2>
                    <?php endif; ?>

                    <div class="columns-container <?php the_sub_field( 'columns_count' ); ?>">

                        <?php if ( have_rows( 'columns_content' ) ) : ?>

                            <?php while  ( have_rows( 'columns_content' ) ) : the_row(); ?>

                                <div class="columns-content-block">
                                    <?php the_sub_field( 'content' ); ?>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>

                </div>
        
            </section>
    
        <?php endwhile; ?>

    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
