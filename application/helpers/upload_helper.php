<?php

// application/helpers/upload_helper.php

if (!function_exists('upload_file')) {
    function upload_file($input_name, $upload_path, $allowed_types, $max_size, $new_file_name)
    {
        $CI = &get_instance();
        $CI->load->library('upload');

        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = $allowed_types;
        $config['max_size'] = $max_size;
        $file_ext = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
        $config['file_name'] = $new_file_name . '.' . $file_ext;

        $CI->upload->initialize($config);

        if (!$CI->upload->do_upload($input_name)) {
            return $CI->upload->display_errors();
        } else {
            return $CI->upload->data();
        }
    }
} else {
    return 'tidak ada foto';
}
