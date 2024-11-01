<?php
$language = get_bloginfo('language');
$charset = get_bloginfo('charset');
$name = get_bloginfo('name');
$url = get_bloginfo('url');
$email = get_option('admin_email');
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="<?php echo $charset; ?>" />
    <meta name="viewport" content="width=device-width">
    <title><?php echo $name; ?> &#8250; Maintenance</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <style>
	  body { text-align: center; padding: 150px; }
	  h1 { font-size: 50px; }
	  body { font: 20px Helvetica, sans-serif; color: #333; }
	  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
	  a { color: #dc8100; text-decoration: none; }
	  a:hover { color: #333; text-decoration: none; }
	</style>
</head>
<body>
	
	<article>
	    <h1>We&rsquo;ll be back soon!</h1>
	    <div>
	        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:<?php echo $email;  ?>">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
	    </div>
    </article>
    
</body>
</html>