# Symfony template

Tento template je vhodné si naklonovat rovnou už v GitLabu, protože
projekt už bude mít pojmenování podle vašeho přání.
Součástí template je i konfigurace DOCKERU.

## Základní příkazy pro konfiguraci kontejneru

#### Build image
```sh
docker-compose build
```
Toto by melo stahnout a nastavit vše potřebné

#### Sestaveni a spustení kontejneru
```sh
docker-compose up  -d nebo
docker-compose up -d --build
```
V tuto chvili by mel byt docker projekt ready na http://localhost:84 viz soubor docker-compose.yml,
kde to jde i změnit. --build používáme pro přegenerování image kontejneru.
```sh
http://localhost:84
```

#### ukončení kontejneru
```sh
docker-compose down  
```
Potom je možné i na stejný port spustit jiný kontejner.

## SQL databáze a adminer

Součásti konfigurace je SQL databáze a adminer. Najdeme jí na url:
```sh
http://localhost:84/adminer
```
Databáze mezi kontejnery je na portu 3306 viz soubor docker-compose.yml.
Není potřeba psát do připojení k databázi IP a port. Stačí název service
ze souboru docker-compose.yml vč. jména root a hesla.
```sh
mysqldb
```
Neukládejte na Gitlab soubory DB, pouze sql dump. Jedná se o adresář ./data/database, který musí zůstat
git ignore.



## Nastavení přístupu k DB přes doctrine
Nastavujeme v souboru env na root webu
```
DATABASE_URL="mysql://pokus:pokus@mysqldb:3306/pokus?serverVersion=mariadb-10.7.3&charset=utf8mb4"
```

## Základní příkazy pro doctrine
Příkazy zadáváme v docker containeru

#### vypiše seznam příkazů
```sh
php bin/console list make
```

#### vytvoreni entity
```sh
php bin/console make:entity
```
Pro relaci v průvodci vytvoříme "type relation"

```sh
php bin/console make:migration
```
Připraví sql k migraci

```sh
php bin/console doctrine:migrations:migrate
```
Vytvoří tabulky v DB

#### vytvoření entit z existující tabulky
```sh
php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
```
Prvním krokem k vytvoření tříd entit z existující databáze je požádat Doctrine, aby 
si databázi prohlédla a vygenerovala odpovídající soubory metadat. 
Soubory metadat popisují třídu entity, která se má generovat na základě polí tabulky.

Tento nástroj příkazového řádku žádá Doctrinu, aby prozkoumala databázi a vygenerovala 
nové třídy PHP s metadaty anotací do src/Entity. Tím se vygenerují dva soubory: 
BlogPost.phpa BlogComment.php.

#### úpravy existujících entit
```sh
php bin/console make:entity --regenerate
```
Regeneruje entity

```sh
php bin/console make:migration
```
Připraví sql k migraci

```sh
php bin/console doctrine:migrations:migrate
```
Vytvoří/upraví tabulky v DB

```sh
bin/console doctrine:migrations:sync-metadata-storage
```
Synchronizuje metadata

#### všechny příkazy
```sh
doctrine:migrations:current [aktuální] Vypíše aktuální verzi.
doctrine:migrations:diff [diff] Vygenerujte migraci porovnáním vaší aktuální databáze s vašimi mapovacími informacemi.
doctrine:migrations:dump-schema [schéma výpisu] Vypište schéma pro vaši databázi do migrace.
doctrine:migrations:execute [execute] Manuální spuštění jedné verze migrace nahoru nebo dolů.
octrine:migrations:generate [generate] Vygeneruje prázdnou třídu migrace.
doctrine:migrations:latest [latest] Vypíše číslo nejnovější verze
doctrine:migrations:migrate [migrate] Proveďte migraci na zadanou verzi nebo na nejnovější dostupnou verzi.
doctrine:migrations:rollup [souhrnná] Shrňte migrace odstraněním všech sledovaných verzí a vložením jediné verze, která existuje.
doctrine:migrations:status [stav] Zobrazení stavu sady migrací.
doctrine:migrations:up-to-date [up-to-date] Řekne vám, zda je vaše schéma aktuální.
doctrine:migrations:version [verze] Ručně přidat a odstranit verze migrace z tabulky verzí.
doctrine:migrations:sync-metadata-storage [sync-metadata-storage] Zajišťuje, že úložiště metadat je v nejnovější verzi.
doctrine:migrations:list [list-migrations] Zobrazí seznam všech dostupných migrací a jejich stav.
```

## Základní příkazy pro tvorbu formulářu
Příkazy zadáváme v docker containeru

#### 
```sh
php bin/console make:form
```
V prvním kroku zadáme název formuláře a ve druhém kroku název entity.



