# Relatório Técnico de Homologação — UFPB Oiticica

**Etapa:** A.33.6.3
**Referência:** Novembro de 2026
**Projeto:** UFPB Oiticica / UFPB Base SIGAA
**Ambiente:** WPDEV — WordPress Multisite STI
**Tema:** UFPB Oiticica 2.10.0
**Situação:** Homologação funcional e visual concluída no escopo avaliado.

## 1. Objetivo

Consolidar as evidências técnicas e funcionais das correções integradas ao tema UFPB Oiticica, preservando o comportamento das páginas institucionais e a compatibilidade com o plugin UFPB Base SIGAA.

## 2. Identificação da integração

- Repositório: `/home/alan/dev/ufpb-oiticica-integracao`
- Branch: `integration/oiticica-homologacoes-202611`
- HEAD: `bcca40579a0aea2b72a7f8f0628120b1fe6bb510`
- Arquivos PHP preparados: `archive-evento.php` e `functions.php`
- Alterações preparadas: 9 inserções e 2 exclusões
- Commit de integração: não realizado

## 3. Correções integradas

### 3.1 Open Graph

**Commit de origem:** `67360a6`

A correção trata com segurança o retorno de `wp_get_attachment_image_src()` quando não existe logotipo válido, evitando acesso indevido a elementos de um retorno não estruturado como array.

Os testes HTTP das páginas examinadas retornaram HTTP 200, sem redirecionamentos inesperados ou erros PHP visíveis.

A ausência de `og:image` quando não existe imagem válida é um comportamento esperado.

### 3.2 REG-001 — Eventos sem resultados

**Commit de origem:** `c256a34`

A correção substitui o redirecionamento da listagem vazia por uma mensagem contextualizada.

Cenários registrados:

- Eventos atuais sem resultados.
- Eventos passados com resultados.
- Eventos passados sem resultados, confirmados manualmente pelo responsável.
- Preservação das rotas e ausência de redirecionamentos inesperados nas páginas examinadas.

## 4. Integração UFPB Base SIGAA

O layout responsivo é aplicado às páginas elegíveis que utilizam os shortcodes homologados do plugin UFPB Base SIGAA.

As alterações de apresentação são condicionais, preservando o comportamento das páginas sem shortcodes.

Foram homologados:

- Cabeçalho e navegação responsiva.
- Dados acadêmicos e cartões de coordenação.
- Estruturas curriculares e componentes.
- Modais de detalhes.
- Rodapé institucional.
- Compatibilidade com páginas legadas, conforme confirmação manual.

## 5. Homologação visual e funcional

Evidências visuais examinadas:

- Tablet: 768 × 1024 px.
- Celular: 390 × 844 px.
- Menu responsivo aberto e fechado.
- Estrutura curricular e detalhes de componentes em modais.

Verificações confirmadas manualmente pelo responsável:

- Retorno do modal do componente à estrutura.
- Fechamento dos modais e restauração da página.
- Navegação por teclado e foco dos modais.
- Ausência de overflow horizontal global.
- Regressão de páginas sem shortcodes.
- Cenário REG-001 sem eventos passados.

Essas confirmações manuais não são classificadas como testes automatizados.

## 6. Integridade WORK01 × WPDEV

A comparação dos manifestos registrou:

- 174 arquivos idênticos.
- Uma diferença documental em `docs/INTEGRACAO-SHORTCODES-UFPB.md`.
- Um documento adicional no WORK01: `docs/HOMOLOGACAO-LAYOUT-RESPONSIVO-56fd0a7.md`.
- Nenhuma divergência nos arquivos executáveis examinados.

### Hashes SHA-256 homologados

| Arquivo | SHA-256 |
|---|---|
| `functions.php` | `01ce3483923e8fc865f7aa0d1bb3a7c3f89ad21e21693ac91094dde5a8a5082d` |
| `archive-evento.php` | `312661806f26f288e9494a3a4b00ba560c3121e9e14aceff5db5435c10958687` |

## 7. Governança e preservação

- Repositório original e quatro worktrees preservados.
- Diretório `scripts/` não rastreado preservado.
- Nenhum commit, push, merge ou deploy autorizado nesta etapa.
- Ambiente institucional e produção fora do escopo da homologação WPDEV.
- Publicação futura condicionada a autorização explícita.

### Condições para eventual implantação

Antes de qualquer implantação em outro ambiente:

1. Confirmar branch, commit e conteúdo exato do pacote.
2. Auditar o estado atual do destino.
3. Preparar backup verificável do estado de destino.
4. Documentar e validar o procedimento de rollback.
5. Obter autorização explícita.
6. Executar testes de regressão após a implantação.

O backup antigo do tema 2.9.3 não deve ser presumido como rollback adequado para a versão 2.10.0.

## 8. Conclusão

As correções Open Graph e REG-001, juntamente com a integração responsiva SIGAA, foram homologadas no WPDEV dentro do escopo das evidências técnicas, visuais e confirmações manuais registradas.

A homologação não representa autorização para publicação institucional ou em produção.

**Decisão técnica:** preservar o estado atual da integração até autorização específica para operações Git ou implantação.
