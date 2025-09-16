# Projeto PHP com Composer

Este projeto é desenvolvido em PHP e utiliza o **Composer** para gerenciar dependências e carregar classes automaticamente.

- Nesse projeto, fiz o download do [Composer](https://getcomposer.org/)

---

## 🔹 O que é o Composer?

O Composer é o **gerenciador de dependências do PHP**, semelhante ao `npm`  no Node.js ou `pip`  no Python. Ele permite:

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

## Objetivo do Projeto
O objetivo deste projeto é acessar um site por meio de uma requisição `GET`  percorrer seu conteúdo HTML e extrair os dados desejados de forma estruturada e automatizada.
Para isso, precisamos de um pacote para realizar requisições HTTP e outro para manipular e ler a estrutura DOM do HTML.

Para isso iremos acessar o site: [Packagist](https://packagist.org/)
- **Dom Crawler**: utilizado para percorrer e manipular a estrutura DOM do HTML.  
- **GuzzleHttp / Guzzle**: utilizado para realizar requisições HTTP ao site.


## Como Usar os Pacotes

### 1. GuzzleHttp / Guzzle
O Guzzle é utilizado para fazer requisições HTTP ao site. Com ele, você pode enviar requisições `GET`, `POST` e manipular as respostas de forma fácil.

**Exemplo de uso:**
```php
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://packagist.org/');

$html = $response->getBody()->getContents();
echo $html;
```

### 2. Dom crawler
O Dom Crawler permite percorrer a estrutura DOM do HTML e extrair os dados desejados. Ele facilita a navegação por elementos como `div`, `span`, a, entre outros.


## Como eu fiz a instalação das bibliotecas:
- **Dom Crawler**: `composer require guzzlehttp/guzzle` no Prompt de comando
- **GuzzleHttp / Guzzle**: eu adicionei no `composer.json` no `required` eu adicionei: `"symfony/dom-crawler": "^7.3"` E dentro do Prompt de comando eu executei: `composer install`.
Logo depois de instalar dessa segunda forma, você precisa usar o comando `composer update`, ele além de baixar, ele atualiza as bibliotecas que estão sendo utilizadas.

## Utilização do Symfony

Neste projeto foi utilizado o componente `DomCrawler` do Symfony para pegar a classe css do componente:

```php
use Symfony\Component\DomCrawler\Crawler;
```


### 2.1 - alura

- O composer possui um repositório central de pacotes: https://packagist.org/
- É possível configurar repositórios de outras fontes (do github, zip etc)
- O pacotes guzzlehttp/guzzle serve para executar requisições HTTP de alto nível
- Para instalar uma dependência (pacote) basta executar: composer require <nome do pacote>
- Composer guarda as dependências e dependências transitivas na pasta vendor do projeto
- O nome e versão da dependências fica salvo no arquivo composer.json
- O comando require adiciona automaticamente a dependência no composer.json
- O comando composer install automaticamente baixa todas as dependências do composer.lock (ou do composer.json, caso o .lock não exista ainda)
- O arquivo composer.lock define todas as versões exatas instaladas
- O composer já gera um arquivo autoload.php para facilitar o carregamento das dependências
- Basta usar require vendor/autoload.php
