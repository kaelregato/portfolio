<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name: $name\nEmail: $email\nMobile: $mobile\nMessage: $message\n------------------------\n";

    // Correct path with escaped backslashes
    $file = "C:\\Users\\Mary Joycelyn\\submissions.txt";

    // Save to a notepad-style text file
    file_put_contents($file, $data, FILE_APPEND);

    echo "<h2 style='text-align:center;color:green;'>Thank you! Your message has been saved to C:\\Users\\Mary Joycelyn\\submissions.txt</h2>";
} else {
    echo "<h2 style='text-align:center;color:red;'>Invalid request</h2>";
}
?>
