<p align="center">
    <img src="https://avatars.githubusercontent.com/u/116578301?s=200&v=4" width="100" alt="Goon" />
</p>
<h1 align="center">
    Goon APIs
</h1>
<p align="center">
    An open-source platform designed to bridge the digital divide between rural and urban communities in Cameroon.
</p>

## Users API Service

We have two type of users: **Admin** and **User**. We need to be able to:
- Create new users
- Update users informations (need to communicate with the auth service in order to update the his password as well)
- Read users informations
- Delete users

### Create
`Admins` are responsible to create users. But a `Visitor` can decide to sign up too.

### Update
`Admins` can update any user info. A `User` can only update its own info.

### Read
Anyone can read a user info.

### Delete
Only `Admins` can delete users.
