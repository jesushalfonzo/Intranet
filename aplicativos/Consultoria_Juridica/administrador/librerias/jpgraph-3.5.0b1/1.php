<?php
include ("src/jpgraph.php");
include ("src/jpgraph_pie.php");
$desde=$_GET["desde"];
$hasta=$_GET["hasta"];
$talfi="Solicitudes de Consultoria Juridica (Categorías)";
include('../../../../../extras/coneccion.php');
$link=Conectarse();

$SQL="SELECT COUNT(*) AS Num, m_aplicativo_cjuridica_clasificacion AS Clasificacion FROM m_aplicativo_cjuridica WHERE date(m_aplicativo_cjuridica_fechasolicitud)>='$desde' AND date(m_aplicativo_cjuridica_fechasolicitud)<='$hasta' GROUP BY m_aplicativo_cjuridica_clasificacion ASC";
 $result = mysql_query($SQL,$link);
$j=0;
 while ($row = mysql_fetch_array($result)){ 
     $m_aplicativo_cjuridica_id=$row['m_aplicativo_cjuridica_id'];
     $m_aplicativo_cjuridica_nombres=$row['m_aplicativo_cjuridica_nombres'];
     $m_aplicativo_cjuridica_apellidos=$row['m_aplicativo_cjuridica_apellidos'];
	 $m_aplicativo_cjuridica_fechasolicitud=strtotime($row['m_aplicativo_cjuridica_fechasolicitud']);
	 $fecha = date("d-m-Y", $m_aplicativo_cjuridica_fechasolicitud);
	 $m_aplicativo_cjuridica_solicitud=$row['m_aplicativo_cjuridica_solicitud'];
	 $m_aplicativo_cjuridica_fechaasignada=$row['m_aplicativo_cjuridica_fechaasignada'];
	 $m_aplicativo_cjuridica_estatus=$row['m_aplicativo_cjuridica_estatus'];

	   
$categoria=$row['Clasificacion'];
if($categoria==''){
$categoria="Sin Asignar";
}
$numero=$row['Num'];

if($j==0){
  $data = array($numero);
  $nuevadata=$categoria."($numero)";
  $datax3 = array($nuevadata);
  }
  else{
  array_push($data, $numero);
  $nuevadata=$categoria."($numero)";
  array_push($datax3, $nuevadata);
  } 
$j++;

	   }
// echo print_r($datax3);
// Some data

//$data = array($nm,$mant,$su,$ns,$ep,$pt,$intra);
 
// A new graph
$graph = new PieGraph(500,420);
$graph->SetAntiAliasing();
 
$graph->title->SetFont(FF_ARIAL, FS_BOLD, 12);
$graph->title->Set($talfi);
$graph->title->SetMargin(10);
 
$graph->subtitle->SetFont(FF_ARIAL, FS_BOLD, 10);
$graph->subtitle->Set('');
 
// The pie plot
$p1 = new PiePlot($data);
$p1->SetSliceColors(array('darkred','navy','lightblue','orange','gray','teal', 'brown3'));
 
// Move center of pie to the left to make better room
// for the legend
$p1->SetSize(0.3);
$p1->SetCenter(0.5,0.47);
$p1->value->Show();
$p1->value->SetFont(FF_ARIAL,FS_NORMAL,10);
 
// Legends
//$p1->SetLegends(array("Nuevo Modulo (%1.1f%%)","Mantenimiento (%1.1f%%)","Soporte Usuario (%1.1f%%)","Nueva Secci&oacute;n (%1.1f%%)","Especial (%1.1f%%)", "Problema T&eacute;cnico (%1.1f%%)", "Intranet (%1.1f%%)"));
//$loca=array($nuevadata);
$p1->SetLegends($datax3);

$graph->legend->SetPos(0.5,0.97,'center','bottom');
$graph->legend->SetColumns(3);
 
$graph->Add($p1);
$graph->Stroke();
?>