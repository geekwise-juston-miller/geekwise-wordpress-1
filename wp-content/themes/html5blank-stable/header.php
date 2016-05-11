<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link rel="icon" type="image/png" href="http://i.imgur.com/CmBvoI4.png"/>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		 
    <label for="menu" class="barswrap" id="index_label">
        <img src="images/menu.svg" id="bars">
    </label>
        <input type="checkbox" id="menu">
    <header>
        <nav id="navbar">
            <ul>
                <li>
                    <a href="/index.php?page_id=18">
                        <span>
                            about
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/index.php?page_id=6">
                        <span>
                            courses
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/index.php?page_id=8">
                        <span>
                            workshops
                        </span>
                    </a>
                </li>
                <li>
                   <a href="/index.php?page_id=10">
                        <span>
                            cohort
                        </span>
                    </a>
                </li>
                <li>
                    <a id="yellow" href="/index.php?page_id=16">
                        <span>
                            signup
                        </span>
                    </a>
                </li>
                <li>
                     <a href="/index.php?page_id=12">
                        <span>
                            team
                        </span>
                    </a>
                </li>
                <li>
                    <a  href="/index.php?page_id=14">
                        <span>
                            contact
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
			<!-- /header -->
