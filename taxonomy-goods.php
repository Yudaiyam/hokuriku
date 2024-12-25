<?php get_header(); ?>
<h1><?php single_term_title(); ?>の製品</h1>
<p><?php echo term_description(); ?></p>

<h2>製品一覧</h2>
<ul>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile;
    else : ?>
        <li>この事業に関連する製品はまだ登録されていません。</li>
    <?php endif; ?>
</ul>
<?php get_footer(); ?>
