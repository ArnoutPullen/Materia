<?php
if ( is_user_logged_in() ) {
    ?><div class="mat-user">
        <?php $current_user = wp_get_current_user(); ?>
        <span class="mat-user-image"><?php echo get_avatar( $current_user->ID ) ?></span>
        <a href="<?php echo get_edit_user_link(); ?>">
            <span class="mat-user-name"><?php echo $current_user->display_name ?></span>
        </a>
        <span class="spacer"></span>
        <div class="mat-user-logout">
            <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">
                <button class="mat-button mat-button-flat">Logout</button>
            </a>
        </div>
    </div>
<?php } else { ?>
    <div class="mat-user">
        <div class="mat-user-login">
            <a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">
                <button class="mat-button mat-button-flat">Login</button>
            </a>
        </div>
    </div>
<?php } ?>
