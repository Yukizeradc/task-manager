# Task Manager

Um gerenciador de tarefas simples desenvolvido em PHP com MySQL. Este projeto permite criar, visualizar, editar e excluir tarefas, servindo como demonstração prática de desenvolvimento web backend e manipulação de banco de dados.

## 🛠 Tecnologias Utilizadas

- PHP
- MySQL
- HTML / CSS
- (Opcional) JavaScript para melhorias no front-end

## ⚡ Funcionalidades

- Listar todas as tarefas cadastradas em uma tabela
- Criar novas tarefas
- Editar tarefas existentes
- Excluir tarefas
- Atualizar status das tarefas no banco de dados

## 📂 Estrutura do Projeto

task-manager/
├─ assets/ # CSS, imagens e JS do front-end
├─ config/
│ └─ conexao.php # Arquivo de conexão com o banco
├─ public/ # Arquivos acessíveis pelo navegador
│ ├─ index.php # Página principal com tabela de tarefas
│ ├─ criar.php # Formulário para criar tarefas
│ ├─ editar.php # Formulário para editar tarefas
│ ├─ excluir.php # Lógica para excluir tarefas
│ └─ atualizar.php # Lógica para atualizar tarefas
├─ .gitignore # Arquivos a serem ignorados pelo Git
└─ README.md # Documentação do projeto
## 🚀 Instalação e Uso

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/task-manager.git
Configure o banco de dados MySQL em config/conexao.php:

<?php
$host = 'localhost';
$user = 'seu_usuario';
$password = 'sua_senha';
$dbname = 'task_manager';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>


Crie a tabela de tarefas:

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT,
    status ENUM('pendente','concluida') DEFAULT 'pendente',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


Abra public/index.php no navegador para acessar o sistema.

🎯 Objetivo do Projeto

Demonstrar habilidades em:

PHP e MySQL

Estruturação de um sistema CRUD (Create, Read, Update, Delete)

Organização de projetos para GitHub e portfólio
