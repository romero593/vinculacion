<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'delete' => true,
'updateSelected' => false,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'tbl_distributivo_proyectos' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'showProceedLink' => true,
'printDetails' => false ) ),
'master' => array( 'tbl_carrera' => array( 'preview' => true ),
'tbl_periodo' => array( 'preview' => true ),
'tbl_rol' => array( 'preview' => true ),
'tbl_ciudad' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id_persona' => array( 'totalsType' => '' ),
'cedula' => array( 'totalsType' => '' ),
'nro_matricula' => array( 'totalsType' => '' ),
'nombres' => array( 'totalsType' => '' ),
'apellidos' => array( 'totalsType' => '' ),
'telefono' => array( 'totalsType' => '' ),
'email_institucional' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ),
'direccion' => array( 'totalsType' => '' ),
'pass' => array( 'totalsType' => '' ),
'nivel' => array( 'totalsType' => '' ),
'paralelo' => array( 'totalsType' => '' ),
'foto' => array( 'totalsType' => '' ),
'estado' => array( 'totalsType' => '' ),
'id_ciudad' => array( 'totalsType' => '' ),
'id_carrera' => array( 'totalsType' => '' ),
'id_periodo' => array( 'totalsType' => '' ),
'id_rol' => array( 'totalsType' => '' ),
'id_provincia' => array( 'totalsType' => '' ),
'id_facultad' => array( 'totalsType' => '' ),
'id_extension' => array( 'totalsType' => '' ),
'id_modalidad' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'foto',
'cedula',
'nro_matricula',
'apellidos',
'nombres',
'telefono',
'id_extension',
'id_facultad',
'id_carrera',
'nivel',
'paralelo',
'estado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'apellidos',
'cedula',
'nombres',
'nro_matricula',
'id_persona',
'telefono',
'email_institucional',
'email',
'direccion',
'pass',
'nivel',
'paralelo',
'foto',
'estado',
'id_ciudad',
'id_carrera',
'id_periodo',
'id_rol',
'id_provincia',
'id_facultad',
'id_extension',
'id_modalidad' ),
'filterFields' => array( 'id_rol',
'id_facultad',
'id_extension',
'id_carrera' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'foto' => array( 'simple_grid_field12',
'simple_grid_field' ),
'cedula' => array( 'simple_grid_field1',
'simple_grid_field6' ),
'nro_matricula' => array( 'simple_grid_field2',
'simple_grid_field7' ),
'apellidos' => array( 'simple_grid_field4',
'simple_grid_field8' ),
'nombres' => array( 'simple_grid_field3',
'simple_grid_field9' ),
'telefono' => array( 'simple_grid_field5',
'simple_grid_field14' ),
'id_extension' => array( 'simple_grid_field21',
'simple_grid_field22' ),
'id_facultad' => array( 'simple_grid_field19',
'simple_grid_field20' ),
'id_carrera' => array( 'simple_grid_field15',
'simple_grid_field16' ),
'nivel' => array( 'simple_grid_field10',
'simple_grid_field17' ),
'paralelo' => array( 'simple_grid_field11',
'simple_grid_field18' ),
'estado' => array( 'simple_grid_field13',
'simple_grid_field23' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'simple_search',
'list_options' ),
'left' => array( 'search_panel',
'filter_panel' ),
'top' => array( 'breadcrumb',
'master_info' ),
'above-grid' => array( 'add',
'inline_add',
'delete',
'details_found',
'page_size' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field12',
'simple_grid_field6',
'simple_grid_field1',
'simple_grid_field7',
'simple_grid_field2',
'simple_grid_field8',
'simple_grid_field4',
'simple_grid_field9',
'simple_grid_field3',
'simple_grid_field14',
'simple_grid_field5',
'simple_grid_field22',
'simple_grid_field21',
'simple_grid_field20',
'simple_grid_field19',
'simple_grid_field16',
'simple_grid_field15',
'simple_grid_field17',
'simple_grid_field10',
'simple_grid_field18',
'simple_grid_field11',
'simple_grid_field23',
'simple_grid_field13',
'details_preview',
'grid_edit',
'grid_inline_cancel',
'grid_view',
'grid_checkbox_head',
'grid_checkbox',
'grid_alldetails_link',
'grid_details_link' ) ),
'formXtTags' => array( 'top' => array( 'breadcrumb',
'mastertable_block' ),
'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'records_indicator',
'recsPerPage' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'search_panel' => 'left',
'filter_panel' => 'left',
'breadcrumb' => 'top',
'master_info' => 'top',
'add' => 'above-grid',
'inline_add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field13' => 'grid',
'details_preview' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ) ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'list_options' => 3,
'search_panel' => 5,
'filter_panel' => 3 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field13',
'search_panel_field14',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field15',
'search_panel_field16',
'search_panel_field17',
'search_panel_field18',
'search_panel_field19',
'search_panel_field20',
'search_panel_field21' ),
'add' => array( 'add' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'master_info' => array( 'master_info' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field1',
'filter_panel_field3',
'filter_panel_field4',
'filter_panel_field' ),
'grid_field' => array( 'simple_grid_field12',
'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field3',
'simple_grid_field5',
'simple_grid_field21',
'simple_grid_field19',
'simple_grid_field15',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field13' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field14',
'simple_grid_field22',
'simple_grid_field20',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field23' ),
'details_preview' => array( 'details_preview' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'foto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'cedula_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'nro_matricula_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'apellidos_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'nombres_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'telefono_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'id_extension_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'id_facultad_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'id_carrera_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'nivel_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'paralelo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 14 ),
'rows' => array( 0 ),
'tags' => array( 'estado_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'foto_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'cedula_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'nro_matricula_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'apellidos_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'nombres_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'telefono_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'id_extension_fieldcolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'id_facultad_fieldcolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'id_carrera_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'nivel_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'paralelo_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 14 ),
'rows' => array( 1 ),
'tags' => array( 'estado_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11,
12,
13,
14 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 12 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 13 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 14 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 15,
'height' => 4 ) ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'filter_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'delete' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 15 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'foto',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'foto',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'cedula',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'cedula',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'nro_matricula',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'nro_matricula',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'apellidos',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'apellidos',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'nombres',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'nombres',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'telefono',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'telefono',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'id_extension',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'id_extension',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'id_facultad',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'id_facultad',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'id_carrera',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'id_carrera',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'nivel',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'nivel',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'paralelo',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'paralelo',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'estado',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'estado',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'columnName' => 'list-icons' ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ),
'columnName' => 'checkbox' ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ),
'columnName' => 'checkbox' ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ),
'columnName' => 'checkbox' ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ),
'columnName' => 'details' ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_alldetails_link',
'grid_details_link' ),
'columnName' => 'details' ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ),
'columnName' => 'details' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field21',
'search_panel_field20',
'search_panel_field19',
'search_panel_field18',
'search_panel_field17',
'search_panel_field16',
'search_panel_field15',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field14',
'search_panel_field13',
'search_panel_field1' ),
'flexiblePanel' => true ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'apellidos',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'cedula',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 'nombres',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field14' => array( 'field' => 'nro_matricula',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'add' => array( 'type' => 'add' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'tbl_carrera' => 'true',
'tbl_periodo' => 'true',
'tbl_rol' => 'true',
'tbl_ciudad' => 'true' ) ),
'search_panel_field2' => array( 'field' => 'id_persona',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field4',
'filter_panel_field',
'filter_panel_field3',
'filter_panel_field1' ) ),
'filter_panel_field1' => array( 'field' => 'id_rol',
'type' => 'filter_panel_field' ),
'filter_panel_field3' => array( 'field' => 'id_facultad',
'type' => 'filter_panel_field' ),
'filter_panel_field4' => array( 'field' => 'id_extension',
'type' => 'filter_panel_field' ),
'filter_panel_field' => array( 'field' => 'id_carrera',
'type' => 'filter_panel_field' ),
'search_panel_field3' => array( 'field' => 'telefono',
'type' => 'search_panel_field' ),
'search_panel_field4' => array( 'field' => 'email_institucional',
'type' => 'search_panel_field' ),
'search_panel_field5' => array( 'field' => 'email',
'type' => 'search_panel_field' ),
'search_panel_field6' => array( 'field' => 'direccion',
'type' => 'search_panel_field' ),
'search_panel_field7' => array( 'field' => 'pass',
'type' => 'search_panel_field' ),
'search_panel_field8' => array( 'field' => 'nivel',
'type' => 'search_panel_field' ),
'search_panel_field9' => array( 'field' => 'paralelo',
'type' => 'search_panel_field' ),
'search_panel_field10' => array( 'field' => 'foto',
'type' => 'search_panel_field' ),
'search_panel_field11' => array( 'field' => 'estado',
'type' => 'search_panel_field' ),
'search_panel_field12' => array( 'field' => 'id_ciudad',
'type' => 'search_panel_field' ),
'search_panel_field15' => array( 'field' => 'id_carrera',
'type' => 'search_panel_field' ),
'search_panel_field16' => array( 'field' => 'id_periodo',
'type' => 'search_panel_field' ),
'search_panel_field17' => array( 'field' => 'id_rol',
'type' => 'search_panel_field' ),
'search_panel_field18' => array( 'field' => 'id_provincia',
'type' => 'search_panel_field' ),
'search_panel_field19' => array( 'field' => 'id_facultad',
'type' => 'search_panel_field' ),
'search_panel_field20' => array( 'field' => 'id_extension',
'type' => 'search_panel_field' ),
'search_panel_field21' => array( 'field' => 'id_modalidad',
'type' => 'search_panel_field' ),
'simple_grid_field12' => array( 'field' => 'foto',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'foto' ),
'simple_grid_field1' => array( 'field' => 'cedula',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'cedula' ),
'simple_grid_field2' => array( 'field' => 'nro_matricula',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'nro_matricula' ),
'simple_grid_field4' => array( 'field' => 'apellidos',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'apellidos' ),
'simple_grid_field3' => array( 'field' => 'nombres',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'nombres' ),
'simple_grid_field5' => array( 'field' => 'telefono',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'telefono' ),
'simple_grid_field21' => array( 'field' => 'id_extension',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'id_extension' ),
'simple_grid_field19' => array( 'field' => 'id_facultad',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'id_facultad' ),
'simple_grid_field15' => array( 'field' => 'id_carrera',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'id_carrera' ),
'simple_grid_field10' => array( 'field' => 'nivel',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'nivel' ),
'simple_grid_field11' => array( 'field' => 'paralelo',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'paralelo' ),
'simple_grid_field13' => array( 'field' => 'estado',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'estado' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'tbl_distributivo_proyectos',
'items' => array(  ),
'popup' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_edit' => array( 'type' => 'grid_edit' ),
'grid_view' => array( 'type' => 'grid_view' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'tbl_distributivo_proyectos',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 2 );
		?>