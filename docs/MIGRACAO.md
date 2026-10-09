# Migração e preservação do repositório

## Objetivo

A migração tem como objetivo preservar o tema Oiticica, seu histórico Git, sua autoria e sua proveniência, criando uma base controlada para documentação, manutenção e continuidade.

## Repositório de origem

O repositório utilizado exclusivamente como fonte foi:

`https://github.com/gfleig/ufpb`

O processo de preservação foi conduzido sem realizar alterações no repositório original.

## Repositório de preservação

O primeiro destino da migração é:

`https://github.com/AlanRobertLira/ufpb-oiticica`

Esse repositório preserva o histórico anterior e serve como base para documentação e continuidade do projeto.

## Procedimento de preservação

Foi criado inicialmente um clone Git do tipo mirror do repositório original.

O mirror permitiu preservar e verificar as referências e os objetos existentes antes da publicação no novo destino.

A integridade do repositório foi verificada durante o procedimento de migração.

## Estado encontrado na origem

Durante a auditoria foram identificados:

- **120 commits históricos**;
- **2 branches:** `main` e `fleig`;
- **0 tags**;
- último commit original `4c725847be5b4d1809ef091c6cc65f358228aaa0`.

As branches `main` e `fleig` apontavam para o mesmo commit no momento da preservação.

## Transferência para o GitHub

As branches históricas foram transferidas explicitamente para o novo repositório.

Após a transferência, as referências foram comparadas com a origem para confirmar a preservação dos SHAs.

O histórico original não foi reescrito.

## Cadeia de proveniência

A cadeia planejada de preservação e institucionalização é:

`gfleig/ufpb`

→ preservação integral do histórico

`AlanRobertLira/ufpb-oiticica`

→ futura disponibilização institucional

`GitLab DEV UFPB / gsi / sites / temas / ufpb-oiticica`

O caminho final no GitLab deverá ser confirmado antes da transferência institucional.

## Situação institucional verificada em 09/10/2026

O repositório de trabalho possui os seguintes remotos configurados:

- GitHub: `https://github.com/AlanRobertLira/ufpb-oiticica.git`
- GitLab DEV UFPB: `https://gitlabdev.sti.ufpb.br/gsi/sites/temas/ufpb-oiticica.git`

Foram identificadas referências locais de acompanhamento das
branches nos dois remotos.

A consulta de tags remotas realizada em 09/10/2026 não retornou
tags publicadas.

A existência dos remotos e de suas referências não comprova,
isoladamente, que todas as branches estejam sincronizadas.

A sincronização deverá ser verificada novamente antes de qualquer
publicação, criação de release ou alteração institucional.

Esta seção registra a continuidade posterior à migração histórica.
As seções anteriores permanecem como documentação do processo
original de preservação.

## Responsabilidades

### Desenvolvimento histórico

O desenvolvimento anterior ao marco de migração permanece atribuído aos autores registrados no histórico original.

A auditoria realizada durante a migração identificou Gabriel Fleig Alves como autor dos 120 commits históricos preservados.

### Preservação e continuidade

Alan Robert Lira é responsável pela etapa de:

- preservação do repositório;
- validação da migração;
- documentação;
- preparação para manutenção;
- continuidade posterior do repositório migrado.

Essa responsabilidade não substitui nem modifica a autoria histórica.

## Marco histórico

O último commit anterior à nova etapa é:

`4c725847be5b4d1809ef091c6cc65f358228aaa0`

Mensagem:

`2.9.3 - Ajuste de <details> e campo de token de API da editora`

Os commits posteriores a esse marco pertencem à nova etapa e devem registrar normalmente seus respectivos autores.

## Política para o repositório original

O repositório `gfleig/ufpb` deve permanecer tratado como fonte histórica.

Não devem ser realizados nele, como parte deste processo:

- commits;
- pushes;
- criação ou alteração de branches;
- criação de tags;
- alterações de configuração;
- pull requests;
- reescrita do histórico.

## GitLab DEV UFPB

A migração para o GitLab institucional constitui etapa posterior.

Antes dessa operação deverão ser confirmados:

1. namespace institucional correto;
2. existência do projeto de destino;
3. permissões;
4. repositório vazio ou estado previamente conhecido;
5. URL Git exata do projeto.

Somente após essas verificações as branches deverão ser transferidas e seus SHAs comparados novamente.
