<?php
/* Template Name: Home */

get_header();

// Get ACF data for each section
$section_1_title = get_field('section_1_title');
$section_1_content = get_field('section_1_content');

$section_2_title = get_field('section_2_title');
$section_2_content = get_field('section_2_content');

// Repeat for other sections

// Display the content
?>
<div class="flex-container">
    <div class="flex-item">
        <h2><?php echo esc_html($section_1_title); ?></h2>
        <p><?php echo esc_html($section_1_content); ?></p>
    </div>
    <div class="flex-item">
        <h2><?php echo esc_html($section_2_title); ?></h2>
        <p><?php echo esc_html($section_2_content); ?></p>
    </div>
    <!-- Repeat for other sections -->
</div>

<?php
get_footer();
