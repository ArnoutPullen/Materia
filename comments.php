<?php

mat_get_view( 'header' );

mat_get_view( get_theme_mod( 'template_comments', 'card' ), 'loop' );

mat_get_view( 'footer' );