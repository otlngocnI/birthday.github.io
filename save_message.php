<?php
    $data = json_decode(file_get_contents("php://input"), true);
    $name = trim(htmlspecialchars($data['name']));
    $message = trim(htmlspecialchars($data['message']));

    // Append name and message in "Name|Message" format
    $entry = "$name|$message\n";

    // Write to file
    file_put_contents('messages.txt', $entry, FILE_APPEND);
    echo "Message saved!";
?>