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
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">Hello World</div>
</body>

</html>