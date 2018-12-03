<?php

get_header();

?><div class="mat-content"><?php

get_search_form();

mat_get_view( get_theme_mod( 'template_search', 'search' ), 'loop' );

?></div><?php

get_footer();
