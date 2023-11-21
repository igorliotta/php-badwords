<?php 

// Dischiarazione della variabile contenene il testo
$text = 'Nel 1971, il teorema dell’area di Hawking diede il via a una serie di intuizioni fondamentali sulla meccanica dei buchi neri e suggerì un curioso parallelo con la seconda legge della termodinamica, che afferma che l’entropia – o grado di disordine all’interno di un sistema – non dovrebbe mai diminuire. La somiglianza tra le due teorie suggeriva che i buchi neri potessero comportarsi come oggetti termici che emettono calore – una proposta sconcertante, poiché si pensava che i buchi neri per loro stessa natura non lasciassero mai fuoriuscire energia. Nel 1974, Hawking mostrò che i buchi neri potrebbero emettere radiazioni su scale temporali molto lunghe se fossero presi in considerazione i loro effetti quantistici. Questo fenomeno è conosciuto come radiazione di Hawking e rimane una delle rivelazioni più importanti sui buchi neri. Da allora Hawking e altri scienziati hanno dimostrato che il teorema dell’area funziona matematicamente, ma non c’era modo di verificarlo in natura fino alla prima rilevazione delle onde gravitazionali di Ligo. Hawking, dopo aver appreso del risultato, contattò il co-fondatore di Ligo Kip Thorne, professore di fisica teorica al Caltech, per chiedergli se il rilevamento avrebbe potuto confermare il teorema dell’area. All’epoca, i ricercatori non erano in grado di individuare le informazioni necessarie all’interno del segnale, prima e dopo la fusione, per determinare se l’area dell’orizzonte finale non fosse diminuita, come supponeva il teorema di Hawking. Non lo è stato fino a diversi anni dopo, quando è diventato possibile testare la legge dell’area grazie allo sviluppo di una tecnica particolare da parte di Maximiliano Isi, un Einstein Postdoctoral Fellow della Nasa al Kavli Institute for Astrophysics and Space Research del Mit.
Nel 2019, il gruppo di ricercatori coordinato da Isi ha infatti sviluppato un metodo per estrarre toni specifici nelle onde gravitazionali immediatamente successivi al picco di Gw 150914, che ha segnato il momento in cui i due buchi neri si sono scontrati per formare un nuovo buco nero. Il team ha utilizzato la tecnica per individuare frequenze specifiche – o ipertoni – che possono essere utilizzate per calcolare la massa e lo spin del buco nero finale. La massa e lo spin di un buco nero sono direttamente correlati all’area del suo orizzonte degli eventi e Thorne, ricordando la domanda di Hawking, ha chiesto loro se la stessa tecnica potesse essere usata per confrontare il segnale prima e dopo la fusione e confermare il teorema dell’area.';
$replace = $_POST['censured_word'];
$text_length = strlen($text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Testo</title>
</head>
<body>

  <h3 class="title">L’AREA DELL’ORIZZONTE DEGLI EVENTI NON SI RIDUCE</h3>
  <h1 class="title">Confermato un teorema di Hawking sui buchi neri</h1>
  <!-- Primo punto: stampa del testo originale -->
  <p><?php echo $text; ?></p>
  <hr>

  <!-- Secondo punto: stampa la lunghezza del testo originale -->
  <h4 class="title">- STAMPA DELLA LUNGHEZZA DEL TESTO ORIGINALE: <span class="number"><?php echo strlen($text); ?> caratteri.</span></span></h4>
  <hr>

  <!-- Terzo punto: sostituzione della parola censurata nel testo con '***' -->
<h4 class="title">- STAMPA DEL TESTO CON LA CENSURA:</h4>
<p><?php echo str_replace($replace, '***', $text); ?></p>
      

   <!-- Stampa del testo eliminando la parola censurata -->
<h4 class="title">- STAMPA DEL TESTO SENZA PAROLA CENSURATA:</h4>
<p><?php  echo str_replace($replace, ' ', $text); ?></p>
<hr>

<!-- Quarto punto: stampa la lunghezza del nuovo testo ottenuto -->
<h4 class="title">- STAMPA DELLA LUNGHEZZA DEL NUOVO TESTO: <span class="number"><?php echo strlen(str_replace($replace, ' ', $text));?> caratteri.</span></h4>


<hr>
<?php 

?>
</body>
</html>





