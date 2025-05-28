<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Arfat',
            'program' => 'BIT',
            'age' => 21
        ],
        [
            'name' => 'Ali',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Ahmed',
            'program' => 'BIC',
            'age' => 22
        ]
    ];
    ?>
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>