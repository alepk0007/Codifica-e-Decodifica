<?php

// Dizionario: da lettera o numero a codice Morse
$codifica = array(
    'A'=>'.-',   'B'=>'-...', 'C'=>'-.-.', 'D'=>'-..',  'E'=>'.',
    'F'=>'..-.', 'G'=>'--.',  'H'=>'....', 'I'=>'..',   'J'=>'.---',
    'K'=>'-.-',  'L'=>'.-..', 'M'=>'--',   'N'=>'-.',   'O'=>'---',
    'P'=>'.--.', 'Q'=>'--.-', 'R'=>'.-.',  'S'=>'...',  'T'=>'-',
    'U'=>'..-',  'V'=>'...-', 'W'=>'.--',  'X'=>'-..-', 'Y'=>'-.--',
    'Z'=>'--..',
    '0'=>'-----', '1'=>'.----', '2'=>'..---', '3'=>'...--', '4'=>'....-',
    '5'=>'.....', '6'=>'-....', '7'=>'--...', '8'=>'---..', '9'=>'----.'
);

// Dizionario inverso: da Morse a lettera o numero
$decodifica = array(
    '.-'=>'A',   '-...'=>'B', '-.-.'=>'C', '-..'=>'D',  '.'=>'E',
    '..-.'=>'F', '--.'=>'G',  '....'=>'H', '..'=>'I',   '.---'=>'J',
    '-.-'=>'K',  '.-..'=>'L', '--'=>'M',   '-.'=>'N',   '---'=>'O',
    '.--.'=>'P', '--.-'=>'Q', '.-.'=>'R',  '...'=>'S',  '-'=>'T',
    '..-'=>'U',  '...-'=>'V', '.--'=>'W',  '-..-'=>'X', '-.--'=>'Y',
    '--..'=>'Z',
    '-----'=>'0', '.----'=>'1', '..---'=>'2', '...--'=>'3', '....-'=>'4',
    '.....'=>'5', '-....'=>'6', '--...'=>'7', '---..'=>'8', '----.'=>'9'
);

// Traduzione da testo a Morse
if (isset($_GET['converti_testo'])) {
    $carattere = strtoupper($_GET['carattere']);
    if (isset($codifica[$carattere])) {
        echo $codifica[$carattere];
    } else {
        echo "Carattere non valido";
    }
}

// Traduzione da Morse a testo
if (isset($_GET['converti_morse'])) {
    $sequenza = $_GET['sequenza'];
    if (isset($decodifica[$sequenza])) {
        echo $decodifica[$sequenza];
    } else {
        echo "Codice morse non valido";
    }
}

?>

<html>
<head>
    <title>Traduttore Morse</title>
</head>

<body>
<h1>Traduttore da testo a Morse</h1>
<form method="get">
    <label>Inserisci una lettera o un numero:</label>
    <input type="text" name="carattere">
    <input type="submit" name="converti_testo" value="Traduci">
</form>

<h2>Traduttore da Morse a testo</h2>
<form method="get">
    <label>Inserisci un codice Morse:</label>
    <input type="text" name="sequenza">
    <input type="submit" name="converti_morse" value="Decodifica">
</form>
</body>
</html>
