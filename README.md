<p align="center">
    <img src="https://avatars.githubusercontent.com/u/116578301?s=200&v=4" width="100" alt="Goon" />
</p>
<h1 align="center">
    Goon APIs
</h1>
<p align="center">
    An open-source platform designed to bridge the digital divide between rural and urban communities in Cameroon.
</p>

</p>

## Getting Started

### Requirements

You need to install `docker` and `docker-compose` in order to run the API.

### Installing the project

Clone this repository.

```bash
git clone https://github.com/gooninitiative/api.git
```

Start the docker containers.

```bash
docker-compose up -d
```

Here you can see what ports are being used:
| Port number (on your host machine) | Service |
| --- | --- |
| 8000 | Proxy. Every API available via 8000 |
| 8001 | Authentication API |
| 8002 | Users API |
| 8003 | Blog API |
| 8004 | Elearning API |
| 8005 | Chat API |
| 8006 | Survey API |
| 8007 | Internet API |

## What is Goon

Goon is an open-source platform designed to bridge the digital divide between rural and urban communities by providing offline digital services to community members.
