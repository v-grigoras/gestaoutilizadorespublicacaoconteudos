# Arquitetura do Sistema

## Filosofia

O projeto segue uma arquitetura modular orientada a domínio, preparada para crescimento futuro.

O objetivo principal é permitir adicionar novos módulos reutilizando o mesmo padrão estrutural.

---

# Camadas da Aplicação

## 1. Frontend 

Responsável pela experiência pública/autenticada dos utilizadores.

Tecnologias:
- Blade
- TailwindCSS
- Alpine.js
- Vite

Responsabilidades:
- autenticação
- dashboard utilizador
- perfil
- notícias
- comentários

---

## 2. Backoffice Administrativo

Responsável pela administração do sistema.

Tecnologias:
- PHP 8+
- Laravel 13+

Responsabilidades:
- gestão utilizadores
- gestão conteúdos
- dashboards
- controlo permissões

---

## 3. API REST

Responsável pela integração mobile e futura integração externa.

Tecnologias:
- Laravel API

Responsabilidades:
- autenticação token
- endpoints REST
- proteção via middleware
- serialização de dados

---

# Organização por Domínio

Cada módulo deve seguir o mesmo padrão.

Exemplo:

```text
News/
├── Models/
├── Services/
├── Repositories/
├── Actions/
├── Policies/
├── Requests/
├── Resources/
```

---

# Padrões Arquiteturais

## Services

Contêm lógica de negócio.

## Repositories

Responsáveis pelo acesso a dados.

## Actions

Operações específicas reutilizáveis.

## Policies

Controlo de permissões.

## DTOs

Transferência estruturada de dados.

---

# Segurança

## Roles

Sistema baseado em roles:

- admin
- editor
- user

## Middleware

Separação:

- web
- auth
- api
- admin

---

# Estratégia de Crescimento

O sistema foi desenhado para suportar:

- módulos futuros
- multi-app
- mobile apps
- dashboards avançados
- micro-serviços futuros
- filas/jobs
- notificações

---