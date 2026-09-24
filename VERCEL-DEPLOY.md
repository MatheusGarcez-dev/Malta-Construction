# Deploy no Vercel – Checklist

Ao fazer alterações no site e antes de fazer **upload/deploy no Vercel**, lembre-se de:

1. **Sincronizar a pasta `api/`** com a raiz do projeto:
   - **Páginas:** o conteúdo de cada página da Vercel fica em `api/includes/pages/`. `api/index.php` é o único entrypoint e escolhe a página pelo parâmetro `page`.
   - **Includes:** copiar `includes/head.php`, `includes/footer.php`, `includes/header.php`, `includes/js.php` para `api/includes/`.
   - Nas páginas da Vercel, os includes usam `__DIR__ . '/../...'` e URLs absolutas (ex.: `/contact`, `/assets/...`).

2. **Build:** o plano Hobby da Vercel aceita no máximo 12 funções. Por isso existe só `api/index.php` em `functions`. O runtime é `vercel-php@0.9.0` (PHP 8.5, Node 22). `assets/` e `vercel.json` são servidos a partir da raiz.

Assim o site no Vercel fica igual ao local (scroll-to-top, imagens, textos, etc.).
