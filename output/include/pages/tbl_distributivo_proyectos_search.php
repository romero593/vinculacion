<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id_distributivo_proyectos',
'cedula',
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
'fieldItems' => array( 'id_distributivo_proyectos' => array( 'integrated_search_field' ),
'cedula' => array( 'integrated_search_field1' ),
'hrs_proyecto_vinculacion' => array( 'integrated_search_field2' ),
'hrs_docente_tutor' => array( 'integrated_search_field3' ),
'hrs_docente_participante' => array( 'integrated_search_field4' ),
'hrs_seguimiento_graduados' => array( 'integrated_search_field5' ),
'hrs_supervision_pasantias_comunitario' => array( 'integrated_search_field6' ),
'id_periodo' => array( 'integrated_search_field7' ),
'estado' => array( 'integrated_search_field8' ),
'id_facultad' => array( 'integrated_search_field9' ),
'id_extension' => array( 'integrated_search_field10' ),
'id_modalidad' => array( 'integrated_search_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'search_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'search_search',
'search_reset',
'search_back_list' ),
'grid' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9',
'integrated_search_field10',
'integrated_search_field11' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'search_header' => 'top',
'search_search' => 'below-grid',
'search_reset' => 'below-grid',
'search_back_list' => 'below-grid',
'integrated_search_field' => 'grid',
'integrated_search_field1' => 'grid',
'integrated_search_field2' => 'grid',
'integrated_search_field3' => 'grid',
'integrated_search_field4' => 'grid',
'integrated_search_field5' => 'grid',
'integrated_search_field6' => 'grid',
'integrated_search_field7' => 'grid',
'integrated_search_field8' => 'grid',
'integrated_search_field9' => 'grid',
'integrated_search_field10' => 'grid',
'integrated_search_field11' => 'grid' ),
'itemLocations' => array( 'integrated_search_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field11' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'search_header' => array( 'search_header' ),
'search_reset' => array( 'search_reset' ),
'search_back_list' => array( 'search_back_list' ),
'search_search' => array( 'search_search' ),
'integrated_search_field' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9',
'integrated_search_field10',
'integrated_search_field11' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9',
'integrated_search_field10',
'integrated_search_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
'misc' => array( 'type' => 'search',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'search',
'type' => 'search',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'search-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'search-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'search-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_search',
'search_reset',
'search_back_list' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-search',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9',
'integrated_search_field10',
'integrated_search_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'separateLabels' => false ) ),
'items' => array( 'search_header' => array( 'type' => 'search_header' ),
'search_reset' => array( 'type' => 'search_reset' ),
'search_back_list' => array( 'type' => 'search_back_list' ),
'search_search' => array( 'type' => 'search_search' ),
'integrated_search_field' => array( 'field' => 'id_distributivo_proyectos',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field1' => array( 'field' => 'cedula',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field2' => array( 'field' => 'hrs_proyecto_vinculacion',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field3' => array( 'field' => 'hrs_docente_tutor',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field4' => array( 'field' => 'hrs_docente_participante',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field5' => array( 'field' => 'hrs_seguimiento_graduados',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field6' => array( 'field' => 'hrs_supervision_pasantias_comunitario',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field7' => array( 'field' => 'id_periodo',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field8' => array( 'field' => 'estado',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field9' => array( 'field' => 'id_facultad',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field10' => array( 'field' => 'id_extension',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field11' => array( 'field' => 'id_modalidad',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ) ),
'dbProps' => array(  ),
'version' => 2 );
		?>