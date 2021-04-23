<div class="row">
                <?php 
                    for($i = 1; $i <= (12 / $randomColumnsArray); $i++){ ?>
                        <div class="col-lg-<?php echo $randomColumnsArray ?>">
                        <div style="margin-right: 10px; background-color:#f5f5f5; padding: 12px;">
                            <h4><?php echo generateRandomLongString() ?></h4>
                            <p>
                                <?php for($a = 0; $a <= (rand(1, 3)); $a++){
                                    echo generateRandomLongString();
                                    echo " ";
                                } ?>
                            </p>
                            <a class="btn btn-<?php echo $ButtonColourArray[rand(0, 2)] ?>" href="#" role="button"><?php echo generateRandomString() ?></a>
                        </div>
                        </div>
                        <?php 
                    }
                    ?>
        </div>
        
        <?php
        $randomColumnsArray = array_rand(array_flip($ColumnsArray), 1); 
        // echo $randomColumnsArray;
        ?>