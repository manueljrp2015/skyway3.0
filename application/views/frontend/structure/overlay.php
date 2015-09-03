<?php
if (!$land_home)
{
    
}
else
{
    foreach ($land_home as $l)
    {
        ?>
<div class="home" id="home" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="home-text col-md-8">

                        <h1 class="wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1.5s" data-wow-offset="10"><?php echo $l->_title ?>.</h1>
                        <p class="lead wow fadeInDown" data-wow-delay="2s" data-wow-duration="1.5s" data-wow-offset="10"><?php echo $l->_subtitle ?>.</p>
                    </div>
                    <div class="scroller">
                        <div class="mouse"><div class="wheel"></div></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
