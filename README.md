# Projeto de TCC - Abertura de chamados com acessibilidade a pessoas com baixa visao.

### API - Node
cadastra e envia usuarios para serviço de mensageria: RabbitMq
Configurar BD: node\src\models\ConnectionDB.ts
###### Instalar dependencias: npm i
###### Rodar: npm run dev

### API - Laravel
recebe do serviço de mensageria o cadastro do usuario
<br> consulta feriados nacionais na API: https://brasilapi.com.br/api/feriados/v1/2023
realiza a gestão de envio de email atraves da plataforma MailGun
Configurar arquivo .env - banco de dados e acessos externos
###### instalar dependencias: composer install
###### rodar comando para executar o banco: php artisan migrate --seed
###### rodar a aplicação: php artisan serve --port=9000

### Front Express
###### rodar: npm start


