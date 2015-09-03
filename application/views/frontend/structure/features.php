<div class="container" id="features">
    <div class="row features-list">
        <?php 
        if(!$land_features)
        {
            
        }
        else
        {
            foreach ($land_features as $l){
        ?>
        <div class="col-sm-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.5s">
            <div class="feature-icon">
                <i class="<?php echo $l->_icon ?>"></i>
            </div>
            <h2><?php echo $l->_title ?></h2>
            <p><?php echo $l->_subtitle ?></p>
        </div>
        
        <?php 
            }
        }
        ?>
       
    </div>
</div>
