<?php

return [
    'field' => [
        'invalid_type' => 'Ungültiger Feldtyp :type.',
        'options_method_not_exists' => 'Die Model-Klasse :model muss eine Methode :method() mit Rückgabe der Werte von ":field" besitzen.',
    ],
    'widget' => [
        'not_registered' => "Ein Widget namens ':name' wurde nicht registriert",
        'not_bound' => "Ein Widget mit dem Klassennamen ':name' wurde nicht mit dem Controller verbunden",
    ],
    'page' => [
        'untitled' => "Unbenannt",
    ],
    'partial' => [
        'not_found' => "Das Partial ':name' wurde nicht gefunden.",
    ],
    'account' => [
        'sign_out' => 'Abmelden',
        'login' => 'Anmelden',
        'reset' => 'Zurücksetzen',
        'restore' => 'Wiederherstellen',
        'login_placeholder' => 'Benutzername',
        'password_placeholder' => 'Passwort',
        'forgot_password' => "Passwort vergessen?",
        'enter_email' => "Bitte E-Mail-Adresse eingeben",
        'enter_login' => "Bitte Benutzernamen eingeben",
        'email_placeholder' => "E-Mail",
        'enter_new_password' => "Bitte ein neues Passwort eingeben",
        'password_reset' => "Passwort zurücksetzen",
        'restore_success' => "Eine E-Mail mit weiteren Anweisungen zum Zurücksetzen Ihres Passworts wurde an Sie versandt",
        'restore_error' => "Ein Benutzer mit dem Namen ':login' wurde nicht gefunden",
        'reset_success' => "Ihr Passwort wurde erfolgreich zurückgesetzt. Sie können sich jetzt anmelden.",
        'reset_error' => "Konnte Passwort nicht zurücksetzen. Bitte erneut versuchen!",
        'reset_fail' => "Passwort-Zurücksetzung nicht möglich!",
        'apply' => 'Anwenden',
        'cancel' => 'Abbrechen',
        'delete' => 'Löschen',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administratoren',
        'list_title' => 'Administratoren verwalten',
        'login' => "Anmelden",
        'first_name' => "Vorname",
        'last_name' => "Nachname",
        'full_name' => "Kompletter Name",
        'email' => "E-Mail",
        'groups' => "Gruppen",
        'groups_comment' => "Geben Sie hier die Gruppenzugehörigkeit an",
        'avatar' => "Avatar",
        'password' => "Passwort",
        'password_confirmation' => "Passwort bestätigen",
        'superuser' => "Super User",
        'superuser_comment' => "Bestätigen Sie hier, um dem Nutzer Vollzugriff zu geben",
        'send_invite' => 'Einladung per E-Mail versenden',
        'send_invite_comment' => 'Hier bestätigen, dass eine Einladung per E-Mail erfolgt',
        'group' => [
            'name' => 'Gruppe',
            'name_field' => 'Name',
            'menu_label' => 'Gruppen',
            'list_title' => 'Gruppen verwalten',
        ],
        'preferences' => [
            'not_authenticated' => 'Zum Speichern oder Anzeigen dieser Einstellungen liegt kein Nutzerkonto vor'
        ]
    ],
    'list' => [
        'default_title' => 'Auflisten',
        'search_prompt' => 'Suchen...',
        'no_records' => 'Keine Ergebnisse für diese Ansicht gefunden',
        'missing_model' => 'In :class benutztes Lisstenverhalten hat kein Model definiert.',
        'missing_column' => 'Keine Spaltendefinition für :columns.',
        'missing_columns' => 'In :class benutzte Liste behinhaltet keine Spalten',
        'missing_definition' => "Der Liste fehlt eine Spalte für ':field'.",
        'behavior_not_ready' => 'Listenverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
    ],
    'form' => [
        'create_title' => "Neuer :name",
        'update_title' => "Bearbeite :name",
        'preview_title' => "Vorschau für :name",
        'create_success' => ':name wurde erfolgreich erzeugt',
        'update_success' => ':name wurde erfolgreich aktualisiert',
        'delete_success' => ':name wurde erfolgreich gelöscht',
        'missing_id' => "Formulardatensatz-ID (Form record ID) fehlt.",
        'missing_model' => 'In :class genutztes Formularverhalten (behaviour) hat kein definiertes Model',
        'missing_definition' => "Formverhalten fehlt ein Feld für ':field'.",
        'not_found' => 'Formulareintrag mit der ID :id kann nicht gefunden werden.',
        'save' => 'Speichern',
        'save_and_close' => 'Speichern und schließen',
        'saving' => 'Wird gespeichert...',
        'undefined_tab' => 'Divers',
        'field_off' => 'Aus',
        'field_on' => 'An',
        'apply' => 'Anwenden',
        'cancel' => 'Abbrechen',
        'close' => 'Schließen',
        'delete' => 'Löschen',
        'ok' => 'OK',
        'confirm_tab_close' => 'Wollen Sie den Tab wirklich schließen? Ungespeicherte Änderungen gehen verloren.',
        'behavior_not_ready' => 'Formularverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
    ],
    'relation' => [
        'missing_definition' => "Verhalten (behaviour) der Verbindung umfasst keine Definition für ':field'.",
        'missing_model' => "Verhalten (behaviour) der Verbindung, die in :class benutzt wird, hat kein definiertes Model",
        'invalid_action_single' => "Dieser Vorgang kann nicht auf eine Einwege-Verbindung (singular) angewendet werden.",
        'invalid_action_multi' => "Dieser Vorgang kann nicht auf eine Mehrwege-Verbindung (multiple) angewendet werden.",
        'add' => "Hinzufügen",
        'add_name' => ":name hinzufügen",
        'create' => "Erstellen",
        'create_name' => "Erstelle :name",
        'remove' => "Entfernen",
        'remove_name' => ":name entfernen",
        'delete' => "Löschen",
        'delete_name' => ":name löschen",
    ],
    'model' => [
        'name' => "Model",
        'not_found' => "Model ':class' mit ID :id konnte nicht gefunden werden",
        'missing_id' => "Für diesen Model-Datensatz ist keine ID angegeben",
        'missing_relation' => "Model ':class' hat keine definierte Verbindung ':relation'.",
        'invalid_class' => "In :class benutztes Model :model ist ungültig, da es von der Klasse \Model abgeleitet sein muss (inherit).",
    ],
];