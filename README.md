# ASNA Group

Company profile website for ASNA Group, a family business that started as a snack distributor in the early 2000s and now also runs a grocery store (Toko Asna) and a coffee shop (Kedai Asna).

## Two ways to run it

Every page is a PHP template in this repo, rendered in one of two modes:

| Mode | Where | Visitor reviews |
|---|---|---|
| Dynamic | Any PHP server with MySQL | Yes |
| Static | GitHub Pages (the `.html` files) | No — GitHub Pages cannot run PHP |

### Dynamic (local)

```bash
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS asna"
mysql -u root -p asna < schema.sql
DB_HOST=127.0.0.1 DB_USER=root DB_PASS=your-password php -S localhost:8080
```

Then open http://localhost:8080. Database settings are read from `DB_HOST`, `DB_PORT`, `DB_USER`, `DB_PASS` and `DB_NAME` (default `asna`); never write real credentials into `config.php`. Without a database the site still renders and the reviews section shows that reviews are unavailable.

### Static (GitHub Pages)

After editing any `.php` page, regenerate the HTML and commit it:

```bash
./build-static.sh
```

`_config.yml` keeps the PHP sources, schema and scripts out of the published site.

## Stack

HTML, CSS, Bootstrap, PHP, MySQL.
