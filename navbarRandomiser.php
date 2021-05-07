<?php
        $randomButtonActiveArray = [
        0 => "inactive",
        1 => "active"
        ];

        $randomNavbarLightDarkArray = [
        0 => "navbar-light bg-light",
        1 => "navbar-dark bg-dark"
        ];
    ?>

<!-- <nav class="navbar navbar-expand-lg <?php // echo $randomNavbarLightDarkArray[rand(0, 1)] ?>"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- FIXME: TEMPORARY FIX -->
    
        <a class="navbar-brand" href="#"> <?php echo generateRandomString() ?></a>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <!-- for loop for number of nav items, and each random array -->
                <?php
            $randomNavButtonQuantity = rand(0, 4);
            ?>

            <?php for($randomNavButtonQuantity = 0; $randomNavButtonQuantity <= 4; $randomNavButtonQuantity++){ ?>
                <li class="nav-item <?php echo $randomButtonActiveArray[rand(0, 1)]?>"> 
                    <a class="nav-link" href="#"><?php echo generateRandomString() ?></a>
                </li>
    
        <?php
        }
        ?>

        </ul>
    </div>
</nav>
