<?php
?><form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="assistive-text mat-input"><?php _e( 'Zoeken', MAT_SLUG ); ?></label>
    <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Zoeken', MAT_SLUG ); ?>" />
    <input type="submit" class="submit mat-button mat-button-raised" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Zoeken', MAT_SLUG ); ?>" />
</form>