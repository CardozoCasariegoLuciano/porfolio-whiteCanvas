<header class="header">
    <a class="header__logo" href="/">Luciano <span class="header__logo--ending">here <span>.</span></span><a>
    <?php
    wp_nav_menu(
        [
            "theme-location" => "main-menu",
            "container" => "",
            "menu_class" => "header__nav",
        ]
    )
    ?>
</header>
