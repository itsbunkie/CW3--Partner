<?php
/* validation*/
$required = ['name', 'section', 'cardnumber', 'cardtype'];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        echo '<h1>Sorry</h1>';
        echo '<p>You did not fill out the form completely. <a href="buyagrade.html">Try again?</a></p>';
        exit;
    }
}

/* Debugging */
echo "<h1>Raw Form Data</h1>"; /* Dont forget echo for putting text*/
echo '<h2>The current database contains:</h2>'; /* display database*/
echo '<pre>' . htmlspecialchars($all) . '</pre>';
echo "<pre>";
print_r($_POST);
echo "</pre>";


/* get input values*/
$name = trim($_POST['name'] ?? '');
$section = trim($_POST['section'] ?? '');
$cardnumber = trim($_POST['cardnumber'] ?? '');
$cardtype = trim($_POST['cardtype'] ?? '');

/* Format data from storage */
$line = $name . ';' . $section . ';' . $cardnumber . ';' . $cardtype . PHP_EOL;

file_put_contents('suckers.html', $line, FILE_APPEND);

/* read file back */
$all = file_get_contents('suckers.html');

/* display clean output*/
echo "<h1>Form input values</h1>";

echo "<p>Your Name: " . htmlspecialchars($name) . "</p>";
echo "<p>Section: " . htmlspecialchars($section) . "</p>";  // FIXED
echo "<p>Card Number: " . htmlspecialchars($cardnumber) . "</p>";
echo "<p>Card Type: " . htmlspecialchars($cardtype) . "</p>";


?>