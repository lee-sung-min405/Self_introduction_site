<?php
$conn = mysqli_connect("localhost", "root", "lee2701", "opentutorials");
mysqli_query($conn, "
    INSERT INTO topic (
        title,
        description,
        created
    ) VALUES (
        'MySQL',
        'MySQL is ....',
        NOW()
    )");
?>