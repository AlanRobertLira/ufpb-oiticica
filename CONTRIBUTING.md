# Contribuindo com o Oiticica

Este documento estabelece orientações para manutenção e evolução do tema Oiticica preservando sua proveniência e histórico.

## Preservação histórica

O histórico original do projeto deve permanecer preservado.

Não devem ser utilizados procedimentos destinados a reescrever commits históricos para alterar:

- autoria;
- datas;
- mensagens;
- identidade dos contribuidores;
- proveniência do código.

O marco histórico da migração é:

`4c725847be5b4d1809ef091c6cc65f358228aaa0`

## Fluxo recomendado

Para novas alterações:

1. atualizar a branch de referência;
2. criar uma branch específica para o trabalho;
3. realizar alterações pequenas e rastreáveis;
4. testar os componentes afetados;
5. atualizar a documentação correspondente;
6. revisar as diferenças antes do commit;
7. utilizar a identidade Git real do responsável;
8. integrar a alteração somente após validação.

## Organização das branches

Branches devem possuir nomes que identifiquem sua finalidade.

Exemplos:

- `feature/nome-da-funcionalidade`
- `fix/nome-da-correcao`
- `docs/nome-da-documentacao`
- `refactor/nome-da-refatoracao`

## Commits

As mensagens devem ser objetivas e descrever a finalidade da alteração.

Exemplos:

- `docs: atualiza documentacao de instalacao`
- `fix: corrige tratamento do widget de agenda`
- `feat: adiciona opcao de personalizacao`
- `refactor: reorganiza carregamento de widgets`

Evite misturar alterações sem relação entre si no mesmo commit.

## Código legado

O repositório contém arquivos históricos e arquivos cujos nomes sugerem versões anteriores ou alternativas.

Esses arquivos não devem ser removidos apenas por parecerem obsoletos.

Antes de excluir, substituir ou reorganizar código legado:

1. identifique referências no projeto;
2. determine sua finalidade histórica ou atual;
3. valide o comportamento em ambiente de homologação;
4. documente a justificativa;
5. faça a alteração em commit específico.

## Segurança

Não devem ser adicionados ao repositório:

- senhas;
- tokens;
- chaves privadas;
- credenciais;
- arquivos contendo segredos;
- dados pessoais desnecessários.

Integrações externas devem utilizar mecanismos adequados de configuração e armazenamento de credenciais.

Entradas e saídas devem ser tratadas conforme as práticas de segurança aplicáveis ao WordPress.

## Dependências externas

Alterações relacionadas a APIs, fontes, serviços externos ou recursos remotos devem documentar:

- finalidade;
- endereço ou serviço utilizado;
- comportamento em caso de indisponibilidade;
- requisitos de autenticação;
- implicações de privacidade e segurança.

## Compatibilidade

Mudanças devem considerar o ambiente WordPress utilizado pela UFPB.

Alterações incompatíveis devem ser documentadas antes de serem incorporadas à branch principal.

## Identidade visual

Modificações em marcas, brasões, logotipos ou outros elementos institucionais devem observar as normas de identidade visual aplicáveis à Universidade Federal da Paraíba.

## Documentação

Toda alteração que modificar instalação, configuração, arquitetura, integração ou comportamento relevante deve atualizar a documentação correspondente.

A documentação faz parte do projeto e deve permanecer sincronizada com o código.
