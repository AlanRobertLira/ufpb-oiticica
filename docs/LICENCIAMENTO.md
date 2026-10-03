# Licenciamento

## Escopo

Este documento registra as informações de licenciamento identificadas durante a auditoria inicial do repositório Oiticica.

Ele não substitui uma auditoria jurídica ou uma análise completa da proveniência de todos os arquivos distribuídos no projeto.

## Licença declarada pelo tema

O cabeçalho histórico do arquivo `style.css` da versão 2.9.3 declara:

- **License:** GNU General Public License v3 or later
- **License URI:** `http://www.gnu.org/licenses/gpl-3.0.html`

Essa informação faz parte dos metadados originais do tema e deve ser preservada.

## Ausência de licença geral na raiz

Na auditoria realizada durante a migração não foi encontrado um arquivo geral de licença na raiz do repositório, como:

- `LICENSE`;
- `LICENSE.txt`;
- `license.txt`.

Por esse motivo, a etapa inicial de documentação não cria automaticamente um novo arquivo `LICENSE` para representar todos os conteúdos do repositório.

A criação de um arquivo geral de licença deve ocorrer somente após confirmação do escopo aplicável aos diferentes componentes.

## Componentes de terceiros

O repositório distribui componentes que possuem documentação ou arquivos de licença próprios.

Esses arquivos devem ser preservados.

### Font Awesome

Foram identificados recursos do Font Awesome no diretório:

`assets/fontawesome6/`

Também foi identificado o arquivo:

`assets/fontawesome6/LICENSE.txt`

Esse arquivo deve permanecer junto ao componente correspondente.

### IBM Plex Sans

O repositório contém arquivos da família tipográfica IBM Plex Sans.

Foram identificados arquivos de licença em:

`fonts/complete/woff/license.txt`

e:

`fonts/complete/woff2/license.txt`

Esses arquivos devem ser preservados junto às fontes distribuídas.

## Imagens

O diretório `img/` contém diferentes categorias de arquivos, incluindo:

- fotografias;
- imagens ilustrativas;
- marcas;
- brasões;
- logotipos;
- SVGs;
- elementos institucionais.

A licença declarada para o código do tema não deve ser automaticamente interpretada como definição da licença de todas essas imagens.

A proveniência e as condições de utilização dos recursos visuais devem ser avaliadas separadamente quando necessário.

## Marcas e identidade institucional

Licenciamento de software e autorização de uso de marca são assuntos distintos.

A existência de marcas, brasões, nomes ou elementos visuais da Universidade Federal da Paraíba no repositório não implica autorização irrestrita para utilização desses elementos fora de seu contexto institucional.

Consulte também:

`docs/IDENTIDADE-VISUAL.md`

## Código original e contribuições posteriores

A migração preservou o histórico e os metadados de autoria existentes.

Contribuições posteriores devem:

- registrar seus autores reais;
- respeitar o licenciamento aplicável;
- preservar avisos de copyright e licença de terceiros;
- evitar remover arquivos de licença sem análise;
- documentar novas dependências.

## Novas dependências

Antes de incorporar uma nova biblioteca, fonte, imagem ou componente de terceiros, deve-se verificar:

1. licença;
2. compatibilidade com o projeto;
3. requisitos de atribuição;
4. necessidade de distribuir o texto da licença;
5. restrições sobre marcas ou recursos visuais.

## Auditoria futura

Recomenda-se realizar uma auditoria específica de licenciamento para classificar:

- código do tema;
- bibliotecas;
- fontes;
- imagens;
- fotografias;
- marcas;
- brasões;
- SVGs;
- recursos provenientes de terceiros.

Até que essa análise seja concluída, não se deve assumir que uma única licença cobre indistintamente todos os arquivos do repositório.

## Preservação

Os avisos e arquivos de licença já existentes no histórico devem ser preservados durante refatorações e reorganizações do projeto.
