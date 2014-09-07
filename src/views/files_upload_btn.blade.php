@if (isset($field_info['model']))
    <?php $model_for_files_upload = $field_info['model']; ?>
@else
    <?php $model_for_files_upload = isset($module['model']) ? $module['model'] : ''; ?>
@endif

@if (isset($field_info['module']))
    <?php $module_for_files_upload = $field_info['module']; ?>
@else
    <?php $module_for_files_upload = isset($module['name']) ? $module['name'] : ''; ?>
@endif

@if (isset($field_info['field_name']))
    <?php $name_for_files_upload = $field_info['field_name']; ?>
@else
    <?php $name_for_files_upload = isset($field_input_name) ? $field_input_name : ''; ?>
@endif

@if (isset($field_info['action']))
    <?php $action_for_files_upload = $field_info['action']; ?>
@else
    <?php $action_for_files_upload = 'upload_files'; ?>
@endif

<div style="height: 23px;  width: 65px; margin-bottom: 20px" onclick="uploadFiles( {{{ SmallTeam\Admin\PrintUploadFilesSettings::process( $model_for_files_upload, $object[$key_field], $module_for_files_upload, $name_for_files_upload, (isset($field_info['multiple']) ? $field_info['multiple'] : false), $action_for_files_upload ) }}} )" class="select_file_btn btn btn-info btn-xs">выбрать</div>