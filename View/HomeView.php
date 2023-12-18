<!-- Trang chủ với slider -->


<html>
    <head>
    <?php
include("../root/CSS/home.php");
include("../root/JS/home.php");
?>
    </head>

<body>



    <div id="slider">
        <div class="slides">
            <?php foreach ($doctors as $doctor) : ?>
                <div class="slide">
                    <img src="<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>">
                    <h3><?php echo $doctor['name']; ?></h3>
                    <p><?php echo $doctor['position']; ?></p>
                    <p><?php echo $doctor['hospital']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>