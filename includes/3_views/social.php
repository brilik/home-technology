<ul class="social-list">
    <?php if ($themeAR->get_option($args['position'] . '_social-inst')): ?>
        <li class="social-list__item">
            <a href="<?php $themeAR->the_option($args['position'] . '_social-inst'); ?>" class="social-list__link">
                <i class="icon-inst"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($themeAR->get_option($args['position'] . '_social-vk')): ?>
        <li class="social-list__item">
            <a href="<?php $themeAR->the_option($args['position'] . '_social-vk'); ?>" class="social-list__link">
                <i class="icon-vk"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($themeAR->get_option($args['position'] . '_social-fb')): ?>
        <li class="social-list__item">
            <a href="<?php $themeAR->the_option($args['position'] . '_social-fb'); ?>" class="social-list__link">
                <i class="icon-fb"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($themeAR->get_option($args['position'] . '_social-twitter')): ?>
        <li class="social-list__item">
            <a href="<?php $themeAR->the_option($args['position'] . '_social-twitter'); ?>" class="social-list__link icon-big twitter">
                <i class="icon-twitter"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($themeAR->get_option($args['position'] . '_social-phone')): ?>
        <li class="social-list__item">
            <a href="<?php $themeAR->the_option($args['position'] . '_social-phone'); ?>" class="social-list__link phone-1">
                <i class="icon-phone-1"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($themeAR->get_option($args['position'] . '_social-ok')): ?>
        <li class="social-list__item">
            <a href="<?php $themeAR->the_option($args['position'] . '_social-ok'); ?>" class="social-list__link ok">
                <i class="icon-ok"></i>
            </a>
        </li>
    <?php endif; ?>
</ul>