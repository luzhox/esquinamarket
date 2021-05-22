<?php

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyB2opgncJgWQkvibe4bVFb0AWAI2I7MSXw');
}

add_action('acf/init', 'my_acf_init');

?>