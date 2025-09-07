<?php
    $theme_meta = [
        'Theme Name'        => 'PipraPay Vercel Updated',
        'Theme URI'         => 'https://piprapay.com/',
        'Description'       => 'Responsive, lightweight, fast, and modern UI for PipraPay.',
        'Version'           => '1.1.0',
        'Author'            => 'Asif Arman Saikot',
        'Author URI'        => 'https://bdetopup.com/',
        'License'           => 'GPL-2.0+',
        'License URI'       => 'http://www.gnu.org/licenses/gpl-2.0.txt',
        'Text Domain'       => 'piprapay-vercel',
        'Domain Path'       => '/languages',
        'Requires at least' => '1.0.0',
        'Requires PHP'      => '7.4',
    ];
        
    $funcFile = __DIR__ . '/functions.php';
    if (file_exists($funcFile)) {
        require_once $funcFile;
    }
?>
