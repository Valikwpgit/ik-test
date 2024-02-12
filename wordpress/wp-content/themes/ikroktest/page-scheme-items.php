<?php
/*Template Name: Scheme Items */
?>
<?php get_header();
$block1 = get_field('block_1');
$block2 = get_field('block_2');
$block3Image = get_field('block_3_image');

?>


    <main>
        <div class="main flex align-items-center">
            <div class="container flex align-items-center">
                <div class="content">
                    <div class="breadcrumbs">
                        <a href="#">HOME</a>
                        <a href="#">COMPANY</a>
                        <span><?php the_title(); ?></span>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <div class="slider">
                        <div class="slider-slide flex align-items-center justify-content-center">


                            <?php if ($block3Image['position'] === 'before_first' && $block3Image['image']) { ?>
                                <div class="slider-slide-img">
                                    <img style="width: <?php if($block3Image['width']) { echo $block3Image['width']; } ?>em; transform: translate(<?php if($block3Image['horizontal_position']) { echo $block3Image['horizontal_position']; } ?>em, <?php if($block3Image['vertical_position']) { echo $block3Image['vertical_position']; } ?>em);"
                                         src="<?php echo $block3Image['image']; ?>" alt=""/>
                                </div>
                            <?php } ?>

                            <div class="slider-slide-block <?php if ($block3Image['position'] !== 'in_first') { ?> overflow-auto <?php } ?>" <?php if ($block3Image['position'] !== 'in_first' && $block3Image['position'] !== 'in_second') { ?> style="width: <?php if($block1['width']) { echo $block1['width']; } ?>em;" <?php } ?>>
                                <h2><?php echo $block1['title']; ?></h2>
                                <?php if ($block3Image['position'] !== 'in_first') { ?>

                                    <?php foreach ($block1['items'] as $item) { ?>

                                        <div class="slider-slide-block-item flex">
                                            <?php if ($item['image']) { ?>
                                                <div class="slider-slide-block-item-left flex align-items-center justify-content-center">

                                                    <?php if ($item['relationship'] === true && $item['relationship_image']) { ?>
                                                        <img class="slider-slide-block-item-left-relative"
                                                             src="<?php echo $item['relationship_image']; ?>"
                                                             alt=""
                                                             style="width: <?php if($item['width']) { echo $item['width']; } ?>em; transform: translate(<?php if($item['horizontal_position']) { echo $item['horizontal_position']; } ?>em, <?php if($item['vertical_position']) { echo $item['vertical_position']; } ?>em);"/>
                                                    <?php } ?>


                                                    <img src="<?php echo $item['image']; ?>"
                                                         alt=""/>

                                                </div>
                                            <?php } ?>
                                            <div class="slider-slide-block-item-right">
                                                <?php if ($item['title']) { ?>
                                                    <span><?php echo $item['title']; ?></span>
                                                <?php } ?>
                                                <?php if ($item['text']) { ?>
                                                    <p><?php echo $item['text']; ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <div class="slider-slide-wrap flex">
                                        <?php if ($block3Image['image']) { ?>
                                            <div class="slider-slide-img flex align-items-center"
                                                 style="width: <?php if($block3Image['width']) { echo $block3Image['width']; } ?>em; transform: translate(<?php if($block3Image['horizontal_position']) { echo $block3Image['horizontal_position']; } ?>em, <?php if($block3Image['vertical_position']) { echo $block3Image['vertical_position']; } ?>em);">
                                                <img src="<?php echo $block3Image['image']; ?>"
                                                     alt=""/>
                                            </div>
                                        <?php } ?>
                                        <div class="slider-slide-wrap-item flex flex-direction-column overflow-auto"
                                             style="width: <?php if($block1['width_in']) { echo $block1['width_in']; } ?>em;">

                                            <?php foreach ($block1['items'] as $item) { ?>
                                                <div class="slider-slide-block-item flex flex-grow-1">
                                                    <?php if ($item['image']) { ?>
                                                        <div class="slider-slide-block-item-left flex align-items-center justify-content-center">
                                                            <?php if ($item['relationship'] === true && $item['relationship_image']) { ?>
                                                                <img class="slider-slide-block-item-left-relative"
                                                                     src="<?php echo $item['relationship_image']; ?>"
                                                                     alt=""
                                                                     style="width: <?php if($item['width']) { echo $item['width']; } ?>em; transform: translate(<?php if($item['horizontal_position']) { echo $item['horizontal_position']; } ?>em, <?php if($item['vertical_position']) { echo $item['vertical_position']; } ?>em);"/>
                                                            <?php } ?>
                                                            <img src="<?php echo $item['image']; ?>"
                                                                 alt=""/>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="slider-slide-block-item-right">
                                                        <?php if ($item['title']) { ?>
                                                            <span><?php echo $item['title']; ?></span>
                                                        <?php } ?>
                                                        <?php if ($item['text']) { ?>
                                                            <p><?php echo $item['text']; ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                <?php } ?>

                            </div>


                            <?php if ($block3Image['position'] === 'before_second' && $block3Image['image']) { ?>
                                <div class="slider-slide-img">
                                    <img style="width: <?php if($block3Image['width']) { echo $block3Image['width']; } ?>em; transform: translate(<?php if($block3Image['horizontal_position']) { echo $block3Image['horizontal_position']; } ?>em, <?php if($block3Image['vertical_position']) { echo $block3Image['vertical_position']; } ?>em);"
                                         src="<?php echo $block3Image['image']; ?>" alt=""/>
                                </div>
                            <?php } ?>

                            <div class="slider-slide-block  <?php if ($block3Image['position'] !== 'in_second') { ?> overflow-auto <?php } ?>" <?php if ($block3Image['position'] !== 'in_first' && $block3Image['position'] !== 'in_second') { ?>
                                style="width: <?php if($block2['width_not_in']) { echo $block2['width_not_in']; } ?>em;" <?php } ?>>
                                <h2><?php if($block2['title']) { echo $block2['title']; } ?></h2>
                                <?php if ($block3Image['position'] === 'in_second') { ?>
                                    <div class="slider-slide-wrap flex">
                                        <?php if ($block3Image['image']) { ?>
                                            <div class="slider-slide-img flex align-items-center"
                                                 style="width: <?php if($block3Image['width']) { echo $block3Image['width']; } ?>em; transform: translate(<?php if($block3Image['horizontal_position']) { echo $block3Image['horizontal_position']; } ?>em, <?php if($block3Image['vertical_position']) { echo $block3Image['vertical_position']; } ?>em);">
                                                <img src="<?php echo $block3Image['image']; ?>"
                                                     alt=""/>
                                            </div>
                                        <?php } ?>
                                        <div class="slider-slide-wrap-item flex flex-direction-column overflow-auto"
                                             style="width: <?php if($block2['width']) { echo $block2['width']; } ?>em;">

                                            <?php if($block2['items']) { foreach ($block2['items'] as $item) { ?>
                                                <div class="slider-slide-block-item flex flex-grow-1">
                                                    <?php if ($item['image']) { ?>
                                                        <div class="slider-slide-block-item-left flex align-items-center justify-content-center">
                                                            <?php if ($item['relationship'] === true && $item['relationship_image']) { ?>
                                                                <img class="slider-slide-block-item-left-relative"
                                                                     src="<?php echo $item['relationship_image']; ?>"
                                                                     alt=""
                                                                     style="width: <?php if($item['width']) { echo $item['width']; } ?>em; transform: translate(<?php if($item['horizontal_position']) { echo $item['horizontal_position']; } ?>em, <?php if($item['vertical_position']) { echo $item['vertical_position']; } ?>em);"/>
                                                            <?php } ?>
                                                            <img src="<?php echo $item['image']; ?>"
                                                                 alt=""/>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="slider-slide-block-item-right">
                                                        <?php if ($item['title']) { ?>
                                                            <span><?php echo $item['title']; ?></span>
                                                        <?php } ?>
                                                        <?php if ($item['text']) { ?>
                                                            <p><?php echo $item['text']; ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            <?php } } ?>

                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <?php if($block2['items']) { foreach ($block2['items'] as $item) { ?>

                                        <div class="slider-slide-block-item flex">
                                            <?php if ($item['image']) { ?>
                                                <div class="slider-slide-block-item-left flex align-items-center justify-content-center">

                                                    <?php if ($item['relationship'] === true && $item['relationship_image']) { ?>
                                                        <img class="slider-slide-block-item-left-relative"
                                                             src="<?php echo $item['relationship_image']; ?>"
                                                             alt=""
                                                             style="width: <?php if($item['width']) { echo $item['width']; } ?>em; transform: translate(<?php if($item['horizontal_position']) { echo $item['horizontal_position']; } ?>em, <?php if($item['vertical_position']) { echo $item['vertical_position']; } ?>em);"/>
                                                    <?php } ?>


                                                    <img src="<?php echo $item['image']; ?>"
                                                         alt=""/>

                                                </div>
                                            <?php } ?>
                                            <div class="slider-slide-block-item-right">
                                                <?php if ($item['title']) { ?>
                                                    <span><?php echo $item['title']; ?></span>
                                                <?php } ?>
                                                <?php if ($item['text']) { ?>
                                                    <p><?php echo $item['text']; ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } } ?>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <ul class="navigation flex justify-content-center">
                        <li><a href="#" class="prev flex justify-content-center align-items-center">Prev</a></li>
                        <li><a href="#">01</a></li>
                        <li><a href="#" class="active">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                        <li><a href="#">06</a></li>
                        <li><a href="#">07</a></li>
                        <li><a href="#">08</a></li>
                        <li><a href="#" class="dotted">...</a></li>
                        <li><a href="#">100</a></li>
                        <li><a href="#" class="next flex justify-content-center align-items-center">Next</a></li>
                    </ul>

                    <?php
                    //echo img_width_to_svg(get_template_directory().'/assets/images/img2.png')

                    ?>


                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>