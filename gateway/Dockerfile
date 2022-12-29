FROM node:18-alpine
EXPOSE 8000
WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
ENV PORT=8000
CMD [ "npm", "run", "start" ]
