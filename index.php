<?php

include_once 'AccountCreator.php';

$accountCreator = new AccountCreator();

/* ----------------------------Performer */
$accountCreator->create('Performer', 'Pista', 'Kiss Pista', 'pista@google.com');
$accountCreator->create('Performer', 'Eva', 'Nagy Eva', 'eva@yahoo.com');


/* ----------------------------Studio */
$accountCreator->create('Studio', 'OptimusPrajm', 'Optimus geza', 'optimus@google.com');

/* ----------------------------Member */
$accountCreator->create('Member', 'Gigamember', 'John Doe', 'jd@google.com');
