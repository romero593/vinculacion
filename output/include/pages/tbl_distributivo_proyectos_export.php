<?php
			$optionsArray = array( 'totals' => array( 'id_distributivo_proyectos' => array( 'totalsType' => '' ),
'cedula' => array( 'totalsType' => '' ),
'hrs_proyecto_vinculacion' => array( 'totalsType' => '' ),
'hrs_docente_tutor' => array( 'totalsType' => '' ),
'hrs_docente_participante' => array( 'totalsType' => '' ),
'hrs_seguimiento_graduados' => array( 'totalsType' => '' ),
'hrs_supervision_pasantias_comunitario' => array( 'totalsType' => '' ),
'id_carrera' => array( 'totalsType' => '' ),
'id_periodo' => array( 'totalsType' => '' ),
'estado' => array( 'totalsType' => '' ),
'id_facultad' => array( 'totalsType' => '' ),
'id_extension' => array( 'totalsType' => '' ),
'id_modalidad' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'cedula',
'hrs_proyecto_vinculacion',
'hrs_docente_tutor',
'hrs_docente_participante',
'hrs_seguimiento_graduados',
'hrs_supervision_pasantias_comunitario',
'id_periodo',
'estado',
'id_facultad',
'id_extension',
'id_modalidad' ),
'exportFields' => array( 'cedula',
'hrs_proyecto_vinculacion',
'hrs_docente_tutor',
'hrs_docente_participante',
'hrs_seguimiento_graduados',
'hrs_supervision_pasantias_comunitario',
'id_periodo',
'estado',
'id_facultad',
'id_extension',
'id_modalidad' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'cedula' => array( 'export_field1' ),
'hrs_proyecto_vinculacion' => array( 'export_field2' ),
'hrs_docente_tutor' => array( 'export_field3' ),
'hrs_docente_participante' => array( 'export_field4' ),
'hrs_seguimiento_graduados' => array( 'export_field5' ),
'hrs_supervision_pasantias_comunitario' => array( 'export_field6' ),
'id_periodo' => array( 'export_field7' ),
'estado' => array( 'export_field8' ),
'id_facultad' => array( 'export_field' ),
'id_extension' => array( 'export_field9' ),
'id_modalidad' => array( 'export_field10' ) ) ),
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
'export_field8',
'export_field',
'export_field9',
'export_field10' ),
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
'export_field' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
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
'export_field8',
'export_field',
'export_field9',
'export_field10' ) ),
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
'export_field8',
'export_field',
'export_field9',
'export_field10' ),
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
'export_field1' => array( 'field' => 'cedula',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'hrs_proyecto_vinculacion',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'hrs_docente_tutor',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'hrs_docente_participante',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'hrs_seguimiento_graduados',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'hrs_supervision_pasantias_comunitario',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'id_periodo',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'estado',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'id_facultad',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'id_extension',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'id_modalidad',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 2,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>