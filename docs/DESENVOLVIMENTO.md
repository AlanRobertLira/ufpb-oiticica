# Desenvolvimento e manutenção

## Objetivo

Este documento registra orientações para manutenção do Oiticica e pontos técnicos identificados durante a auditoria inicial do repositório.

A primeira etapa posterior à migração é exclusivamente documental.

Correções e refatorações devem ser realizadas posteriormente em commits próprios.

## Marco histórico

O último commit da etapa original é:

`4c725847be5b4d1809ef091c6cc65f358228aaa0`

As alterações posteriores devem preservar esse histórico e registrar normalmente seus novos autores.

## Princípio de evolução

Recomenda-se separar o trabalho em categorias:

1. documentação;
2. correções;
3. segurança;
4. refatoração;
5. compatibilidade;
6. novas funcionalidades;
7. remoção de código legado.

Evite reunir todas essas categorias em um único commit.

## Estado histórico preservado

A versão inicial preservada para continuidade é a **2.9.3**.

Antes de qualquer modernização ampla, deve existir uma referência reproduzível dessa versão em ambiente de desenvolvimento ou homologação.

## Arquivos legados identificados

Foram encontrados arquivos cujos nomes indicam versões anteriores, alternativas ou experimentais, incluindo:

- `headerPadrao_old.php`;
- `single_old.php`;
- `style-old.css`;
- `wrong_taxonomy-patente_type.php`;
- `decoration_old.jpg`;
- `ufpb-brasao-pb_old.png`.

A presença desses arquivos não significa automaticamente que possam ser removidos.

Antes da remoção:

1. pesquise referências;
2. compare com a versão atualmente utilizada;
3. teste o comportamento;
4. determine se existe valor histórico;
5. faça a remoção em alteração independente.

## URLs que exigem revisão

A auditoria inicial identificou referências a uma URL com domínio:

`mobile.fraudes.com`

em arquivos históricos ou templates.

A referência foi observada em arquivos como:

- `single_old.php`;
- `single-evento.php`;
- `single-patente.php`;
- `single-edital.php`.

Essa ocorrência deve ser investigada antes de qualquer implantação ampla.

A documentação inicial apenas registra a descoberta; não altera os arquivos históricos.

A revisão posterior deve determinar:

- finalidade da URL;
- origem da referência;
- se ainda é utilizada;
- se representa placeholder, conteúdo legado ou dependência real;
- se deve ser removida ou substituída;
- impacto da alteração.

## Integração com Editora UFPB

`WidgetEditoraCatalogo.php` possui integração HTTP com serviço associado ao catálogo da Editora UFPB.

Antes de modificá-lo, deve-se verificar:

- endpoint atual;
- método de autenticação;
- uso de token;
- timeout;
- tratamento de erro;
- validação da resposta;
- cache;
- sanitização;
- escape da saída.

Credenciais não devem ser armazenadas diretamente no Git.

## Integração com indicadores

`WidgetNumerosMulheres.php` utiliza endpoints públicos institucionais relacionados ao Metabase.

A implementação histórica identificada utiliza acesso remoto aos dados.

Essa integração deve ser revisada quanto a:

- tratamento de indisponibilidade;
- timeout;
- validação da resposta;
- cache;
- uso das APIs HTTP do WordPress quando apropriado;
- comportamento quando o endpoint não responder.

## Requisições externas

Integrações HTTP devem preferencialmente possuir:

- timeout definido;
- tratamento de `WP_Error`, quando aplicável;
- validação de status HTTP;
- validação do conteúdo recebido;
- fallback;
- cache quando apropriado;
- ausência de credenciais no código-fonte.

## Sanitização e escape

Uma revisão de segurança futura deve verificar sistematicamente o uso adequado das funções WordPress de:

- sanitização de entrada;
- validação;
- escape de HTML;
- escape de atributos;
- escape de URLs;
- nonces;
- verificação de permissões.

A presença ou ausência desses controles deve ser avaliada no contexto de cada fluxo antes de qualquer conclusão sobre vulnerabilidades.

## Compatibilidade PHP e WordPress

Ainda não foi estabelecida nesta documentação uma matriz formal de compatibilidade.

Uma etapa futura deverá testar e registrar:

- versões do WordPress;
- versões do PHP;
- comportamento do editor;
- widgets;
- Customizer;
- tipos de conteúdo;
- taxonomias;
- templates;
- integrações externas.

## Recursos externos

O tema possui referências a recursos e serviços externos.

Essas dependências devem ser inventariadas e, quando possível, classificadas como:

- essenciais;
- opcionais;
- institucionais;
- terceiros;
- conteúdo;
- apresentação.

## Imagens e identidade visual

O diretório `img/` contém marcas, brasões, imagens institucionais e outros recursos.

Antes de redistribuição fora do contexto institucional, deve ser realizada análise de proveniência e condições de utilização desses elementos.

Licença de código e autorização de uso de marca são assuntos distintos.

## Dependências distribuídas

O repositório contém recursos de terceiros, incluindo Font Awesome e IBM Plex Sans.

Os arquivos de licença encontrados junto a esses componentes devem ser preservados.

## Testes

Antes de mudanças funcionais relevantes, recomenda-se estabelecer testes reproduzíveis para os fluxos mais importantes.

A validação deve incluir, conforme aplicável:

- carregamento do tema;
- páginas;
- posts;
- arquivos;
- pesquisa;
- menus;
- widgets;
- Customizer;
- agenda;
- eventos;
- editais;
- patentes;
- integrações externas;
- comportamento responsivo.

## Homologação

Mudanças devem ser avaliadas em ambiente de desenvolvimento ou homologação antes da implantação em produção.

A versão histórica preservada deve permanecer recuperável pelo Git.

## Documentação

Toda decisão técnica relevante deve ser registrada junto ao repositório.

A documentação deve ser atualizada quando houver mudanças em:

- arquitetura;
- requisitos;
- instalação;
- configuração;
- widgets;
- integrações;
- licenciamento;
- identidade visual;
- procedimentos de implantação.
