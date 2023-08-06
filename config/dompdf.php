<?php

return [
    'enable_font_subsetting' => true,
    'pdf_backend' => 'auto',
    'enable_remote' => true,
    'font_height_ratio' => 0.85,
    'font_subsetting' => false,
    'enable_html5_parser' => true,
    'dpi' => 96,
    'enable_css_float' => false,
    'enable_javascript' => true,
    'enable_php' => false,
    'font_cache' => storage_path('fonts/'),
    'chroot' => base_path(), // Chemin de la racine de votre application Laravel
    'temp_dir' => storage_path('temp/'),
    'font_dir' => storage_path('fonts/'),
    'font' => 'DejaVuSans',
];
