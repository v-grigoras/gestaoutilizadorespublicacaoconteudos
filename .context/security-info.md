---
alwaysApply: true
---

# Segurança do Sistema

## Objetivo

Garantir:

- proteção dados utilizadores
- segurança autenticação
- segurança API
- proteção backoffice

---

# Autenticação

## Web

Sistema baseado em sessions.

Tecnologia:
- Laravel

---

## API

Sistema baseado em tokens.

Tecnologia:
- Laravel

---

# Passwords

- hashing bcrypt/argon
- reset tokens
- confirmação password

---

# Roles e Permissões

Tecnologia:
- Laravel Permission

Roles principais:

```text
admin
editor
user
```

---

# Segurança Backoffice

Acesso restrito via:

```php
canAccessPanel()
```

---

# Medidas de Segurança

## Aplicação

- CSRF Protection
- XSS Protection
- Validation Requests
- Authorization Policies
- Middleware
- Secure Password Hashing
- Token Revocation

---

# API Security

- token revocation
- token expiration futura
- protected routes
- authenticated API access

---

# Database Security

- prepared statements
- ORM Eloquent
- hidden attributes
- guarded/fillable

---

# Produção

## Recomendações

- HTTPS obrigatório
- APP_DEBUG=false
- secure cookies
- backups automáticos
- logs monitorizados
- rate limiting API

---

# Futuro

## Melhorias futuras

- 2FA
- audit logs
- activity logs
- device management
- login history

---