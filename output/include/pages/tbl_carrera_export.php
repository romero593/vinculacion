<?php
			$optionsArray = array( 'totals' => array( 'id_carrera' => array( 'totalsType' => '' ),
'carrera' => array( 'totalsType' => '' ),
'codigo' => array( 'totalsType' => '' ),
'estado' => array( 'totalsType' => '' ),
'id_facultad' => array( 'totalsType' => '' ),
'id_modalidad' => array( 'totalsType' => '' ),
'facultad' => array( 'totalsType' => '' ),
'modalidad' => array( 'totalsType' => '' ),
'extension' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id_carrera',
'carrera',
'codigo',
'estado',
'id_facultad',
'id_modalidad',
'facultad',
'modalidad',
'extension' ),
'exportFields' => array( 'id_carrera',
'carrera',
'codigo',
'estado',
'id_facultad',
'id_modalidad',
'facultad',
'modalidad',
'extension' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_carrera' => array( 'export_field' ),
'carrera' => array( 'export_field1' ),
'codigo' => array( 'export_field2' ),
'estado' => array( 'export_field3' ),
'id_facultad' => array( 'export_field4' ),
'id_modalidad' => array( 'export_field5' ),
'facultad' => array( 'export_field6' ),
'modalidad' => array( 'export_field7' ),
'extension' => array( 'export_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
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
'export_field' => 'grid',
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
'export_field' => array( 'export_field',
'export_field1',
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
'items' => array( 'export_field',
'export_field1',
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
'export_field' => array( 'field' => 'id_carrera',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'carrera',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'codigo',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'estado',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'id_facultad',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'id_modalidad',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'facultad',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'modalidad',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'extension',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 2,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>