<div align="center">

# 🎓 Lista de Alunos

**Atividade 4 da Disciplina SI401 · Programação para a Web**

Faculdade de Tecnologia · Universidade Estadual de Campinas (FT/Unicamp)

<picture><img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"></picture>
<picture><img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=data%3Aimage%2Fsvg%2Bxml%3Bbase64%2CPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI%2BPHBhdGggZmlsbD0id2hpdGUiIGQ9Ik0xLjUgMGgyMWwtMS45MSAyMS41NjNMMTEuOTc3IDI0bC04LjU2NC0yLjQzOEwxLjUgMHptMTcuMDkgNC40MTNMNS40MSA0LjQxbC4yMTMgMi42MjIgMTAuMTI1LjAwMi0uMjU1IDIuNzE2aC02LjY0bC4yNCAyLjU3M2g2LjE4MmwtLjM2NiAzLjUyMy0yLjkxLjgwNC0yLjk1Ni0uODEtLjE4OC0yLjExaC0yLjYxbC4yOSAzLjg1NUwxMiAxOS4yODhsNS4zNzMtMS41M0wxOC41OSA0LjQxNHoiLz48L3N2Zz4K" alt="CSS3"></picture>
<picture><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"></picture>
<picture><img src="https://img.shields.io/badge/Figma-F24E1E?style=for-the-badge&logo=figma&logoColor=white" alt="Figma"></picture>
<picture><img src="https://img.shields.io/badge/InfinityFree-1F6FEB?style=for-the-badge&logo=data%3Aimage%2Fsvg%2Bxml%3Bbase64%2CPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI%2BPHBhdGggZmlsbD0id2hpdGUiIGQ9Ik00IDJoMTZhMiAyIDAgMCAxIDIgMnY1YTIgMiAwIDAgMS0yIDJINGEyIDIgMCAwIDEtMi0yVjRhMiAyIDAgMCAxIDItMnptMiAzLjVhMS41IDEuNSAwIDEgMCAwIDMgMS41IDEuNSAwIDAgMCAwLTN6TTQgMTNoMTZhMiAyIDAgMCAxIDIgMnY1YTIgMiAwIDAgMS0yIDJINGEyIDIgMCAwIDEtMi0ydi01YTIgMiAwIDAgMSAyLTJ6bTIgMy41YTEuNSAxLjUgMCAxIDAgMCAzIDEuNSAxLjUgMCAwIDAgMC0zeiIvPjwvc3ZnPg%3D%3D" alt="InfinityFree"></picture>

</div>

<p align="center">
  <picture><img src="Web%20Design/website_preview.png" alt="Prévia do sistema Lista de Alunos com o menu lateral e a tabela de alunos cadastrados" width="100%"></picture>
</p>

<div align="center">

[![Veja o site](https://img.shields.io/badge/VEJA_O_SITE-1F6FEB?style=for-the-badge&logo=googlechrome&logoColor=white)](https://felipekenjidev-lista-alunos.infinityfreeapp.com/)

</div>

## 📖 Sobre o projeto

Este repositório apresenta a **Atividade de Fixação (Unidades 13 a 17)** da disciplina **SI401 – Programação para a Web**, ministrada pelo Prof. Dr. Guilherme Palermo Coelho no 2° semestre de 2026 na Faculdade de Tecnologia (FT/UNICAMP).

A proposta foi construir um site de **gerenciamento de alunos**, utilizando uma "base de dados" gerenciada pelo **PHP**, o primeiro projeto da disciplina com parte rodando no **servidor**. O site deve ter duas páginas: uma com um **formulário de cadastro**, com os campos nome, RA, sexo, idade, endereço, telefone e e-mail, e outra que **exibe todos os alunos cadastrados ordenados por RA**. A navegação é feita por um menu à esquerda, e todos os documentos devem seguir o padrão mais recente do HTML, validados pelo **W3C Validator**.

Além disso, não era permitido utilizar nenhum tipo de **SGBD (banco de dados) ou Sessões** para armazenar as informações. Por isso, os alunos ficam salvos em um **arquivo de texto no servidor**, que é lido e escrito com as funções de **Manipulação de Arquivos** do PHP.

Meu objetivo nesse trabalho era mostrar que eu sou capaz e ainda possuo conhecimentos e habilidades no desenvolvimento *Front-End* e *Back-End*, então o site foi desenvolvido inteiramente de forma humana sem uso de nenhuma IA (Inteligência Artificial). Esse trabalho é uma prova de minhas habilidades, e que apesar de eu utilizar ferramentas de IA nos próximos trabalhos, possuo o conhecimento adequado para auditar e orientar todo o processo.

## 📁 Estrutura do projeto

```
ListaAlunos/
├── Lista de Alunos/             # Código-Fonte do Sistema
│   ├── css/
│   │   └── style.css            # Folha de Estilo Externa
│   ├── data/
│   │   └── alunos.txt           # Arquivo com os Alunos Cadastrados
│   ├── images/                  # Ícones do Sistema e do Menu
│   ├── index.php                # Lista de Alunos (Página Inicial)
│   ├── novo.html                # Formulário de Cadastro
│   ├── consulta.php             # Script de Leitura do Arquivo
│   └── cadastro.php             # Script de Escrita no Arquivo
├── Web Design/                  # Prototipação do Layout
│   ├── design.fig               # Arquivo do Figma
│   ├── final_design_preview.png # Versões 1 a 3 do Design
│   └── website_preview.png      # Prévia do Sistema
├── LICENSE
└── README.md
```

## 📱 Prototipação do Design

Antes de escrever qualquer linha de código, gosto de criar a prototipação em um software visual para me guiar durante o desenvolvimento, além de evitar retrabalho e refatoração futura. Adotei um método de prototipação incremental, partindo de abstrações bem simples para alinhar os pensamentos criativos até chegar em um layout final robusto e refinado.

Utilizei o **Figma** para criar o layout e a identidade visual do sistema. O design evoluiu em três versões, e em cada uma delas foram desenhadas as duas telas: a **Tabela de Alunos** e o **Formulário de Inscrição**.

<div align="center">

[![Ver protótipo no Figma](https://img.shields.io/badge/Ver_protótipo_no_Figma-F24E1E?style=for-the-badge&logo=figma&logoColor=white)](https://www.figma.com/design/9LixEf4DutUughHoQVFTl0/WebDesign-%7C-Atividade-4-SI401?t=LRILwPE359ziSzl1-1)

</div>

### 🖍️ Versões 1 a 3 · Do Esboço ao Design Inicial
Foram três versões, pensado em possuir duas páginas, como definido nas instruções do projeto, que foram ganhando formas e detalhes a mais a cada protótipo:

- **Esboço:** Um rascunho à mão livre que definiu a estrutura das duas telas: um menu lateral com o ícone do sistema e os botões de navegação, um título com uma breve descrição e, abaixo, a tabela de alunos ou o formulário de cadastro.
- **Wireframe Preliminar:** As telas viraram wireframes em tons de cinza, com textos de preenchimento, definindo a largura do menu lateral, a área da tabela com suas colunas e a disposição dos campos do formulário em grade.
- **Design Inicial:** Entrou a identidade visual, com o ícone de capelo, a tipografia e a paleta em **azul-marinho** e **cinza-claro**. A opção selecionada no menu ganha um tom de azul um pouco mais claro, e o botão **Salvar** usa verde para destacar a ação de confirmação.

<p align="center">
  <picture><img src="Web%20Design/final_design_preview.png" alt="Versões 1 a 3 do design: esboço, wireframe preliminar e design inicial das telas de tabela de alunos e formulário de inscrição" width="100%"></picture>
</p>

## ✨ Detalhes da Interface

- **Formulário em Grade:** O formulário usa **CSS Grid** com sete colunas, e cada campo ocupa a largura que faz sentido para o seu conteúdo. O RA e a idade ficam em campos estreitos, enquanto o nome, o endereço e o e-mail ocupam mais espaço, deixando o formulário compacto e fácil de ler. Essa estratégia foi usada para alinhar os campos de inserção e tornar a interface mais bonita e agradável.
- **Seleção Personalizada:** O campo de sexo usa o recurso mais recente do CSS para estilizar o `<select>` (`appearance: base-select`). Com ele, a lista de opções ganha bordas arredondadas, sombra e o mesmo azul-marinho do sistema na opção escolhida, no lugar do visual padrão do navegador.

## 🐘 PHP e Manipulação de Arquivos

Como a atividade não permite o uso de bancos de dados nem de sessões, a solução foi guardar os alunos em um arquivo. Um array em PHP também não resolveria sozinho: ele só existe durante a execução de um script e é apagado quando a página termina de carregar, então os alunos cadastrados se perderiam a cada nova requisição. O arquivo, por outro lado, fica salvo no servidor e mantém os dados entre um acesso e outro.

Toda a parte de servidor está em dois scripts PHP: um que **escreve** no arquivo (`cadastro.php`) e outro que **lê** o arquivo (`consulta.php`). Os alunos ficam salvos em `data/alunos.txt`, que funciona como um pequeno banco de dados.

### 🗃️ O Arquivo de Dados

Cada linha do arquivo representa um aluno, com os campos separados por **ponto e vírgula** no formato CSV. A ordem dos campos é sempre a mesma: RA, nome, sexo, idade, endereço, telefone e e-mail.

```
192832;"André Soares";masculino;23;"Rua Pedro Salvador, 29";"(19) 33029-2093";andreempresa@hotmail.com
```

Escolhi o ponto e vírgula como separador porque a vírgula aparece naturalmente nos endereços (como em "Rua Pedro Salvador, 29"). Os campos que têm espaços ficam entre aspas automaticamente, o que garante que cada informação seja lida de volta inteira e no lugar certo.

### ✍️ Cadastro de Alunos · `cadastro.php`

O `cadastro.php` é o script responsável por **receber os dados do formulário e salvar o novo aluno no arquivo**. Quando o usuário clica em salvar, o formulário de `novo.html` envia as informações para esse script pelo método **POST**, que manda os dados no corpo da requisição em vez de expô-los na URL. O script só aceita requisições feitas dessa forma, então acessar o `cadastro.php` direto pela barra de endereço apenas leva o usuário de volta ao formulário, sem gravar nada.
 
Com os dados em mãos, o script remove os espaços extras dos campos de texto e grava o aluno como uma nova linha no **final do arquivo**, no formato CSV. Dessa forma, cada cadastro é somado aos anteriores sem apagar nenhum aluno que já estava salvo. Ao terminar, o usuário é redirecionado de volta ao formulário, seguindo o padrão **Post/Redirect/Get**, que evita que o mesmo aluno seja cadastrado duas vezes caso a página seja recarregada.

### 📖 Listagem de Alunos · `consulta.php`

O `consulta.php` é o script responsável por **ler o arquivo e transformar os alunos cadastrados nas linhas da tabela**. Ele é incluído dentro da página inicial, que por isso é um arquivo `.php` e não `.html`: a página precisa ser processada pelo servidor antes de chegar ao navegador, para que a tabela já chegue preenchida com os alunos.
 
O script abre o arquivo em modo somente leitura e percorre todos os alunos salvos, separando cada linha nos sete campos de informação. Em seguida, os alunos são **ordenados pelo RA**, atendendo ao requisito da atividade, e cada um vira uma linha da tabela. Antes de exibir, alguns dados são padronizados, como as iniciais maiúsculas no nome, no sexo e no endereço e o sufixo "anos" na idade, para que a tabela fique uniforme mesmo que as informações tenham sido digitadas de formas diferentes.

## 🛠️ Programação e Tecnologias

- **HTML5** – Estrutura das Páginas, Tabela e Formulário
- **CSS3** – Estilização com Folha de Estilo Externa, CSS Grid e `<select>` Personalizado
- **PHP** – Leitura e Escrita do Arquivo de Alunos no Servidor
- **Figma** – Prototipação do Layout
- **InfinityFree** – Hospedagem com Suporte a PHP

## ✔️ Validação W3C

Seguindo os requisitos da atividade, os documentos utilizam o padrão HTML mais recente e podem ser verificados nos validadores oficiais do W3C enviando os arquivos diretamente:

- [Validação HTML (Nu Html Checker)](https://validator.w3.org/nu/#file)
- [Validação CSS (CSS Validation Service)](https://jigsaw.w3.org/css-validator/#validate_by_upload)

## ⚖️ Aviso

O sistema foi desenvolvido exclusivamente para fins didáticos e de portfólio, sem fins lucrativos. Todos os alunos cadastrados no arquivo de exemplo são **fictícios**. Caso você seja o proprietário de algum conteúdo utilizado e deseje sua remoção, entre em contato pelo e-mail **felipejaponeskof@gmail.com**.
