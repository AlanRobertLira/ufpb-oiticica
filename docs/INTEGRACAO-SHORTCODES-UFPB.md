# Integração com Shortcodes Institucionais UFPB

## Objetivo

O tema Oiticica possui tratamento de layout para páginas que utilizam componentes institucionais homologados por shortcode.

A integração mantém separadas as responsabilidades entre tema e plugin:

- o tema controla a estrutura global da página, incluindo sidebar e área de conteúdo;
- cada plugin controla exclusivamente a apresentação interna de seu componente;
- o tema não redefine a estrutura interna dos cards dos plugins;
- os plugins não alteram o grid global, menus ou templates do tema.

## Shortcodes homologados

O tratamento responsivo especial do Oiticica contempla:

```text
[ufpb_sigaa_docentes]
[ufpb_sigaa_componentes]
[ufpb_sigaa_processos_seletivos]
[ufpb_sigaa_processos_seletivos_home]
```

A identificação é realizada a partir do conteúdo da página WordPress.

Somente páginas que contenham um dos shortcodes homologados recebem a classe de integração responsiva do tema.

## Layout responsivo geral

Em telas desktop, páginas contendo shortcodes homologados podem utilizar uma área de conteúdo ampliada em relação ao grid histórico do Oiticica.

Quando a navegação lateral não é aplicável à página, a sidebar é ocultada e a área de conteúdo utiliza a largura disponível.

Esse comportamento é restrito às páginas identificadas como páginas de shortcode e não altera globalmente o layout das demais páginas do tema.

## Corpo Docente

O shortcode:

```text
[ufpb_sigaa_docentes departamento="<ID>"]
```

recebe tratamento adicional por meio da identificação específica da página.

Quando a página de Corpo Docente possui navegação lateral, o Oiticica reduz a largura relativa da sidebar e amplia a área disponível ao componente.

No desktop, o grid específico utiliza:

```css
grid-template-columns: minmax(150px, 1fr) minmax(0, 5fr);
gap: 32px;
```

Essa regra:

- aplica-se somente às páginas contendo `[ufpb_sigaa_docentes]`;
- não remove a sidebar quando ela é necessária;
- não altera páginas comuns do Oiticica;
- não altera páginas que utilizam outros shortcodes;
- não controla a composição interna dos cards de docentes.

A apresentação dos cards, incluindo quantidade de colunas, dimensões, tipografia e comportamento conforme a largura disponível, permanece sob responsabilidade do plugin UFPB Base SIGAA.

## Classes utilizadas

As páginas contendo shortcodes homologados recebem:

```text
ufpb-shortcode-page
```

As páginas contendo especificamente o shortcode de Corpo Docente também recebem:

```text
ufpb-shortcode-docentes-page
```

A classe específica permite ajustes de integração sem produzir efeitos colaterais sobre os demais componentes institucionais.

## Responsabilidades arquiteturais

A integração segue o princípio:

```text
Oiticica
    |
    +-- estrutura da página
    +-- sidebar
    +-- largura da área de conteúdo
    |
    +--> UFPB Base SIGAA
            |
            +-- componente
            +-- cards
            +-- grid interno
            +-- Container Queries
            +-- responsividade interna
```

Dessa forma, a apresentação não depende de uma resolução fixa de monitor. O tema disponibiliza a área adequada ao componente e o plugin adapta seu conteúdo à largura efetivamente disponível.

## Homologação

O comportamento foi validado no ambiente `wpdev` em outubro de 2026.

Foram verificados:

- página de Corpo Docente com sidebar;
- apresentação do Corpo Docente em uma coluna;
- apresentação do Corpo Docente em duas colunas;
- preservação horizontal dos cards no modo de duas colunas;
- ampliação da área útil do componente;
- redução da sidebar somente nas páginas de Corpo Docente;
- preservação do comportamento das demais páginas do tema.

No modo de uma coluna, a largura e a centralização dos cards são controladas pelo plugin UFPB Base SIGAA e não pelo tema.

As alterações foram homologadas no `wpdev` antes da consolidação no histórico Git.
