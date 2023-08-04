<?php
/**
 * Add Metaboxes for the form post type edit/add screens:
 * - Form Builder
 * - Submission Rules
 */
function add_form_custom_metaboxes() {
    add_meta_box(
        'form_builder',
        'Form Builder',
        'form_builder_html',
        'form'
    );
    add_meta_box(
        'form_submission_rules',
        'Form Submission Rules',
        'form_submission_rules_html',
        'form'
    );
}

add_action('add_meta_boxes', 'add_form_custom_metaboxes');


/**
 * Form Builder Metabox HTML
*/
function form_builder_html($post) {
    ?>
    <div id="custom-forms-react-root"></div>
    <script src="<?php echo plugins_url('../assets/js/dist/bundle.js', __FILE__) ?>"></script>
    <?php
}
?>