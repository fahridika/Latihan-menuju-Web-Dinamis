<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Table</title>
</head>
<body>
    <table>
        <thead>
            <!-- tr untuk membuat baris,
             td untuk membuat kolom, thead sebagai kepala -->
        <tr>
            <td style="border: black solid 1px;"> data 1, 2</td>
            <td style="border: black solid 1px;">data 1, 3</td>
            <td style="border: black solid 1px;">data 1, 4</td>
        </tr>
        </thead>
        <!-- Tbody untuk menandai sebagai datanya atau bodynya -->
        <tbody>
        <tr >
            <td style="border: black solid 1px;" colspan="3"> data 2,1 data 2, 2 data 2, 2</td>
            <td style="border: black solid 1px;"> data 2, 2</td>
            <td style="border: black solid 1px;"> data 2, 3</td>
        </tr>
        </tbody>
        
        
    </table>
    
</body>
</html>
