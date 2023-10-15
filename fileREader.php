<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file Reader in PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th {
            background-color: #ccc;
            text-align: center;
        }

        tr {
            text-align: right;
        }

        .first-row {
            background-color: #ccc; /* Grigio per la prima riga */
            text-align: center;
        }

    </style>
</head>
<body>
    <table>
    <?php
        $fileName="Articoli.txt";
        $testo=fopen($fileName,"r") or exit("Error: impossibile leggere il file");
        $firstRow = true; // Variabile per tener traccia della prima riga
        while (!feof($testo)) {
            $riga=explode(",",fgets($testo));
            if ($firstRow) {
                print("<tr class='first-row'>");
                for ($i=0; $i < count($riga); $i++) { 
                    print("<th>$riga[$i]</th>");
                }
            }else{
                print("<tr>");
                for ($i=0; $i < count($riga); $i++) { 
                print("<td>$riga[$i]</td>");
                }
            }
            print("</tr>");
            $firstRow = false; // Imposta la variabile a false dopo la prima riga
        }
        fclose($testo);
        ?> 
  </table> 
</body>
</html>

