<?php

try {
    $connectionString = 'odbc:DSN=*LOCAL;NAM=1;UID=FORMATION8;PWD=Fhuit';
    $pdo = new PDO($connectionString, null, null, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));

    $sql = 'SELECT V.VIN_CODE, V.VIN_NOM, P.PR_NOM
            FROM BDVIN8.VINS V
            LEFT OUTER JOIN BDVIN8.PRODUCTEURS P
            ON V.PR_CODE = P.PR_CODE
            WHERE SREGION_CODE = 49';

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    echo '<table border="1">';
    echo '<tr><th>Code</th>
    <th>Nom du vin</th>
    <th>Producteur</th>
    </tr>';

    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $result['VIN_CODE'] . '</td>';
        echo '<td>' . $result['VIN_NOM'] . '</td>';
        echo '<td>' . $result['PR_NOM'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

} catch (PDOException $exception) {
    echo $exception->getMessage();
    exit;
}