> :white_check_mark: *Jeśli będziesz mieć problem z rozwiązaniem tego zadania, poproś o pomoc na odpowiednim kanale na Slacku, tj. `s6e01-baby-steps` (dotyczy [mentee](https://devmentor.pl/mentoring/)) lub na ogólnodostępnej i bezpłatnej [społeczności na Discordzie](https://devmentor.pl/discord). Pamiętaj, aby treść Twojego wpisu spełniała [odpowiednie kryteria](https://devmentor.pl/jak-prosic-o-pomoc/).*

&nbsp;

# `#01` Laravel:  Eloquent (8-15)

Przygotuj mogrację, która będzie się składać z kilku etapów:
- utworzenie tabeli `projects`, która zawiera kolumny (wymyśl ich poprawne nazwy): nazwa, opis, link do kodu, link do dema, data ukończenia
- dodanie do tej tabeli kolejne tabeli, która będzie decydować o tym czy ten projekt ma być prezentowany na stronie np. `show`
- usunięcie kolumny data ukończenia

> **Podpowiedź!** Laravel rozpoznaje działania po nazwie migracji i odpowiednio go uzupełnia dlatego warto się z nimi zapoznać (zobacz przykłady poniżej). Pamiętaj, że migracja to co innego niż utworzenie modelu. Tego będzie dotyczyc następne zadanie.
> - create_ * _table → tworzenie tabeli
> - add_ * _to_ * _table → dodawanie kolumn
> - remove_ * _from_ * _table → usuwanie kolumn
> - drop_ * _table → usuwanie tabeli
> - rename_ * _to_ * _in_ * _table → zmiana nazwy kolumny
> - modify_ * _in_ * _table → modyfikacja kolumny


&nbsp;
> :no_entry: *Jeśli nie posiadasz materiałów do tego zadania tj. **Wideo**, znajdziesz je na stronie [laracasts.com](https://laracasts.com/referral/bogolubow)*

> :arrow_left: ~~*poprzednie zadanie*~~ | [*następne zadanie*](./../02) :arrow_right:
