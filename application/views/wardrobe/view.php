<div id="wardrobe-view">
    <h1>我的衣櫃</h1>

    <ul class="links">
        <?php if ($view_tag_title == ''): ?>
            <li class="active"><a href="<?php echo site_url('wardrobe/view/') ?>">所有</a></li>
        <?php else: ?>
            <li><a href="<?php echo site_url('wardrobe/view/') ?>">所有</a></li>
        <?php endif; ?>

        <?php foreach ($tags as $key => $tag): ?>
            <?php if ($tag['tag_title'] == $view_tag_title): ?>
                <li class="active">
                    <a href="<?php echo site_url('wardrobe/view/' . $tag['tag_title']) ?>"><?php echo $tag['tag_title'] ?></a>
                </li>
            <?php else: ?>
                <li><a href="<?php echo site_url('wardrobe/view/' . $tag['tag_title']) ?>"><?php echo $tag['tag_title'] ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <?php if (count($items)): ?>
        <ul class="gallery clearfix">        
            <?php foreach ($items as $key => $item): ?>
                <li>
                    <a href="<?php echo site_url('item/view/' . $item['item_id']) ?>">
                        <span>&nbsp;</span>
                        <em><?php echo $item['item_title'] ?></em>
                        <img alt="<?php echo element('item_cover', $item, 'no_image.png') ?>" width="170" height="120" 
                             src="<?php echo site_url('file/get/' . element('item_cover', $item, 'no_image.png') . '/170/120') ?>" />
                    </a>
                    <div>
                        <?php foreach ($item['item_tags'] as $key => $tag): ?>
                            <?php if ('我所上傳的' != $tag['tag_title']): ?>
                                <a href="<?php echo site_url('wardrobe/remove_item/' . $item['item_id'] . '/' . $tag['tag_title']) ?>">
                                    <?php echo $tag['tag_title'] ?>[X]
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </li>         
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h1>此分類標籤尚無任何收錄的單品</h1>
    <?php endif; ?>
    <div class="clear"></div>
</div>