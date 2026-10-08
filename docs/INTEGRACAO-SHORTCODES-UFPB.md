# Integração com Shortcodes Institucionais UFPB

## Objetivo

O tema Oiticica possui tratamento de layout para páginas que utilizam componentes institucionais homologados por shortcode.

A integração mantém separadas as responsabilidades entre tema e plugin:

- o tema controla a estrutura global da página, incluindo sidebar e área de conteúdo;
- cada plugin controla exclusivamente a apresentação interna de seu componente;
- o tema não redefine a estrutura interna dos cards dos plugins;
- os plugins não alteram o grid global, menus ou templates do tema.

## Identificação unificada dos shortcodes

O plugin UFPB Base SIGAA informa ao tema os shortcodes
elegíveis por meio do filtro
`ufpb_oiticica_responsive_shortcodes`.

Shortcodes contemplados na versão 0.9.0:

- `ufpb_sigaa_docentes`
- `ufpb_sigaa_componentes`
- `ufpb_sigaa_processos_seletivos`
- `ufpb_sigaa_processos_seletivos_home`
- `ufpb_sigaa_cursos`
- `ufpb_sigaa_curso`

O tema utiliza duas funções:

- `ufpb_oiticica_responsive_shortcodes()`: recebe e normaliza
  a lista fornecida pelo plugin.
- `ufpb_oiticica_has_responsive_shortcode()`: identifica
  páginas contendo shortcodes elegíveis.

Não existe tratamento de identificação exclusivo para docentes.

## Layout responsivo unificado

Todas as páginas elegíveis recebem a classe
`ufpb-shortcode-page`.

O tema controla o layout externo da página, enquanto
o plugin controla a apresentação interna dos componentes.

## Preservação das páginas legadas

Páginas sem shortcodes elegíveis não recebem classes
adicionais nem alterações específicas de layout.

Devem permanecer preservados:

- estrutura HTML e classes originais;
- templates e funcionalidades;
- menus, sidebar, cabeçalho e rodapé;
- títulos e conteúdo;
- comportamento responsivo legado.

A integração não deve modificar globalmente o tema.

## Extensibilidade

Novos shortcodes podem ser informados pelo plugin
através do filtro `ufpb_oiticica_responsive_shortcodes`.

Não é necessário manter uma lista fixa no tema.

## Critérios de homologação

Devem ser verificados:

- reconhecimento dos seis shortcodes existentes;
- reconhecimento de novos shortcodes fornecidos pelo filtro;
- preservação das páginas sem shortcodes elegíveis;
- funcionamento nos blogs do WordPress Multisite;
- ausência de regressões funcionais e visuais.

Os testes isolados não substituem a homologação no WordPress.

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

### Histórico anterior — outubro de 2026

O comportamento anterior foi validado no ambiente `wpdev`.

Os registros históricos incluem:

- página de Corpo Docente com sidebar;
- apresentação em uma e duas colunas;
- preservação horizontal dos cards em duas colunas;
- ampliação da área útil do componente;
- ajustes específicos de sidebar para Corpo Docente;
- verificações de preservação das demais páginas.

Esses registros descrevem a implementação anterior e não
constituem homologação da identificação unificada.

A largura e a centralização dos cards de Corpo Docente
continuam sob responsabilidade do plugin UFPB Base SIGAA.

### Identificação unificada — outubro de 2026

A implementação atual utiliza exclusivamente:

- `ufpb_oiticica_responsive_shortcodes()`;
- `ufpb_oiticica_has_responsive_shortcode()`;
- classe CSS `ufpb-shortcode-page`.

O plugin fornece a lista de shortcodes elegíveis por filtro.

Foram aprovados oito testes funcionais isolados, incluindo
os seis shortcodes existentes, uma página comum e a ausência
de shortcodes fornecidos pelo plugin.

Também foram aprovadas as verificações de sintaxe PHP e
`git diff --check`.

**Situação: homologação no WordPress Multisite pendente.**

Antes da aprovação, deverão ser verificados os componentes
SIGAA e as páginas legadas dos Blogs 1 e 2, incluindo
estrutura HTML, layout, menus, sidebar, títulos,
responsividade e ausência de regressões funcionais.
