<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('generate_token')) {
    function generate_token()
    {
        return bin2hex(random_bytes(64)); // Generate token unik
    }
}

if (!function_exists('validate_token')) {
    function validate_token()
    {
        $ci = &get_instance();
        $form_token = $ci->session->userdata('form_token');
        $post_token = $ci->input->post('token');

        if (!$post_token || $post_token !== $form_token) {
            show_error('Akses ditolak! Token tidak valid.', 403);
        }
    }
}
