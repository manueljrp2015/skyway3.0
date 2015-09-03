<?php 
if(!$land_session_1)
{
    
}
else
{
    foreach ($land_session_1 as $l)
    {
?>
<section id="section-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="10">
                <img src="<?php echo base_url().$l->_img ?>" width="217px" class="iphone-img" alt="">
            </div>
            <div class="col-sm-8 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="10">
                <h1><?php echo $l->_title ?></h1>
                <p><?php echo $l->_subtitle ?></p>
                
            </div>
        </div>
    </div>
</section>
<?php 
    }
}
?>

