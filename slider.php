<!-- revolution slider -->
<section class="no-top no-bottom" aria-label="section-slider">
    <div class="fullwidthbanner-container">
        <div id="revolution-slider-half">
            <ul>
                <?php
                foreach ($sliders as $slider) {
                    ?>
                    <li data-transition="parallaxtobottom" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center"/>
                        <div class="tp-caption slide-big-heading sft"
                             data-x="center"
                             data-y="300"
                             data-speed="800"
                             data-start="400"
                             data-easing="easeInOutExpo"
                             data-endspeed="450">
                            <?php echo $slider['title']; ?>
                        </div>

                        <div class="tp-caption slide-sub-heading sft"
                             data-x="center"
                             data-y="370"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeOutExpo"
                             data-endspeed="400">
                            <?php echo $slider['description']; ?>
                        </div>
                        
                    </li>
                    <?php
                }
                ?>

            </ul>
            <div class="tp-bannertimer hide"></div>
        </div>
    </div>
</section>
<!-- revolution slider end -->