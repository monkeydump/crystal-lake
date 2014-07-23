<aside>
    <nav id="sidebar-nav-holder" class="vertical-nav" gumby-fixed="top" gumby-pin="[data-target='icons']">
        <ul id="sidebar-nav">

            <?php foreach ($menu as $menuName => $foodItems) { ?>
            <li>
                <a href="#<?php echo $menuName ?>" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='<?php echo $menuName ?>']"><?php echo $menuName ?></a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</aside>
