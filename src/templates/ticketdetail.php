<html>
<head>
    <title>Example Application</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
<?php $ticket = $data['ticket'] ?>
<h1><?=$ticket->getTitle()?></h1>

<p><strong><?=$ticket->getDescription()?></strong></p>

<p>Component: <?=$ticket->getComponent()?></p>
</body>
</html>

