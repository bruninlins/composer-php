# Projeto PHP com Composer

Este projeto é desenvolvido em PHP e utiliza o **Composer** para gerenciar dependências e carregar classes automaticamente.

-- Nesse projeto, fiz o download do [Composer](https://getcomposer.org/)

---

## 🔹 O que é o Composer?

O Composer é o **gerenciador de dependências do PHP**, semelhante ao `npm` no Node.js ou `pip` no Python. Ele permite:

- Gerenciar bibliotecas que o projeto precisa.
- Controlar versões das dependências.
- Usar autoload para carregar classes automaticamente.

---

## 🔹 Estrutura do projeto

- **`composer.json`** → Define as dependências e configurações do projeto.  
- **`composer.lock`** → Garante que todos os desenvolvedores usem as mesmas versões das bibliotecas.  
- **`vendor/`** → Pasta onde o Composer instala todas as dependências.  

---

## 🔹 Como usar

### 1. Instalar dependências
Se você clonou o projeto do GitHub ou está começando, execute:

```bash
composer install
```

### 2. Primeira vez usando o Composer
Se você nunca usou o Composer no seu computador, instale-o seguindo a documentação oficial: [Composer](https://getcomposer.org/download/)

> Para projetos existentes, **não rode `composer init`**. Basta clonar o projeto e executar `composer install`.

## Objetivo desse projeto
O objetivo é acessar um site com a requisição `GET` 
