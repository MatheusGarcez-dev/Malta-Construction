# Instruções para ativar o formulário de contato

O formulário de contato foi configurado para enviar emails automaticamente usando o **Formspree**. Para que funcione, o cliente precisa seguir estes passos:

---

## Passo a passo para o cliente

### 1. Criar conta no Formspree

1. Acesse **https://formspree.io**
2. Clique em **"Get Started"** ou **"Sign Up"**
3. Crie uma conta gratuita (pode usar Google ou email)

### 2. Criar o formulário

1. Após fazer login, clique em **"+ New Form"**
2. Preencha:
   - **Form name:** Malta Construction Contact (ou outro nome)
   - **Email:** maltaconstruction9@gmail.com (o email que vai receber as mensagens)
3. Clique em **"Create Form"**

### 3. Copiar o ID do formulário

1. Depois de criar, você verá uma URL como:  
   `https://formspree.io/f/xxxxxxxx`
2. Copie apenas a parte final: **xxxxxxxx** (o ID que aparece depois de `/f/`)

### 4. Enviar o ID para o desenvolvedor

Envie o ID copiado (exemplo: `xzqwerty`) para que o desenvolvedor possa substituir no código.

**OU**, se o cliente for fazer a alteração:

1. Abra o arquivo **`contact.php`** (na raiz do projeto)
2. Encontre a linha: `$formspreeId = 'SEU_FORM_ID';`
3. Substitua `SEU_FORM_ID` pelo ID copiado: `$formspreeId = 'xzqwerty';`
4. Faça o mesmo no arquivo **`api/contact.php`**
5. Salve os arquivos e faça o upload/deploy novamente

---

## Resumo para o desenvolvedor

Quando receber o Form ID do cliente:

1. Abra `contact.php` e `api/contact.php`
2. Substitua `SEU_FORM_ID` pelo ID real em ambos os arquivos
3. Exemplo: `$formspreeId = 'xzqwerty';`
4. Salve e envie o zip atualizado ao cliente (ou faça o deploy)

---

## O que foi alterado

- O formulário agora envia os dados para o Formspree via POST
- O Formspree encaminha o email para maltaconstruction9@gmail.com
- Após enviar, o usuário volta para a página de contato com mensagem de sucesso
- Funciona em localhost (XAMPP) e na Vercel
- Plano gratuito: até 50 envios por mês (suficiente para um formulário de contato)
