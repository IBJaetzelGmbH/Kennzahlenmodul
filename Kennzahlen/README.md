# Kennzahlen
Dieses Modul setzt Variablen in eine vorgegebene Formel ein und berechnet diese, sobald sich eine Variable ändert.

### Inhaltsverzeichnis

- [Kennzahlen](#kennzahlen)
    - [Inhaltsverzeichnis](#inhaltsverzeichnis)
    - [1. Funktionsumfang](#1-funktionsumfang)
    - [2. Voraussetzungen](#2-voraussetzungen)
    - [3. Software-Installation](#3-software-installation)
    - [4. Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
    - [5. Statusvariablen und Profile](#5-statusvariablen-und-profile)
      - [Statusvariablen](#statusvariablen)
      - [Profile](#profile)
    - [6. WebFront](#6-webfront)
    - [7. PHP-Befehlsreferenz](#7-php-befehlsreferenz)

### 1. Funktionsumfang

* Berechnung einer vorgegebenen Formel an von Variablen, welche in einer Liste definiert werden können.
* Die Berechnung wird ausgeführt, sobald eine variable aus der Liste aktualisiert wird.

### 2. Voraussetzungen

- IP-Symcon ab Version 6.0

### 3. Software-Installation

* Über das Module Control folgende URL hinzufügen

### 4. Einrichten der Instanzen in IP-Symcon

 Unter 'Instanz hinzufügen' kann das 'Kennzahlen'-Modul mithilfe des Schnellfilters gefunden werden.  
	- Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

__Konfigurationsseite__:

Name     | Beschreibung
-------- | ------------------
Variablen| In dieser Liste werden alle Variablen angegeben, welche für die Berechnung genutzt werden sollen. Der Name wird im Formel Textfeld verwendet. 
Formel| Hier wird die Formel hinterlegt, welche berechnet werden soll, der Name der Variablen aus der Liste kann hier verwendet werden. Von der Variable wird der Wert genommen.

### 5. Statusvariablen und Profile

Die Statusvariablen/Kategorien werden automatisch angelegt. Das Löschen einzelner kann zu Fehlfunktionen führen.

#### Statusvariablen

Name   | Typ     | Beschreibung
------ | ------- | ------------
Ergebnis|Float| Das Ergebnis der Berechnung wird in dieser Variable gespeichert. 

#### Profile

Es werden keine Profile angelegt

### 6. WebFront

Das Webfront zeigt das Ergebnis der Berechnung.

### 7. PHP-Befehlsreferenz

`K_Calculate(integer $InstanzID);`
Diese Funktion führt die Berechnung aus.

Beispiel:
`K_Calculate(12345);