# 🛠️ Sistema de Ordem de Serviço - CodeIgniter 4
Sistema completo de gestão de ordens de serviço desenvolvido com CodeIgniter 4, incluindo controle de usuários, ACL, produtos, estoque, boletos e integrações externas.

---

## 📌 Descrição

Este projeto simula um sistema real utilizado por empresas para gerenciar:

- Ordens de serviço
- Clientes e fornecedores
- Produtos e estoque
- Controle de acesso (ACL)
- Emissão de boletos

Foi desenvolvido com foco em boas práticas, organização de código e aplicação real de regras de negócio.

---

## 🚀 Tecnologias utilizadas

- PHP 8+
- CodeIgniter 4
- MySQL / MariaDB
- Bootstrap (AdminLTE)
- jQuery / Ajax
- Datatables
- Chart.js
- Composer

---

## 🔐 Funcionalidades

### 👤 Usuários
- Cadastro, edição e exclusão
- Upload de imagem de perfil
- Controle de status (ativo/inativo)
- Soft delete

### 🔑 Autenticação e Segurança
- Login / Logout
- Reset de senha via e-mail
- Proteção CSRF
- Filtros de acesso

### 🛡️ ACL (Controle de Acesso)
- Grupos de usuários
- Permissões por grupo
- Controle de acesso por rota

### 🧾 Ordens de Serviço
- Cadastro e gerenciamento
- Status da ordem (aberto, em andamento, finalizado)
- Histórico por cliente

### 🛒 Produtos
- Cadastro de produtos
- Controle de preço de custo e venda
- Controle de status (ativo/inativo)
- Associação com fornecedores

### 📊 Estoque
- Controle de quantidade disponível
- Registro de entradas e saídas
- Histórico de movimentações
- Alerta de estoque baixo

### 🔗 Integração Produtos x Ordens
- Vinculação de produtos às ordens de serviço
- Cálculo automático de valores
- Histórico de consumo

### 💰 Boletos
- Geração de boletos bancários
- Integração com API Gerencianet

### 📊 Dashboard
- Indicadores do sistema
- Gráficos com Chart.js

### 🏢 Fornecedores
- Cadastro completo
- Integração com ViaCEP
- Validação de CNPJ

---

## 🔌 Integrações

- API Gerencianet (boletos)
- API ViaCEP (endereços)
- SMTP / Mailtrap (envio de e-mails)

---

## 📂 Estrutura do projeto

