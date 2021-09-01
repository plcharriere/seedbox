# Seedbox

Quickly deploy and configure a seedbox with self-hosted services and a web portal using Docker and a single docker-compose.yml file.

## Screenshot

![Seedbox web portal screenshot](https://i.imgur.com/t5GmvQT.png)

## Services

- [qBittorrent](https://github.com/qbittorrent/qBittorrent)
- [Jellyfin](https://github.com/jellyfin/jellyfin)
- [ownCloud](https://github.com/owncloud)
- [xBrowserSync](https://github.com/xBrowserSync)
- [Vaultwarden](https://github.com/dani-garcia/vaultwarden)
- [netdata](https://github.com/netdata/netdata)

## How to setup and deploy

### Setup

Copy and configure your environment file :

```
cp .env.example .env
```

### Deploy

Install [Docker](https://docs.docker.com/get-docker/) and [docker-compose](https://docs.docker.com/compose/install/) on your machine and simply run :

```
docker-compose up -d
```

Then you can access the web portal at [http://localhost:80](http://localhost:80)

## How to add a service

Find a Docker image for your service and add it to the `docker-compose.yml` file.

Configure a reverse proxy endpoint in the `nginx/nginx.conf` file for your service and add it to the web portal in `nginx/html/index.php`.

Create and start new containers with :

```
docker-compose up -d
```

And reload your nginx configuration with :

```
docker exec seedbox_nginx_1 nginx -s reload
```

## Notes

Services data and configurations are stored in `services/`

Default username for qBittorrent is `admin` and password is `adminadmin`
(cf. [hub.docker.com/r/linuxserver/qbittorrent](https://hub.docker.com/r/linuxserver/qbittorrent))

qBittorrent downloads are stored in `services/qbittorrent/downloads/`

qBittorrent downloads folder is mounted in Jellyfin container at `/downloads`

You can access qBittorrent downloads folder listing at [http://localhost:80/downloads](http://localhost:80/downloads)