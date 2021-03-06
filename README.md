# Supermarkt-boxjes
(NL) Met deze boxjes kan je bijhouden hoeveel mensen er in je winkel zijn.

Dit tackelt het probleem dat ontstaan is door corona, waarbij iedereen verplicht een mandje moet meenemen als ze de supermarkt in gaan. Dit hebben we opgelost door een slim systeem te ontwerpen die bijhoudt hoeveel mensen er in de winkel zijn. Hoe het werkt is dat er bij de ingangen en uitgangen van een winkel poortjes geplaatst kunnen worden, die met de master-hub communiceren over het aantal klanten in de winkel. Wat we hiermee bereiken is dat we het probleem oplossen dat we deze pandemie hebben gezien, namelijk dat er een maximaal aantal klanten in een winkel mogen zijn. Voorheen deden winkels dat door een aantal mandjes neer te zetten bij de ingang, en als de mandjes op waren geen klanten meer binnen te laten. Nu kan dat dus gemakkelijk doordat de poortjes je kunnen vertellen of er nog ruimte is. Wat nog een handige extra is aan deze oplossing, is dat je data kan verzamelen van wanneer het druk is in de winkel, en hoeveel klanten je op een bepaalde dag kan verwachten. Door algoritmes te gebruiken op deze data kan je bijvoorbeeld voorspellen wanneer je een drukke dag kan verwachten.



Hoe alles samenwerkt:

De input van de knoppen wordt gemonitord door een python script die een request naar de API stuurt zodra er op de knop wordt gedrukt. Op de server wordt dan berekend of er al te veel mensen in de winkel zijn, of dat het persoon kan doorlopen. Bij de verschillende scenario’s worden verschillende dingen gedaan. Bijvoorbeeld dat de LEDs veranderd worden, of dat er helemaal niks gedaan wordt omdat er al het maximaal aantal of geen mensen in de winkel is. Omdat dit een API is is het dus ook mogelijk om vanaf andere devices deze API aan te roepen, bijvoorbeeld met een qr-code die verwijst naar de server. Om te voorkomen dat mensen niet de site herladen zit er aan het einde van elk request een redirect naar een geschikte pagina.
