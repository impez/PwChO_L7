## Michał Walczuk, PwChO 

Projekt składa się z trzech plików Dockerfile i jednego docker-compose.yml.
Port używany w projekcie to 8090, ponieważ port 6666 jest portem
zastrzeżonym przez system.

Utworzony został osobny pool podłączony do portu 9009 dla aplikacji webowej. Kontekst strony jest umieszczony w katalogu /srv/strona. Aplikacja korzysta z aliasu dla kontenera z bazą danych.
Kontener został podłączony do sieci backend.

Hasło do dla uzytkownika root jest ustawione w pliku Docker-compose.MySQL jest podłaczony do sieci backend.
Dodatkowo żeby po restarcie kontenera nie utracic danych trzymanych w bazie volumen dubluje dane z
systemu macierzystego w bazie MySQL wewnątrz kontenera baza_danych.

Default'owy config httpd nie pozwala na użycie proxymatcha oraz vhostów, więc
plik ten został zmieniony. Dyrektywa ProxyPassMatch zapewnia prawidłowe proxowanie,
w pliku httpd.conf dodano załadowanie bibliotek i metod potrzebnych dla poprawnego działania proxy.
Dodatkowe pliki konfiguracyjne: httpd.conf oraz httpd-vhosts.conf

## Uruchomienie

Pierwsze uruchomienie wygłada następująco:

```
docker-compose build --no-cache
docker-compose up
```

Następnie:

```
docker-compose down --remove-orphans --volumes --rmi all
```

I ponowne uruchomienie:

```
docker-compose build --no-cache
docker-compose up
```
