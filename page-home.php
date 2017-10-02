<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
<div id="indexcont">
	<h1 class="title" id="indextitle">4-time award winner for <br/> "BEST TACTICAL FOLDER"<br /> at the BLADE SHOW</h1>
		<div id="slider">    
			<img class="scrollButtons left" src="<?php bloginfo( 'template_directory' ); ?>/slideshow/images/left.png" />
			<div style="overflow: hidden;" class="scroll">
				<div class="scrollContainer">
	                <div class="panel" id="panel_1">
						<div class="inside">
							<img src="<?php bloginfo( 'template_directory' ); ?>/knives/awards/drt_index.png" alt="picture" />
							<h2>DRT (Dead Right There)</h2>
							<p>The DRT won the award for Best Folder at the 2010 BLADE Show in Atlanta. <a href="<?php bloginfo( 'home' ); ?>/drt-dead-right-there/">[Details]</a></p>
						</div>
					</div>
					<div class="panel" id="panel_2">
						<div class="inside">
							<img src="<?php bloginfo( 'template_directory' ); ?>/knives/awards/devastator.png" alt="picture" />
							<h2>Devastator</h2>
							<p>The Devastator with Carbon Fiber scales won the award for Best Tactical Folder at the 2009 BLADE Show in Atlanta. <a href="<?php bloginfo( 'home' ); ?>/devastator/">[Details]</a></p>
						</div>
					</div>
	                <div class="panel" id="panel_3">
						<div class="inside">
							<img src="<?php bloginfo( 'template_directory' ); ?>/knives/awards/BTF.png" alt="picture" />
							<h2>Rampage BTF</h2>
							<p>The Rampage BTF won the award for Best Tactical Folder at the 2008 BLADE Show in Atlanta. <a href="<?php bloginfo( 'home' ); ?>/rampage-btf/">[Details]</a></p>
						</div>
					</div>
	                <div class="panel" id="panel_4">
						<div class="inside">
							<img src="<?php bloginfo( 'template_directory' ); ?>/knives/awards/Q36.png" alt="picture" />
							<h2>Q36</h2>
							<p>The Q36 won the award for Best Tactical Folder at the 2007 BLADE Show in Atlanta. <a href="<?php bloginfo( 'home' ); ?>/q-36/">[Details]</a></p>
						</div>
					</div>
                </div>
				<div id="left-shadow"></div>
				<div id="right-shadow"></div>
            </div>
			<img class="scrollButtons right" src="<?php bloginfo( 'template_directory' ); ?>/slideshow/images/right.png" />
        </div>
		<div class="help"><a href="<?php bloginfo( 'name' ); ?>/contact">(?) <span>Use arrows to scroll through the knives. Click [Details] for knife profile.</span></a></div>
	</div>
<script src="<?php bloginfo( 'template_directory' ); ?>/slideshow/js/jquery-1.3.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/slideshow/js/slider.js" type="text/javascript" charset="utf-8"></script>
			
		</div><!-- #primary -->
		<div id="space">&nbsp;</div>

<?php get_footer(); ?>