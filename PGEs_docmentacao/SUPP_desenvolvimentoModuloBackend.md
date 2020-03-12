![SUPP](../images/SUPP_logo.jpg) **SUPP**
=======
---
  
# DESENVOLVIMENTO DO MÓDULO BACKEND
  
  ![SUPP](../images/EmConstrucao.png)
  
  **Documento em construção…**
  
---

# Sumário
You can insert a table of contents using the marker `[TOC]`
1. [Módulo Backend](#modulobackend)  
1.1. Desenvolvendo o modelo da aplicação  
1.2. Desenvolvendo a camada de serviço  
1.3. Desenvolvendo a camada de controller  
2. Testando a API  
2.1. Teste usando Swagger  
2.2. Teste usando Postman 
3. Validações  
3.1. Validação usando Rules  
3.1. Triggers  
4. Relacionamentos  
4.1. Relacionamento um para um  

# Controle de versão
  
  Nome | Órgão | Data e hora
  :--------- | :------: | -------:
  Cleuler e Thiago | PGE-GO | 11/03/2020 15:21
  Carlos Clayton Nogueira Miranda | PGE-AP | 18/02/2020 10:15
  Diego Ziquinatti | PGE-RS | 17/02/2020 17:25
  
  
## 1.	**Módulo Backend** <a name="modulobackend"></a>  
1.1.	Desenvolvendo o modelo da aplicação  

O primeiro passo para construir a camada de Modelo é a criação do `Model`.
Por padrão o `SUPP` organiza os arquivos no diretório `Entity`,
para o módulo `Config` crie o arquivo  `Entity/Config.php`
e adicione o código abaixo:
  
```injectablephp
<?php
declare(strict_types=1);
/**
* /src/Entity/Config.php.
*
* @author  Advocacia-Geral da União <supp@agu.gov.br>
*/

namespace SuppCore\AdministrativoBackend\Entity;

use Doctrine\ORM\Mapping as ORM;
use Exception;
use Gedmo\Mapping\Annotation as Gedmo;
use Ramsey\Uuid\Uuid;
use SuppCore\AdministrativoBackend\Entity\Traits\Ativo;
use SuppCore\AdministrativoBackend\Entity\Traits\Blameable;
use SuppCore\AdministrativoBackend\Entity\Traits\Softdeleteable;
use SuppCore\AdministrativoBackend\Entity\Traits\Timestampable;
use Symfony\Component\Validator\Constraints as Assert;


/**
* Class Config.
*
* @ORM\Table(
*     name="config"
* )
* @ORM\Entity()
*
*
* @Gedmo\SoftDeleteable(fieldName="apagadoEm")
*
* @author  Advocacia-Geral da União <supp@agu.gov.br>
*/
class Config implements EntityInterface
{
   // Traits default
   use Blameable;
   use Timestampable;
   use Softdeleteable;
   use Ativo;

   /**
    * @ORM\Column(
    *     name="id",
    *     type="integer",
    *     nullable=false
    * )
    * @ORM\Id
    * @ORM\GeneratedValue("AUTO")
    */
protected ?int $id = null;

   /**
    * @ORM\Column(
    *     name="uuid",
    *     type="guid",
    *     nullable=false
    * )
    */
protected ?string $uuid = null;

   /**
    * @ORM\Column(
    *     name="color_theme",
    *     type="string",
    *     nullable=false,
    *     unique=true
    * )
    */
protected ?string $colorTheme = null;

   /**
    * Config constructor.
    * @throws Exception
    */

   public function __construct()
   {
       $this->uuid = Uuid::uuid4()->toString();
   }

   /**
    * @return int
    */
   public function getId(): ?int
   {
       return $this->id;
   }

   /**
    * @return string
    */
   public function getUuid(): ?string
   {
       return $this->uuid;
   }

   /**
    * @return string
    */
   public function getColorTheme(): ?string
   {
       return $this->colorTheme;
   }

   /**
    * @param string|null $colorTheme
    * @return Config
    */
   public function setColorTheme(?string $colorTheme): self
   {
       $this->colorTheme = $colorTheme;
       return $this;
   }

}
```
  
Em seguida, rode a linha de comando abaixo para acessar o container PHP
do backend em modo interativo:  
  
```css
$ sudo docker exec -it php-dev bash
```
  
No `Bash` do `Docker`, rode os comandos abaixo para criar
a estrutura de tabela do banco de dados:  
  
```css
# php /app/bin/console doctrine:database:drop --force --no-interaction
# php /app/bin/console doctrine:database:create --no-interaction
# php /app/bin/console doctrine:schema:update --force --no-interaction
# php /app/bin/console fos:elastica:reset --no-interaction
# php /app/bin/console doctrine:fixtures:load --no-interaction
# php /app/bin/console fos:elastica:populate --no-interaction
```
  
Para testar o modelo, rode o comando abaixo para acessar o container `Mysql`
do `backend` em modo interativo:  
  






  
  


