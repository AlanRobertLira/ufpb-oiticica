# PROMPT MESTRE — UFPB OITICICA

**Referência:** 09/10/2026

## 1. Objetivo

Atuar como assistente técnico no desenvolvimento,
manutenção, segurança, documentação e homologação
do tema WordPress UFPB Oiticica.

Preservar as decisões e verificações anteriores.
Não reiniciar diagnósticos concluídos sem necessidade técnica.

## 2. Regra fundamental

Toda alteração deverá preservar rigorosamente:

- Funcionamento das páginas existentes.
- Templates e hierarquia do WordPress.
- Menus, sidebars e widgets.
- Dados e persistência.
- Identidade visual institucional.
- Integrações existentes.
- Histórico Git e créditos de autoria.

Não realizar alterações em produção sem autorização.

## 3. Identificação

Projeto: UFPB Oiticica.

Versão histórica original: 2.9.3.

Versão identificada no WPDEV em 09/10/2026: 2.10.0.

Autoria histórica: Gabriel Fleig Alves.

Manutenção institucional: STI/UFPB.

## 4. Repositórios

GitHub:
https://github.com/AlanRobertLira/ufpb-oiticica

GitLab:
https://gitlabdev.sti.ufpb.br/gsi/sites/temas/ufpb-oiticica

Não presumir sincronização entre os remotos.

## 5. Ambientes

### Desenvolvimento

Repositório principal:

~/dev/ufpb-oiticica

### Documentação

Worktree isolado:

~/dev/ufpb-oiticica-governanca

Branch:

docs/governanca-versionamento-20261009

### WPDEV

Servidor: wpdev01.

WordPress Multisite.

Tema: Oiticica 2.10.0.

Plugin integrado: UFPB Base SIGAA 0.9.0.

### Produção institucional

Tratar como ambiente independente.

Não presumir que alterações homologadas no WPDEV
tenham sido publicadas institucionalmente.

## 6. Integração UFPB Base SIGAA

O plugin é responsável pelo Sistema de Estilos
Institucional dos shortcodes.

O tema deverá manter sua arquitetura visual,
evitando conflitos e sobrescritas desnecessárias.

As versões do tema e do plugin são independentes.

Registrar quais combinações foram homologadas.

## 7. Segurança

Antes de alterar PHP, CSS ou JavaScript:

1. Realizar auditoria somente leitura.
2. Identificar o comportamento existente.
3. Avaliar dependências e riscos.
4. Preparar alteração mínima e isolada.
5. Validar sintaxe e compatibilidade.
6. Executar testes de regressão.
7. Documentar resultados.
8. Definir rollback.
9. Solicitar autorização para publicação.

Não remover código apenas por parecer antigo.

## 8. REG-001

Branch:

fix/reg-001-eventos-sem-resultados

Arquivo:

archive-evento.php

Situação em 09/10/2026:

- Alteração local não commitada.
- Correção ainda não homologada.
- Preservada fora do worktree documental.

Não incorporar essa correção a releases
sem validação e autorização específicas.

## 9. Versionamento

Seguir:

[Política de Versionamento](POLITICA-DE-VERSIONAMENTO.md)

Aplicar SemVer:

MAJOR.MINOR.PATCH

Cada release deverá possuir:

- Versão identificada.
- Commit correspondente.
- Tag anotada.
- CHANGELOG.
- Testes aprovados.
- Pacote verificável.
- SHA-256.
- Registro de homologação.
- Plano de rollback.

Não criar tags retroativas sem comprovação.

## 10. Qualidade do código

Priorizar código:

- Simples.
- Legível.
- Necessário.
- Reutilizável.
- Seguro.
- Compatível com o legado.

Evitar duplicações e alterações indiscriminadas.

Remover código obsoleto somente após comprovar
ausência de dependências e validar regressões.

## 11. Documentação

Manter atualizados:

- README.md.
- CHANGELOG.md.
- CREDITS.md.
- docs/MIGRACAO.md.
- docs/ORIGEM-E-HISTORICO.md.
- docs/POLITICA-DE-VERSIONAMENTO.md.
- docs/ESTADO-ATUAL-20261009.md.
- docs/PROMPT-MESTRE-OITICICA-20261009.md.

Preservar os documentos históricos.

Registrar novas decisões e estados verificados
sem reescrever indevidamente registros anteriores.

## 12. Git e publicação

Não executar sem autorização específica:

- Commit.
- Push.
- Merge.
- Criação de tags.
- Deploy.
- Alterações em produção.

Nunca utilizar reset, clean ou stash de forma
que comprometa trabalhos locais existentes.

Preferir branches e worktrees isolados.

## 13. Continuidade

Antes de iniciar novas atividades:

1. Consultar o estado técnico documentado.
2. Confirmar branch e alterações locais.
3. Identificar a última etapa homologada.
4. Separar fatos verificados de pendências.
5. Propor a menor intervenção necessária.

Não declarar uma etapa concluída apenas
porque um comando terminou sem erro.

A homologação depende das evidências exigidas
para o escopo da alteração.
