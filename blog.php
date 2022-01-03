<?php
include_once "head.php";
include_once "head.php";
?>

<?php

$entradas=file("blog.txt");
array_reverse($entradas);
$totaldeENTRADAS=count($entradas);
$entradasporpaginas=4;
$totaldepaginas=ceil($totaldeENTRADAS/$entradasporpaginas);

$paginaACTUAL=isset($_GET){"pagina"}):1;

if(paginaACTUAL<1)
{

  $paginaACTUAL=1
  
}

elseif($paginaACTUAL>totaldepaginas)
{

 $paginaACTUAL=$totaldepaginas;
}

$primeraentradaAmostrar=($paginaACTUAL=1) * $entradasporpaginas;
$ultimaentradaAmostrar=$primeraentradaAmostrar+$entradasporpaginas

if($ultimaentradaAmostrar>$totaldeENTRADAS)
{

$ultimaentradaAmostrar=$totaldeENTRADAS
}

$paginasiguiente=$paginaACTUAL<$totaldepaginas? $paginaACTUAL +1 : $totaldepaginas;
$paginaANTERIOR=$paginaACTUAL>1? $paginaACTUAL-1 :1 ;

$iniciarpaginacion=!isset($_GEt["pagina"])?"": $_GEt["pagina"];+
for($i=$primeraentradaAmostrar; $i< $ultimaentradaAmostrar; $i++)

{

$entradaACTUAL=explode("||", $entradas[$i] );
$titulo=$entradaACTUAL[0];
$descripcion=$entradaACTUAL[1];
$fecha=$entradaACTUAL[2] 
echo   <<<card 

<div class="col-10">
     <div class="card my-5 text center">
         <div class="card-body">
          <h3>$titulo</h3> 
     </div>
     <div class="card-body" >
       <p><em>$fecha</em></p>
       $descripcion 
       </div>
       </div>
       </div>
       
 card 
        
}
       ?>
<div class="container m-5 "  >
<nav aria label="pagina navegacion example text-center">
   <ul class="paginacion" >
   <li class= "page-item "> 
    < a class="<"page-link" href="blog.php?pagina=<?php echo $paginaANTERIOR;<?"ariel-label=previous ">
        <span aria-hidden="true" >&laquo;</span>
        
     </a> 
    </li> 
    <?php
    for($contador=1; $contador<=$totaldepaginas;$contador++ ) 
    {
    $activo =$paginaACTUAL==$contador ? "activo":"";
    echo<<<paginacion 
      <li class="page-item $activo "><a a class="page-link" href="blog.php?pagina=$contador">$contador</a></li>
      paginacion;
    }


      







 
class BlogPost
{
 
public $id;
public $title;
public $post;
public $author;
public $tags;
public $datePosted;
 
function __construct($inId=null, $inTitle=null, $inPost=null, $inPostFull=null, $inAuthorId=null, $inDatePosted=null)
<link rel="stylesheet" href="https://www.blogger.com/about/?hl=es">
{
    if (!empty($inId))
    {
        $this->id = $inId;
    }
    if (!empty($inTitle))
    {
        $this->title = $inTitle;
    }
    if (!empty($inPost))
    {
        $this->post = $inPost;
    }
 
    if (!empty($inDatePosted))
    {
        $splitDate = explode("-", $inDatePosted);
        $this->datePosted = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
    }
 
    if (!empty($inAuthorId))
    {
        $query = mysql_query("SELECT first_name, last_name FROM people WHERE id = " . $inAuthorId);
        
        $this->author = $row["first_name"] . " " . $row["last_name"];
    }
 
    $postTags = "No Tags";
    if (!empty($inId))
    {
        $query = mysql_query("SELECT tags.* FROM blog_post_tags LEFT JOIN (tags) ON (blog_post_tags.tag_id = tags.id) WHERE blog_post_tags.blog_post_id = " . $inId);
        $tagArray = array();
        $tagIDArray = array();
        while($row = mysql_fetch_assoc($query))
        {
            array_push($tagArray, $row["name"]);
            array_push($tagIDArray, $row["id"]);
        }
        if (sizeof($tagArray) > 0)
        {
            foreach ($tagArray as $tag)
            {
                if ($postTags == "No Tags")
                {
                    $postTags = $tag;
                }
                else
                {
                    $postTags = $postTags . ", " . $tag;
                }
            }
        }
    }
    $this->tags = $postTags;
}
 
}
 
?>
$blog=file_get_contents(["blog.txt")
$arrayblog=explode("l",$blog,3);

<link rel="stylesheet" hrefhttps://es.wikipedia.org/wiki/Historia>
 2021-<?php echo date("Y");?>
 <?php
echo "The time is " . date("h:i:sa");
?>
<?php
date_default_timezone_set("carribbean/higuey la altagracia");
echo "The time is " . date("h:i:sa");
?>



