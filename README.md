# PHP Lab Test 02

This is a full LAMP stack, including MariaDB.

### Using this thing

1. Copy `starting.env`, then rename that copy `.env`.
2. Copy `starting.globals.env`, then rename that copy `globals.env`, and add any globals you need, if any, to the renamed file.
3. In the VS Code terminal, run the command `docker compose up --watch`.
4. Once you see the webserver is running, you can access `localhost` in a browser safely.

If you need to stop the server, you can use `ctrl+c`, then restart it again with `docker compose up --watch`.

## Working with the DB

Once your server is up and running, you can use Adminer at `localhost:8888` to futz with your DB.
- username: `root`
- password: `comp3512` (or whatever you put in `./secrets/db_root_password.txt`)

### What goes where

You should only need to work within the `www` directory. If you choose otherwise, you should know what you're doing. :)


### Changelog

#### 2025.09.19
- Modified `/config/php/php.ini` so that it doesn't allow short tags (`<? ?>`).
- Removed healthcheck altogether from `compose.yml`.