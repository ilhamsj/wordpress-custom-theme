<?php

/**
 * Description: A minimal WordPress theme that only displays "Hello World" centered.
 *
 * @category WordPress
 * @package  HelloWorldTheme
 * @author   Ilham <ilhamsaputrajati@gmail.com>
 * @license  GPL-2.0-or-later <https://www.gnu.org/licenses/gpl-2.0.html>
 * @link     https://example.com
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>
    <div class="container">Hello World</div>
</body>

</html>