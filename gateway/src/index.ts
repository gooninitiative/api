import express, { Express, Request, Response } from 'express';
import dotenv from 'dotenv';

dotenv.config();

const app: Express = express();
const host = process.env.HOST || "0.0.0.0";
const port = Number(process.env.PORT) || 8000;

app.get('/', (req: Request, res: Response) => {
  res.send('Express + TypeScript Server');
});

app.listen(port, host, () => {
  console.log(`⚡️[server]: Server is running at http://${host}:${port}`);
});
