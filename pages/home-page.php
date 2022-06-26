<?php
/**
    Template Name: Home Page 
 */
get_header();

get_template_part('template-parts/modules/module', 'hero');
get_template_part('template-parts/modules/module', 'skills');
get_template_part('template-parts/modules/module', 'featuresWorks');

//var_dump(get_the_content());

get_footer();

