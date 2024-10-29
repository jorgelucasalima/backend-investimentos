# API Laravel

Este é um projeto de API construído com o Laravel, um framework PHP elegante e expressivo.

## 🚀 Pré-requisitos

Antes de começar, certifique-se de ter os seguintes softwares instalados:

- [PHP](https://www.php.net/downloads) (v8.1 ou superior)
- [Composer](https://getcomposer.org/download/) (gerenciador de dependências PHP)
- [Laravel](https://laravel.com/docs/10.x/installation) (instalação via Composer)
- [MySQL](https://www.mysql.com/downloads/) ou outro banco de dados compatível

## 📦 Instalação

Siga estas etapas para configurar o projeto localmente:

1. Clone este repositório:
   ```bash
   git clone https://github.com/jorgelucasalima/backend-investimentos.git

   cd backend-investimentos
   ```

2. Instale as dependências do projeto:
   ```bash
   composer install
   ```

3. Configure o ambiente:
   ```bash
   # Crie o arquivo de configuração do ambiente
   cp .env.example .env

   # Gere a chave de aplicativo Laravel
   php artisan key:generate
   ```

4. Configure seu banco de dados no arquivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=usuario
   DB_PASSWORD=senha
   ```

5. Execute as migrações do banco de dados:
   ```bash
   php artisan migrate
   ```

## 🚀 Executando o projeto

Para iniciar o servidor de desenvolvimento:

```bash
php artisan serve
```

A API estará disponível em [http://localhost:8000](http://localhost:8000)

## 📝 Documentação da API

[Em desenvolvimento]

## 🛠️ Tecnologias Utilizadas

- [Laravel](https://laravel.com/) - Framework PHP
- [MySQL](https://www.mysql.com/) - Banco de dados
- [Composer](https://getcomposer.org/) - Gerenciador de dependências

## 🤝 Contribuindo

1. Faça um fork do projeto
2. Crie sua feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.