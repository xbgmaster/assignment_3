<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = escapeshellarg($_POST['x']);
    $y = escapeshellarg($_POST['y']);
    $z = escapeshellarg($_POST['z']);

    $command = "python3  assignment3_core/math_operations/math_form.py $x $y $z";
    $output = [];
    exec($command, $output);

    $firstOperation     = $output[0];
    $secondOperation      = $output[1];
    $thirdOperation    = $output[2];
    $fourthOperation       = $output[3];
    $fifthOperation   = $output[4];
    $final_result = $output[5];
    $x_val      = $output[6];
    $y_val      = $output[7];
    $z_val  = $output[8];

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Calculation Result</title>
        <style>
             body {
            background-color: #f8e9dc;
            font-family: Arial, sans-serif;
            text-align: center; /* centra el contenido inline */
        }

        .container {
            display: inline-block; /* permite centrar el bloque */
            text-align: left; /* mantiene alineado el texto interno */
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .steps {
            background-color: #f1f1f1;
            border-left: 5px solid green;
            padding: 10px;
            margin-top: 15px;
        }

        h2 {
            color: green;
        }

        strong {
            color: black;
        }

        .result {
            font-weight: bold;
            font-size: 1.2em;
        }

        .timestamp {
            margin-top: 20px;
            font-style: italic;
        }
                .lista-centrada {
      display: flex;
      justify-content: center;
    }

    .lista-centrada ul {
      list-style-position: inside;
      text-align: left;
    }
    
    </style>
    </head>
    <body>
        <div class='separator'>====================================</div>
        <div >
            <h2 style='color:black;'><u>Assignment #3</u></h2>
            <p class='result'>Python Script Result:</p>
            <p class='result'>Original Values: </p>
             <div class='lista-centrada'>
             <ul >
                <li>
                    <strong>x:</strong> {$x_val}
                </li>
                <li>
                    <strong>y:</strong> {$y_val}
                </li>
                <li>
                    <strong>z:</strong> {$z_val}
                </li>
            </ul>
            </div>
            
          <p class='result'>Calculation Steps: </p>
            <div class='lista-centrada'>           
            <ol>
                <li>Initial value of x: <strong>{$x_val}</strong></li>
                <li>After x += y: <strong>{$firstOperation}</strong></li>
                <li>After x -= z:  <strong>{$secondOperation}</strong></li>
                <li>After x *= y:  <strong>{$thirdOperation}</strong></li>
                <li>After x %= z:  <strong>{$fourthOperation}</strong></li>
                <li>After x /= z:  <strong>{$fifthOperation}</strong></li>
            </ol>           
            </div>
            <h2 style='color:black'>Result: x + y + z is : {$x_val} {$y_val} {$z_val} = {$final_result}</h2>
        </div>
        <div class='separator'>====================================</div>
    </body>
    </html>";
}
?>
