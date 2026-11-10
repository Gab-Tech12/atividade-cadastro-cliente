# Equipe: Gabriel Dantas e Matheus Dourado 
---
# Sistema de Cadastro de Leads / Clientes 🚀

Projeto desenvolvido como parte da atividade prática da disciplina de **Programação Web II** no Curso Técnico em Desenvolvimento de Sistemas da **ETEC Irmã Agostina** (Centro Paula Souza).

## 📌 Sobre o Projeto
O sistema consiste em um backend em PHP para captação e processamento seguro de dados cadastrais enviadas via formulário HTML (método POST). O foco do desenvolvimento foi implementar validações lógicas rigorosas, sanitização de entradas para segurança contra scripts maliciosos (XSS) e formatação adequada na exibição das informações.

---

## 🛠️ Tecnologias Utilizadas
- **HTML5**: Estrutura do formulário de cadastro.
- **CSS3 / JavaScript**: Estilização e scripts cliente.
- **PHP 8.x**: Validação backend, tratamento de erros, sanitização e formatação de texto.

---

## 🔒 Regras de Negócio e Funcionalidades
1. **Campos Obrigatórios**: Nome Completo, E-mail, Idade, Cidade e Sexo. O campo Observações é opcional.
2. **Validação de Idade**: 
   - Aceita apenas valores numéricos inteiros positivos.
   - Restringe o cadastro para usuários com idade menor que 18 anos.
3. **Validação do Campo Sexo**: Valida no backend se o valor enviado via `radio` corresponde exatamente às opções permitidas (`M`, `F` ou `Outro`).
4. **Tratamento de Dados e Segurança**:
   - Capitalização automática das primeiras letras de Nome Completo e Cidade.
   - Sanitização do campo Observações contra injeção de scripts (XSS) usando `htmlspecialchars()`.

---
## Matriz de testes
| Cenário de Teste | O que você digitou | O que o PHP exibiu na tela? (Resultado Esperado) |
| :--- | :--- | :--- |
| **Teste 1: Idade com letras** | "vinte anos" | Erro: A idade deve ser um valor numérico inteiro. |
| **Teste 2: Menor de idade** | "15" | Cadastro permitido apenas para maiores de 18 anos. |
| **Teste 3: Nome em minúsculo** | "maria de souza" | Maria De Souza |
| **Teste 4: Campo em branco** | Deixar e-mail vazio | Erro: O campo E-mail é obrigatório. |

## 📁 Estrutura de Pastas
```text
PROJETOPHP/
│
├── css/
│   └── (arquivos de estilo)
├── image/
│   └── (recursos de imagem)
├── js/
│   └── (scripts Javascript)
├── index.php         # Formulário de cadastro de clientes
└── processa.php      # Lógica de validação, processamento e exibição 




