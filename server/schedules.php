<?php 

return [
    'schedules' => 'Zeitpläne',
    'manage-schedules' => 'Zeitpläne verwalten',
    'create-schedule' => 'Zeitplan erstellen',
    'name' => 'Name',
    'last-run-at' => 'Letzte Nutzung am',
    'next-run-at' => 'Nächste Nutzung um',
    'status' => 'Status',
    'active' => 'Aktiv',
    'inactive' => 'Inaktiv',
    'processing' => 'Verarbeitung',
    'manage-schedule' => 'Zeitplan verwalten',
    'new-task' => 'Neue Aufgabe',
    'run-now' => 'Jetzt ausführen',
    'editBtn' => 'Bearbeiten',
    'n/a' => 'n/a',
    'never' => 'nie',

    'no-schedules' => 'Für diesen Server sind keine Zeitpläne konfiguriert.',
    'ignore-files-folders' => 'Ignorieren von Dateien & Ordnern',
    'continues-on-failure' => 'Wird bei Ausfall fortgesetzt',
    'later' => 'Später',

    'minute' => 'Minute',
    'hour' => 'Stunde',
    'day' => 'Tag',
    'week' => 'Woche',
    'day-of-month' => 'Tag des Monats',
    'month' => 'Monat',
    'day-of-week' => 'Tag der Woche',

    'deleteTask' => [
        'title' => 'Bestätige die Löschung der Aufgabe',
        'description' => 'Bist du sicher, dass du diese Aufgabe löschen willst? Diese Aktion kann nicht rückgängig gemacht werden.',
        'delete' => 'Aufgabe löschen'
    ],
    'delete' => [
        'title' => 'Zeitplan löschen',
        'description' => 'Alle Aufgaben werden entfernt und alle laufenden Prozesse werden beendet.',
        'delete' => 'Löschen'
    ],
    'edit' => [
        'title-1' => 'Zeitplan bearbeiten',
        'title-2' => 'Neuen Zeitplan erstellen',

        'description' => 'Das Zeitplansystem unterstützt die Verwendung der Cronjob-Syntax, wenn es darum geht, festzulegen, wann die Aufgaben ausgeführt werden sollen. Verwende die obigen Felder, um festzulegen, wann die Aufgaben ausgeführt werden sollen.',
        
        'name' => 'Zeitplanname',
        'name-description' => 'Ein menschenlesbarer Bezeichner für diesen Zeitplan.',
        'cheatsheet' => 'Cheatsheet anzeigen',
        'cheatsheet-description' => 'Zeige das Cron Cheatsheet für einige Beispiele',
        'online-when-online' => 'Nur wenn der Server online ist',
        'online-when-online-description' => 'Diesen Zeitplan nur ausführen, wenn der Server in Betrieb ist.',
        'enabled' => 'Schedule Enabled',
        'enabled-description' => 'Dieser Zeitplan wird automatisch ausgeführt, wenn er aktiviert ist.',

        'save-changes' => 'Änderungen speichern',
    ],
    'cheatsheet' => [
        'example' => 'Beispiele',
        'every-5-minutes' => 'alle 5 Minuten',
        'every-hour' => 'jede Stunde',
        'hour-range' => 'Stundenbereich',
        'once-a-day' => 'einmal am Tag',
        'every-monday' => 'jeden Montag',
        'special-characters' => 'Sonderzeichen',
        'any-value' => 'beliebiger Wert',
        'value-list-separator' => 'Wertelisten-Trennzeichen',
        'range-values' => 'Bereichswerte',
        'step-values' => 'Schritt-Werte',
    ],
    'task' => [
        'message' => 'Ein Sicherungsauftrag kann nicht erstellt werden, wenn das Sicherungslimit des Servers auf 0 gesetzt ist.',
        'edit-task' => 'Aufgabe bearbeiten',
        'save-changes' => 'Änderungen speichern',
        'create-task' => 'Aufgabe erstellen',
        'action' => 'Aktion',
        'send-command' => 'Befehl senden',
        'send-power-action' => 'Power-Aktion senden',
        'create-backup' => 'Backup erstellen',
        'offset' => 'Zeitversatz (in Sekunden)',
        'offset-description' => 'Die Zeitspanne, die nach der Ausführung der vorherigen Aufgabe gewartet wird, bevor die neue Aufgabe ausgeführt wird. Wenn dies die erste Aufgabe in einem Zeitplan ist, wird dies nicht berücksichtigt.',
        'payload' => 'Nutzlast',
        'ignored-files' => 'Ignorierte Dateien',
        'ignored-files-description' => 'Optional. Füge die Dateien und Ordner hinzu, die bei diesem Backup ausgeschlossen werden sollen. Standardmäßig wird der Inhalt deiner .pteroignore-Datei verwendet. Wenn du dein Backup-Limit erreicht hast, wird das älteste Backup rotiert.',
        'start-server' => 'Starte den Server',
        'stop-server' => 'Den Server anhalten',
        'restart-server' => 'Starte den Server neu',
        'kill-server' => 'Beende den Server',
        'continue-on-failure' => 'Bei Ausfall fortfahren',
        'continue-on-failure-description' => 'Wenn diese Aufgabe fehlschlägt, werden zukünftige Aufgaben ausgeführt',
    ],
];
