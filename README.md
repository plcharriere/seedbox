# Seedbox

Quickly deploy a seedbox with self-hosted services and a web portal using Docker and a single docker-compose.yml file.

## Screenshot

![Seedbox web portal screenshot](https://i.imgur.com/vZhFVX6.png)

## Services

Current services I use :

- [qBittorrent](https://github.com/qbittorrent/qBittorrent)
- [Jellyfin](https://github.com/jellyfin/jellyfin)
- [ownCloud](https://github.com/owncloud)
- [xBrowserSync](https://github.com/xBrowserSync)
- [Vaultwarden](https://github.com/dani-garcia/vaultwarden)
- [netdata](https://github.com/netdata/netdata)

## How to setup and deploy

### Setup

Copy and configure your environment file :

`cp .env.example .env`

### Deploy

Install [Docker](https://docs.docker.com/get-docker/) and [docker-compose](https://docs.docker.com/compose/install/) on your machine and simply run :

`docker-compose up -d`

Then access the web portal at [http://localhost:80](http://localhost:80)

## Notes

Default username for qBittorrent is `admin` and password is `adminadmin`
(cf. [hub.docker.com/r/linuxserver/qbittorrent](https://hub.docker.com/r/linuxserver/qbittorrent))