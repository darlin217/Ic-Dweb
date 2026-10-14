<?php
echo "Exercício 1 - GrupoI<br>";
function retangulo($altura=5)
{
	$i=1;
	while($i<=$altura)
	{
	echo "****** <br>";
	$i++;
	}
}
retangulo(20);
echo  "Exercício 2 - GrupoI<br>";
function trocar ($a,$b)
{
	echo "Antes da troca A=$a e B=$b<br>";
	$c=$a;
	$a=$b;
	$b=$c;
	echo "Depois de trocar A=$a e B=$b";
	

}
trocar(5,7);
echo "Exercício 1 - Grupo II<br>";
function inverter($string)
{   $tamanho=strlen($string);
	for($i=$tamanho-1;$i>=0;$i--)
		echo $string[$i];
	
}
inverter("Irchad Meneses");
echo "<br>";
echo strrev("Jayson") 

?>