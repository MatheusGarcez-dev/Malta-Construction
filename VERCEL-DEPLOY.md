# Deploy no Vercel – Checklist

Ao fazer alterações no site e antes de fazer **upload/deploy no Vercel**, lembre-se de:

1. **Sincronizar a pasta `api/`** com a raiz do projeto:
   - **Páginas:** copiar conteúdo de `index.php`, `about.php`, `contact.php`, `residential.php`, `commercial.php`, `renovation.php` para os ficheiros correspondentes em `api/`.
   - **Includes:** copiar `includes/head.php`, `includes/footer.php`, `includes/header.php`, `includes/js.php` para `api/includes/`.
   - Na `api/` manter: `include __DIR__ . '/includes/...'` e URLs absolutas (ex.: `/contact`, `/assets/...`).

2. **Build:** o Vercel usa os ficheiros em `api/` para as rotas; `assets/` e `vercel.json` são servidos a partir da raiz.

Assim o site no Vercel fica igual ao local (scroll-to-top, imagens, textos, etc.).
