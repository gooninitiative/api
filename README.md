<p align="center">
    <img src="https://avatars.githubusercontent.com/u/116578301?s=200&v=4" width="100" alt="Goon" />
</p>
<h1 align="center">
    Goon APIs
</h1>
<p align="center">
    An open-source platform designed to bridge the digital divide between rural and urban communities in Cameroon.
</p>

## What is Goon

Goon is an open-source platform designed to bridge the digital divide between rural and urban communities by providing offline digital services to community members.

## Getting Started

### Requirements

You need to install `docker` and `docker-compose` in order to start the API server.

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
| Port number (on your host machine) | Service | Description |
| --- | --- | --- |
| 8000 | API Gateway | Every API is available via 8000 |
| 8001 | Identity API | Giving an identity to users (authentication and creation) |
| 8002 | Elearning API | Use [kiwix](https://www.kiwix.org/en/) and [kolibri](https://learningequality.org/kolibri/) to provide offline educational sources like Wikipedia. |
| 8003 | Blog API | Writing posts, adding videos, aggregating local news from reliable news sources. |
| 8004 | Survey API | Survey forms for needs analysis and evaluation across different projects. |
| 8005 | Chat API | Where users should be able to exchange texts, voice messages, pdf files, audio files, and images. |
| 8006 | Internet API | Manage vouchers to give access to the Internet (more specific service) |

## Architecture

The API is designed in a set of microservices that can be plugged in and unplugged easily without breaking down other services.

### Authentication
