<?php
/*Template Name: Home */
?>
<?php get_header(); ?>
    <main>
        <div class="main flex align-items-center">
            <div class="container flex align-items-center">
                <div class="content">
                    <div class="breadcrumbs">
                        <a href="#">HOME</a>
                        <a href="#">COMPANY</a>
                        <span>AI-first Softdev company</span>
                    </div>
                    <h1>Development: Enhancing Code Quality</h1>
                    <div class="slider">
                        <div class="slider-slide flex align-items-center justify-content-center">
                            <div class="slider-slide-block block-1">
                                <h2>Code Documentation</h2>
                                <div class="slider-slide-block-item flex">
                                    <div class="slider-slide-block-item-left flex align-items-center">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/surface1.png" alt="" />
                                    </div>
                                    <div class="slider-slide-block-item-right">
                                        <span>Sphinx</span>
                                        <p>Integrates with tools like TensorFlow and allows for the incorporation of
                                            AI-generated content into code documentation, enhancing its completeness and
                                            clarity</p>
                                    </div>
                                </div>
                                <div class="slider-slide-block-item flex">
                                    <div class="slider-slide-block-item-left flex align-items-center">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tabnine.png" alt="" />
                                    </div>
                                    <div class="slider-slide-block-item-right">
                                        <span>Tabnine</span>
                                        <p>An AI-powered code completion tool that suggests code snippets and explanations, assisting developers in writing clear and descriptive code comments</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg" alt="" />
                            </div>
                            <div class="slider-slide-block">
                                <h2>Optimization and Refactoring of the Code Fragments</h2>
                                <div class="slider-slide-block-item flex">
                                    <div class="slider-slide-block-item-left flex align-items-center">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chatgpt.png" alt="" />
                                    </div>
                                    <div class="slider-slide-block-item-right">
                                        <span>ChatGPT</span>
                                        <p>Is a free-to-use AI system for engaging conversations, gain insights, automate tasks, and witness the future of AI, all in one place.</p>
                                    </div>
                                </div>
                                <div class="slider-slide-block-item flex">
                                    <div class="slider-slide-block-item-left flex align-items-center">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deepcode.png" alt="" />
                                    </div>
                                    <div class="slider-slide-block-item-right">
                                        <span>DeepCode</span>
                                        <p>Utilized to analyze code for bugs, vulnerabilities, and improvements, offering suggestions for refactoring and optimization</p>
                                    </div>
                                </div>
                                <div class="slider-slide-block-item flex">
                                    <div class="slider-slide-block-item-left flex align-items-center">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codota.png" alt="" />
                                    </div>
                                    <div class="slider-slide-block-item-right">
                                        <span>Codota</span>
                                        <p>Uses AI to analyze code patterns and offers suggestions for optimized and refactored code snippets, especially for Java and JavaScript</p>
                                    </div>
                                </div>
                                <div class="slider-slide-block-item flex">
                                    <div class="slider-slide-block-item-left flex align-items-center">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bugasura.png" alt="" />
                                    </div>
                                    <div class="slider-slide-block-item-right">
                                        <span>Bugasura</span>
                                        <p>Is used as an issue and bug tracker across multiple projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <ul class="navigation flex justify-content-center">
                        <li><a href="#" class="prev flex justify-content-center align-items-center">Prev</a> </li><li><a href="#">01</a> </li><li><a href="#" class="active">02</a> </li><li><a href="#">03</a> </li>
                        <li><a href="#">04</a> </li>
                        <li><a href="#">05</a> </li>
                        <li><a href="#">06</a> </li>
                        <li><a href="#">07</a> </li>
                        <li><a href="#">08</a> </li>
                        <li><a href="#" class="dotted">...</a> </li>
                        <li><a href="#">100</a> </li>
                        <li><a href="#" class="next">Prev</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>