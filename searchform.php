<div class="header__search">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <input class="header__search-input" type="text" value="" name="s" id="s" placeholder="<?php _e( 'Поиск по сайту', 'ckror' ); ?>" aria-label="<?php _e( 'Строка поиска', 'ckror' ); ?>"/>
        <button type="submit" id="searchsubmit" value="<?php _e( 'Найти', 'ckror' ); ?>" class="eliminate_btn" aria-label="<?php _e( 'Запустить поиск', 'ckror' )?>"><i class="icon-search">&#xe986;</i></button>
    </form>
    <div class="dropdown-panel" id="header_title_search" role="region" aria-live="polite"></div>
</div>

