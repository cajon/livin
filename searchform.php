<?php if( function_exists('create_searchform') ){ ?>	
    <div id="feas-0">
        <div id="feas-form-0">
            <?php create_searchform(); ?>
        </div>
        <div id="feas-result-0">
                <?php if( is_search() ){ ?>
                <?php if( $add_where != null || $w_keyword != null ): ?>
                「<?php search_result(); ?>」の条件による検索結果 <?php echo $wp_query->found_posts; ?> 件
                <?php else: ?>
            <h3>検索条件が指定されていません。</h3>
                <?php endif; ?>
                <?php } else { ?>
            現在の登録件数：<?php 
											$news_post_count = wp_count_posts('bukken')->publish; 
										        echo $news_post_count;
										?>件
            <?php } ?>
        </div>
    </div>
<?php } ?>