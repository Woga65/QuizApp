<?php
$topic = $_GET['topic'];

switch ($topic) {
        case "scrum":
        $quiz = [
            [
                "category" => "Scrum",
                "question" => "Was sind die drei wichtigen Fragen an alle Teilnehmer beim Daily Standup?",
                "choices" => [ 
                    ["answer" => "Was habe ich gestern gemacht?",
                    "state"  => true],
                    ["answer" => "Wie weit sind wir im Sprint?",
                    "state"  => false],
                    ["answer" => "Was mache ich heute?",
                    "state"  => true],
                    ["answer" => "Was sind aktuell meine Herausforderungen?",
                    "state"  => true],
                    ["answer" => "Was sind meine Ideen für neue Tickets & User Stories?",
                    "state"  => false],
                ]
            ],
            [
                "category" => "Scrum",
                "question" => "Für was ist der Product Owner verantwortlich?",
                "choices" => [ 
                    ["answer" => "Effizienz des Scrum-Teams",
                    "state"  => false],
                    ["answer" => "Qualität des Produkts",
                    "state"  => true],
                    ["answer" => "User Stories & Tickets",
                    "state"  => true],
                    ["answer" => "Einhaltung von Scrum",
                    "state"  => false],
                    ["answer" => "Kundenfeedback wird in das Produkt eingearbeitet",
                    "state"  => true],
                    ["answer" => "Führung des IT-Teams",
                    "state"  => false],
                    ["answer" => "Übersetzung von Kunden- und Management-Anforderungen in IT-Tickets",
                    "state"  => true],
                    ["answer" => "Programmieren von Produktbestandteilen",
                    "state"  => false],
                ]
            ],
            [
                "category" => "Scrumm",
                "question" => "Was ist ein Epic?",
                "choices" => [ 
                    ["answer" => "Ein großes Ticket",
                    "state"  => false],
                    ["answer" => "Eine Kategorie von Tickets oder User Stories, die zu groß für ein einzelnes Ticket wäre",
                    "state"  => true],
                    ["answer" => "Eine wichtige User Story",
                    "state"  => false],
                ]
            ],
            [
                "category" => "Scrum",
                "question" => 'Was sollte ein Ticket auf jeden Fall beinhalten?',
                "choices" => [ 
                    ["answer" => 'Eine User Story ("As a User, I ...")',
                    "state"  => true],
                    ["answer" => "Low-Code Beschreibung der Problemlösung",
                    "state"  => false],
                    ["answer" => "Ungefährer Zeitaufwand",
                    "state"  => true],
                    ["answer" => "Definition, wer das Ticket umsetzen muss",
                    "state"  => false],
                    ["answer" => "Klare Kriterien, wann das Ticket fertig ist / erfüllt wurde",
                    "state"  => true],
                ]
            ],
            [
                "category" => "Scrum",
                "question" => "Was macht ein Scrum-Master?",
                "choices" => [ 
                    ["answer" => "Kümmert sich um das Produkt",
                    "state"  => false],
                    ["answer" => "Kümmert sich um die Effizienz des Scrum-Teams",
                    "state"  => true],
                    ["answer" => "Ist dafür verantwortlich, das Maximum aus den Scrum-Teams herauszuholen",
                    "state"  => true],
                    ["answer" => "Ist der oberste Programmierer in einem Scrum-Team",
                    "state"  => false],
                ]
            ],
            [
                "category" => "Scrum",
                "question" => "Welche Aussagen zu Scrum-Teams sind korrekt?",
                "choices" => [ 
                    ["answer" => "Scrum-Teams sind spezialisiert auf eine Fertigkeit",
                    "state"  => false],
                    ["answer" => "Scrum-Teams sind gemischt und bestehen aus unterschiedlichen Kompetenzen",
                    "state"  => true],
                    ["answer" => "Scrum-Teams müssen autark arbeiten können, ohne immer auf andere Teams zu warten",
                    "state"  => true],
                    ["answer" => "Je größer das Scrum-Team, desto besser",
                    "state"  => false],
                    ["answer" => "Scrum-Teams sollten nicht mehr als sieben Mitglieder haben",
                    "state"  => true],
                    ["answer" => "Ein Scrum-Team sollte in der Lage sein, selbständig neue Teilprodukte zu bauen",
                    "state"  => true],
                ]
            ],
        ];
        break;
//------------------
    case "rcstuff":
        $quiz = [
            [
                "category" => "rc-stuff",
                "question" => "Eine Taumelscheibe ...",
                "choices" => [ 
                    ["answer" => "dient der zyklischen Verstellung der Rotorblätter",
                    "state"  => true],
                    ["answer" => "findet man im Trainingsraum von Piloten",
                    "state"  => false],
                    ["answer" => "dient der kollektiven Verstellung der Rotorblätter",
                    "state"  => true],
                    ["answer" => "stabilisiert die Fluglage eines Helikopters",
                    "state"  => false],
                    ["answer" => "dient der Navigation",
                    "state"  => false],
                ]
            ],
            [
                "category" => "rc-stuff",
                "question" => "Wie viele Rotoren hat ein Quadcopter?",
                "choices" => [ 
                    ["answer" => "drei",
                    "state"  => false],
                    ["answer" => "vier",
                    "state"  => true],
                    ["answer" => "fünf oder mehr",
                    "state"  => false],
                ]
            ],
            [
                "category" => "rc stuff",
                "question" => "Im Modellflug verbreitete Protokolle für Drehzahlregler sind",
                "choices" => [ 
                    ["answer" => "Dshot",
                    "state"  => true],
                    ["answer" => "Headshot",
                    "state"  => false],
                    ["answer" => "DMX512",
                    "state"  => false],
                    ["answer" => "PWM",
                    "state"  => true],
                    ["answer" => "tcp/ip",
                    "state"  => false],
                    ["answer" => "Multishot",
                    "state"  => true]
                ]
            ],
            [
                "category" => "rc stuff",
                "question" => 'Was bedeutet das "S" bei einem 4S LiPo Akku?',
                "choices" => [ 
                    ["answer" => "Level der Schwierigkeit",
                    "state"  => false],
                    ["answer" => "Sinkgeschwindigkeit der Drohne",
                    "state"  => false],
                    ["answer" => "Anzahl der Zellen",
                    "state"  => true],
                    ["answer" => "Maximale Stromstärke",
                    "state"  => false]
                ]
            ],
            [
                "category" => "rc stuff",
                "question" => "Was ist ein ESC?",
                "choices" => [ 
                    ["answer" => "ESC steht für Electronic Speed Controller",
                    "state"  => true],
                    ["answer" => "Ein Sicherung aus China",
                    "state"  => false],
                    ["answer" => "Ein elektronischer Drehzahlregler",
                    "state"  => true],
                    ["answer" => "Ein ESC dient als Empfänger",
                    "state"  => false],
                    ["answer" => "Ein Schaden an der Elektronik",
                    "state"  => false]
                ]
            ],
            [
                "category" => "rc stuff",
                "question" => "Was bedeutet die KV Zahl an Elektromotoren?",
                "choices" => [ 
                    ["answer" => "Die Seriennummer des Motors",
                    "state"  => false],
                    ["answer" => "Kraft pro Volt",
                    "state"  => false],
                    ["answer" => "Umdrehungen pro Minute pro Volt",
                    "state"  => true],
                    ["answer" => "Die Motorleistung",
                    "state"  => false]
                ]
            ],
            [
                "category" => "rc software",
                "question" => "Welche Open Source Software für Flight-Controller ist verbreitet?",
                "choices" => [ 
                    ["answer" => "Betaflight",
                    "state"  => true],
                    ["answer" => "CentOS",
                    "state"  => false],
                    ["answer" => "ArduPilot",
                    "state"  => true],
                    ["answer" => "INAV",
                    "state"  => true],
                    ["answer" => "MS Flight",
                    "state"  => false],
                    ["answer" => "EmuFlight",
                    "state"  => true]
                ]
            ],
            [
                "category" => "rc hardware",
                "question" => "Auf welcher Hardwareachitektur basieren viele Flight-Controller?",
                "choices" => [ 
                    ["answer" => "x86-64",
                    "state"  => false],
                    ["answer" => "STM32",
                    "state"  => true],
                    ["answer" => "RISC V",
                    "state"  => false],
                    ["answer" => "AT Mega",
                    "state"  => true],
                    ["answer" => "ESP32",
                    "state"  => false]
                ]
            ],
            [
                "category" => "rc software",
                "question" => "Welche Programmiersprache wird oft für Flight-Controller Firmware genutzt?",
                "choices" => [ 
                    ["answer" => "Javascript",
                    "state"  => false],
                    ["answer" => "C",
                    "state"  => true],
                    ["answer" => "PHP",
                    "state"  => false],
                    ["answer" => "RUST",
                    "state"  => false]
                ]
            ],
        ];
        break;

//----------------
    case "cobol":
        $quiz = [
            [
                "category" => "cobol",
                "question" => "Welcher Ausdruck ist keine figurative Konstante",
                "choices" => [ 
                    ["answer" => "SPACES",
                    "state"  => false],
                    ["answer" => "QUOTE",
                    "state"  => false],
                    ["answer" => "BLANK",
                    "state"  => true],
                    ["answer" => "LOW-VALUE",
                    "state"  => false],
                    ["answer" => "COMMA",
                    "state"  => true],
                ]
            ],
            [
                "category" => "cobol",
                "question" => "Der Wert -382 wird einem PIC 9999+ Feld zugewiesen. Welchen Inhalt hat das Feld?",
                "choices" => [ 
                    ["answer" => "0382-",
                    "state"  => true],
                    ["answer" => "3820-",
                    "state"  => false],
                    ["answer" => "-0038",
                    "state"  => false],
                    ["answer" => "-0001",
                    "state"  => false],
                ]
            ],
            [
                "category" => "cobol",
                "question" => "In welcher Division wird der Computer spezifiziert, auf dem das Programm läuft?",
                "choices" => [ 
                    ["answer" => "IDENTIFICATION DIVISION",
                    "state"  => false],
                    ["answer" => "ENVIRONMENT DIVISION",
                    "state"  => true],
                    ["answer" => "DATA DIVISION",
                    "state"  => false],
                    ["answer" => "PROCEDURE DIVISION",
                    "state"  => false],
                ]
            ],
            [
                "category" => "cobol",
                "question" => "Anfangs: A=30, B=60 Code: IF A=40 DISPLAY 'ABC' ELSE NEXT SENTENCE END-IF   MOVE 90 TO B. DISPLAY B. Was wird ausgegeben?",
                "choices" => [ 
                    ["answer" => "30",
                    "state"  => false],
                    ["answer" => "60",
                    "state"  => true],
                    ["answer" => "90",
                    "state"  => false],
                ]
            ],
            [
                "category" => "cobol",
                "question" => "Wie viele Bytes belegt eine S9(7) COMP-3 Variable?",
                "choices" => [ 
                    ["answer" => "4",
                    "state"  => true],
                    ["answer" => "6",
                    "state"  => false],
                    ["answer" => "8",
                    "state"  => false],
                    ["answer" => "1",
                    "state"  => false],
                ],
            ],
            [
                "category" => "cobol",
                "question" => "Mit welchem Statement kann man eine Variable deklarieren, die den selben Speicherbereich wie eine bereits deklarierte Variable nutzt?",
                "choices" => [ 
                    ["answer" => "JUSTIFIED",
                    "state"  => false],
                    ["answer" => "REDEFINES",
                    "state"  => true],
                    ["answer" => "USAGE",
                    "state"  => false],
                    ["answer" => "SIGN",
                    "state"  => false],
                ],
            ],
            [
                "category" => "cobol",
                "question" => "A=10, B=20, C=30, D=0 Das Resultat von ADD A B TO C GIVING D ist ...",
                "choices" => [ 
                    ["answer" => "60",
                    "state"  => true],
                    ["answer" => "50",
                    "state"  => false],
                    ["answer" => "20",
                    "state"  => false],
                    ["answer" => "10",
                    "state"  => false],
                ],
            ],
            [
                "category" => "cobol",
                "question" => "Um welche Programmiersprache ging es bei dem Quiz?",
                "choices" => [ 
                    ["answer" => "ALGOL",
                    "state"  => false],
                    ["answer" => "Basic",
                    "state"  => false],
                    ["answer" => "COBOL",
                    "state"  => true],
                    ["answer" => "JavaScript",
                    "state"  => false],
                    ["answer" => "FORTRAN",
                    "state"  => false],
                ],
            ],
        ];
        break;

//----------------
    default:
        $quiz = [
            [
                "category" => "none",
                "question" => "Das ist das Haus vom ...",
                "choices" => [
                    ["answer" => "Weihnachtsmann",
                    "state" => false],
                    ["answer" => "Osterhasen",
                    "state" => false],
                    ["answer" => "Nikolaus",
                    "state" => true],
                    ["answer" => "Milchmann",
                    "state" => false],
                ]
            ],
        ];
        
}
header('Content-type: application/json;charset=utf-8');
header('Access-Control-Allow-Origin: *');
echo json_encode($quiz);

?>
