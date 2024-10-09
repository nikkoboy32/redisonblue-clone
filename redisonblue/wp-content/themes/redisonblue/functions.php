<?php
function get_includes($file) {
    $path = get_template_directory() . '/includes/' . $file . '.php'; 
    if (file_exists($path)) {
        include($path);
    } else {
      
        echo "Error: File $file not found.";
    }
}
add_filter('show_admin_bar', '__return_true');
?>
