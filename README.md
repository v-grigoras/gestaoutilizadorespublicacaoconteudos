# Plataforma de Gestão de Utilizadores e Conteúdos

## Projeto

Plataforma web moderna para gestão de utilizadores e publicação de conteúdos/notícias, incluindo:
- Área pública
- Área autenticada
- Backoffice administrativo
- API REST para integração mobile

O sistema foi desenvolvido utilizando Laravel como framework principal.

---

## Stack Tecnológica

### Backend
- PHP 8+
- Laravel 13+

### Frontend
- Blade
- TailwindCSS
- Alpine.js
- Vite

### Base de Dados
- MySQL / MariaDB

### Ferramentas
- Node.js
- npm
- Composer

---

## Funcionalidades Principais

### Área Pública
- Login
- Registo
- Recuperação de password
- Reset password

### Área Privada
- Dashboard autenticado
- Perfil do utilizador
- Alteração de password
- Notícias/publicações
- Comentários
- Like/Dislike

### Backoffice
- Gestão de utilizadores
- Gestão de roles/permissões
- Gestão de notícias
- Publicação/despublicação
- Pesquisa e filtros
- Customização de tabelas
- Dashboard administrativo

### API
- Login via token
- Logout / revogação de token
- Perfil do utilizador
- Notícias
- Comentários
- Likes/dislikes

---

## Estrutura Base de Rotas

/                       Página principal
/login                  Login
/logout                 Logout
/register               Registo
/forgot-password        Recuperar password
/reset-password/{token} Reset password
/dashboard/*            Área autenticada
/admin/*                Backoffice 
/api/*                  API REST


---

## Instalação

### Clonar projeto

```bash
git clone <repository>
cd <project>
```

### Instalar dependências PHP

```bash
composer install
```

### Instalar dependências frontend

```bash
npm install
```

### Configurar .env

```bash
cp .env.example .env
php artisan key:generate
```

### Configurar base de dados

Editar:

```env
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

---

## Migrations

```bash
php artisan migrate
```

---

## Executar projeto

### Backend

```bash
php artisan serve
```

### Frontend/Vite

```bash
npm run dev
```

---

## Objetivo Arquitetural

O sistema foi concebido para:

- ser modular
- ser escalável
- suportar API mobile
- suportar novos módulos futuros
- separar claramente frontend, API e administração
- manter organização profissional enterprise-level