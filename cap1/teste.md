Intellij Plataform SDK Documentation
=======

This is a repository **for**:
[Intellij Plataform SDK Documentation](http://www.jetbrains.org/intellij/sdk/docs/)  
  
---
Markdown Extra is available as a separate parser class in `PHP Markdown Lib`:
[**php Markdown Extra**](https://michelf.ca/projects/php-markdown/extra/)
---
## A file guide should be acessed 
* [**About this Guide**](../intro/about.md)

---
### An image can be imported
![SUPP](../images/SUPP_logo.jpg)  
  
  ---
#### A  chunck `PHP` code can be inserted in a file.md
*And now a chunk with `php` code:*  
* _And now a chunk with `php` code:_
```php
<?php
$fruta = array('maçã', 'laranja', 'pera', 'banana');
foreach ($fruta as $valor) {
    print "$valor - ";
}
```
---
#### And can be runned and show it's results  
   
  I can't do it yet here in this `teste.md` file.  
  There is a problem to solve here.  
  *How to run a php sunck code and show it's results in a file.md?*

---
##### Creating flows diagram
```puml
A -> B
```

```plantuml
digraph Test {
A -> B
}
```