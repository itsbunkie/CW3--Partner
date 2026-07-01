<?php
echo '<h1>Form input values</h1>';

echo '<p>Your Name: ' . htmlspecialchars($_POST['visitor_name'] ?? '') . '</p>';

$options = $_POST['options'] ?? [];

if (!is_array($options)) {
    $options = [$options];
}

echo "<p>Selected Features:</p>";
echo "<ul>";

foreach ($options as $option) {
    echo "<li>" . htmlspecialchars($option) . "</li>";
}

echo "</ul>";
?>