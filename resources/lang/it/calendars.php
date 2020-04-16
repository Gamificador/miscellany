<?php

return [
    'actions'       => [
        'add_epoch'         => 'Aggiungi un\'epoca',
        'add_intercalary'   => 'Aggiungi giorni intercalari',
        'add_month'         => 'Aggiungi un mese',
        'add_moon'          => 'Aggiungi una luna',
        'add_season'        => 'Aggiungi una stagione',
        'add_week'          => 'Aggiungi una settimana con un nome',
        'add_weekday'       => 'Aggiungi un giorno della settimana',
        'add_year'          => 'Aggiungi un nome dell\'anno',
        'set_today'         => 'Imposta come giorno corrente',
        'today'             => 'Oggi',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Accade ogni anno',
    ],
    'create'        => [
        'description'   => 'Crea un nuovo calendario',
        'success'       => 'Calendario \':name\' creato.',
        'title'         => 'Nuovo Calendario',
    ],
    'destroy'       => [
        'success'   => 'Calendario \':name\' rimosso.',
    ],
    'edit'          => [
        'description'   => 'Aggiorna il calendario',
        'success'       => 'Calendario \':name\' aggiornato.',
        'title'         => 'Modifica Calendario :name',
        'today'         => 'Data del calendario aggiornata.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Entità esistente',
            'new'       => 'Nuovo Evento',
            'switch'    => 'Cambia scelta',
        ],
        'create'    => [
            'description'   => 'Crea un evento del calendario',
            'success'       => 'Evento del calendario creato',
            'title'         => 'Aggiungi un Evento del Calendario su :name',
        ],
        'destroy'   => 'Evento rimosso dal calendario \':name\'',
        'edit'      => [
            'description'   => 'Aggiorna un evento del calendario',
            'success'       => 'Evento del calendario aggiornato',
            'title'         => 'Aggiorna un Evento del Calendario per :name',
        ],
        'helpers'   => [
            'add'   => 'Aggiungi un evento esistente a questo calendario',
            'new'   => 'O crea un nuovo evento semplicemente fornendone il nome',
        ],
        'modal'     => [
            'title' => 'Aggiungi un evento al calendario',
        ],
        'success'   => 'Evento \':event\' aggiunto al calendario.',
    ],
    'events'        => [
        'description'   => 'Eventi in questo calendario',
        'title'         => 'Eventi del Calendario :name',
    ],
    'fields'        => [
        'colour'                => 'Colore',
        'comment'               => 'Commento',
        'current_day'           => 'Giorno corrente',
        'current_month'         => 'Mese corrente',
        'current_year'          => 'Anno corrente',
        'date'                  => 'Data corrente',
        'has_leap_year'         => 'Ha anni bisestili',
        'intercalary'           => 'Giorni intercalari',
        'is_incrementing'       => 'Data di Avanzamento',
        'is_recurring'          => 'Ricorrente',
        'leap_year_amount'      => 'Aggiungi Giorni',
        'leap_year_month'       => 'Mese',
        'leap_year_offset'      => 'Ogni',
        'leap_year_start'       => 'Anno bisestile',
        'length'                => 'Durata Evento',
        'length_days'           => ':count giorno|:count giorni',
        'months'                => 'Mesi',
        'moons'                 => 'Lune',
        'name'                  => 'Nome',
        'parameters'            => 'Parametri',
        'recurring_periodicity' => 'Periodicità Ricorrente',
        'recurring_until'       => 'Ricorrente fino all\'Anno',
        'reset'                 => 'Ripristino Settimanale',
        'seasons'               => 'Stagioni',
        'start_offset'          => 'Offset Iniziale',
        'suffix'                => 'Suffisso',
        'type'                  => 'Tipo',
        'week_names'            => 'Nomi della Settimana',
        'weekdays'              => 'Giorni della Settimana',
    ],
    'helpers'       => [
        'month_type'    => 'I mesi intercalari non utilizzano i giorni della settimana ma influenzano comunque le fasi lunari e le stagioni.',
        'start_offset'  => 'In maniera predefinita il calendario inizia col primo giorno della settimana dell\'anno 0. Cambiare questo campo influenzerà il primo giorno del calendario.',
    ],
    'hints'         => [
        'intercalary'       => 'Giorni che cadono al difuori dei nomali mesi e dettimane. Non influenzano i giorni della settimana ma influenzano le fasi lunari.',
        'is_incrementing'   => 'I calendari con avanzamento incrementeranno automaticamente la loro data corrente alle 00:00 UTC.',
        'is_recurring'      => 'Un evento può essere ricorrente. Apparirà ogni anno alla stessa data.',
        'months'            => 'Il tuo calendario deve avere almeno 2 mesi.',
        'moons'             => 'Aggiungere lune le farà apparire sul calendario ad ogni luna piena.',
        'reset'             => 'Inizia sempre il primo giorno del mese o dell\'anno col primo giorno della settimana.Definisci alcuni nomi per le settimane più importanti del tuo calendario.',
        'seasons'           => 'Crea stagioni per il tuo calendario dicendo quando ha inizio ognuna di esse. Kanka si preoccuperà del resto.',
        'weekdays'          => 'Imposta i nomi dei tuoi giorni della settimana. Sono necessari almeno 2 giorni della settimana.',
        'weeks'             => 'Definisci alcuni nomi per le settimane più importanti del tuo calendario.',
        'years'             => 'Alcuni anni sono così importanti che hanno un nome specifico.',
    ],
    'index'         => [
        'add'           => 'Nuovo Calendario',
        'description'   => 'Gestisci i calendari di :name.',
        'header'        => 'Calendari di :name',
        'title'         => 'Calendari',
    ],
    'layouts'       => [
        'month' => 'Mese',
        'year'  => 'Anno',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Cambio Anno',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Intercalari',
        'standard'      => 'Normali',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'month' => 'Mensile',
                'year'  => 'Annuale',
            ],
        ],
        'resets'    => [
            ''      => 'Nessuno',
            'month' => 'Mensile',
            'year'  => 'Annuale',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Giorni di intercalazione',
        'leap_year'     => 'Anno Bisestile',
        'months'        => 'Mesi',
        'weeks'         => 'Settimane',
        'years'         => 'Anni Nominati',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Durata in giorni',
            'month'     => 'Alla fine di quale mese',
            'name'      => 'Nome dell\'intercalazione',
        ],
        'month'         => [
            'alias' => 'Alias del Mese',
            'length'=> 'Numero di Giorni',
            'name'  => 'Nome del Mese',
            'type'  => 'Tipo',
        ],
        'moon'          => [
            'fullmoon'  => 'Luna piena ogni (giorni)',
            'name'      => 'Nome della Luna',
            'offset'    => 'Offset della prima luna piena',
        ],
        'seasons'       => [
            'day'   => 'Giorno iniziale',
            'month' => 'Mese iniziale',
            'name'  => 'Nome della Stagione',
        ],
        'weeks'         => [
            'name'      => 'Nomi della Settimana',
            'number'    => 'Numero',
        ],
        'year'          => [
            'name'      => 'Nome dell\'Anno',
            'number'    => 'Anno',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Colore',
        'comment'           => 'Compleanno, festival, solstizio',
        'date'              => 'La data corrente',
        'leap_year_amount'  => 'Numero di giorni aggiunti in un anno bisestile',
        'leap_year_month'   => 'Mese in cui i giorni sono aggiunti',
        'leap_year_offset'  => 'Ogni quanti anni è un anno bisestile',
        'leap_year_start'   => 'Primo anno che è un anno bisestile',
        'length'            => 'Durata dell\'Evento in giorni',
        'months'            => 'Numero di mesi in un anno',
        'name'              => 'Nome del calendario',
        'recurring_until'   => 'Ultimo anno di ricorrenza (lascia vuoto per ripetere in eterno)',
        'seasons'           => 'Numero di stagioni',
        'suffix'            => 'Suffisso dell\'Era corrente (AC, BC)',
        'type'              => 'Tipo del calendario',
        'weekdays'          => 'Numero di giorni in una settimana',
    ],
    'show'          => [
        'description'       => 'Una vista dettagliata del calendario',
        'missing_details'   => 'Questo calendario non può essere visualizzato. I Calendari necessitano almeno di 2 mesi e 2 giorni della settimana per essere visualizzati correttamente.',
        'moon_full_moon'    => ':moon Luna Piena',
        'moon_new_moon'     => ':moon Luna Nuova',
        'moon_waning_moon'  => ':moon Decrescente',
        'moon_waxing_moon'  => ':moon Crescente',
        'tabs'              => [
            'events'        => 'Eventi del Calendario',
            'information'   => 'Informazioni',
            'weather'       => 'Clima',
        ],
        'title'             => 'Calendario :name',
    ],
];
