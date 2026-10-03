# Widgets e funcionalidades

## Visão geral

A versão histórica 2.9.3 do Oiticica contém um conjunto de widgets e funcionalidades desenvolvidos para os sites institucionais da Universidade Federal da Paraíba.

A auditoria do código identificou **22 arquivos de widgets personalizados** no diretório `widgets/`.

## Inventário dos widgets

### Agenda

`WidgetAgenda.php`

Componente relacionado à apresentação de informações da agenda.

### Apresentação

`WidgetApresentacao.php`

Componente destinado à apresentação de conteúdo institucional.

### Destaque solo invertido

`WidgetDestaqueSoloInvertido.php`

Variação visual de destaque individual.

### Destaque solo

`WidgetDestaqueSolo.php`

Componente para apresentação de um destaque individual.

### Destaque triplo

`WidgetDestaqueTriplo.php`

Componente destinado à apresentação de três destaques.

### Editais

`WidgetEditais.php`

Componente relacionado à apresentação de editais.

### Catálogo da Editora

`WidgetEditoraCatalogo.php`

Componente que possui integração com o catálogo da Editora UFPB.

A auditoria identificou uso de requisição HTTP para acesso à API utilizada pelo widget.

A configuração de autenticação e tokens deve ser tratada com cuidado e não deve resultar em credenciais versionadas no repositório.

### Eventos

`WidgetEventos.php`

Componente relacionado à apresentação de eventos.

### Links com imagens

`WidgetLinksImagens.php`

Componente para apresentação de links associados a imagens.

### Links com marcas

`WidgetLinksMarcas.php`

Componente relacionado à apresentação de links utilizando elementos de marca ou imagens.

### Links rápidos — oito itens

`WidgetLinksRapidosOito.php`

Variação do componente de links rápidos destinada à apresentação de até oito itens conforme a implementação histórica.

### Links rápidos

`WidgetLinksRapidos.php`

Componente de navegação para links de acesso rápido.

### Mapa e foto

`WidgetMapaEFoto.php`

Componente destinado à apresentação de conteúdo envolvendo mapa e imagem.

### Notícias — banner

`WidgetNoticiasBanner.php`

Componente de notícias com apresentação em formato de banner.

### Notícias — check

`WidgetNoticiasCheck.php`

Variação do componente de notícias existente no tema.

### Notícias

`WidgetNoticias.php`

Componente para apresentação de notícias.

### Notícias simples

`WidgetNoticiasSimples.php`

Componente com apresentação simplificada de notícias.

### Números customizados

`WidgetNumerosCustom.php`

Componente destinado à apresentação configurável de números ou indicadores.

### Números — mulheres

`WidgetNumerosMulheres.php`

Componente relacionado à apresentação de indicadores.

A auditoria identificou consumo de endpoints públicos institucionais associados ao Metabase da UFPB.

### Números

`WidgetNumeros.php`

Componente destinado à apresentação de números e indicadores.

### Patentes

`WidgetPatentes.php`

Componente relacionado à apresentação de patentes.

### Posts — check

`WidgetPostsCheck.php`

Componente de apresentação de posts existente na versão histórica.

## Registro dos widgets

As classes de widgets são carregadas a partir de `functions.php`.

A versão auditada também registra áreas de widgets utilizadas pelo tema.

O comportamento exato, campos de configuração e regras de renderização de cada widget devem ser verificados diretamente em sua respectiva classe antes de alterações funcionais.

## Tipos de conteúdo personalizados

Foram identificados no código os seguintes tipos de conteúdo:

- `evento`;
- `agenda`;
- `edital`;
- `patente`.

O tema contém templates específicos para esses tipos.

## Taxonomias

A auditoria identificou funcionalidades e templates de taxonomia relacionados a editais e patentes.

Entre os templates existentes estão:

- `taxonomy-edital_type.php`;
- `taxonomy-patente_type.php`.

## Notícias

O tema contém diferentes formas de apresentação de notícias, incluindo widgets e templates específicos.

Entre os componentes encontrados estão:

- `WidgetNoticias.php`;
- `WidgetNoticiasSimples.php`;
- `WidgetNoticiasBanner.php`;
- `WidgetNoticiasCheck.php`;
- `page-noticias.php`.

## Personalização

O código utiliza recursos do WordPress Customizer.

Foram identificadas opções relacionadas a:

- ativação de recursos de tradução;
- URL em português;
- inglês;
- espanhol;
- francês;
- alemão;
- italiano;
- mandarim;
- elementos de apresentação visual.

A lista deve ser atualizada caso novos controles sejam identificados durante manutenção ou refatoração.

## Compartilhamento

A auditoria encontrou referências a serviços de compartilhamento social, incluindo:

- WhatsApp;
- Twitter/X;
- Facebook.

A disponibilidade e os formatos de URL dessas integrações devem ser revisados periodicamente.

## Integrações institucionais

Foram identificadas referências a:

- UFPB;
- Editora UFPB;
- e-MEC;
- Fala.BR;
- Metabase institucional.

Integrações externas não devem ser consideradas permanentemente disponíveis sem tratamento adequado de falhas.

## Observação

Este documento descreve os componentes encontrados na versão histórica preservada.

Ele não substitui a leitura do código quando for necessário determinar parâmetros, consultas, filtros, sanitização, escape, autenticação ou comportamento detalhado.
