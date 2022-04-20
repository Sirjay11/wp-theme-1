<?php 

function wptheme1_post_meta() {
    /* translators: %s: Post Date  */
    printf(
        esc_html__('Posted on %s', 'wp-theme-1'),
        '<a href="' . esc_url(get_permalink()) . '"><time datetime="' .  esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date('l, F, j, Y')) . '</time></a>'

    );
    /* translators: %s: Post Author Name  */
    printf(
        esc_html__(' By %s', 'wp-theme-1'),
        '<a href="' .  esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))) . '">' . esc_html(get_the_author()) . '</a>'
    );
}

function wptheme1_readmore_link() {
    echo '<a href="' . esc_url(get_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
    /* translators: %s: Read More About title  */
    printf(
        wp_kses(
            __( 'Read More<span class="u-screen-reader-text"> About %s</span>', ' wp-theme-1'),
            [
                'span' => [
                    'class' => []
                ]
            ]
        ),
        get_the_title()
    );
    echo '</a>';
}

?>