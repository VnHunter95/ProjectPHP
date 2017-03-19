<div class="sellers">
          <div class="of-left-in">
            <h3>Tags</h3>
          </div>
            <div class="tags">
              <ul>
                <?php
                  $tags = Tag::getTagList();
                  foreach($tags as $item)
                  {
                    echo '<li><a href="'.strtok($_SERVER['REQUEST_URI'],"?").'?tagid='.$item['tag_id'].'&page=1">'.$item['tag_name'].'</a></li>'."\n";
                    // Code Demo Search echo '<li><a onClick="searchProduct(4,\''.$item['tag_name'].'\',1,9)">'.$item['tag_name'].'</a></li>'."\n";
                  }
                ?>
                <div class="clearfix"> </div>
              </ul>
            </div>
</div>
