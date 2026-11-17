<?php
// Abrir o Arquivo para Consulta
$arquivo = fopen("data/alunos.txt", "r");
if ($arquivo == false) {
    exit;
}

// Ler os Alunos Cadastrados
$alunos = [];
while (($info = fgetcsv($arquivo, null, ";")) !== false) {
    $alunos[] = $info;
}
fclose($arquivo);

// Exibir os Alunos Ordenados por RA
usort($alunos, function($info_1, $info_2) {
    return $info_1[0] <=> $info_2[0];
});

foreach ($alunos as $info) {
    $info[1] = ucwords($info[1]);
    $info[2] = ucfirst($info[2]);
    $info[4] = ucfirst($info[4]);

    echo "<tr>
            <td>{$info[0]}</td>
            <td>{$info[1]}</td>
            <td>{$info[2]}</td>
            <td>{$info[3]} anos</td>
            <td>{$info[4]}</td>
            <td>{$info[5]}</td>
            <td>{$info[6]}</td>
        </tr>";
}
?>