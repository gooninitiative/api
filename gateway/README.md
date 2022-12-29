# API Gateway
The API gateway is responsible for **authenticating** requests and **redirecting** them to the correct service.

## Functional Requirements
The API gateway registers all service routes, taking into account the visibility status of each.
The access to a route can be `restricted` or not.
When route access is restricted, we can define a set of user roles as a white list. Otherwise, any authenticated user is automatically granted access.
