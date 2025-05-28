<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
    $name = "Arfat Elnour";
    $matricNumber = "AI230244";
    $course = "web";
    $yearOfStudy = "Year 2";
    $address = "123 University Street, Campus Town";
    ?>
    
    <table border="1">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>