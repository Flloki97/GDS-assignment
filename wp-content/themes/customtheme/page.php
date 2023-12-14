<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    // Display custom fields
                    $team_member_name = get_field('team_member_name');
                    $team_member_bio = get_field('team_member_bio');
                    $team_member_photo = get_field('team_member_photo');
                    $team_member_position = get_field('team_member_position');

                    // Output HTML using the custom field data
                    ?>
                    <h2><?php echo esc_html($team_member_name); ?></h2>
                    <p><?php echo esc_html($team_member_position); ?></p>
                    <div>
                        <?php if ($team_member_photo) : ?>
                            <img src="<?php echo esc_url($team_member_photo['url']); ?>" alt="<?php echo esc_attr($team_member_name); ?>">
                        <?php endif; ?>
                    </div>
                    <div>
                    <p><?php echo esc_html($team_member_bio); ?></p>
                        <?php if ($social_media_links) : ?>
                            <ul>
                                <?php foreach ($social_media_links as $link) : ?>
                                    <li><a href="<?php echo esc_url($link['social_media_url']); ?>"><?php echo esc_html($link['social_media_platform']); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </main>
</div>

<?php get_footer(); ?>

