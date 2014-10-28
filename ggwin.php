<?php

// This is gungame winner motd file that is been shown
// by gungame_display_winner plugin.

header("Content-type: text/html; charset=utf-8");

function show($varName) {
    if (isset($_GET[$varName])) {
        echo htmlspecialchars($_GET[$varName], ENT_QUOTES, "UTF-8");
    }
}

$close = isset($_GET['close'])? intval($_GET['close']): 0;
if ($close < 1 || $close > 60) {
    $close = 0;
}

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>GunGame Winner</title>
        <?php if ($close) { ?>
        <script type="text/javascript">
            setTimeout('window.close()', <?php echo $close; ?>000);
        </script>
        <?php } ?>
    </head>
<body style="font-family: Verdana, sans-serif;" bgcolor="black" text="white">
    <hr><img src="http://i.imgur.com/5wvoK7h.jpg" align="left">
    <h3><b style="color: green"><?php show("winnerName"); ?></b> is top sloth!</                                                                                     h3>
        they won the game
        by killing <b style="color: red"><?php show("loserName"); ?></b> who suc                                                                                     ks.<br /><br />
    <b>Stats:</b><br />
    Wins: <b><?php show("wins"); ?></b><br />
    Place: <b><?php show("place"); ?></b>
        of <b><?php show("totalPlaces"); ?></b><br clear="all"><hr>
</body>
</html>

