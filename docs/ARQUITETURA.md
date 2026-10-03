# Arquitetura do tema Oiticica

## Visão geral

O Oiticica é um tema WordPress tradicional baseado em PHP, templates, folhas de estilo, JavaScript, imagens, fontes e widgets personalizados.

Na versão histórica preservada 2.9.3, a estrutura principal está concentrada na raiz do tema e nos diretórios `assets`, `css`, `fonts`, `img`, `js` e `widgets`.

## Estrutura principal

A organização observada no repositório é:

- `assets/` — recursos auxiliares e componentes distribuídos com o tema;
- `css/` — folhas de estilo auxiliares;
- `fonts/` — fontes distribuídas localmente;
- `img/` — imagens, marcas e elementos visuais;
- `js/` — JavaScript do tema;
- `widgets/` — classes de widgets personalizados;
- arquivos PHP na raiz — templates e funcionalidades WordPress;
- `functions.php` — inicialização e funcionalidades centrais;
- `style.css` — identificação do tema e estilos principais;
- `editor-style.css` — estilos aplicados ao editor;
- `screenshot.png` — imagem de apresentação do tema no WordPress.

## Templates

O repositório contém templates WordPress para diferentes tipos de conteúdo e contextos.

Entre os arquivos identificados estão:

- `index.php`;
- `page.php`;
- `archive.php`;
- `category.php`;
- `search.php`;
- `searchform.php`;
- `404.php`;
- `header.php`;
- `footer.php`;
- `single.php`.

Também existem templates especializados, incluindo:

- `archive-agenda.php`;
- `archive-edital.php`;
- `archive-evento.php`;
- `archive-patente.php`;
- `single-agenda.php`;
- `single-edital.php`;
- `single-evento.php`;
- `single-patente.php`;
- `taxonomy-edital_type.php`;
- `taxonomy-patente_type.php`;
- `page-noticias.php`;
- `page-vitrine.php`;
- `custom-pagina-com-widget.php`.

## Tipos de conteúdo

A auditoria do código identificou tipos de conteúdo personalizados relacionados a:

- `evento`;
- `agenda`;
- `edital`;
- `patente`.

Também foram identificadas taxonomias associadas a editais e patentes.

A definição exata de campos, labels, regras e comportamento deve ser consultada diretamente no código da versão em uso.

## functions.php

O arquivo `functions.php` concentra parte importante da inicialização do tema.

Entre os recursos observados estão:

- carregamento das classes de widgets;
- suporte a imagens destacadas;
- suporte a estilos do editor;
- uso de `editor-style.css`;
- suporte a resumo em páginas;
- suporte a logotipo personalizado;
- registro de menus;
- registro de áreas de widgets;
- configurações por meio do WordPress Customizer;
- recursos relacionados a tradução e navegação;
- configurações visuais.

O tema também desabilita o editor de widgets baseado em blocos na versão auditada.

## Widgets

O diretório `widgets/` contém 22 classes de widgets personalizados identificadas durante a auditoria.

Esses componentes abrangem recursos como:

- agenda;
- apresentação;
- destaques;
- editais;
- eventos;
- notícias;
- links;
- números e indicadores;
- patentes;
- catálogo da Editora UFPB.

O inventário detalhado é mantido em `WIDGETS-E-FUNCIONALIDADES.md`.

## Recursos visuais

### CSS

Além de `style.css` e `editor-style.css`, o diretório `css/` contém arquivos relacionados à família tipográfica IBM Plex Sans.

### Fontes

O diretório `fonts/` contém arquivos de fontes distribuídos localmente.

Foram encontrados arquivos de licença específicos nos diretórios de fontes.

### Font Awesome

O diretório:

`assets/fontawesome6/`

contém recursos do Font Awesome e arquivo de licença próprio.

### Imagens

O diretório `img/` contém elementos utilizados pelo tema, incluindo imagens institucionais, marcas, brasões, SVGs e imagens de conteúdo.

A presença desses arquivos no repositório não determina, por si só, as condições de reutilização das marcas ou elementos institucionais.

## JavaScript

O diretório `js/` contém o arquivo:

`controller.js`

Mudanças em seu comportamento devem ser analisadas em conjunto com os templates que utilizam seus recursos.

## Integrações externas

A auditoria identificou referências e integrações com serviços externos ou institucionais, incluindo:

- Editora UFPB;
- e-MEC;
- Fala.BR;
- serviços e páginas da UFPB;
- serviços de compartilhamento social;
- fontes externas;
- endpoints institucionais utilizados por widgets.

Essas integrações devem ser verificadas periodicamente quanto a disponibilidade, segurança e requisitos de configuração.

## Arquivos legados

Foram identificados arquivos cujos nomes sugerem versões históricas, alternativas ou anteriores, como:

- `headerPadrao_old.php`;
- `single_old.php`;
- `style-old.css`;
- `wrong_taxonomy-patente_type.php`.

Esses arquivos fazem parte do estado histórico preservado.

Eles não devem ser removidos sem análise de referências, testes e registro da decisão em commit específico.

## Princípio de manutenção

Alterações arquiteturais devem preferencialmente separar:

1. documentação;
2. correções;
3. refatorações;
4. novas funcionalidades;
5. remoção de código legado.

Essa separação facilita revisão, testes e rastreabilidade.
