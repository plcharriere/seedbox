# Seedbox

Quickly deploy a seedbox with self-hosted services using Docker and a single docker-compose.yml file.

Current services I use :

- [qBittorrent](https://github.com/qbittorrent/qBittorrent)
- [Jellyfin](https://github.com/jellyfin/jellyfin)
- [ownCloud](https://github.com/owncloud)
- [xBrowserSync](https://github.com/xBrowserSync)
- [Vaultwarden](https://github.com/dani-garcia/vaultwarden)
- [netdata](https://github.com/netdata/netdata)

## Screenshot

![Seedbox web portal screenshot](https://i.imgur.com/vZhFVX6.png)

## How to deploy

Install [Docker](https://docs.docker.com/get-docker/) and [docker-compose](https://docs.docker.com/compose/install/) on your machine and simply run :

```docker-compose up -d```