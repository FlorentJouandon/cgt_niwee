<header id="header" class="container-fluid text-center text-white">
    <nav class="container-fluid row bg-white">
        <?php
            $menu = MENU;
            foreach($menu as $i=>$tab):
                $i = $_COOKIE['num'];
/////// left element \\\\\\\
                if(isset($menu[$i-1])):
        ?>
                    <div id="left-tab" class="col-4 red pt-1">
                      <a href=<?php echo($menu[$i-1]['url']);?>>
                            <div class="left-tab p-1">
                                <h2 class="h2 text-white"><?php echo($menu[$i-1]['name']) ;?></h2> 
                            </div>
                        </a> 
                    </div>
        <?php 
                endif;
                if(!isset($menu[$i-1])):
        ?>
                    <div id="empty-left" class="col-4 m-0 p-0 bg-light"></div>
        <?php 
                endif;
        ?>
<!-- /////// center element \\\\\\\ -->

                    <div id="center-tab"class="pt-2 text-black">
                            <h2 class="h2 text-center"><?php echo($menu[$i]['name']) ;?></h2>
                    </div>
                    
<!-- /////// right element \\\\\\\ -->
        <?php 
                if(isset($menu[$i+1])):
        ?>
                    <div id="right-tab" class="col-4 red pt-2">
                        <a href=<?php echo($menu[$i+1]['url']);?>>
                            <div class="right-tab">
                                <h2 class="h2 text-white"><?php echo($menu[$i+1]['name']) ;?></h2> 
                            </div>
                        </a> 
                    </div>
        <?php 
                endif;
                if(!isset($menu[$i+1])):
        ?>
                    <div id="empty-right" class="bg-light"></div>
        <?php 
                endif;
                break;
            endforeach;
        ?>
    </nav>
</header>