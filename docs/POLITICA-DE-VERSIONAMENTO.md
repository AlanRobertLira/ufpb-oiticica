# Política de Versionamento — UFPB Oiticica

## 1. Objetivo

Estabelecer regras de versionamento, rastreabilidade, homologação
e publicação do tema WordPress UFPB Oiticica.

Esta política preserva o histórico original, a autoria, o funcionamento
das páginas institucionais e a compatibilidade com o UFPB Base SIGAA.

## 2. Versionamento Semântico

O projeto adota o formato MAJOR.MINOR.PATCH.

- MAJOR: alterações incompatíveis com versões anteriores.
- MINOR: novas funcionalidades compatíveis.
- PATCH: correções compatíveis, sem novas funcionalidades.

A classificação considera o impacto sobre templates, páginas,
widgets, shortcodes, integrações e configurações existentes.

## 3. Identificação das versões

Cada versão publicada deverá possuir:

- Número de versão no cabeçalho de style.css.
- Commit Git identificado.
- Tag Git anotada no formato vMAJOR.MINOR.PATCH.
- CHANGELOG atualizado.
- Documentação compatível com a versão.
- Evidências de testes e homologação.
- Pacote ZIP verificável.
- Registro SHA-256 do pacote.
- Plano de rollback.

Não criar tags retroativas sem comprovar a correspondência
entre o commit e o código efetivamente homologado.

## 4. Ambientes

Distinguir obrigatoriamente:

- Desenvolvimento.
- WPDEV.
- Homologação institucional.
- Produção institucional.

Uma versão instalada no WPDEV não é automaticamente
considerada publicada em produção.

## 5. Controle Git

- Preservar o histórico original e os créditos de autoria.
- Desenvolver alterações em branches identificadas.
- Utilizar commits com escopo claro.
- Não misturar alterações funcionais e documentais sem justificativa.
- Não reescrever o histórico compartilhado.
- Não executar push, merge ou criação de tags sem autorização.
- Verificar referências remotas antes de declarar sincronização.

## 6. Homologação

Antes de uma publicação, verificar conforme o escopo:

- Sintaxe PHP.
- Funcionamento dos templates.
- Menus, sidebar e widgets.
- Páginas existentes em produção.
- Responsividade.
- Acessibilidade.
- Integração com o UFPB Base SIGAA.
- Regressão das funcionalidades existentes.
- Segurança e compatibilidade.

Registrar os resultados e as limitações dos testes.

## 7. Pacotes e releases

Gerar pacotes somente a partir de código identificado e validado.

Registrar:

- Versão.
- Commit.
- Tag.
- Data.
- Ambiente homologado.
- Versões de WordPress, PHP e plugin quando verificadas.
- SHA-256 do ZIP.
- Responsável pela aprovação.

Preservar os pacotes homologados existentes.

## 8. Compatibilidade com UFPB Base SIGAA

O tema e o plugin possuem versionamento independente.

Cada homologação de integração deverá identificar explicitamente
as versões de ambos os projetos testadas em conjunto.

O Sistema de Estilos Institucional dos shortcodes pertence ao plugin.
O tema deve preservar sua arquitetura e evitar sobrescritas
desnecessárias dos estilos do plugin.

## 9. Rollback

Antes de publicar alterações, definir o procedimento de retorno
à versão anterior, incluindo arquivos, configurações e dependências
afetadas.

Não presumir que a existência de um backup comprova
a execução bem-sucedida de uma restauração.

## 10. Situação inicial da política

Em 09/10/2026:

- Versão identificada no WPDEV: 2.10.0.
- Versão histórica original preservada: 2.9.3.
- Tags locais e remotas consultadas: nenhuma encontrada.
- Publicação institucional da versão 2.10.0: não confirmada.
- Correção REG-001: alteração local ainda não homologada.

Esta seção registra um estado histórico e não substitui
o inventário técnico atualizado do projeto.
