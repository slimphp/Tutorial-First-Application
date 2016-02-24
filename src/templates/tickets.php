<html>
<head>
    <title>Example Application</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
<h1>All Tickets</h1>

<p><a href="/ticket/new">Add new ticket</a></p>

<?php
if($data['tickets'] && is_array($data['tickets'])):
?>
<table class="pure-table">
    <tr>
        <th>Title</th>
        <th>Component</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

<?php
    $odd = 1;
    foreach($data['tickets'] as $ticket): ?>

        <tr <?=$odd ? "class=\"pure-table-odd\"" : ""; ?>>
        <td><?=$ticket->getTitle() ?></td>
        <td><?=$ticket->getComponent() ?></td>
        <td><?=$ticket->getShortDescription() ?> ...</td>
        <td>
            <a href="<?=$router->pathFor('ticket-detail', ['id' => $ticket->getId()])?>">view</a>
        </td>
    </tr>

<?php 
    $odd = $odd ? 0 : 1;
    endforeach; ?>
</table>
<?php else: ?>
<p>No current tickets</p>

<?php endif; ?>

</body>
</html>

