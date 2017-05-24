<?php
class MatSettingsPage
{
    private $options;

    public function __construct() {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    public function add_plugin_page() {
        add_options_page(
            'Materia Settings', 
            'Materia', 
            'manage_options', 
            'mat-settings', 
            array( $this, 'create_admin_page' )
        );
    }

    public function create_admin_page() {
        $this->options = get_option( 'my_option_name' );

        $tabs = array(
            'info' => 'Info',
            'social' => 'Social',
            'google' => 'Google',
            'menu' => 'Menu',
            'form' => 'Form'
        );

        echo '<h2 class="nav-tab-wrapper">';
        foreach( $tabs as $tab => $name ){
            $class = ( $tab == $_GET['tab'] ) ? ' nav-tab-active' : '';
            echo "<a class='nav-tab$class' href='?page=mat-settings&tab=$tab'>$name</a>";
        }
        echo '</h2>';

        switch ($_GET['tab']) {
            case 'info':
            {
                echo '
                Bedrijfsnaam
                Btw nummer
                Kvk nummer
                Straat + huisnummer
                Postcode
                Woonplaats
                Land
                Telefoonnummer
                Fax
                Email
                Openingstijden
                Copyright tekst*
                ';
                break;
            }
            case 'social':
            {
                echo '
                Sociale media links:
                Facebook
                Twitter
                Linkedin
                Google plus
                Youtube
                ';
                break;
            }
            case 'google':
            {
                echo '
                Google maps api key
                Google maps iframe
                Google analytics code
                ';
                break;
            }
            case 'menu':
            {
                global $submenu, $menu, $pagenow;

                foreach( $menu as $index => $value ) {
                    echo 'Order: ' . $index . '<br>';
                    echo 'Name: ' . $value[0] . '<br>';
                    echo 'Slug: ' . $value[1] . '<br>';
                    echo 'Classes: ' . $value[4] . '<br>';
                    echo 'Id: ' . $value[5] . '<br>';
                    echo 'Icon: ' . $value[6] . '<br>';
                    echo '<hr>';
                }

                echo '<pre>';
                print_r($menu);
                echo '</pre>';
                break;
            }
            case 'form':
            {
                ?>
                <div class="wrap">
                    <h1>My Settings</h1>
                    <form method="post" action="options.php">
                        <?php
                            settings_fields('my_option_group');
                            do_settings_sections( 'my-setting-admin' );
                            submit_button();
                        ?>
                    </form>
                </div>
                <?php
                break;
            }
            default:
                echo 'break';
                break;
        }
    }

    private function page_tabs( $current = 'info' ) {
        $tabs = array( 'info' => 'Info', 'social' => 'Social', 'google' => 'Google' );
        $html = '<h2 class="nav-tab-wrapper">';
        foreach( $tabs as $tab => $name ){
            $class = ( $tab == $current ) ? ' nav-tab-active' : '';
            $html .= "<a class='nav-tab$class' href='?page=mat-settings&tab=$tab'>$name</a>";
        }
        $html .= '</h2>';
        return $html;
    }

    public function page_init() {        
        register_setting(
            'my_option_group',
            'my_option_name',
            array( $this, 'sanitize' )
        );

        add_settings_section(
            'setting_section_id',
            'My Custom Settings',
            array( $this, 'print_section_info' ),
            'my-setting-admin'
        );  

        add_settings_field(
            'id_number',
            'ID Number',
            array( $this, 'id_number_callback' ),
            'my-setting-admin',
            'setting_section_id'         
        );      

        add_settings_field(
            'title', 
            'Title', 
            array( $this, 'title_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );      
    }

    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['id_number'] ) )
            $new_input['id_number'] = absint( $input['id_number'] );

        if( isset( $input['title'] ) )
            $new_input['title'] = sanitize_text_field( $input['title'] );

        return $new_input;
    }

    public function print_section_info()
    {
        print 'Enter your settings below:';
    }

    public function id_number_callback()
    {
        printf(
            '<input type="text" id="id_number" name="my_option_name[id_number]" value="%s" />',
            isset( $this->options['id_number'] ) ? esc_attr( $this->options['id_number']) : ''
        );
    }

    public function title_callback()
    {
        printf(
            '<input type="text" id="title" name="my_option_name[title]" value="%s" />',
            isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
        );
    }
}

if(is_admin()){
    $mat_settings_page = new MatSettingsPage();
} 
?>
