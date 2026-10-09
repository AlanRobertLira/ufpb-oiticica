# Homologação — Layout Responsivo UFPB Oiticica

## Identificação

- Data: 08/10/2026
- Projeto: UFPB Oiticica
- Commit: `56fd0a7`
- Branch: `feature/shortcode-responsive-layout`
- Ambiente: WPDEV01
- URL: https://wpdev.lab.kernew.com.br/sti/
- Plugin integrado: UFPB Base SIGAA 0.9.0

## Objetivo

Homologar a refatoração da identificação de páginas com
shortcodes SIGAA, preservando o comportamento legado das
páginas institucionais do WordPress.

## Alterações homologadas

- Identificação dos shortcodes responsivos por filtro.
- Integração com os shortcodes registrados pelo plugin.
- Utilização da classe genérica `ufpb-shortcode-page`.
- Remoção da dependência da classe exclusiva de docentes.
- Preservação dos estilos existentes.
- Nenhuma alteração em `style.css` nesta refatoração.

## Regressão HTTP

Foram verificadas 14 páginas, comparando os resultados
anteriores e posteriores à implantação.

Resultado:

- 14 páginas verificadas.
- 14 respostas HTTP 200.
- Nenhuma divergência inesperada.
- Classes responsivas preservadas nas páginas SIGAA.
- Classe legada exclusiva de docentes removida conforme previsto.
- Marcadores SIGAA preservados na comparação realizada.

Arquivos de evidência no WORK01:

- `/tmp/oiticica-baseline-pre-56fd0a7.tsv`
- `/tmp/oiticica-baseline-pos-56fd0a7.tsv`

Esses arquivos são evidências locais e não estão incorporados
automaticamente ao repositório.

## Homologação visual

Foram examinadas capturas de tela no Firefox.

### Páginas SIGAA

- Docentes: desktop e mobile.
- Componentes curriculares: mobile, incluindo modal de detalhes.
- Curso: desktop e mobile, incluindo estrutura curricular
  e detalhes de componente.

### Páginas institucionais

- Página inicial da STI: desktop.
- Página Apresentação: desktop e mobile.
- Menu mobile da página Apresentação: abertura verificada.

### Resultado

Não foram observadas regressões visuais evidentes
relacionadas à refatoração no escopo examinado.

A inspeção por capturas não substitui testes funcionais
exaustivos de todos os links, formulários e submenus.

## Ressalva visual

No menu mobile, em 320 x 700 px, o ícone de busca aparenta
estar parcialmente cortado na borda direita.

A ocorrência deve ser investigada separadamente, sem
atribuição automática à refatoração `56fd0a7`.

## Backup anterior à implantação

Servidor: WPDEV01

Arquivo:

`/opt/orion/wpdev/backups/oiticica-pre-56fd0a7-20261008-213430.tar.gz`

Integridade:

- Arquivo SHA-256 correspondente verificado.
- Extração de teste executada.
- Comparação com o tema anterior realizada sem diferenças.

## Procedimento de rollback

Em caso de necessidade:

1. Suspender novas alterações no tema.
2. Confirmar o backup e validar seu SHA-256.
3. Registrar o estado atual do tema.
4. Restaurar o backup validado no diretório do tema
   `/opt/orion/wpdev/wordpress/wp-content/themes/oiticica`.
5. Preservar proprietário e permissões.
6. Verificar a sintaxe PHP no ambiente WordPress.
7. Reexecutar os testes HTTP e visuais.

A restauração deve ser executada em procedimento
operacional controlado. Este documento não executa rollback.

## Conclusão

A refatoração `56fd0a7` foi homologada no WPDEV01
dentro do escopo dos testes HTTP e visuais realizados.

A homologação não constitui autorização automática
para implantação em produção.
