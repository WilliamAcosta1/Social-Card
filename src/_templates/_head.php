<?php
  $URL = "https://williamacosta.xyz";
?>

<title><?php echo $title ?? "default title"; ?></title>

<meta httpEquiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<meta name="theme-color" content="#14bae4"/>
<link rel="icon" type="image/x-icon" href="/static/images/favicon.ico"></link>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" type="text/css" rel="stylesheet">
<meta property="og:image" content="/static/images/branding/avatar.webp" />

<meta content="<?php echo $title ?? "Title"; ?>" property="og:title"/>
<meta content="<?php echo $description ?? "default description"; ?>" property="og:description"/>
<meta content="<?php echo $description ?? "default description"; ?>" name="description"/>

<meta name="revisit-after" content="2 days"/>
<meta name="keywords" content="<?php echo $keywords ?? "WilliamAcosta, Twitter, Developer, Github"; ?>"/>
<meta property="og:locale" content="en_GB"/>
<link rel="canonical" href="<?php echo "{$URL}{$path}"; ?>" />
<meta property="og:url" content="<?php echo "{$URL}{$path}"; ?>" />
<meta property="og:site_name" content="WilliamAcosta"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@WilliamAcosta0"/>

<!-- JavaScript -->
<script src="/static/js/main.js" type="text/javascript" charset="utf-8"></script>