# Instalação e configuração

## Escopo

Este documento descreve o procedimento geral para disponibilização do Oiticica como tema WordPress.

A versão histórica documentada é a **2.9.3**.

## Requisitos

O Oiticica depende de uma instalação funcional do WordPress capaz de executar temas PHP.

A auditoria histórica realizada até esta etapa não estabeleceu formalmente versões mínimas suportadas de:

- WordPress;
- PHP;
- servidor web;
- banco de dados.

Por esse motivo, este documento não declara versões mínimas sem validação específica.

Antes de implantação em produção, a compatibilidade deve ser testada no ambiente WordPress institucional utilizado pela UFPB.

## Obtenção do código

O repositório de preservação e continuidade é:

`https://github.com/AlanRobertLira/ufpb-oiticica`

O repositório histórico de origem é:

`https://github.com/gfleig/ufpb`

O repositório original deve ser tratado como fonte histórica.

Para manutenção, deve-se utilizar o repositório destinado à continuidade.

## Diretório do tema

Em uma instalação WordPress convencional, o tema deve estar em um diretório dentro de:

`wp-content/themes/`

Exemplo conceitual:

`wp-content/themes/ufpb-oiticica/`

O diretório deve conter diretamente arquivos como:

- `style.css`;
- `functions.php`;
- `index.php`;
- `header.php`;
- `footer.php`.

## Ativação

Depois de disponibilizar os arquivos no diretório de temas:

1. acesse a administração do WordPress;
2. abra a área de temas;
3. localize o Oiticica;
4. confira sua identificação e versão;
5. ative o tema somente no ambiente apropriado.

Em ambientes institucionais, recomenda-se realizar primeiro a validação em desenvolvimento ou homologação.

## Configuração

O código auditado contém configurações integradas ao WordPress Customizer.

Entre os recursos identificados existem opções relacionadas a:

- tradução;
- URLs para idiomas;
- apresentação visual;
- imagem de destaque ou hero;
- elementos institucionais.

As opções efetivamente disponíveis dependem da versão do tema e devem ser conferidas no ambiente de teste.

## Menus

O tema registra suporte a menus WordPress.

Após a ativação:

1. confira os menus existentes;
2. associe os menus às posições disponibilizadas pelo tema;
3. valide a navegação no desktop e em dispositivos móveis.

Não presuma que menus de outro tema serão automaticamente compatíveis com a estrutura visual do Oiticica.

## Widgets

O tema possui widgets personalizados e áreas próprias de widgets.

Após a ativação, revise:

- widgets disponíveis;
- áreas registradas;
- widgets já associados;
- conteúdo configurado;
- integrações externas utilizadas pelos widgets.

A versão auditada desabilita o editor de widgets baseado em blocos.

## Tipos de conteúdo personalizados

O tema contém funcionalidades relacionadas aos tipos:

- evento;
- agenda;
- edital;
- patente.

Antes de trocar ou desativar o tema em um site que utilize esses conteúdos, deve-se avaliar o impacto sobre sua administração e apresentação.

## Integrações externas

Alguns recursos dependem ou fazem referência a serviços externos.

A auditoria identificou, entre outros:

- API do catálogo da Editora UFPB;
- endpoints institucionais;
- e-MEC;
- Fala.BR;
- compartilhamento social;
- recursos de fontes.

Antes de implantação, confirme:

1. disponibilidade do serviço;
2. necessidade de credenciais ou token;
3. armazenamento seguro das credenciais;
4. tratamento de falhas;
5. comportamento quando o serviço estiver indisponível.

Tokens e credenciais não devem ser versionados no Git.

## Cache

Caso o WordPress, servidor web, proxy ou infraestrutura utilize cache, limpe ou invalide os caches apropriados após atualizações do tema.

A estratégia exata depende da infraestrutura onde o site está hospedado.

## Atualização do tema

Antes de atualizar:

1. registre a versão atualmente instalada;
2. mantenha backup adequado;
3. confira alterações locais;
4. teste a nova versão em homologação;
5. valide templates e widgets;
6. valide integrações externas;
7. valide responsividade e navegação;
8. somente então promova a versão para produção.

## Validação básica

Após instalação ou atualização, recomenda-se verificar pelo menos:

- página inicial;
- páginas internas;
- notícias;
- pesquisa;
- página 404;
- menus;
- cabeçalho;
- rodapé;
- widgets;
- agenda;
- eventos;
- editais;
- patentes;
- imagens;
- visualização móvel;
- links institucionais;
- integrações externas utilizadas pelo site.

## Desenvolvimento local

O repositório pode ser utilizado em uma instalação WordPress destinada a desenvolvimento.

A infraestrutura específica de desenvolvimento não faz parte do tema e deve ser documentada separadamente quando necessário.

## Produção

A implantação em produção deve seguir os procedimentos operacionais e de segurança definidos para a infraestrutura responsável pelos sites institucionais.

Não se recomenda utilizar diretamente uma alteração não validada em ambiente de produção.
