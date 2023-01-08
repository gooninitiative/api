import dotenv from 'dotenv';
import express, { Express, Request, Response } from 'express';
import httpProxy from 'express-http-proxy';
import request from 'request-promise-native';

dotenv.config();
const app: Express = express();
const host = process.env.HOST || "0.0.0.0";
const port = Number(process.env.PORT) || 8000;

const blogServiceProxy = httpProxy('http://blog-api')

// Authentication
app.use((req, res, next) => {
  // TODO: my authentication logic
  next()
})

app.get('/', (req: Request, res: Response) => {
  res.send('Express + TypeScript Server');
});

// Proxy request
app.get('/blog', (req, res, next) => {
  blogServiceProxy(req, res, next)
});

// Resolve: GET /users/me
app.get('/users', async (req, res) => {
  // const userId = req.session.userId
  const uri = `https://identity-api/users`
  const user = await request(uri)
  res.json(user)
});

app.listen(port, host, () => {
  console.log(`⚡️[server]: Server is running at http://${host}:${port}`);
});
