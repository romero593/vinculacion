<?php
			$optionsArray = array( 'totals' => array( 'id_programa_vinculacion' => array( 'totalsType' => '' ),
'programa_vinculacion' => array( 'totalsType' => '' ),
'codigo_programa' => array( 'totalsType' => '' ),
'descripcion' => array( 'totalsType' => '' ),
'dominios_academicos' => array( 'totalsType' => '' ),
'plan_nacional' => array( 'totalsType' => '' ),
'politicas_vinculacion' => array( 'totalsType' => '' ),
'id_linea_investigacion' => array( 'totalsType' => '' ),
'id_carrera' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'programa_vinculacion',
'codigo_programa',
'descripcion',
'dominios_academicos',
'plan_nacional',
'politicas_vinculacion',
'id_linea_investigacion',
'id_carrera' ),
'exportFields' => array( 'programa_vinculacion',
'codigo_programa',
'descripcion',
'dominios_academicos',
'plan_nacional',
'politicas_vinculacion',
'id_linea_investigacion',
'id_carrera' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'programa_vinculacion' => array( 'export_field1' ),
'codigo_programa' => array( 'export_field2' ),
'descripcion' => array( 'export_field3' ),
'dominios_academicos' => array( 'export_field4' ),
'plan_nacional' => array( 'export_field5' ),
'politicas_vinculacion' => array( 'export_field6' ),
'id_linea_investigacion' => array( 'export_field7' ),
'id_carrera' => array( 'export_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
'misc' => array( 'type' => 'export',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'programa_vinculacion',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'codigo_programa',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'descripcion',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'dominios_academicos',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'plan_nacional',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'politicas_vinculacion',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'id_linea_investigacion',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'id_carrera',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 2,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>