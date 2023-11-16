# MEZZI DI TRASPORTO

### Membri del gruppo: Marino Andrea (PM), Picco Aurora (D), Natale Nicolas Jean-Luc (D), Fazio Gabriele (D)

questo progetto consisterà nella creazione di un sito web che permetta la raccolta di un sondaggio sui mezzi di trasporto preferiti dagli utenti che faranno accesso al nostro sito.

### UML

![UML](image/README/UML.png "UML")

Come possiamo vedere dall'UML, il nostro progetto sarà suddiviso in 7 file: 5 php, 1 css e 1 json.

Veniamo a una breve descrizione dei file uno dopo l'altro in ordine:

#### index.php

La pagina iniziale del sito web, contenente una barra di input dove verrà inserita la password per accedere al sito del sondaggio.

#### checkPassword.php

Un file php di controllo password, che reindirizzerà l'utente alla pagina iniziale se inserirà la password sbagliata o alla pagina del sondaggio altrimenti.

#### survey.php

Accessibile solo dopo il login. La pagina in cui ogni utente registrato dovrà inserire nome e cognome, per poi selezionare il suo mezzo di trasporto preferito da una lista. Una volta inseriti tutti i dati, essi verranno inviati per successive elaborazioni.

#### checkSurvey.php

Un file php di controllo e elaborazione. Dopo essersi accertati che non siano stati inseriti nomi o cognomi fasulli (con caratteri speciali o altro), verranno inseeriti i dati raccolti all'interno di un dizionario json.

#### list.json

Un file json per contenere tutti i dati del sondaggio.

#### results.php

La pagina finale del sondaggio, nella quale verrà mostrato un grafico dimostrativo dei risultati del sondaggio.

#### style.css

Il foglio di stile, comune a tutte le pagine.

### Spartizione del lavoro

**Marino Andrea (Project Manager):** creazione UML e README, organizzazione generale progetto, sviluppo file style.css.

**Picco Aurora (Developer):** progettazione e sviluppo dei file index.php, survey.php e results.php.

**Natale Nicolas Jean-Luc (Developer):** progettazione e sviluppo file checkSurvey.php e gestione file list.json.

**Fazio Gabriele (Developer):** progettazione e sviluppo file checkPassword.php e checkSurvey.php, aiutando Nicolas ove possibile.
