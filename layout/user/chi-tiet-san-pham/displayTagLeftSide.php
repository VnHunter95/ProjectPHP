<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Tag.Class.php'); ?>
<div class="sellers">
          <div class="of-left-in">
            <h3 class="tag">Tags</h3>
          </div>
            <div class="tags">
              <ul>
                <?php
                  $tags = Tag::getTagList();
                  foreach($tags as $item)
                  {
                    echo '<li><a onclick="goToProductList(3,'.$item['tag_id'].')" style="cursor: pointer;">'.$item['tag_name'].'</a></li>'."\n";
                  }
                ?>
                <div class="clearfix"> </div>
              </ul>
            </div>
</div>
