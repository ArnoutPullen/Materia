<?php

mat_get_view( 'header' );

mat_get_view( get_theme_mod( 'template_default', 'content' ), 'loop' );

mat_get_view( 'footer' );
