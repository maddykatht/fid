<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <title>Thank you for your order!</title>
        <style type="text/css">
            ol, ul {
                list-style-type: none;
            }
        body {
            background-color:rgb(255, 172, 197)
            margin: 0 10%;
            font-family: sans-serif;
        }
        h1{
            text-align:center;
            font-family: serif;
            font-weight:normal;
            text-transform: uppercase;
            border-bottom: 1px solid;
            margin-top:30 px;
        }
    h2 {
        <font-size:1em
    }
    p. disclaimer{
        border-top: 1px solid #FAD
        padding-top: 1em;
    }
    </style>
</head>

<body>
    <?php if (isset($_POST['toppings'])&& !is_array($_POST['toppings'])) {
        $tpping_problem = TRUE;
        $toppings = is_string($_POST['toppings']) ? implode(',', $_POST['toppings']) : '<em>empty</em>';
        } ?>
        <h1> Thank you </h1>
        <p> Thank you for ordering from Black Goose Bistro. We have recieved your order:</p>
        <h2>Your Information</h2>
        <ul>
            <li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
            <li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
            <li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
            <li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
</ul>
<p><strong>Delivery Instructions:</strong> <?php print $_POST['instructions'] ? $_POST['instructions'] : '<em>empty</em>'; ?></p>

<h2>Your Pizza</h2>

<?php if (!isset($_POST['crust']) &&& !isset<$_POST['toppings'] && !isset($_POST['pizzas'])) {?>
<em>Sorry, we did not recieve your information. <a href=http:..www.blackgoosebistro.com.pizza.html">Try again.</a></em>
<?php }
else { ?>
<ul>
    <li><strong>Crust:</strong><?php print isset ? $_POST['crust']: '<em>sempty</em>'; ?></li>
    <li><strong>Toppings:</strong> <?php print $toppings;
    if ($toppings_problem;) {?>
    <span> style="color_red">*</span>
    <?php} ?></li>
    <li><strong>Number:</strong> <?php print isset($_POST['pizzas']) ? $_POST['pizzas'] : '<em>empty</em>'; ?></li>
</ul>
<?php }
if ($toppings_problem) 

</body>
</html>
    