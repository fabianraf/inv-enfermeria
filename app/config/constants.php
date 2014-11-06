<?php
	$identificadores = [];
	$identificadores[0] = "encuesta_control_higiene_personal";
	$identificadores[1] = "emc_manipulacion_alimentos";
	$identificadores[2] = "emc_productos_alimenticios";
	$identificadores[3] = "emc_control_plagas";
	$identificadores[4] = "emc_area_cocina_1";
	$identificadores[5] = "emc_area_cocina_2";
	$identificadores[6] = "emc_area_comedor_1";
	$identificadores[7] = "emc_area_comedor_2";
	$identificadores[8] = "emc_area_bodega_alimentos_1";
	$identificadores[9] = "emc_area_bodega_alimentos_2";
	$identificadores[10] = "emc_area_vestidor_1";
	$identificadores[11] = "emc_area_vestidor_2";
	$identificadores[12] = "emc_area_almacenaje_materiales_limpieza_1";
	$identificadores[13] = "emc_area_almacenaje_materiales_limpieza_2";
	$codigos_areas = [];
	$codigos_areas[0] = "emc_cocina";
	$codigos_areas[1] = "emc_comedor";
	$codigos_areas[2] = "emc_bodega_alimentos";
	$codigos_areas[3] = "emc_vestidor";
	$codigos_areas[4] = "emc_materiales_limpieza";
return [
	'IDENTIFICADORES' => $identificadores,
	'CODIGOS_AREAS' => $codigos_areas,
    'SI_CUMPLE' => 1,
    'NO_CUMPLE' => 2,
    'NO_SE_PUDO_OBSERVAR' => 3,
    'NO_APLICA' => 4,
    'COD_EMPRESA_ENCUESTA_CHP' => 1,
    'COD_EMPRESA_ENCUESTA_CMAHC' => 2,
    'COD_EMPRESA_ENCUESTA_CMAHB' => 3
];