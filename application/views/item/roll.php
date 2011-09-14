<div id="item-roll">
    <div class="filter">
        排序規則↓
    </div>
    <div>
        <div class="pagination quotes">
            <?php echo $pager ?>
        </div>

        <table class="grid prepend-1 span-18">
            <tr>
                <?php foreach ($items as $key => $item): ?>
                    <td>
                        <a href="<?php echo site_url('item/view/' . $item['item_id']) ?>">
                            <img alt="<?php echo element('item_cover', $item, 'no_image.png') ?>" width="150" height="150" 
                                 src="file/get/<?php echo element('item_cover', $item, 'no_image.png') ?>/150/150/crop" />
                        </a>                        
                    </td>
                    <?php if ($key != 0 && ($key+1) % 4 == 0): ?>
                    </tr><tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>
        </table>
        <div class="pagination quotes">
            <?php echo $pager ?>
        </div>    
    </div>
</div>