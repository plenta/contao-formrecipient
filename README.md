# formrecipient - contao extension

## Bietet die Möglichkeit den E-Mail-Empfänger aus einem Formularfeld auszulesen

Ermöglicht die Eingabe des InsertTags {{form::feldname}} (dabei natürlich "feldname" durch den Name des Feldes ersetzen) im Empfängerfeld der Formularkonfiguration. Dabei wird der Wert dieses Feldes als E-Mail-Empfänger gesetzt. Das InsertTag funktioniert sowohl mit Standardformularen als auch mit dem EFG.

ACHTUNG: Das Feld sollte über andere Module (z.B. protectedselect) gegen Manipulation abgesichert sein. Andernfalls ist der Missbrauch des Formulars zum SPAM-Versand möglich!

## Contributor

* Christian Barkowsky <hallo@christianbarkowsky.de>
* Jan Theofel