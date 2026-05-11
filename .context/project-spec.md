# Especificação Técnica do Projeto

## Nome do Projeto

Gestão de Utilizadores e Publicação de Conteúdos

---

# Objetivo

Desenvolver uma plataforma moderna e escalável com:

- gestão utilizadores
- notícias/publicações
- API mobile
- backoffice administrativo

---

# Estrutura da Aplicação

## Área Pública

### Funcionalidades

- login
- registo
- recuperação password
- reset password

---

## Área Utilizador (Dashboard)

### Funcionalidades

- dashboard autenticado
- visualizar perfil
- editar perfil
- alterar password
- upload foto perfil
- visualizar notícias
- visualizar detalhe notícia
- comentar notícias
- likes/dislikes

---

## Backoffice Administrativo

### Gestão Utilizadores

- listar utilizadores
- criar utilizador
- editar utilizador
- bloquear/desbloquear utilizador
- eliminar utilizador
- visualizar perfil utilizador
- procurar utilizadores
- filtros avançados
- gestão roles/permissões

### Gestão Notícias

- listar notícias
- criar notícia
- editar notícia
- publicar/despublicar
- agendar publicação
- eliminar notícia
- gerir comentários
- procurar notícias
- filtros avançados

### Administração Sistema

- widgets dashboard
- métricas
- estatísticas futuras
- settings futuros

---

# Módulos

## Módulo Utilizadores

### Funcionalidades

- login
- logout
- registo
- recuperar password
- perfil
- alterar password
- apagar conta
- roles/permissões

### Campos principais

```text
name
email
password
photo
is_active
email_verified_at
last_login_at
```

---

## Módulo Notícias

### Funcionalidades

- ver listagem notícias
- ver notícia
- adicionar comentários
- likes/dislikes
- contagem reações
- pesquisa

### Campos principais

```text
title
slug
excerpt
content
cover_image
is_published
published_at
```

---

# API

## Endpoints Principais

### Auth

```text
POST /api/login
POST /api/logout
GET  /api/me
```

### Users

```text
GET /api/profile
PUT /api/profile
```

### News

```text
GET /api/news
GET /api/news/{id}
POST /api/news/{id}/comment
POST /api/news/{id}/like
```

---

# Requisitos Não Funcionais

## Performance

- queries otimizadas
- eager loading
- paginação
- cache

## Segurança

- CSRF
- XSS protection
- rate limiting
- password hashing
- API token security

## Escalabilidade

- modularidade
- separação responsabilidades
- reutilização componentes

---

# UI/UX

## Tema

- moderno
- responsivo
- dark mode
- clean admin dashboard

---

# Convenções

## Naming

- Classes: PascalCase
- Métodos: camelCase
- Tabelas: snake_case plural
- Rotas: kebab-case

---
