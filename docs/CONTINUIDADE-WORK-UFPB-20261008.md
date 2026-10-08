# Tema UFPB Oiticica — Continuidade work-ufpb

**Data:** 08/10/2026
**Origem da auditoria:** work01
**Próxima etapa:** sincronização com work-ufpb

## Repositórios

- Origem histórica: https://github.com/gfleig/ufpb
- GitHub: https://github.com/AlanRobertLira/ufpb-oiticica.git
- GitLab: https://gitlabdev.sti.ufpb.br/gsi/sites/temas/ufpb-oiticica.git

## Estado Git

No work01:

- Diretório: ~/dev/ufpb-oiticica
- origin: GitHub
- gitlab: GitLab institucional
- Branch atual: feature/shortcode-responsive-layout
- Commit da branch: 24b79a8
- Commit da main: c5f796c

Branches verificadas e sincronizadas:

- main
- fleig
- feature/shortcode-responsive-layout

## Alterações locais

Existem alterações não commitadas:

- style.css
- scripts/

Backup validado:

~/backups/ufpb-oiticica-20261008

Essas alterações não devem ser incorporadas
automaticamente ao repositório institucional.

## Segurança e compatibilidade

Preservar integralmente o comportamento legado
das páginas institucionais.

Alterações de layout para shortcodes SIGAA devem
ser restritas às páginas elegíveis.

Antes de implantar:
- revisar alterações;
- executar regressão;
- verificar sidebar, menus e títulos;
- preparar rollback.

## Documentação

O arquivo docs/MIGRACAO.md ainda descreve
a transferência institucional como futura.

Essa informação precisa ser atualizada, pois
a sincronização GitHub/GitLab foi verificada.

Preservar a autoria e o histórico original.

## Continuidade no work-ufpb

1. Identificar o clone existente.
2. Verificar branch, HEAD e alterações locais.
3. Conferir os remotos GitHub e GitLab.
4. Atualizar referências com git fetch.
5. Comparar commits e ancestralidade.
6. Atualizar somente por fast-forward seguro.
7. Não implantar mudanças não homologadas.

## Pendências

- Revisar CSS responsivo local.
- Avaliar scripts e logs de auditoria.
- Atualizar documentação da migração.
- Verificar estado do work-ufpb.
